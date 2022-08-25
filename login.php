<?php require 'actions/Sign_up_Action.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php require 'includes/head.php' ?>
<body>
    <P class="alert alert-warning" align="center" ><?php if(isset($msg)){echo $msg;}?></P>
    <br><br>
    <div class="container">
        <hr>
        <form class="container" method="POST" action="">
            <br><br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">speudo</label>
                <input type="text" class="form-control" name="speudo">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
            <br><br>
            <a href="signup.php"><p>je n'ai pas de compte, je m'inscrire</p></a>
        </form>
    </div>
</body>
</html>