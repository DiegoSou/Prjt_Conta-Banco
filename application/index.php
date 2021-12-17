<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas</title>
    <link rel="stylesheet" href="../styles/general.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
    <div class="divPrinc margin">
        <h1>Controle de Conta</h1>

        <form action="main.php" method="post" id="form">
            <label for="idAgencia">Agência: </label>
            <input type="text" name="idAgencia" id="idAgencia" class="inputForm" value="<?=isset($_COOKIE["agencia"]) ? $_COOKIE["agencia"] : '';?>">
            <br>
            <label for="idConta">Conta: </label>
            <input type="text" name="idConta" id="idConta" class="inputForm" value="<?=isset($_COOKIE["conta"]) ? $_COOKIE["conta"] : '';?>">
            <br>
            <label for="saldo">Saldo: </label>
            <input type="number" step=".01" name="saldo" id="saldo" class="inputForm" value="<?=isset($_COOKIE["saldo"]) ? $_COOKIE["saldo"] : '';?>">
            <br>
            <label for="tipoConta">Tipo da Conta</label>
            <select name="tipoConta" id="tipoConta" class="inputForm" value="<?=isset($_COOKIE["tipo"]) ? $_COOKIE["tipo"] : '';?>">
                <option value="Corrente" selected>Corrente</option>
                <option value="Poupanca">Poupança</option>
            </select>
            <br>
            <input type="checkbox" name="remember" id="remember" class="margin">
            <label for="remember">Lembrar de mim</label>
            <br>

            <input type="submit" class="btn btn-light margin" value="Enviar Dados da Conta">
        </form>
    </div>


    <script>
        document.getElementById("form").onsubmit = function(e){
            if(document.getElementById("idAgencia").value == "" || document.getElementById("idConta").value == "" ||  document.getElementById("saldo").value == ""){
                alert("Os dados devem ser todos preenchidos corretamente.");
                e.preventDefault();
            }
        }
    </script>
</body>
</html>






