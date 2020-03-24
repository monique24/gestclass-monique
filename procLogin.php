
<?php
    require_once 'conexao.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];
        if( $senha==null || $email==null) { 
            echo "<script>alert('Prencha os campos, por favor');
            location.href='../index.php';</script> ";
        }else{
            /*$email = mysqli_real_escape_string($conexao,$_POST['email'];
            $senha = mysqli_real_escape_string($conexao,$_POST['senha'];*/
            $query = "SELECT RA, nome_aluno FROM aluno WHERE email = '$email' and senha = '$senha'";
            $executa = mysqli_query($conexao, $query);
            // $exibir = mysqli_fetch_array($executa);
            //$linha= mysqli_num_rows($executa);
        if($executa->num_rows>0){
            echo "Login efetuado";
        }else{
            echo "erro";
        }
    }
    
?>
