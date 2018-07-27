
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carros & cia</title>
        <link rel="stylesheet" href="estilos.css">
        
    </head>
    <body>
        <header>
        <?php
        include 'topo.php';
        ?>
        </header>
    
        <section id="main">
            <?php
                if(isset($_POST["f_logar"])){
                    $user=$_POST["f_user"];
                    $senha=$_POST["f_senha"];
                    
                    //MYSQL
                        //pesquisar user, se existir
                        //obter user e senha;
                    
                    if(($user!="wesley")or($senha!="123")){
                        echo "<p id='lgErro'>Login incorreto</p>";
                    }else{
                        $chave1="abcdefghijklmnopqrstuvwxyz";
                        $chave2="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        $chave3="0123456789";
                    }
                }
            ?>
            <form id="f_login" name="f_login" action="logar.php" method="POST">
                
                <label>Usuário</label>
                <input type="text" name="f_user" title="user">
                <label>Senha</label>
                <input type="password" name="f_senha">
                <input type="submit" value="logar" name="f_logar" title="pw">
                
            </form>
        </section>
      
        </footer>
   
    </body>
</html>
