<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/25/17
 * Time: 2:01 PM
 */
// beginning of strategy pattern
$elements = array (
    array (
        'id' => 3,
        'name' => 'Sharon',
    ),
    array (
        'id' => 2,
        'name' => 'Eva'
      ),

array (
       'id' => 1,
  'name' => 'Millicent'
       ),

array(
 'id' => 3,
  'name' => 'Chaka'
      )

   );
   
   $collection = new ObjectCollection($elements);//instantiation(collection) of encapsulated Class(ObjectCollection). instiate ObjectCollection to collection
  
   $collection->sort();
   
   echo "Sorted by ID:\n";
   print_r($collection->elements);
   
   $collection->sort();
   
   echo "Sorted by name:\n";
   print_r($collection->elements);
   // End of strategy pattern

// Start of Factory Pattern
interface ICytonn
{
  function getFName();
function getLName();
}
 
class User implements ICytonn
{
  public function __construct( $id ) { }
 
  public function getFName()
  {
    return "Sharon";
  }
 public function getLName()
  {
    return "Kimeli";
  }
}
 
class CytonnFactory
{
  public static function Create( $id )
  {
    return new User( $id );
  }
}
 
$ct = CytonnFactory::Create( 1 );//Factory class (CytonnFactory) contains methods(Create) used to create new objects(ct)
echo( $ct->getFName()."\n" );
echo( $ct->getLName()."\n" );
// End of Factory pattern

// Start of singleton pattern
   class Singleton {
      public static function getInstance() {//globally accessed instance
         static $instance = null;
         
         if (null === $instance) {
            $instance = new static();
         }
         return $instance;
      }
      protected function __construct() {
      }
      
      private function __clone() {
      }
      
      private function __wakeup() {
      }
   }
   
   class SingletonChild extends Singleton {
   }
   
   $obj = Singleton::getInstance();//there is a global access point to an instance (getInstance)of a class(Singleton) to Create a new object(obj)
   var_dump($obj === Singleton::getInstance());
   
   $cytonnObj = SingletonChild::getInstance();//there is a global access point to an instance (getInstance)of a class(SingletonChild) to Create a new object(cytonnObj)
   var_dump($cytonnObj === Singleton::getInstance());
   var_dump($cytonnObj === SingletonChild::getInstance()); 
   // End of singleton pattern

//beginning of chain-of-command pattern
   interface ICommand{

  function onCommand( $name, $args );
}
 
class CommandChain
{
  private $_commands = array();
 
  public function addCommand($cmd )
  {
    $this->_commands []= $cmd;
  }
 
  public function runCommand( $name, $args )
  {
    foreach( $this->_commands as $cmd )
    {
      if ( $cmd->onCommand( $name, $args ) )
        return;
    }
  }
}
 
class UserCommand implements ICommand
{
  public function onCommand( $name, $args )
  {
    if ( $name != 'addUser' ) return false;
    echo( "UserCommand handling 'addUser'\n" );
    return true;
  }
}
 
class MailCommand implements ICommand
{
  public function onCommand( $name, $args )
  {
    if ( $name != 'mail' ) return false;
    echo( "MailCommand handling 'mail'\n" );
    return true;
  }
}
 
$cc = new CommandChain();
$cc->addCommand( new UserCommand() );
$cc->addCommand( new MailCommand() );
$cc->runCommand( 'addUser', null );
$cc->runCommand( 'mail', null );

//beginning of observer pattern
interface IObserver
{
  function onChanged( $sender, $args );
}
 
interface IObservable
{
  function addObserver( $observer );
}
 
class UserList implements IObservable
{
  private $_observers = array();//object to be made observable
 
  public function addStudent( $name )
  {
    foreach( $this->_observers as $obs )
      $obs->onChanged( $this, $name );
  }
 
  public function addObserver( $observer )
  {
    $this->_observers []= $observer;//'this' makes it observable...and allows another object to  register itself on it, 
  }

}
 
class UserListLogger implements IObserver
{
  public function onChanged( $sender, $args )//arguments or params or parameteres
  {
    echo( "'$args' added to user list\n" );
  }
}
 
$ul = new UserList();
$ul->addObserver( new UserListLogger() );
$ul->addStudent( "Sharon" ); 

//End of observer pattern




   //TDD
class FullNamesTests extends PHPUnit_Framework_TestCase
{
    private $fullnames;
 
    protected function setUp()
    {
        $this->fullnames = new FullNames();
    }
 
    protected function tearDown()
    {
        $this->fullnames = NULL;
    }
 
    public function testMergeNames()
    {
        $result = $this->fullnames->MergeNames('Sharon', 'Kimeli');
        $this->assertEquals(3, $result);
    }
 
}
   //End TDD
?>
