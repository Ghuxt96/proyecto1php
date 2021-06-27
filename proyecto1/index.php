<?php
    $sides = array('1' => 'Hipotenusa',
        '2' => 'Cate-Opuesto',
        '3' => 'Cate-Adyacente');

    function createSideDropdown($name) {
        global $sides;
        $option = "<select name='".$name."'>";
            if(!empty($sides)) {
                foreach($sides as $id => $sideDesc) {
                    $option .= "<option value='".$id."'>".$sideDesc."</option>";
                }
            } else {
                die("se presento un error favor de ingresar corretamente los datos!");
            }
        $option .= "</select>";
        echo $option;
    }

    try {
        if(!empty($_POST['submit'])) {
            if(empty($_POST['val1']) || empty($_POST['val2'])) {
                throw new Exception("favor de ingresar un numero entero enambos cuadros.");
            }
            if(!is_numeric($_POST['val1']) || !is_numeric($_POST['val2'])) {
                throw new Exception("uno de los numeros ingresados no es valido para el calculo.");
            }

            $val1 = $_POST['val1'];
            $val2 = $_POST['val2'];
            $val1numtype = $_POST['val1type'];
            $val2numtype = $_POST['val2type'];
            $val1nametype = $sides[$val1numtype];
            $val2nametype = $sides[$val2numtype];

                if($val1numtype == $val2numtype) {
                    throw new Exception("los 2 lados del triangulo deben ser diferentes entre si");
                }

                if($val1nametype == "Hipotenusa" || $val2nametype == "hipotenusa") {
                    
                    $bignum = max($val1, $val2);
                    $smallnum = min($val1, $val2);
                    $sqTotal = ($bignum * $bignum) - ($smallnum * $smallnum);
                    $total = sqrt($sqTotal);
                    echo $bignum."&sup2; - ".$smallnum."&sup2; = ".$sqTotal."<br />
                    &radic;".$sqTotal." = ".$total.$_POST['mes'];
                } else {
                   
                    $sq1 = $val1 * $val1;
                    $sq2 = $val2 * $val2;
                    $sqTotal = $sq1 + $sq2;
                    $total = sqrt($sqTotal);
                    echo $val1."&sup2; + ".$val2."&sup2; = ".$sqTotal."<br />
                    &radic;".$sqTotal." = ".$total.$_POST['mes'];
                }       
            echo "<br /><br />"; 
        }
    } catch(Exception $e) {
        echo $e->getMessage()."<br/><br/>";
    }


?>
<form method='POST' action='index.php'>
Valor 1: <input type='text' name='val1' /> 
<?php createSideDropdown("val1type"); ?>
<br /><br />

Valor 2: <input type='text' name='val2' /> 
<?php createSideDropdown("val2type"); ?>
<br />
<select name="mes">
<option name="mm">mm</option>
<option name="cm">cm</option>
<option name="m">m</option>
<option name="cm">km</option>
</select>
<br /> 

<input type="submit" name="submit" />
</form>
