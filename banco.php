<?php
    session_start();
?>

<Doctype html>
<html>
    <head>
        <meta charset='utf-8' > 
        <title>ITAcademy Bank</title>
     </head>
<body>
    <form action="banco.php" method="post">
        <p>Su número de cuenta: <input type="text" name="num_cuenta" /></p>
        <p>Su nombre: <input type="text" name="nombre" /></p>
        <p>Sus apellidos: <input type="text" name="apellidos" /></p>
        <p>Saldo inicial: <input type="text" name="saldo"/></p>
        <input type="submit" name="crear" value ="crear_cuenta"><br><br>
        <input type="text" name="sum_saldo"/>
        <input type="submit" name="ingresar" value ="ingresar"><br><br>
        <input type="text" name="res_saldo"/>
        <input type="submit" name="retirar" value ="retirar">    
    </form>
</body>
</html>
<?php
  class account {
    private $num_cuenta = "";
    private $nombre ="";
    private $apellido = "";
    private $saldo = 0.00;

    public function __construct($num_cuenta,$nombre,$apellido, $saldo){
        $this->num_cuenta = $num_cuenta;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->saldo = $saldo;
    }
    public function deposit($amount){
        $this->saldo = $this->saldo + $amount;
    
    }
    public function withdraw($amount){
        if ($amount > $this->saldo){
            echo "No hay saldo suficiente para este retiro";
        }else{
            $this->saldo = $this->saldo - $amount;
        }

    }

    public function get_saldo(){
        return $this->saldo;
    }
    public function get_nombre(){
        return $this->nombre;
    }
    public function get_apellido(){
        return $this->apellido;
    }
    public function get_num_cuenta(){
        return $this->num_cuenta;
    }

    public function set_saldo($saldo_inicial){
        $this->saldo = $saldo_inicial;
    }
    public function set_nombre($nombre){
        $this->name = $saldo_inicial;
    }
    public function set_apellido($apellido){
        $this->apellido = $saldo_inicial;
    }
    public function set_num_cuenta($saldo_inicial){
        $this->num_cuenta = $saldo_inicial;
    }


  } 
if (isset($_POST["crear"])){
    $boton_crear = $_POST["crear"];
}
if (isset($_POST["ingresar"])){
    $boton_ingresar = $_POST["ingresar"];
}
if (isset($_POST["retirar"])){
    $boton_retirar = $_POST["retirar"];
}


if (isset($boton_crear)){
    if ($boton_crear=="crear_cuenta"){
        $num_cuenta = $_POST["num_cuenta"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $saldo = $_POST["saldo"];
        $usuario = new account($num_cuenta,$nombre,$apellidos,$saldo);
        $_SESSION["num_cuenta"]=$num_cuenta;
        $_SESSION["nombre"]=$nombre;
        $_SESSION["apellidos"]=$apellidos;
        $_SESSION["saldo"]=$saldo;
        echo 'Cuenta creada ------';
        print_r($_SESSION);
    }
}
if (isset($boton_ingresar)){
    if ($boton_ingresar=="ingresar"){
        $ingreso = (float)$_POST["sum_saldo"];
        $usuario = new account($_SESSION["num_cuenta"],
                               $_SESSION["nombre"],
                               $_SESSION["apellidos"],
                               $_SESSION["saldo"]);
        $usuario->deposit($ingreso);        
        echo"Su nuevo saldo es de ".$usuario->get_saldo();
        $_SESSION["saldo"]=$usuario->get_saldo();
    }
}
if (isset($boton_retirar)){
    if ($boton_retirar=="retirar"){
        $retiro = (float)$_POST["res_saldo"];
        $usuario = new account($_SESSION["num_cuenta"],
                               $_SESSION["nombre"],
                               $_SESSION["apellidos"],
                               $_SESSION["saldo"]);
        $usuario->withdraw($retiro);        
        echo "<br>Su saldo es de ".$usuario->get_saldo();
        $_SESSION["saldo"]=$usuario->get_saldo();
    }
}


?>
