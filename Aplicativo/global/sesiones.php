
<?php
session_start();


if(!isset($_SESSION['usuario'])){

echo "redirigir al login... no hay usuario";
header('Location:index.php');
}



?>