<!DOCTYPE html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title><?= $title ?></title>
    
        <!--Initial-->
    <link rel="canonical" href="<?= base_url() ?>assets/bootstrap/cover/">

        <!--Login-->
    <link rel="canonical" href="<?= base_url() ?>assets/bootstrap/sign-in/">
        
        <!--Register-->
    <link rel="canonical" href="<?= base_url() ?>assets/bootstrap/checkout/">
        
        <!--Feed and About-->
    <link rel="canonical" href="<?= base_url() ?>assets/bootstrap/offcanvas-navbar/">

    <link href="<?= base_url() ?>assets/bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="manifest" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/manifest.json">

    <!-- Font-->    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">    

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

        .nav-underline .nav-link {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: .875rem;
            color: #6c757d;
        }

        .nav-underline .nav-link:hover {
            color: #007bff;
        }

        .body-initial {
            background: rgb(15,76,92);
            background: linear-gradient(140deg, rgba(15,76,92,1) 9%, rgba(95,15,64,1) 74%, rgba(154,3,30,1) 100%);
            animation-name: body-initial;
            animation-duration: 3s;
            animation-iteration-count: infinite;
        }

        .body-register {
            color: #212529 !important;
        }

        .button {
            width: 20vw;
        }

        .button:hover{
            scale: 1.1;
        }

        .bg-button-register {
            color: #d3d3d3 !important;
            border-color: transparent !important;
            background-color: transparent !important;
            margin: 20px !important;
            margin-top: 10vh !important;
        }

        .font {
            font-family: Arvo;
            color: #d3d3d3 !important;
        }

        .align-center{
            width: fit-content;
            height: fit-content;
            margin: auto;
            position: absolute;
            top:0;
            left:0;
            right:0;
            bottom:0;
        }

        .width-initial-text {
            max-width: 40vw;
            height: auto;
        }

    </style>