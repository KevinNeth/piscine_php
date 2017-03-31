<?php

// $tab = array('login' => $_POST['login'], 'passwd' => hash('sha512',$_POST['passwd']));
// $tab = serialize($tab);
// print_r($tab);
$dzheng = serialize($_POST);
echo $dzheng;
// header('location: index.html');

?>
