<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 10:04 AM
 */
require_once 'CytonnFactory.php';
require_once 'ICytonn.php';

class User implements ICytonn
{
    public function __construct($id)
    {
    }
    public function getFName()
    {
        return "Sharon";
    }
    public function getLName()
    {
        return "Kimeli";
    }
    }
