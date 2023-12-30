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
<body style="background-color: lightblue;">
    <div class="container">
        <div class = alert-alert-sucess>
            <form action="receber.php" method="get">
                <div class = "mb-3">
                    <br><br><br>
            <h1>FORMULÁRIO PARA CADASTRO</h1>    
            <br><br>    
            <label for="texto" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">NOME DO USUÁRIO:</label>
            <input type="text" id="texto" name="usuario" class="form-control" required >
            <br><br>
            <label>EMAIL:</label>
            <input type="text" name="email" class="form-control" required>
            <br><br>
            <label>SENHA: (até quatro números)</label>
            <input type="number" name="number1" class="form-control" required step="any" min="0" max="9999">
            <br><br>
            <label>CONFIRMAR SENHA:</label>
            <input type="number" name="number2" class="form-control" required step="any" min="0" max="9999">

            </div>

            <button type="submit" class="btn btn-success mt-3">ENVIAR </button>

            </form>
        </div>
        
    </div>
</body>
</html>