<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 10:59 AM
 */
require_once ' IObservable.php';
require_once 'UserList.php';
require_once 'UserListLogger.php';

interface IObserver
{
    function onChanged($sender, $args);
}
$ul = new UserList();
$ul->addObserver( new UserListLogger() );
$ul->addStudent( "Sharon" );
