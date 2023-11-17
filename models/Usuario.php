<?php
class Usuario extends Conectar{
    public function login(){
        $conectar = parent::Conexion();
        parent::set_names();
        if(isset($_POST["enviar"])){
            $correo = $_POST["correo"];
            $password = $_POST["passwd"];
            if(empty($correo) and empty($password)){
                header("Location:".Conectar::ruta()."index.php?m=2");
                exit();
            }else{
                $sql = "SELECT * FROM usuarios WHERE correo=? and password=? and estado=1";
                $stmt = $conectar->prepare($sql);
                $stmt->biendValue(1,$correo);
                $stmt->biendValue(2,$password);
                $stmt->execute();
                $resultado = $stmt->fetch();

                if(is_array($resultado) and count($resultado)>0){
                    $_SESSION["id"]=$resultado["id"];
                    $_SESSION["nombre"]=$resultado["nombre"];
                    $_SESSION["apellido_paterno"]=$resultado["apellido_paterno"];
                    $_SESSION["correo"]=$resultado["correo"];
                    header("Location:".Conectar::ruta()."views/inicio.php");
                    exit();
                }else{
                    header("Location:".Conectar::ruta()."index.php?m=1");
                    exit();
                }
            }
        }
    }
}