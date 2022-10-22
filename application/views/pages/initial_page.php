  <?php $this->load->view('templates/head'); ?>
  <link href="<?= base_url() ?>assets/bootstrap/cover/cover.css" rel="stylesheet">
  
  <body class="d-flex h-100 text-center text-bg-dark body-initial font">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <main class="px-3 align-center">
          <h1>Cover your page.</h1>
          <p class="lead width-initial-text">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
          <p class="lead">
          <div>
            <a href="<?= base_url() ?>initial/login" class="btn btn-lg btn-secondary fw-bold border-white bg-white button">Login</a>
          </div>
          <div>
            <a href="<?= base_url() ?>initial/register" class="btn btn-lg btn-secondary fw-bold button bg-button-register">Register</a>
          </div>
        </p>
      </main>

      <footer class="mt-auto text-white-50 font">
        <p>Template por <a href="https://getbootstrap.com/" class="font">Bootstrap</a> by Adrian - Kaio - Mauro.</p>
      </footer>
    </div>

    <?php $this->load->view('templates/scripts'); ?>