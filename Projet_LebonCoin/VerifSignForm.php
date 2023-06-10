<?php
    class connect extends PDO{
    
        const HOST="localhost";
        const DB="epmi_shop_gestion";
        const USER="root";
        const PSW="";
    
        public function __construct(){
            try{
                parent::__construct("mysql:dbname=".self::DB.";host=".self::HOST,self::USER,self::PSW);
                echo "<br>Connecté à la base de donnée";
            }catch(PDOException $e){
                echo $e->getMessage()." ".$e->getFile()." ".$e->getLine();
            }
        }
    }
    ?>
    <?php

    $pdo =new connect();
?>