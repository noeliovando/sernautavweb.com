<?php



class log{



public function login()
{

if(isset($_POST['usuario'])){

EXTRACT($_POST);

$this->usuario='daywork';
$this->clave='work2017';

if($usuario==$this->usuario And $clave==$this->clave){

$_SESSION['username'] = $usuario;
header("location:?vista=admin.php&dash");
exit();

}else{ echo "<DIV ALIGN='CENTER'>

<div class='alert alert-danger' id='b'>
Error al ingresar usuario 
</div>
</DIV>";}


}else{}


////////
}



}
?>