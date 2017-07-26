<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 11:01 AM
 */
require_once ' IObserver.php';
require_once 'UserList.php';
require_once 'UserListLogger.php';

interface IObservable
{
    function addObserver($observer);
}
