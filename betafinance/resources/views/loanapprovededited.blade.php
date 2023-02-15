<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


        <style>
          #for{
            display: flex;
            justify-content: center;
            /* border: 1px solid red; */
            width: 25%;
            margin: 0 auto;
            justify-content: space-between;
          }
          
          @media screen and (max-width: 700px){
            #for{
                display: block;
                width: 60%;
            }
          }
          
        </style>
    </head>
    <body class="height: 100vh">
    <div class="card text-center ">
  
  <div class="card-header text-muted bg-primary rounded-bottom">
      <h1 class="text-white">
          LOAN APPROVED
      </hi>
  </div>
</div>


        <div class="card text-center border-0">
  <!-- <div class="card-header">
    Paystack
  </div> -->
  <div class="card-body">
  <span id="boot-icon" class="bi bi-check-circle-fill" style="font-size: 130px; color: rgb(0, 128, 55);"></span>
    <h5 class="card-title">Congratulations</h5>
    <p class="card-text">Your loan of <?php echo $edited_loan_amount ?> has been approved.
        Click to confirm or decline</p>
    
    


<div id="for">

        <form class="form-example " onclick="window.location='accept-loan?paymentReference=<?php echo $reff?>'";  onClick="window.location.reload()">
        <button class="btn btn-warning" type="button">
                Accept Loan Amount
            <!-- </a> -->
        </button>
</form>


        <form class="form-example " onclick="window.location='decline-loan?paymentReference=<?php echo $reff?>'";  onClick="window.location.reload()">
        <button class="btn btn-warning" type="button">
                Decline Loan Amount
            <!-- </a> -->
        </button>
</form>

</div>
    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4">
<div class="card text-center mt-4  rounded-top">
  
  <div class="card-footer text-muted mb-0 bg-primary">
    <p class="text-white">
        <span style="color:orange">Powered By:</span> PISI Technologies
    </p>
  </div>
</div>

    </body>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>