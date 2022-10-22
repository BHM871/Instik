    <?php $this->load->view('templates/head'); ?>
    <link href="<?= base_url() ?>assets/bootstrap/sign-in/signin.css" rel="stylesheet">

    <body class="text-center">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="<?= base_url() ?>pages/feed">

                <img class="mb-4" src="<?= base_url() ?>assets/bootstrap/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
            </form>

            <?php
                if($message !== null) {
                echo '<p>'.$message.'</p>';
                }
            ?>
        </main>

        <?php $this->load->view('templates/scripts'); ?>