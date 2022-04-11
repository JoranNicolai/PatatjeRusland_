<?php
class resevation {
    private $pdo;
    private $stmt;
    public $error;
    function __construct () {
        try {
            $this->pdo = new PDO(
                "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHAR,
                DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (Exception $ex) { exit($ex->getMessage()); }
    }

    function __destruct (){
        $this->pdo = null;
        $this->stmt = null;
    }

    function save ($date, $name, $email) {
        try {
            $this->stmt = $this->pdo->prepare(
                "INSERT INTO `resevation` (`res_date`, `res_name`, `res_email`) VALUES (?,?,?)"
            );
            $this->stmt->execute([$date, $name, $email]);
            return true;
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }
}

const DB_HOST = "localhost";
const DB_NAME = "patatjerusland_";
const DB_CHAR = "utf8";
const DB_USER = "root";
const DB_PASS = "";

$_RSV = new resevation();

echo $_RSV->save("2021-07-18", "joran", "jorannicolai@gmail.com")
? "" : $_RSV->error;
