

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
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
            width: 30%;
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

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>


<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>

    </head>
    <body class="d-flex flex-column mh-100" id="page-container">




        <div class="card text-center " id="header">
        
            <div class="card-header text-muted bg-primary rounded-bottom">
                <h1 class="text-white">
                    LOAN APPLICATION
                </hi>
            </div>
        </div>


<div class="card text-center border-0 mt-4" id="middle">
  <!-- <div class="card-header">
    Paystack
  </div> -->
    <div class="card-body mt-4">
        
        <!-- <h5 class="card-title">Congratulations</h5> -->
        <p class="card-text" id="amount-texty">
            Click the button to accept or decline the loan amount available for you.
        <p>



                    
                       
                    





        <!-- onclick="window.location='loan-accept?paymentReference=
        <?php 
        // echo $status
        ?>
        '";  onClick="window.location.reload()" -->
<div id="for">
<form class="form-example " >


        <button class="btn btn-warning" type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal" >
                Approve Loan Amount
            <!-- </a> -->
        </button>
</form>


<form class="form-example " onclick="window.location='loan-decline?paymentReference=<?php echo $status?>'";  onClick="window.location.reload()" >
        <button class="btn btn-warning" type="button">
                Decline Loan Amount
            <!-- </a> -->
        </button>
</form>

        </div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
  Launch demo modal
</button> -->


<!-- action="loan-accept-edit" -->
<form action="loan-accept-edit" method="get" >
{{ csrf_field() }}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Input Amount</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-outline mb-4">
    <input type="number" id="amount" name="amount" class="form-control" />
    <label class="form-label" for="amount">Amount</label>
    <input type="hidden" id="custId" name="custId" value="<?php echo $status?>">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>


<!-- onclick="window.location='loan-accept-edit?paymentReference=
<?php 
// echo $status 
?>

'" -->

        <!-- <button class="btn btn-warning" type="button" id="start-payment-button" onclick="window.location='{{ url('/loan-app') }}'">
            Check Application Details
        </button> -->

        <!-- <a href="#" class="btn btn-warning">Go somewhere</a> -->

        
    </div>  
    
    <footer class="page-footer font-small teal pt-4" id="footer">
<div class="card text-center mt-4  rounded-top">
  
  <div class="card-footer text-muted mb-0 bg-primary">
    <p class="text-white">
        <span style="color:orange">Powered By:</span> PISI Technologies
    </p>
  </div>
</div>

    <!-- Footer -->
    <!-- <footer class="page-footer font-small teal mb-0">
<div class="card text-center">
  
  <div class="card-footer text-muted mb-0 bg-primary">
    <p class="text-white">
        Powered By: PISI Technologies
    </p>
  </div>
</div> -->



<script type="text/javascript">

// const {
//   host, hostname, href, origin, pathname, port, protocol, search
// } = window.location;


    url = window.location;
    var se =  url.search;
    
    console.log(se);
    console.log(url);

// host // "ui.dev"
// hostname // "ui"
// href // "https://ui.dev/get-current-url-javascript/?comments=false"
// origin // "https://ui.dev"
// pathname // "/get-current-url-javascript/""
// port // ""
// protocol // "https:"
// search // "?comments=false



        var queryString = new Array();
        window.onload = function () {
            if (queryString.length == 0) {
                // console.log(queryString["amount"]);
                if (window.location.search.split('?').length > 1) {
                     var params = window.location.search.split('?')[1].split('&');
                    //  console.log(params);
                    
                    for (var i = 0; i < params.length; i++) {
                        var key = params[i].split('=')[0];
                        var value = decodeURIComponent(params[i].split('=')[1]);
                        // console.log(value);
                        queryString[key] = value;
                    }
                }
            }
            if (queryString["amount"] != null && queryString["email"] != null && queryString["name"] != null) {
                console.log(queryString["amount"]);
                console.log(queryString["email"]);
                var val = "<p class='card-text'>You are about to apply for a loan of ";
                var ele = val += " " + queryString["amount"] +'. An SMS will be <br>sent to your phone<p>' ;
                // console.log(ele);
                text = document.getElementById("amount-texty");
                text.innerHTML = ele;
                // document.getElementById("amount-text").value = val;
            }
        };




        function makePayment() {
            var name = queryString["name"];
            var email = queryString["email"];
        // var name = document.getElementById("name");
        // var dob = document.getElementById("dob");
        // var identity = document.getElementById("identity");
        // var identityv = document.getElementById("identityv");
        // var BVN = document.getElementById("BVN");
        // var email = document.getElementById("email");
        // var account = document.getElementById("account");
        // var loananmount = document.getElementById("loananmount");

        FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
            tx_ref: "titanic-48981487343MDI0NzMx",
            amount: "1000",
            currency: "NGN",
            payment_options: "card, ussd",
            redirect_url: "https://http://127.0.0.1:8000//handle-flutterwave-payment",
            meta: {
            consumer_id: 23,
            consumer_mac: "92a3-912ba-1192a",
            },
            customer: {
            email: email,
            phone_number: "09035593812",
            name: name,
            },
            customizations: {
            title: "Beta Finance",
            description: "Payment for an awesome cruise",
            logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
            },
        });
    }
    </script>
    </body>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://checkout.flutterwave.com/v3.js"></script>
 

</html>