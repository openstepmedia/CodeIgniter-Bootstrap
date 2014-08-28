<?php
require "doctrine/vendor/autoload.php";

use Doctrine\Common\ClassLoader,
    Doctrine\ODM\MongoDB\Configuration,
    Doctrine\Common\Annotations\AnnotationReader,
    Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver,
    Doctrine\ODM\MongoDB\DocumentManager,
    Doctrine\MongoDB\Connection;

/**
 * Doctrine bootstrap library for CodeIgniter
 *
 * @author	Joseph Wynn <joseph@wildlyinaccurate.com>
 * @link	http://wildlyinaccurate.com/integrating-doctrine-2-with-codeigniter-2
 */
class DoctrineODM
{
	public $em;
        public $dm;

	public function __construct()
	{
            require_once APPPATH.'config/doctrine.php';
            
            // With this configuration, your model files need to be in application/models/Entity
            // e.g. Creating a new Entity\User loads the class from application/models/Entity/User.php
            $models_namespace = 'Documents';
            $models_path = APPPATH . 'models';
            $proxies_dir = APPPATH . 'models/Proxies';
            $hydrators_dir = APPPATH . 'models/Hydrators';
            $metadata_paths = array(APPPATH . 'models');

            $config = new Configuration();
            $config->setDefaultDB($db['default']['database']);

            $config->setProxyDir($proxies_dir);
            $config->setProxyNamespace('Proxies');

            $config->setHydratorDir($hydrators_dir);
            $config->setHydratorNamespace('Hydrators');

            $annotationDriver = $config->newDefaultAnnotationDriver(array($models_path . '/Documents'));
            $config->setMetadataDriverImpl($annotationDriver);
            AnnotationDriver::registerAnnotationClasses();

            try {
                $this->dm = DocumentManager::create(new Connection($db['default']['server']), $config);
            } catch (Exception $ex) {
                var_dump($e->getMessage());
            }

            $loader = new ClassLoader($models_namespace, $models_path);
            $loader->register();
	}
}
