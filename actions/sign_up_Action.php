<?php 
    require "actions/cnxion.php";
    if(isset($_POST['validate'])){
        if(!empty($_POST['speudo']) and !empty($_POST['last_name']) and !empty($_POST['first_name']) and !empty($_POST['mail']) and !empty($_POST['password'])){
            $spe = (string)htmlspecialchars($_POST['speudo']);
            $nom = (string)htmlspecialchars($_POST['last_name']);
            $pre = (string)htmlspecialchars($_POST['first_name']);
            $mel = (string)htmlspecialchars($_POST['mail']);
            $pwd = (string)htmlspecialchars(password_hash(($_POST['password']),PASSWORD_DEFAULT));

                $ml = $cnx->prepare('SELECT mail from users where mail = ?');
                      $ml->execute([$mel]);
                $ml_exist = $ml->rowCount();
                if($ml_exist ==  0){
                    $sign_up = $cnx->prepare('INSERT into users values (null,?,?,?,?,?)');
                    $sign_up_ok = $sign_up->execute([$spe,$nom,$pre,$mel,$pwd]);

    $get_info_of_this_user = $cnx->prepare('SELECT id,speudo,last_name,first_name,mail from users where speudo = ? and last_name = ? and first_name = ? and mail = ?');
             $Info_user = $get_info_of_this_user->execute([$spe,$nom,$pre,$mel]);

             $Info_user = $get_info_of_this_user->fetch();

    $_SESSION['auth'] = true;
    $_SESSION['id']   = $Info_user['id'];
    $_SESSION['speudo'] = $Info_user['speudo'];
    $_SESSION['last_name'] = $Info_user['last_name'];
    $_SESSION['first_name'] = $Info_user['first_name'];
    $_SESSION['mail'] = $Info_user['mail'];

    header('Location: ../index.php');

                    if($sign_up_ok){
                        $msg = "votre inscription est une reussite";
                    }else{
                        $msg = "l'inscription a echouée  ";
                    }
                }else{
                    $msg = "cette adresse email existe déjà dans notre base ";
                }
        }else{
            $msg = "veuillez rempli tous les champs";
        }
    }
?>