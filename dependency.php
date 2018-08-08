<?php
/*
namespace Database;

interface AdapterInterface{

}

class Database{
  protected $adapter;

  public function __construct(AdapterInterface $adapter){
    $this->adapter = $adapter;
  }
}

class MySqlAdapter implements AdapterInterface{

}

//의존성 주입
$dependency = new MyRequiredDependency;
$customer = new ThingThatRequiresMYDependency($dependency);

class ThingThatHasAnExternalDependency{
  public function __construct(){
    $this->dependency = new ARequiredDependency;
    $this->secondDependency = ARequiredDependency::getInstance();
  }
}
*/

$_SESSION['language']='fr';
$user_language = $_SESSION['language'];

class SessionStorage{
  function __construct($cookieName = 'PHP_SESS_ID'){
    session_name($cookieName);
    session_start();
  }

  function set($key, $value){
    $_SESSION[$key] = $value;
  }

  function get($key){
    return $_SESSION[$key];
  }
}

define('STORAGE_SESSION_NAME', 'SESSION_ID');

class User{
  protected $storage;
  public $sessionStorage;

  function __construct($storage){
    $this->storage = $storage;
  }

  function setLanguage($language){
    $this->storage->set('language', $language);
  }

  function getLanguage(){
    return $this->storage->get('language');
  }

  function setSessionStorage($storage){
    $this->storage = $storage;
  }
}
$storage = new SessionStorage('SESSION_ID');

$user = new User($storage);
$user->setLanguage('fr');
$user_language=$user->getLanguage();
$user->SessionStorage=$storage;
echo $user_language. "<br/>\n";

 ?>
