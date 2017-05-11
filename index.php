<?php
include "header.php";
include "nav.php";


if(count($_GET) == 0){
    include "main.php";
}else{
    include $_GET["page"].".php";
}



$username = "ascsacasc";

include "footer.php";
?>
