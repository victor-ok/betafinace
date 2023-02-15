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
    CONTACT PAGE
  </div>
</div>

    <body class="h-100">

<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
          <!-- Form -->
          <form>
            <div class="form-group">
                <label for="number">Phone Number:</label>
                <input type="text" class="form-control" id="number" placeholder="2370xxxxxxxx">
                
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" placeholder="info@betafinance.ng">
                
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text-area" class="form-control" id="email" placeholder="i3 El-Rufai street, Kaduna">
                
            </div>
            <div class="form-group">
                <label>Open Time:</label>
                <p>8am - 5pm, Mon - Friday</P>
            </div>
        </form>

    

          
      </div>
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

