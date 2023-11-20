<?php
    class SocialMedia extends Conecta{

        public function get_socialMedia(){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM social_media WHERE est=1";
            $sql=$social->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_socialMedia_con_parametro($socmed_id){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM social_media WHERE socmed_id=?";
            $sql=$social->prepare($sql);
            $sql->bindValue(1,$socmed_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function insert_socialMedia($socmed_icoono,$socmed_url){
            $social = parent::conexioon();
            parent::set_names();
            $sql="UPDATE usuarios
                    SET
                        socmed_icono = ?,
                        socmed_url = ?,
                    WHERE
                        socmed_id = ?";
            $sql=$social->prepare($sql);
            $sql->bindValue(1,$socmed_icono);
            $sql->bindValue(2,$socmed_url);
            $sql->bindValue(3,$socmed_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_socialMedia($socmed_id,$socmed_icono,$socmed_url){
            $social = parent::conexion();
            parent::set_names();
            $sql="INSERT social_media (socmed_id, socmed_icono, socmed_url, est) VALUES (NULL,?,?,1)";
            $sql=$social->prepare($sql);
            $sql->bindValue(1, $socmed_icono);
            $sql->bindValue(2, $socmed_url);
            $sql->execute();
            return $resultado=$sql->fetAll();
        }
    }
?>