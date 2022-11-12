<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  SITENAME . " | " . $title ?></title>
    <meta name="description" content="">
    <link rel="icon" href="<?php echo URLROOT; ?>/public/img/kcc.png" />

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!--Flowbite-->
    <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" /> -->
    <!-- Apex Chart -->
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lexend:400,700&display=swap');

        .font-family-lexend {
            font-family: lexend;
        }

        .bg-sidebar {
            background: #3d68ff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #1947ee;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }
          
          h1, h2, h3, h4, h5, h6, strong {
              font-weight: 600;
          }
          
          .box .apexcharts-xaxistooltip {
              background: #1B213B;
              color: #fff;
          }
          
          .content-area {
              max-width: 1280px;
              margin: 0 auto;
          }
          
          .box {
              background-color: rgb(75 85 99);
              padding: 25px 25px;
              border-radius: 4px;
              border: 3px solid #fff9;

          }
          
          .columnbox {
              padding-right: 15px;
          }
          .radialbox {
              max-height: 333px;
              margin-bottom: 60px;
          }
          
          .apexcharts-legend-series tspan:nth-child(3) {
              font-weight: bold;
              font-size: 20px;
          }
          
          .spinner-border {
              display: none;
          }
    </style>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script> -->
    <!--FlowBite-->
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <!--Apex Chart-->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
</head>

<body class="bg-gray-100 font-family-lexend flex">