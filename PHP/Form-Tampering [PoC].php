<?php
// Form tampering bug PoC
// https://underc0de.org/foro/bugs-y-exploits/form-tampering-poc

$presupuesto = 100;
$compra = strip_tags($_POST['producto']);

function correcto(){
  global $compra;
  echo "Felicidades $compra comprado correctamente";
}

if( isset($_POST['producto']) && !empty($_POST['producto']) ) {
  if( $presupuesto >= $_POST['v_botella'] ) {
    correcto();
  } else if ( $presupuesto >= $_POST['v_cervesa'] ) {
    correcto();
  } else {
    echo "Lo sentimos, no tienes los fondos suficientes"; 
  }
} else {
  if( isset($_POST['send']) ) {
    die("Debes seleccionar un producto");
}

echo "Tu presupuesto es : $presupuesto";

?>
<form action="" method="POST">
    <select name="producto">
    <option value="Botella"> Botella </option>
    <option value="Cerveza"> Cervesa </option>
</select>
    <input type="hidden" name="v_botella" value="500">
    <input type="hidden" name="v_cervesa" value="200">
    <input type="submit" name="send" value="Comprar!">
</form>
<?}?>
