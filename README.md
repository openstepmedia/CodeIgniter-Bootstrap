## Introduction

CodeIgniter Bootstrap kick starts the development process of the web development process by including Twitter Bootstrap into CodeIgniter. It also includes certain libraries such as AWS and Facebook in-case you are developing applications requiring those SDKs. So stop writing the same code over again and start working on your idea.

CodeIgniter Bootstrap follows the path where it lazy loads libraries. Though the project footprint may be large, the memory footprint will still be extremely light. Try not to autoload libraries as it does not follow the CodeIgniter convention (though some libraries do make sense to autoload).

## Installation

Derived from CodeIgniter, read [CodeIgniter Installation](http://codeigniter.com/user_guide/installation/index.html) for how to install. If you're not familiar with CodeIgniter, I suggest reading the [CodeIgniter Tutorial](http://codeigniter.com/user_guide/tutorial/index.html) on how to get started and read the [wiki](https://github.com/sjlu/CodeIgniter-Bootstrap/wiki) for more information.

This demo package assumes that you have MongoDB server installed and the [MongoDB PHP Pecl client](http://php.net/manual/en/mongo.installation.php) installed on your machine.

## Doctrine ODM / MongoDB integration

This fork is pre-packaged with the Doctrine ODM connectors for MongoDB.  For more information about the Doctrine ODM project please see [Doctrine MongoDB ODM Documentation](http://docs.doctrine-project.org/projects/doctrine-mongodb-odm/en/latest/).

Doctrine files have all been installed via composer in the /application/libraries folder.


## License

MIT with [CodeIgniter Amendments](http://codeigniter.com/user_guide/license.html)

## Other

If you're looking for a LESS and/or JS compilier, try out another flavor like [CodeIgniter Sunrise](https://github.com/sjlu/CodeIgniter-Sunrise).
