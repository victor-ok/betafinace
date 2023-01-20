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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="card text-center mt-2">
  
  <div class="card-header text-muted ">
    LANDING PAGE
  </div>
</div>

    <body class="h-100">

<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
          <!-- Form -->
          <form class="form-example " action="" method="post">
                <h1></h1>
                <p class="description"></p>
                <!-- Input fields -->
                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control username" id="name" placeholder="john smith" name="Name">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="dob" class="col-sm-4 col-form-label">Date Of Birth</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control date" id="dob" placeholder="12/02/2000" name="dob">
                    </div>
                </div>

                <div class="form-group row mt-2">
                    <label class="col-sm-4 col-form-label" for="inlineFormCustomSelect">ID</label>
                    <div class=" col-sm-6">
                        <select class="custom-select" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">National Passport</option>
                            <option value="2">Diver's Licence</option>
                            <option value="3">NIN</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mt-2">
                    <label for="BVN" class="col-sm-4 col-form-label">BVN</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control username" id="BVN" placeholder="20545223165" name="BVN">
                    </div>
                </div>

                <div class="form-group row mt-2">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control username" id="email" placeholder="john smith@gmail.com" name="email">
                    </div>
                </div>

                <div class="form-group row mt-2">
                    <label for="account" class="col-sm-4 col-form-label">Bank/Account</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control username" id="account" placeholder="015544817896" name="account">
                    </div>
                </div>

                <div class="form-group row mt-2">
                    <label for="loanamount" class="col-sm-4 col-form-label">Loan Amount</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control username" id="loanamount" placeholder="#50,000" name="loanamount">
                    </div>
                </div>

                

                <!-- <button type="submit" class="btn btn-primary btn-customized mt-4" >Login</button> -->

                
            </form>
          <!-- Form end -->

          
      </div>
  </div>
</div>
<div class="card text-center border-0">
  <!-- <div class="card-header">
    Paystack
  </div> -->
  <div class="card-body">
    <h5 class="card-title">Paystack</h5>
    <p class="card-text">CHOOSE A PAYMENT METHOD</p>
    <a href="#" class="btn btn-primary">Pay with card</a>
    <a href="#" class="btn btn-primary">Pay with Bank</a>
    <a href="#" class="btn btn-primary mb-2">Pay with GTB 737</a>
    <br>
    <a href="#" class="btn btn-primary">Pay with Mobile Money</a>
    <a href="#" class="btn btn-primary">Pay with Visa QR</a>
  </div>
  <div class="card-text text-muted border-0">
    Choose one of the payments above to <br>pay 1000 to paystack
  </div>
</div>

<!-- Footer -->
<footer class="page-footer font-small teal pt-4">
<div class="card text-center mt-4">
  
  <div class="card-footer text-muted ">
    Powered By: PISI Technologies
  </div>
</div>


</body>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>

