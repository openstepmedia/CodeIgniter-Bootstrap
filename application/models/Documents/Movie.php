<?php

namespace Documents;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document */
class Movie
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\String */
    public $title;
    
    /** @MongoDB\String */
    public $director;
    
    /** @MongoDB\Int */
    public $year;

    /** @MongoDB\ReferenceMany(targetDocument="Documents\Actor") */
    public $actors;

}
