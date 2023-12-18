<?php

    $users = array();
    $user_file = fopen('users_file.txt', 'r');

    while(!feof($user_file)) {

        $user_data = explode('¨', fgets($user_file));
        if(sizeof($user_data) == 3) {
            $users[] = $user_data;
        }

    }

    $found = false;
    $pass_correct = false;

    foreach($users as $user) {
        if(($user[0] == strtolower($_POST['user'])) or ($user[1] == strtolower($_POST['user']))) {
            $found = true;

            if($found == true) {
                if($user[2] == $_POST['password'] . PHP_EOL) {
                    $pass_correct = true;
                    break;
                }
            }

        } 
    }

    if(($found == true) and ($pass_correct == true)) {
        echo "Usuário existe<br>Senha correta";
        $_SESSION['authentication'] = true;
    } elseif($found == false) {
        $_SESSION['authentication'] = false;
        header('Location: index.php?login=error-user');
    } elseif($pass_correct == false) {
        $_SESSION['authentication'] = false;
        header('Location: index.php?login=error-pass');
    }


?>