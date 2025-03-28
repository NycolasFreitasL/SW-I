<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo_erro.css">
    <title>Document</title>
</head>
<body class = "custom-bg text-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <div class="conteiner custom-bg text-dark" style="padding:2%">
        <form action="processa.php" method="post">
            <h2 class="text-center">Faça seu login</h2>
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4 justify-content-center">
                <input type="email" id="form1Example1" name="email" class="form-control" />
                <label class="form-label" for="form1Example1">Email</label>
            </div>
            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form1Example2" name="senha" class="form-control" />
                <label class="form-label" for="form1Example2">Senha</label>
            </div>
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
                </div>
                <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
                </div>
            </div>
            <!-- Submit button -->
            <!--<button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Sign in</button> -->
            <input data-mdb-ripple-init type="submit" value="entrar" class="btn btn-primary btn-block">
        </form>
    </div>
</body>
</html>