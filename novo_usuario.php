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
	</head>
	<body>
	
		<header>
			<?php
				include "topo.php";
			?>
		</header>

		<section id="main">
		
			<a href="gerenciamento.php?num=<?php echo $n1; ?>" target="_self" class="btmenu">voltar</a>
			<h1>Novo Usuário</h1>
			
			<form name="f_novo_colaborador" action="novo_usuario.php" class="f_colaborador" method="get">
				<input type="hidden" name="num" value="<?php echo $n1; ?>">
				<label>Nome</label>
				<input type="text" name="f_nome" maxlength="50" size="50" required="required">
				<label>Username</label>
				<input type="text" name="f_user" maxlength="50" size="50" required="required">
				<label>Senha</label>
				<input type="text" name="f_senha" maxlength="50" size="50" required="required">
				<label>Acesso</label>
				<input type="text" name="f_acesso" maxlength="50" size="50" required="required" pattern="[0-1]+$" placeholder="0 ou 1" title="0 ou 1">
				<input type="submit" name="f_bt_novo_colaborador" class="btmenu" value="gravar">
			</form>
		
		</section>
		
	</body>
</html> 