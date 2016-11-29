<?php

session_start();

unset ($_SESSION['loginSession'] = $login);
unset ($_SESSION['senhaSession'] = $senha);

session_destroy();

header ("Location: regras.php");

?>