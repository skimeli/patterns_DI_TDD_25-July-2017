<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 10:37 AM
 */
require_once 'Singleton';
class SingletonChild extends Singleton
{
}

$obj = Singleton::getInstance();//there is a global access point to an instance (getInstance)of a class(Singleton) to Create a new object(obj)
var_dump($obj === Singleton::getInstance());

$cytonnObj = SingletonChild::getInstance();//there is a global access point to an instance (getInstance)of a class(SingletonChild) to Create a new object(cytonnObj)
var_dump($cytonnObj === Singleton::getInstance());
var_dump($cytonnObj === SingletonChild::getInstance());