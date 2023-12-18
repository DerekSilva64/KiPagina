<?php

    // Coleta os dados do txt.
    $users = array();
    $user_file = fopen('users_file.txt', 'r');

    while(!feof($user_file)) {

        $user_data = explode('¨', fgets($user_file));
        if(sizeof($user_data) == 3) {
            $users[] = $user_data;
        }

    }
    
    // Variáveis de auxilio.
    $user_exist = false;
    $email_exist = false;
    $has_number = false;

    // Identifica se já existe o email ou usuário enviado.
    // OBS: melhorar depois o código de busca.
    foreach($users as $user) {
        if(($user[0] == strtolower($_POST['user']))) {
            $user_exist = true;
            break;
        } 
        if($user[1] == strtolower($_POST['email'])) {
            $email_exist = true;
            break;
        }
    }


    // Retorno dos erros.
    if ($user_exist == true) {
        header('Location: index.php?register=error-user01');
    }
    if (strlen($_POST['user']) < 3) {
        header('Location: index.php?register=error-user02');
    }
    if ($email_exist == true) {
        header('Location: index.php?register=error-email');
    }

    if(strlen($_POST['password']) < 8) {
        header('Location: index.php?register=error-pass01');
    }

    for($i = 0; $i < strlen($_POST['password']); $i++) {
        // PHP não ajudou muito aqui :(
        if($_POST['password'][$i] == '0' or $_POST['password'][$i] == '1' or $_POST['password'][$i] == '2' or $_POST['password'][$i] == '3' or $_POST['password'][$i] == '4' or $_POST['password'][$i] == '5' or $_POST['password'][$i] == '6' or $_POST['password'][$i] == '7' or $_POST['password'][$i] == '8' or $_POST['password'][$i] == '9') {
            $has_number = true;
        }
    } 

    if($has_number == false) {
        header('Location: index.php?register=error-pass02');
    }

    // Registra o novo usuário.
    if(!$user_exist and !$email_exist) {
        $user_file = fopen('users_file.txt', 'a');
        $new_user = $_POST['user'] . '¨' . $_POST['email'] . '¨' . $_POST['password'] . PHP_EOL; 
        fwrite($user_file, $new_user);
        fclose($user_file);
    }
    
?>