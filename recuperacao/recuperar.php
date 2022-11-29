
<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>



<?php
  if( empty($_GET['senha']) || empty($_GET['usuario']) )
    die('<p>Não é possível alterar a password: dados em falta</p>');

    mysql_connect('localhost', 'root', '');
    mysql_select_db('webcrud');
 
 
    $usuario = mysql_real_escape_string($_GET['usuario']);
    $senha = mysql_real_escape_string($_GET['senha']);
 
    $query = "update password from users where password = sha2('{$senha}',256)";
 
