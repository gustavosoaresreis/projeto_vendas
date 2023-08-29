<<<<<<< HEAD
<?php

require_once 'Conexao.php';

class Login extends DB{
    
    
    public function loginVendedor($email, $senha) {
        $sql = "SELECT * FROM `_dAcessosUsuarios` WHERE `Email`=:email AND `Password`=:senha";
        $stmt = DB::prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        
        $stmt->execute();
         
        if ($stmt->rowCount() > 0 ):
            return $stmt->fetchAll();
        else:
            return 'erro';
        endif;
    }
}
class DB {
    
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {

                self::$instance = new PDO("mysql:charset=utf8mb4;host=localhost;dbname=doxbank", "root", "");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            } catch (PDOException $e) {
                echo "<h1>Ops, algo deu errado: " . $e->getMessage() . "</h1>";
            }
        }

        return self::$instance;
    }

    ///------- Metodo Prepare ------
    public static function prepare($sql) {
        return self::getInstance()->prepare($sql);
    }

=======
<?php

require_once 'Conexao.php';

class Login extends DB{
    
    
    public function loginVendedor($email, $senha) {
        $sql = "SELECT * FROM `_dAcessosUsuarios` WHERE `Email`=:email AND `Password`=:senha";
        $stmt = DB::prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        
        $stmt->execute();
         
        if ($stmt->rowCount() > 0 ):
            return $stmt->fetchAll();
        else:
            return 'erro';
        endif;
    }
}
class DB {
    
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {

                self::$instance = new PDO("mysql:charset=utf8mb4;host=localhost;dbname=doxbank", "root", "");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            } catch (PDOException $e) {
                echo "<h1>Ops, algo deu errado: " . $e->getMessage() . "</h1>";
            }
        }

        return self::$instance;
    }

    ///------- Metodo Prepare ------
    public static function prepare($sql) {
        return self::getInstance()->prepare($sql);
    }

>>>>>>> 90889dab6e4b3164e061af59d6631614e855ea80
}