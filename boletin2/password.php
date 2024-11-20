<?php
function esta($letras, $password)
{
	$existe=false;
	$i=0;
	
	while($i<strlen($password) && $existe==false)
	{
		if(str_contains($letras, $password[$i]))
		{
			$existe=true;
		}else
		{
			$i++;
		}
	}
	
	return $existe;
}

function password_ok($password)
{
	$mayusculas="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$minusculas="abcdefghijklmnopqrstuvwxyz";
	$numeros="0123456789";
	$especiales="@$#:_-?&!*";

	// Comprobamos la longitud
	if(strlen($password)<8)
	{
		echo "No tiene 8 caracteres";
		return false;
	}
		
	// Comprobamos minúsculas
	if(!esta($minusculas, $password))
	{
		echo "No tiene minúsculas";
		return false;
	}
		
	// Comprobamos mayúsculas
	if(!esta($mayusculas, $password))
	{
		echo "No tiene mayúsculas";
		return false;
	}
	
	// Comprobamos números	
	if(!esta($numeros, $password))
	{
		echo "No tiene números";
		return false;
	}
		
	// Comprobamos caracteres especiales	
	if(!esta($especiales, $password))
	{
		echo "No tiene especiales";
		return false;
	}
	return true; 
}


if(password_ok("Pepepepe$"))
{
	echo "\nEl password cumple los requisitos";
}
else
{
	echo "\nEl password no cumple los requisitos";
}
?>