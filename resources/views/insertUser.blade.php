<?php
//Incluyo controllers
require '../config/config.php';

if(!$auth->check()) {
    header('Location: login.view.php');
	exit;
}

if ($_SESSION['logged']->getRole() != 7) {
	header('Location: perfil.view.php');
	exit;
}



if ($_POST) {
    $errors = [];
    if (isset($_POST['email'])) {
        $userEmail = $_POST['email'];
        $exists = $querybuilder->searchEmail('Users',$userEmail);
        if ($exists) {
            $errors['existingEmail'] = "Ya existe un usuario con el email ingresado";
        } else {
            $querybuilder->create('Users',$_POST);
            header('Location: user.administration.view.php');
            exit; 
        }
    }

} 
    

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
	<link rel="stylesheet" href="<?=$CONFIG['url']?>css/normalize.css">
    <link rel="stylesheet" href="<?=$CONFIG['url']?>css/reset.css">
    <link rel="stylesheet" href="<?=$CONFIG['url']?>css/updateUser.css">



</head>
<body>

	<!--header-->
	<?php require_once 'header.view.php' ?>


	<header class="title">
		<h1 style="text-align:center;margin-top:20px">Agregar Usuario</h1>
	</header>
    
    <div class="danger">
        <?php if (isset($errors['existingEmail'])) : ?>
            <span>El usuario con el email ingresado ya existe.</span>
        <?php endif;?>
    </div>

    <div class="form-container">
        <form action="" method="post" class="form">


            <div class='form-control'>
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" placeholder="nombre" value="<?=$_POST? $_POST['name'] : '';?>"/>
            </div>

            
                
            <div class='form-control'>
                <label for="lname">Apellido:</label>
                <input type="text" name="lname" id="lname" placeholder="apellido" value="<?=$_POST? $_POST['lname'] : '';?>"/>
            </div>

            <div class='form-control'>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="email" value="<?=$_POST ? $_POST['email'] : '';?>"/>
            </div>

                            
            <div class='form-control'>
                <label for="lname">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="contraseña"/>
            </div>

            <div class='form-control'>
                <label for="genre">Género:</label>
                <select name="genre" id="genre"> 
                    <?php foreach (['male','female','other'] as $key => $value):?>
                        <option value="<?=$value?>"><?=$value?></option>
                    <?php endforeach;?>
                </select>

            </div>

            <div class='form-control'>
                <label for="role">Rol</label>
                <select name="role" id="role" class="role">
                    <?php foreach (['1' => 'Guest','7' => 'Admin'] as $key => $value):?>
                        <option value="<?=$key;?>"><?=$value;?></option>
                    <?php endforeach; ?>
                </select>
            </div>          

            <div class='form-control'>
                <button type="submit" class="enviar">Agregar</button>
            </div>

            <div class='form-control'>
            <a href="user.administration.view.php" class="volver">Volver</a>
            </div>

                  
        </form>
    </div>


    <div>
        <?php require_once 'footer.view.php'?>
    </div>
		
	<!-- footer -->

</body>
</html>