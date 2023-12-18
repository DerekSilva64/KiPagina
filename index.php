<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>KiPagina</title>

        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="imgs/astronauta-icon.png">

        <script src="https://kit.fontawesome.com/7b410f1d89.js" crossorigin="anonymous"></script>

        <style>
            <?php
            include_once('css/style.css');
            ?>
        </style>

    </head>

    <body>

        <main class="container">

            <div class="background">
                <div class="ball-blur ball-1"></div>
                <div class="ball-blur ball-2"></div>
                <div class="ball-blur ball-3"></div>
                <div class="ball-blur ball-4"></div>
                <div class="ball-blur ball-5"></div>
                <div class="ball-blur ball-6"></div>
            </div>

            <div class="box">

                <div class="overflow-effect">

                    <div class="side-form <?php if(isset($_GET['register'])) {?> hide-login <?php } ?>">

                        <form action="valida_login.php" method="post" class="form">
    
                            <h1>LOGIN</h1>
    
                            <div class="inputs login">

                                <div class="inputs-itens">
                                    <div class="input-area">
                                        <i class="fa-solid fa-user input-icon"></i>
                                        <input name="user" class="input-data user" type="text" placeholder="Usuário ou email" required autocomplete="off">

                                        <?php
                                            if (isset($_GET['login']) and $_GET['login'] == 'error-user') {
                                        ?>

                                        <p class="error">Usuário não existe!</p>

                                        <?php } ?>

                                    </div>
        
                                    <div class="input-area">
                                        <i class="fa-solid fa-lock input-icon"></i>
                                        <input name="password" class="input-data password" type="password" placeholder="Senha" required>

                                        <?php
                                            if (isset($_GET['login']) and $_GET['login'] == 'error-pass') {
                                        ?>

                                        <p class="error">Senha incorreta!</p>

                                        
                                        <?php } ?>

                                    </div>
        
                                </div>
                                
                                <a class="links forgot" href="#">Esqueceu a senha?</a>
                                <button class="btn-submit">Entrar</button>
    
                            </div>
                            
    
                            <div class="divisor">
                                <div class="line"></div> <h3>Entrar com</h3> <div class="line"></div>
                            </div>
    
                            <div class="social-media">
                                <a href="https://github.com/DerekSilva64" target="_blank"><i class="fa-brands fa-google social-media-icon"></i></a>
                                <a href="https://github.com/DerekSilva64" target="_blank"><i class="fa-brands fa-facebook social-media-icon"></i></a>
                                <a href="https://github.com/DerekSilva64" target="_blank"><i class="fa-brands fa-twitter social-media-icon"></i></a>
                            </div>
                            <p class="register-p">Não possui uma conta? <a class="links register" href="#">Registrar-se</a></p>
    
    
                        </form>
    
                    </div>
    
                    <div class="side-register <?php if(isset($_GET['register'])) {?> appear-register <?php } ?>">
    
                        <form action="valida_registro.php" method="post" class="form">
    
                            <h1>REGISTRO</h1>
    
                            <div class="inputs register">

                            <div class="inputs-itens">

                                <div class="input-area">
                                    <i class="fa-solid fa-user input-icon"></i>
                                    <input name="user" class="input-data user" type="text" placeholder="Usuário" required autocomplete="off">
                                    <?php
                                        if (isset($_GET['register']) and $_GET['register'] == 'error-user01') {
                                    ?>

                                    <p class="error">Nome de usuário já em uso!</p>

                                    <?php } elseif(isset($_GET['register']) and $_GET['register'] == 'error-user02') { ?>
                                        <p class="error">Nome de usuário deve conter ao menos 3 caracteres!</p>
                                    <?php } ?>

                                    </div>
        
                                    <div class="input-area">
                                        <i class="fa-solid fa-envelope input-icon"></i>
                                        <input name="email" class="input-data email" type="email" placeholder="Email" required autocomplete="off">
                                        <?php
                                            if (isset($_GET['register']) and $_GET['register'] == 'error-email') {
                                        ?>

                                        <p class="error">Email inválido!</p>

                                        <?php } ?>
                                    </div>
        
                                    <div class="input-area">
                                        <i class="fa-solid fa-lock input-icon"></i>
                                        <input name="password" class="input-data password" type="password" placeholder="Senha" required>
                                        <?php
                                            if (isset($_GET['register']) and $_GET['register'] == 'error-pass01') {
                                        ?>

                                        <p class="error">Senha precisa conter pelos menos 8 caracteres!</p>

                                        <?php } elseif (isset($_GET['register']) and $_GET['register'] == 'error-pass02') { ?>

                                        <p class="error">Senha precisa conter números!</p>

                                        <?php } ?>
                                    </div>

                                </div>                              
                                
                                <span class="terms"><input type="checkbox" required>Concordo com os <a href="#">termos e condições</a></span>
                                <button class="btn-submit">Registrar</button>
    
                            </div>
                            
    
                            <div class="divisor">
                                <div class="line"></div> <h3>Entrar com</h3> <div class="line"></div>
                            </div>
    
                            <div class="social-media">
                                <a href="https://github.com/DerekSilva64" target="_blank"><i class="fa-brands fa-google social-media-icon"></i></a>
                                <a href="https://github.com/DerekSilva64" target="_blank"><i class="fa-brands fa-facebook social-media-icon"></i></a>
                                <a href="https://github.com/DerekSilva64" target="_blank"><i class="fa-brands fa-twitter social-media-icon"></i></a>
                            </div>
                            <p class="register-p">Já possui uma conta? <a class="links login" href="#">Login</a></p>
    
    
                        </form>
    
                    </div>
                </div>

                <div class="side-image">
                    <img src="imgs/Logo-kiPagina.png" alt="Logo-KiPagina">
                </div>

            </div>

        </main>

        <script src="js/script.js"></script>
        
    </body>

</html>