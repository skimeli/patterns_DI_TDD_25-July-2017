<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 10:40 AM
 */
require_once 'ICommand.php';
require_once 'UserCommand.php';
require_once 'MailCommand.php';
class CommandChain
{
    private $_commands=array();
    public function addCommand($cmd){
        $this->_commands[]=$cmd;
    }
    public function  runCommand($name, $args){
        foreach ($this->_commands as $cmd){
            if ($cmd->onCommand($name, $args))
                return;
        }
    }
}

