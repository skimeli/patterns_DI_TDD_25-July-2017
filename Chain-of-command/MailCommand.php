<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 10:42 AM
 */
require_once 'ICommand.php';
require_once 'UserCommand.php';
require_once 'CommandChain.php';
class MailCommand implements ICommand{
    public function onCommand($name, $args)
    {
        if ($name!='mail') return false;
        echo("Mail command mails handler\n");
        return true;

    }

}
