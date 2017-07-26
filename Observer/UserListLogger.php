<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 11:08 AM
 */
require_once ' IObservable.php';
require_once 'UserList.php';
require_once 'IObserver.php';

class UserListLogger implements IObserver{
    public function onChanged($sender, $args){
        echo ("'$args' added to the user list\n");
    }
}
