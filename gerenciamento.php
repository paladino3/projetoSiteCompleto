<?php
	session_start();
	if(isset($_SESSION["numlogin"])){
		$n1=$_GET["num"];
		$n2=$_SESSION["numlogin"];
		if($n1!=$n2){
			echo "<p>Login não efetuado</p>";
			exit;
		}
	}else{
		echo "<p>Login não efetuado</p>";
		exit;
	}
?>
<!doctype html>
<html lang=“pt-br”>
	<head>
		<title>CFB Veículos</title>
		<meta charset=“utf-8”/>
		<link rel="stylesheet" href="estilos.css"/> 
		<script src="jquery-3.1.1.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#menub1,#menub2,#menub3,#menub4").css("visibility","hidden");
				$("#menua1").click(function(){
					$("#menub1").css("visibility","visible");
					$("#menub2").css("visibility","hidden");
					$("#menub3").css("visibility","hidden");
					$("#menub4").css("visibility","hidden");
				});
				$("#menua2").click(function(){
					$("#menub2").css("visibility","visible");
					$("#menub1").css("visibility","hidden");
					$("#menub3").css("visibility","hidden");
					$("#menub4").css("visibility","hidden");
				});
				$("#menua3").click(function(){
					$("#menub3").css("visibility","visible");
					$("#menub1").css("visibility","hidden");
					$("#menub2").css("visibility","hidden");
					$("#menub4").css("visibility","hidden");
				});
				$("#menua4").click(function(){
					$("#menub4").css("visibility","visible");
					$("#menub3").css("visibility","hidden");
					$("#menub2").css("visibility","hidden");
					$("#menub1").css("visibility","hidden");
				});
				$("#menub1,#menub2,#menub3,#menub4").mouseover(function(){
					$(this).css("visibility","visible");
				});
				$("#menub1,#menub2,#menub3,#menub4").mouseout(function(){
					$(this).css("visibility","hidden");
				});
			});
		</script>
	</head>
	<body>
	
		<header>
			<?php
				include "topo.php";
			?>
		</header>
		
		<section>
			<p>Menu principal de gerenciamento</p>
		</section>
		
		<nav>
			<div class="menu_ger">
				<button id="menua1" class="btMenu">carros</button>
				<div id="menub1" class="menub">
					<a href="#" target="_self">novo</a>
					<a href="#" target="_self">editar</a>
					<a href="#" target="_self">excluir</a>
					<a href="#" target="_self">marcas</a>
				</div>
			</div>
			<div class="menu_ger">
				<button id="menua2" class="btMenu">slider</button>
				<div id="menub2" class="menub">
					<a href="#" target="_self">configurar</a>
				</div>
			</div>
			<?php
				if($_SESSION['acesso']==1){
					echo "
						<div class='menu_ger'>
							<button id='menua3' class='btMenu'>usuarios</button>
							<div id='menub3' class='menub'>
								<a href='novo_usuario.php?num=$n1' target='_self'>novo</a>
								<a href='#' target='_self'>editar</a>
								<a href='#' target='_self'>excluir</a>
							</div>
						</div>
					";
				}
			?>
			<div class="menu_ger">
				<button id="menua4" class="btMenu">logoff</button>
				<div id="menub4" class="menub">
					<a href="#" target="_self">sair</a>
				</div>
			</div>
		</nav>
		
	</body>
</html> 