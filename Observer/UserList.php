<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 11:03 AM
 */
require_once ' IObserver.php';
require_once 'UserList.php';
require_once 'UserListLogger.php';

class UserList implements IObservable{
    private $_observers=array();
    public function addStudent($name){
        foreach ($this->_observers as $obs)
            $obs->onChanged($this, $name);
    }
    public function addObserver($observer)
    {
        $this->_observers[]=$observer;
    }
}
