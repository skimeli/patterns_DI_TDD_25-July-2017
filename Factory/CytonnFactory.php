<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 10:10 AM
 */
require_once 'User.php';
require_once 'ICytonn.php';

  class CytonnFactory implements ICytonn
  {
    public static function Create($id)
    {
        return newUser($id);
    }
  }



