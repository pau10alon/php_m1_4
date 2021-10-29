<?php
  //Comienzo sesion
  session_start();
?>
 
<Doctype html>
<html>
    <head>
        <meta charset='utf-8' > 
        <title>Dados de poker</title>
     </head>
<body>
    <form action="aleatorios.php" method="post">
        <input type="submit" name="inicio" value ="inicio">
        <input type="submit" name="tirar" value ="lanza">
    </form>
</body>
</html>

<?php
class pokerDice {
    public $aleatorio1 = 0;
    public $aleatorio2 = 0;
    public $aleatorio3 = 0;
    public $aleatorio4 = 0;
    public $aleatorio5 = 0;

    public function tirar(){
        $i = $_SESSION["tirada"];
        $i++;
        $_SESSION["tirada"] = $i;
        echo "Hola, tu ".$i."ª tirada es:"."<br>";
        $this->aleatorio1 = random_int(1, 6);
        switch ($this->aleatorio1) {
            case 1:
                echo '<img src="img/negro.jpg">';
                break;
            case 2:
                echo '<img src="img/rojo.jpg">';
                break;
            case 3:
                echo '<img src="img/j.jpg">';
                break;
            case 4:
                echo '<img src="img/q.jpg">';
                break;
            case 5:
                echo '<img src="img/k.jpg">';
                break;
            case 6:
                echo '<img src="img/as.jpg">';
                break;
            default:
                echo "Error";
                break;
        }
        $this->aleatorio2 = random_int(1, 6);
        switch ($this->aleatorio2) {
            case 1:
                echo '<img src="img/negro.jpg">';
                break;
            case 2:
                echo '<img src="img/rojo.jpg">';
                break;
            case 3:
                echo '<img src="img/j.jpg">';
                break;
            case 4:
                echo '<img src="img/q.jpg">';
                break;
            case 5:
                echo '<img src="img/k.jpg">';
                break;
            case 6:
                echo '<img src="img/as.jpg">';
                break;
            default:
                echo "Error";
                break;
        }
        $this->aleatorio3 = random_int(1, 6);
        switch ($this->aleatorio3) {
            case 1:
                echo '<img src="img/negro.jpg">';
                break;
            case 2:
                echo '<img src="img/rojo.jpg">';
                break;
            case 3:
                echo '<img src="img/j.jpg">';
                break;
            case 4:
                echo '<img src="img/q.jpg">';
                break;
            case 5:
                echo '<img src="img/k.jpg">';
                break;
            case 6:
                echo '<img src="img/as.jpg">';
                break;
            default:
                echo "Error";
                break;
        }
        $this->aleatorio4 = random_int(1, 6);
        switch ($this->aleatorio4) {
            case 1:
                echo '<img src="img/negro.jpg">';
                break;
            case 2:
                echo '<img src="img/rojo.jpg">';
                break;
            case 3:
                echo '<img src="img/j.jpg">';
                break;
            case 4:
                echo '<img src="img/q.jpg">';
                break;
            case 5:
                echo '<img src="img/k.jpg">';
                break;
            case 6:
                echo '<img src="img/as.jpg">';
                break;
            default:
                echo "Error";
                break;
        }
        $this->aleatorio5 = random_int(1, 6);
        switch ($this->aleatorio5) {
            case 1:
                echo '<img src="img/negro.jpg">';
                break;
            case 2:
                echo '<img src="img/rojo.jpg">';
                break;
            case 3:
                echo '<img src="img/j.jpg">';
                break;
            case 4:
                echo '<img src="img/q.jpg">';
                break;
            case 5:
                echo '<img src="img/k.jpg">';
                break;
            case 6:
                echo '<img src="img/as.jpg">';
                break;
            default:
                echo "Error";
                break;
        }
     }
    public function shapeName(){
        switch ($this->aleatorio1) {
            case 1:
                echo 'negro';
                break;
            case 2:
                echo 'rojo';
                break;
            case 3:
                echo 'J';
                break;
            case 4:
                echo 'Q';
                break;
            case 5:
                echo 'K';
                break;
            case 6:
                echo 'AS';
                break;
            default:
                echo "Error";
                break;
        }
        switch ($this->aleatorio2) {
            case 1:
                echo 'negro';
                break;
            case 2:
                echo 'rojo';
                break;
            case 3:
                echo 'J';
                break;
            case 4:
                echo 'Q';
                break;
            case 5:
                echo 'K';
                break;
            case 6:
                echo 'AS';
                break;
            default:
                echo "Error";
                break;
        }
        switch ($this->aleatorio3) {
            case 1:
                echo 'negro';
                break;
            case 2:
                echo 'rojo';
                break;
            case 3:
                echo 'J';
                break;
            case 4:
                echo 'Q';
                break;
            case 5:
                echo 'K';
                break;
            case 6:
                echo 'AS';
                break;
            default:
                echo "Error";
                break;
        }
        switch ($this->aleatorio4) {
            case 1:
                echo 'negro';
                break;
            case 2:
                echo 'rojo';
                break;
            case 3:
                echo 'J';
                break;
            case 4:
                echo 'Q';
                break;
            case 5:
                echo 'K';
                break;
            case 6:
                echo 'AS';
                break;
            default:
                echo "Error";
                break;
        }
        switch ($this->aleatorio5) {
            case 1:
                echo 'negro';
                break;
            case 2:
                echo 'rojo';
                break;
            case 3:
                echo 'J';
                break;
            case 4:
                echo 'Q';
                break;
            case 5:
                echo 'K';
                break;
            case 6:
                echo 'AS';
                break;
            default:
                echo "Error";
                break;
        }       
    }
}
if (isset($_POST["inicio"])){
  $boton1 = $_POST["inicio"];
}
if (isset($_POST["tirar"])){
  $boton2 = $_POST["tirar"];
}
    
if (isset($boton1)){
    if ($boton1=="inicio"){
      $_SESSION["tirada"]=0;
    }
}
if (isset($boton2)){
  if ($boton2=="lanza"){
    $pokerDice = new pokerDice();
    $pokerDice->tirar();
    $pokerDice->shapeName();
    echo "<br>";
  }
}
?>
