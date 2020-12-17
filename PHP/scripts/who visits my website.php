<title> Who visits my website By 2Fac3R v1.0 </title>
<?php
/*
   Who visit my website By 2Fac3R v1.0

                *-BASE DE DATOS-*
        USE test; -- Cambiar por el nombre de tu bd
            CREATE TABLE contador( -- Cambiar por nombre de tabla
            ip varchar(12),
            page text
        );

*/
class contar{
        
    var $con;
    var $tabla;
        
    function agregar(){
        #---Remplazar por tus datos---
        $host = 'localhost';
        $user = 'root';
        $pwd = 'toor';
        $db = 'test';
        $this -> tabla = 'contador';
        #-----------------------------
        $this -> con = mysql_connect($host,$user,$pwd) or die ("Error en la conexion!");
        $select_db = mysql_select_db($db,$this->con);
        $ip = $_SERVER['REMOTE_ADDR'];
        $pag = __FILE__;
        $ins = "INSERT INTO $this->tabla(ip,page) VALUES('$ip','$pag')";
        mysql_query($ins,$this -> con);
    }
    
    function mostrar(){
        $mos = mysql_query("SELECT * FROM $this->tabla",$this -> con);
        $cantidad = mysql_num_rows($mos);
        if($cantidad !=0){
            echo $cantidad;
        }else{
            echo "1";
        }
        
    }
    
}
$contador = new contar;
$contador -> agregar();
echo 'Visitas: '; $contador -> mostrar();
?>
