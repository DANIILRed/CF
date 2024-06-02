<?php

class PdoConnect {
    private const HOST = 'localhost';
    private const DB = 'cwa';
    private const USER = 'root';
    private const PASS = '1111';
    private const CHARSET = 'utf8';

    protected static $_instance;

    protected $DSN;
    protected $OPD;
    public $PDO;

    private function __construct() {

        $this->DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=" . self::CHARSET;
        $this->OPD = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,


        );
        
        $this ->PDO = new PDO($this->DSN, self::USER, self::PASS, $this->OPD);
    }

    protected static function getInstance() {
        if (self::$_instance === null)
        self::$_instance = new self;

        return self::$_instance;
    }

    private function __clone() {}
    private function __wakeup() {}
    
    
}


$sql = "
   CREATE TABLE IF NOT EXISTS SH
(
    id int NOT NULL AUTO_INCREVENT,
    name varchar(255) NOT NULL,
    price varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    PRIMARY KEY(id)
) CHARSER=utf8
";
$res = $PDO->$PDO->query($sql);

var_dump($res);
die();


/* $login = filter_var(trim($_POST['login']),
 FILTER_SANITIZE_STRING);
 $name = filter_var(trim($_POST['name']),
 FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']),
 FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) >90){
    echo "Недопустимая длина логина";
    exit();
} */

?>