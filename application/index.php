<?php
session_start();
if(isset($_SESSION['signIn']) && $_SESSION['signIn'] == true){
    header('Location: main.php');
}else{
    echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contas</title>
            <link rel="stylesheet" href="../styles/general.css">
        </head>
        <body>
            <div id="divPrinc">
                <h1>Controle de Conta</h1>

                <form action="main.php" method="post" id="form">
                    <label for="idAgencia">Agência: </label>
                    <input type="text" name="idAgencia" id="idAgencia" class="inputForm">
                    <br>
                    <label for="idConta">Conta: </label>
                    <input type="text" name="idConta" id="idConta" class="inputForm">
                    <br>
                    <label for="saldo">Saldo: </label>
                    <input type="number" step=".01" name="saldo" id="saldo" class="inputForm">
                    <br>
                    <label for="tipoConta">Tipo da Conta</label>
                    <select name="tipoConta" id="tipoConta" class="inputForm">
                        <option value="Corrente" selected>Corrente</option>
                        <option value="Poupança">Poupança</option>
                    </select>
                    <br>
                    <input type="submit" value="Enviar Dados da Conta">
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
    ';
}

?>



