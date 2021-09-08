<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sistema escolar</title>
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="text-center container d-flex align-items-center justify-content-center" style="height: 100vh;">
    <form class="form-signin" style="width: 30%" method="post" action="./pages/valida.php">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputEmail" class="sr-only">R.A.></label>
      <input type="nunber" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="inputPassword" id="inputPassword" class="mt-3 form-control" placeholder="Senha" required>
      <button class="mt-4 btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
  </body>
</html>