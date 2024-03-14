<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['user'])&&isset($_POST['pass'])){
            //recepcion de datos
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        //almacenamiento de usuarios
        $usuarios = array('moya', 'elena', 'diego', 'nelson');
        $contrasenas = array('moya123', 'elena123', 'diego123', 'nelson123');
        
        $tam = count($usuarios);
        $user_Access = $tam;
        $password_Access = 0;

        for($j = 0; $j < $tam; $j++){
            if($user == $usuarios[$j] and $pass == $contrasenas[$j]){
                $user_Access = $j;
                break;
            }
        }
        if($user_Access == $tam){
            echo '<div class="container rounded col-md-6 col-lg-5 col-sm-12">
                    <div class="card text-bg-danger mt-3 mx-5">
                        <div class="card-header">Error</div>
                        <div class="card-body">
                            <h6 class="card-title">Usuario Invalido</h6>
                            <p>Ingrese un usuario valido</p>
                        </div>
                    </div>
                </div>';
        }else{
            header('location:config/seleccion.php');
        }
        }
    }
?>