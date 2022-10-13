<!DOCTYPE html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title><?= $title ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">

    <!-- Favicons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      body {
        background: url(https://th.bing.com/th/id/R.0690a896b0048e0417864dac2f4c6d89?rik=0bhnPmnoDpRQmg&pid=ImgRaw&r=0);
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-clip: inherit;
      }

      .title {
        margin-top: 5%;
        font-size: 60px;
        font-family: Dancing Script, sans-serif;
        font-weight: 900;
      }

      .text-page {
          text-align: justify;
      }

      .bd-button-login, .bd-button-register {
        margin: 5%;
      }

      .bg-button-register {
        background-color: transparent!important;
        color: #fff!important;
        font-size: 15px!important;
        border-color: transparent!important;
      }

      .bd-button-login {
        width: 50%;
      }

      .bg-button-register:hover {
        border-color: transparent!important;
        scale: 1.2!important;
      }

      .bd-button-login:hover {
        scale: 1.2!important;
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/cover/cover.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0 title">Insta</h3>
        </div>
      </header>

      <main class="px-3">
        <h1>The social network for all</h1>
        <p class="lead text-page">Welcome to our social network that will provide you with a new experience, full of diversity, joy and enormous emotion, and even better, together with your friends.</p>
        <p class="lead">
          <a href="<?= base_url() ?>initial/login" class="btn btn-lg btn-secondary fw-bold border-white bg-white bd-button-login">Login</a>
        </p>
        <p>OU</p>
        <p>
            <a href="<?= base_url() ?>initial/register" class="btn btn-lg btn-secondary fw-bold bg-button-register">Register</a>
        </p>
      </main>

      <footer class="mt-auto text-white-50">
        <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
      </footer>
    </div>
  </body>
</html>