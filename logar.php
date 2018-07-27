
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
                    include './conexao.inc';
            
                if(isset($_POST["f_logar"])){
                    $user=$_POST["f_user"];
                    $senha=$_POST["f_senha"];
                    
                    $sql="SELECT * FROM tb_colaboradores WHERE username='$user' AND senha='$senha'";
                    $res= mysqli_query($con, $sql);
                    $retorno= mysqli_affected_rows($con);
                    
                    if($retorno == 0){
                        echo "<p id='lgErro'>Login incorreto</p>";
                    }else{
                        $chave1="abcdefghijklmnopqrstuvwxyz";
                        $chave2="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        $chave3="0123456789";
                        $chave= str_shuffle($chave1.$chave2.$chave3);
                        $tam= strlen($chave);
                        $num="";
                        $qtde= rand(20, 50);
                        for($i=0 ;$i<$qtde;$i++){
                            $pos= rand(0, $tam);
                            $num.= substr($chave,$pos,1);
                        }
                        session_start();
                        $_SESSION['numlogoin']=$num;
                        $_SESSION['username']=$user;
                        header("location:gerenciamento.php?num=$num");
                    }
                }
                mysqli_close($con);
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
