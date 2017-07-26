<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 10:41 AM
 */
require_once 'ICommand.php';
require_once 'MailCommand.php.php';
require_once 'CommandChain.php';
class UserCommand implements  ICommand{
    public function onCommand($name, $args)
    {
        if ($name!='addUser') return false;
        echo ("UserCommand that handles user addition");
    }

}
