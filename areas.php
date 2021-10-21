<form action="areas.php" method="post">
 <p>Introduzca el ancho: <input type="text" name="ample" /></p>
 <p>Introduzca el alto: <input type="text" name="alt" /></p>
 <p><input type="submit" /></p>
</form>


<?php
    class shape{
        public $ample = 0;
        public $alt = 0;
        public function __construct($ample, $alt){
            $this->ample = $ample;
            $this->alt = $alt;
        }
    }
    class triangle extends shape{
        public function area_triangle(){
            return(($this->ample * $this->alt)/2);
        }

    }
    class rectangle extends shape{
        public function area_rectangle(){
            return($this->ample * $this->alt);
        }
    }

    if(! empty($_POST)){
    $ample = (int)$_POST["ample"];
    $alt = (int)$_POST["alt"];
    $triangle = new triangle($ample, $alt);
    $rectangle = new rectangle($ample, $alt);
    echo 'El area del triangle es '.$triangle->area_triangle().'<br>';
    
    echo 'El area de rectangle es '.$rectangle->area_rectangle();
    }
?>
