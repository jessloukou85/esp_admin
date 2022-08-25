<?php  
    require 'actions/cnxion.php';
    if(isset($_POST['validate'])){
        if(!empty($_POST['speudo']) and !empty($_POST['password'])){
            $spe = (string)htmlspecialchars($_POST['speudo']);
            $pwd = (string)htmlspecialchars($_POST['password']);

            $sql = 'SELECT * from users where speudo =?';
            $info_of_this_users = $cnx->prepare($sql);
                                  $info_of_this_users->execute([$spe]);
            if($info_of_this_users->rowCount()==0){

               $info_user = $info_of_this_users->fetch();

                if(password_verify($pwd,$info_user['password'])){
                    $_SESSION['auth']=true;
                    $_SESSION['id']=$info_user['id'];
                    $_SESSION['speudo']=$info_user['speudo'];
                    $_SESSION['last_name']=$info_user['last_name'];
                    $_SESSION['first_name']=$info_user['first_name'];
                    $_SESSION['mail']=$info_user['mail'];
                   // $_SESSION['password']=$info_user['password'];
                    header('Location: ../index.php');
                }else{
                    $msg = 'votre mot de pass est incorrecte veuillez reessayer svp... ';
                }
            }else{
                $msg = "ce speudo n'existe pas parmis les utilisateurs";
            }

        }else{
            $msg = 'veuillez remplir tous les champs';
        }
    }
?>