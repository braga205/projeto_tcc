<?php

$email=$_POST['email'];
$senha=$_POST['senha'];	

include 'cnx.php';

if($resultado=mysql_query("SELECT * FROM clientes 	WHERE email='$email' and nivel='0' and senha='$senha'"))				   
		{
			$linhas=mysql_num_rows ($resultado);
			if($linhas==0) 
				{
					if($resultado=mysql_query("SELECT * FROM clientes 	WHERE email='$email' and nivel='1' and senha='$senha'"))
					{
						$linhas=mysql_num_rows ($resultado);
						if($linhas==0) 
							{
								if($resultado=mysql_query("SELECT * FROM clientes WHERE email='$email' and nivel='2' and senha='$senha'"))
								{
									$linhas=mysql_num_rows ($resultado);
									if($linhas==0) 
									{
									header("location:cadastro.php?erro=2");
									}
									else
									{
									setcookie("email", $email);
									setcookie("senha", $senha);
									setcookie("nivel", $nivel);	
								    header("Location:painel-vet.php");
									}
								}		
							}
							else
							{
							setcookie("email", $email);
							setcookie("senha", $senha);
							setcookie("nivel", $nivel);
							header("location:painel-func.php");
							}	
					}
				}
				else
					{
					setcookie("email", $email);
					setcookie("senha", $senha);
					setcookie("nivel", $nivel);

					while($montar=mysql_fetch_array($resultado)){
                    {
					$nivel=$montar['nivel'];
					}
					header("location:painel-cli.php");
					}
		mysql_close();
		}
	}