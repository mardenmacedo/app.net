<?php

 $con = mysql_connect('localhost', 'root', '');
 mysql_select_db('banco_teste', $con);
 
 $nome = mysql_real_escape_string($_REQUEST['nome']);
 $cpf = mysql_real_escape_string($_REQUEST['cpf']);
 $rg = mysql_real_escape_string($_REQUEST['rg']);
 $tel = mysql_real_escape_string($_REQUEST['tel']);
 $email = mysql_real_escape_string($_REQUEST['email']);
 
 
 $sql := "INSERT INTO cliente (nome, cpf, rg, tel, email) VALUES ('$nome', '$cpf', '$rg', '$tel', '$email')";
 $res = mysql_query($sql);
 
 if ($res ==true){
	 $cadastro = 1;
  }
 else {
	 $cadastro = 0;
  }	 
	 
 echo (json_encode($cadastro));
	 
 

?>
