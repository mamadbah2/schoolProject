<?php
$val = $_GET['val'];
if($val == "add") {
    include("../views/add.demande.html.php");
}
if($val == "list") {
    include("../views/liste.demande.html.php");
}
?>