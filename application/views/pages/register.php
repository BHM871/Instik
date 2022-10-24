<?php $this->load->view('templates/head'); ?>
    <link href="<?= base_url() ?>assets/bootstrap/sign-in/signin.css" rel="stylesheet">

    <body class="login-background font">
        <main class="form align-center">
            <form method="POST" action="<?= base_url() ?>pages/feed" class="form">

                <div class="text-center"><h1 class="h3 mb-3 fw-normal max-width">Register</h1></div>
                
                <label id="name">Nome 
                <div class="form-floating">
                    <input type="text" class="form-control input" id="floatingName" placeholder="insert name" name="nome" required>
                    <label for="floatingPassword">Nome</label>
                </div>

                <label id="email">Email
                <div class="form-floating">
                    <input type="email" class="form-control input" id="floatingInput" placeholder="name@example.com" name="email" required>
                    <label for="floatingInput">Email</label>
                </div>

                <label id="senha">Senha
                <div class="form-floating">
                    <input type="password" class="form-control input" id="floatingPassword" placeholder="Password" name="senha" required>
                    <label for="floatingPassword">Senha</label>
                </div>

                <label id="phone">Telefone
                <div class="form-floating">
                    <input type="tel" maxlength="16" class="form-control input" id="floatingNumber" placeholder="Telefone" name="telefone" required>
                    <label for="floatingPassword">Telefone</label>
                </div>
                </div> 

                <?php
                    $error = $_GET;
                    if($error != null) {
                        echo '<div class="text-center information">';
                        echo '   <span>';
                        echo $error['error']; 
                        echo '   <span>';
                        echo '</div>';
                    }
                ?>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar-se</button>
                <div class="register-espace text-center">
                    Já possui conta? <a href="<?= base_url() ?>initial/login">Entre aqui</a>
                </div>
                <div class="register-espace text-center">
                    <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
                </div>
            </form>

        </main>

        <?php $this->load->view('templates/scripts'); ?>