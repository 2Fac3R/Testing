<title> Who visits my website By 2Fac3R v2.0 </title>
<?php
/*
  Who visits my website By 2Fac3R v2.0
  Con PDO

  contador.sql
    CREATE TABLE contador( -- Cambiar por nombre de tabla
      ip varchar(12),
      page text
    );
*/

class contar{

  function datos($dbname, $user, $pwd) {
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $this->con = new PDO($dsn, $user, $pwd);      
  }
  
  function agregar($table) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $pag = __FILE__;
    $ins = $this->con->prepare("INSERT INTO $table(ip,page) VALUES(:ip,:pag)");
    $ins->bindParam(":ip", $ip, PDO::PARAM_STR);
    $ins->bindParam(":pag", $pag, PDO::PARAM_STR);
    $ins->execute();                
  }
  
  function view($table){
    $mos = $this->con->query("SELECT * FROM $table");
    echo $mos->rowCount();
  }
}                                       
                    
# Cambia por tus datos!
$db = 'test';
$table = 'contador';
$user = 'root';
$pwd = 'toor';
#----------------------

$contar = new contar;
$contar->datos($db, $user, $pwd);
$contar->agregar($table);
$contar->view($table);
                                                                                    
/*
* .- Underc0de.org -.
*         v2.0 2013
* 
* Gr33tz to:
* 
* xt3mp, arcangel_nigth, EddyW, ANTRAX, 11Sep, Kr34t0r, GAMARRA, SkippyCreammy, v1c0_h4ck, w4rning, Snifer, 
* arthusu, Kodeinfect, [Q]3rV[0], WilyXem, m3x1c0h4ck, etc, etc...
* 
*/
?>
