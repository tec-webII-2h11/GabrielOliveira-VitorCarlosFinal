<?php

    include "conecta_mysql.php";
    session_start();

    if (isset ($_POST['Login']) and isset ($_POST['Senha'])){
        

	$user=$_POST['login'];
    $pwd=$_POST['senha'];
        
        $link = mysqli_connect("127.0.0.1:3308","root","","siteT");
        $statement = mysqli_prepare($link, "SELECT * FROM cadastro WHERE (LOGIN=? AND password=?)");
        mysqli_stmt_bind_param($statement,"ss",$user, $pwd);
        mysqli_stmt_execute($statement);
        
    $username= findByUser($user);
    if($username==null){
        echo "Usuario não encontrado";
    }elseif(md5($pwd)== $username['Senha']){
        if(isset($_POST['remeber'])){
            setcookie(['Login'],$user,time() +(60+60+24+7),"/");
        }else
            setcookie('Login','',0,"/");
    
    }
        
        
        $_SESSION['user']=$username;
        header('Location:home.php');
    
    }//elseif{
      //  echo "Senha incorreta";
    //}else{
      //  echo "ERRO:Usuario ou senha não informados";
    // }
?>

