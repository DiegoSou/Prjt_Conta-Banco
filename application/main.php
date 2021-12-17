<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/general.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <div class="divPrinc margin">
        <?php
        require_once '../entities/Cookie.php';
        require_once '../entities/Corrente.php';
        require_once '../entities/Poupanca.php';

            if(isset($_POST['idAgencia']) == true || isset($idAgencia)){
                session_start();
                $idAgencia = isset($_POST['idAgencia']) ? $_POST['idAgencia'] : null;
                $idConta = isset($_POST['idConta']) ? $_POST['idConta'] : null;
                $saldo = isset($_POST['saldo']) ? $_POST['saldo'] : null;
                $tipoConta = isset($_POST['tipoConta']) ? $_POST['tipoConta'] : null;

                if($tipoConta == "Corrente"){
                    $limite = 500.00;
                    $conta = new Corrente($idAgencia, $idConta, $saldo, $limite);
                }else{
                    $conta = new Poupanca($idAgencia, $idConta, $saldo);
                }

                addCookie("agencia", $idAgencia);
                addCookie("conta", $idConta);
                addCookie("saldo", $saldo);
                addCookie("tipo", $tipoConta);


                if($_SESSION['logIn'] == true){
                    if(!isset($_POST['remember'])){
                        forget("agencia", $idAgencia);
                        forget("conta", $idConta);
                        forget("saldo", $saldo);
                        forget("tipo", $tipoConta);
                    }
        
                    echo $conta->getDetalhes();
                    echo $tipoConta."<br/>";

                }
                else{
                    header("Location: logIn.php");
                }
            }else{
                header("Location: index.php");
            }

        ?>
    </div>
</body>
</html>


