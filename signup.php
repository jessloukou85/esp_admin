<?php require 'actions/Sign_up_Action.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php require 'includes/head.php' ?>
<body>
    <P class="alert alert-warning" align="center" ><?php if(isset($msg)){echo $msg;}?></P>
    <div class="container">
        <form class="container" method="POST">
            <br><br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">speudo</label>
                <input type="text" class="form-control" name="speudo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">prenoms</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">email</label>
                <input type="email" class="form-control" name="mail">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
            <br><br>
            <a href="login.php"><p>j'ai déjà un compte, je me connecte</p></a>
        </form>
    </div>
</body>
</html>