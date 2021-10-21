<form action="employee.php" method="post">
 <p>Introduzca su Nombre <input type="text" name="nom" /></p>
 <p>Introduzca su sueldo: <input type="text" name="sou" /></p>
 <p><input type="submit" /></p>
</form>

<?php
    class employee{
        public $nom='';
        public $sou=0;
        public function initialize($nom,$sou){
            $this->nom=$nom;
            $this->sou=$sou;
        }
        public function print(){
            if ($this->sou > 6000){
                echo "Hola ".$this->nom." per al teu sou necessites pagar impostos.";
            } 
            else {
                echo "Hola ".$this->nom." per al teu sou no tens impostos.";
            }
        }
    }
    if (! empty($_POST)){
        $persona = new employee();
        $nom = $_POST["nom"];
        $sou = (float)$_POST["sou"];
        $persona->initialize($nom, $sou);
        $persona->print();
    }
?>
