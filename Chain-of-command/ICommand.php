<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 10:40 AM
 */
interface ICommand
{
    function onCommand($name, $args);
}
$cc = new CommandChain();
$cc->addCommand( new UserCommand() );
$cc->addCommand( new MailCommand() );
$cc->runCommand( 'addUser', null );
$cc->runCommand( 'mail', null );