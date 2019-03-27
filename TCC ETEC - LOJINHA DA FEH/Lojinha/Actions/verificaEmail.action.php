<?php
include "../Classes/Connection.class.php";
$con = new Connection();
#Verifica se tem um email para pesquisa
if(isset($_POST['email'])){ 

    #Recebe o Email Postado
    $emailPostado = $_POST['email'];

    #Conecta banco de dados 
    $sql = mysqli_query($con->con, "SELECT * FROM tblCliente WHERE emailCliente = '{$emailPostado}'") or print mysql_error();

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('email' => 'false')); 
    else 
        echo json_encode(array('email' => 'true' )); 
}
?>