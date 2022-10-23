    <?php $this->load->view('templates/head'); ?>
    <link href="<?= base_url() ?>assets/bootstrap/sign-in/signin.css" rel="stylesheet">

    <body class="login-background font">
        <main class="form align-center">
            <form method="POST" action="<?= base_url() ?>pages/feed" class="form">

                <div class="text-center"><h1 class="h3 mb-3 fw-normal max-width">Please sign in</h1></div>

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
                    Não possui conta? <a href="<?= base_url() ?>initial/register">Registre-se</a>
                </div>
                <div class="register-espace text-center">
                    <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
                </div>
            </form>

        </main>

        <?php $this->load->view('templates/scripts'); ?>