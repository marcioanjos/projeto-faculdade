<?php

$formulario = "<form action=\"/hotell/html/teste.php\" method=\"post\">";
$formulario .= "<input type=\"text\" name=\"nome\" />";
$formulario .= "<input type=\"submit\" value=\"ok\"/>";

$formulario .= "</form>";

if ($_POST) {
$formulario .= "<form action=\"/\" method=\"post\">";
$formulario .= "<input type=\"text\" name=\"nome2\" value=\"".$_POST['nome']."\"/>";
$formulario .= "<input type=\"submit\" value=\"ok\"/>";

$formulario .= "</form>";
}
echo $formulario;
?>