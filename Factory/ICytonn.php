<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 10:01 AM
 */
require_once 'User.php';
require_once 'CytonnFactory.php';
interface ICytonn{
    function getFName();
    function getLName();

}
$ct = CytonnFactory::Create( 1 );//Factory class (CytonnFactory) contains methods(Create) used to create new objects(ct)
echo( $ct->getFName()."\n" );
echo( $ct->getLName()."\n" );