<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>    
</head>
<body style="background-color: lightgrey;" >
    <div class="container">
            <br><br><br>
            <h1>Recebimento dos Dados</h1>
            <br><br>
            <?php
            $user =$_GET["usuario"];
            $email =$_GET["email"];
            $sen1 =$_GET["number1"];
            $sen2 =$_GET["number2"];
          

            echo "USUÁRIO: $user<br><br>";
            print("EMAIL: $email<br><br>");
            echo "SENHA: $sen1<br><br>";
            echo "SENHA CONFIRMADA: $sen2<br>";
            
            ?>
            <br>
            <div class="alert alert-success">
            <?php
             print("CADASTRO REALIZADO COM SUCESSO");
            ?>
            </div>
    </div>
</body>
</html>