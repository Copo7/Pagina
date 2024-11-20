<?php
setcookie('usuario', '', time() - 3600, '/cookies/', 'localhost');

if(isset($_COOKIE['usuario']))
{
echo $_COOKIE['usuario'];
}else
{
    echo "se ha borrado la cookie";
}

?>