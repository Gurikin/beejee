<?php
/**
 * Класс DataBase - родительский класс для работы с БД
 * @todo this class manages the database connection 
 * @use Singleton pattern
 * @author Igor Banchikov
 */
namespace app;

use PDO;
use PDOException;

trait DBConnect
{
    /**
     * @var object $_dbh instance of PDO class. Using for the db query
     * @var string $_conStr - string for the create connection
     * @var string $_username
     * @var string $_password
     * @var object $_instance instance of this object. Except the clone of the connection with db
     */
    private $_conStr,
            $_userName, 
            $_password;
    private static $_dbh;
    public static $_instance;

    public function __construct($server = SERVER, $username = USER_NAME, $password = PASSWORD , $db = DB_NAME) {
        $this->_userName = $username;
        $this->_password = $password;
        $this->_conStr = 'mysql:dbname=' . $db . ';host=' . $server;
        $this->connect();
    }
    
    /**
     * @return object $_instance - the instance of this class
     */
    public static function getInstance() {
      if(!(self::$_instance instanceof self)) 
        self::$_instance = new self();
      return self::$_instance;
    }

    /**
     * @todo Connect with DB
     */
    private function connect() {
      try {
          self::$_dbh = new PDO($this->_conStr, $this->_userName, $this->_password);
      } catch (PDOException $ex) {
          echo 'Подключение не состоялось: ' . $ex->getMessage();
      }
    }

    /**
     * @todo db is sleep
     */
    public function __sleep() {
        return array('server', 'username', 'password', 'db');
    }

    /**
     * @todo db is wakeup
     */
    public function __wakeup() {
        $this->connect();
    }
    
    /**
     * @return PDO - the connection with db
     */
    public static function getDbh() {
        return self::$_dbh;
    }
    
    
}