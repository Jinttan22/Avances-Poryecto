<?php
session_start();
    class Conectar{
        protected $dbh;
        protected function conexion(){
            try{
                $conectar=$this->dbh=new PDO("mysql:local=localhost;dbhname=proyecto","root","");
                return $conectar;
            }catch(Exeption $e){
                print "Conexión fallida". $e->getMessage()."<br>";
                die();
            }
        }
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        /*TODO: Ruta principal del proyecto */
        public static function ruta(){
            //QA
            return "http://localhost/Proyecto/";
        }
    }
?>