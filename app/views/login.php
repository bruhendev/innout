<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
<title>In n` Out</title>
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">IN</span>
                <span class="font-weight-bold mx-2">N`</span>
                <span class="font-weight-light">OUT</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>
            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php'); ?>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" value="<?= $email ?? "" ?>" id="email" placeholder="Informe o e-meial" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="text" name="password" id="password" placeholder="Informe a senha" class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-primary">Entrar</button>
            </div>
        </div>
    </form>
</body>
</html>