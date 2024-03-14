<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="copyright" content="Bellic">
	<title>HidroMoya</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <!link rel="stylesheet" href="css/custom/custom.css">
</head>
<body class="bg bg-secondary">
    <header class="mb-3 pb-3">
        <h1 class="bg bg-dark text-light py-3 text-center">HidroMoya</h1>
    </header>
    <main class="container pb-5 pt-3 mt-3 rounded bg-light border border-dark col-md-6 col-lg-5 col-sm-12">
        <div class="row py-2">
            <div class="container w-50">
                <h3 class="text-center text-dark border border-dark border-3 rounded">Inicio de Sesión</h3>
            </div>
        </div>
        <form action="#" method="POST">
            <div class="col">
                <div class="row px-5">
                    <label class="form-label my-2">Usuario</label>
                    <input type="text" required name="user" class="form-control form-control border-dark" maxlength="8">
                </div>
                <div class="row px-5">
                    <label class="form-label my-2">Contraseña</label>
                    <input type="password" required name="pass" class="form-control border-dark" maxlength="10">
                </div>
                <div class="container text-center">
                    <input type="submit" class="btn btn-primary px-5 mt-3" value="Ingresar">
                </div>
            </div>
        </form>
    </main>
    <?php include('config/user.php');?>
    <br>
    <footer>
        <hr class="border-2 opacity-100 mb-4 mt-5">
        <p class="text-center fs-4 text-light py-3">©Copyright by: Gobierno Moyibariano</p>
    </footer>
</body>
</html>
