<?php

$conexao = mysqli_connect("127.0.0.1:3308","root","","siteT");

if (mysqli_connect_errno())
{
echo "Não foi possível conectar: " . mysqli_connect_error();
}