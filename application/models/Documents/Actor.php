<?php

namespace Documents;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document */
class Actor
{
    /** @MongoDB\Id */
    public $id;
    
    /** @MongoDB\String */
    public $name;  
}
