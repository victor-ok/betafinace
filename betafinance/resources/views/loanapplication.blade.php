

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
<style>
      body{
        font-size: 20px;
    font-weight: 500;


    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23FF0066' d='M19 -18.3C26.2 -16.6 34.7 -12.1 41.8 -2.8C48.9 6.5 54.6 20.7 51.9 34.2C49.2 47.8 38 60.7 24.4 64.8C10.7 68.8 -5.4 63.9 -20.3 57.7C-35.2 51.4 -48.8 43.7 -52.8 32.6C-56.7 21.4 -50.9 6.7 -49.4 -9.9C-47.9 -26.6 -50.7 -45.2 -43.2 -46.9C-35.7 -48.6 -17.8 -33.4 -6 -26.2C5.9 -19.1 11.8 -20.1 19 -18.3Z' transform='translate(100 100)' /%3E%3C/svg%3E") left 30px bottom 80% no-repeat,
    
    url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23FF0066' d='M33.6 -66.7C39.6 -54.7 37.7 -37.7 44.2 -25.8C50.7 -13.8 65.6 -6.9 70.9 3.1C76.3 13.1 72.1 26.1 66.6 39.8C61 53.5 54.2 67.8 42.9 73.9C31.6 80 15.8 77.9 4.7 69.8C-6.4 61.6 -12.7 47.3 -21.6 39.8C-30.6 32.3 -42 31.6 -54.3 26.1C-66.6 20.6 -79.7 10.3 -82.8 -1.8C-86 -14 -79.3 -27.9 -70.7 -39.9C-62.2 -51.8 -51.7 -61.6 -39.6 -70.1C-27.5 -78.6 -13.8 -85.7 0 -85.7C13.8 -85.7 27.6 -78.7 33.6 -66.7Z' transform='translate(100 100)' /%3E%3C/svg%3E") right bottom no-repeat ;


    background-size: 30%; 
    }

    #footer {
    background: darkblue;
}
.sample-footer {
    margin-top: auto;
    text-align: center;
}

.sf-logo-cont {
    /* border: 1px solid green; */
    width: 10%;
    margin-left: auto;
}

.sf-footer-content {
    background: darkblue;
}

.sf-footer-content h3 {
    padding: 5px 0px;
    color: white;
}

.sf-footer-content h3 span {
    color: orange;
}






.sample-content {
    /* border: 1px solid red; */
    margin: 150px 0;
}

.sample-content-top {
    /* border: 1px solid blue; */
    width: fit-content;
    margin-left: 10px;
}

.sample-content-body {
    /* border: 1px solid pink; */
    margin-top: 5px;
    text-align: center;
}

.sample-content-body h6 {
    font-size: 25px;
    font-weight: 700;
}

.sample-content-body h1 span {
    color: purple;
}
/* .smaple-content{
  margin-top: 20px;
} */
.form-but{
  /* border: 1px solid red; */
  width: 27%;
  margin: 50px auto 0;
  display: flex;
  justify-content: space-between;
  /* margin: 0 auto; */
  /* justify-content: center; */
  
}
</style>
    </head>
    <body class="d-flex flex-column mh-100" id="page-container">




        <div class="card text-center " id="footer">
        
            <div class="card-header text-muted  rounded-bottom">
                <h1 class="text-white">
                    LOAN APPLICATION
                </hi>
            </div>
        </div>



        

        <div class='sample-container'>
            <!-- <div class='sample-header'>
                <h1>Landing Page</h1>
            </div> -->
            <div class='sample-content'>
               
                <div class='sample-content-body'>
                    <h6>Click the button to accept or decline the loan amount <br>available for you.</h6>
                    <!-- <button onclick="window.location='apply'"; >
                        Start Here
                    </button> -->
                    <div class="form-but">
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



</form>
                        </div>

                </div>
            </div>
            
        </div>
<!-- <div class="card text-center border-0 mt-4" id="middle"> -->
  <!-- <div class="card-header">
    Paystack
  </div> -->
    <!-- <div class="card-body mt-4"> -->
        
        <!-- <h5 class="card-title">Congratulations</h5> -->
        <!-- <p class="card-text" id="amount-texty">
            Click the button to accept or decline the loan amount available for you.
        <p> -->



                    
                       
                    





        <!-- onclick="window.location='loan-accept?paymentReference=
        <?php 
        // echo $status
        ?>
        '";  onClick="window.location.reload()" -->
<!-- <div id="for"> -->
<!-- <form class="form-example " >


        <button class="btn btn-warning" type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal" >
                Approve Loan Amount
            </a>
        </button>
</form> -->


<!-- <form class="form-example " onclick="window.location='loan-decline?paymentReference=?>'";  onClick="window.location.reload()" >
        <button class="btn btn-warning" type="button">
                Decline Loan Amount
            </a> 
        </button>
</form> -->

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
    
    <!-- <footer class="page-footer font-small teal pt-4">
<div class="card text-center mt-4  rounded-top">
  
  <div class="card-footer text-muted mb-0 bg-primary">
    <p class="text-white">
        <span style="color:orange">Powered By:</span> PISI Technologies
    </p>
  </div>
</div> -->
<!-- <div class='sample-footer'>
                <div class='sf-logo-cont'>
                <img src="{{ asset('image/BetaFinanceLogo2.jpg') }}" class="img-responsive center-block d-block mx-auto" height="100" width="100"  alt="Sample Image">
                </div>
                <div class='sf-footer-content'>
                    <h3><span>Powered By:</span> PiSi Technologies</h3>
                </div>
            </div> -->
    <!-- Footer -->
    <!-- <footer class="page-footer font-small teal mb-0">
<div class="card text-center">
  
  <div class="card-footer text-muted mb-0 bg-primary">
    <p class="text-white">
        Powered By: PISI Technologies
    </p>
  </div>
</div> -->

<div class='sample-footer'>
                <div class='sf-logo-cont'>
                <img src="{{ asset('image/BetaFinanceLogo2.jpg') }}" class="img-responsive center-block d-block mx-auto" height="100" width="100"  alt="Sample Image">
                </div>
                <div class='sf-footer-content'>
                    <h3><span>Powered By:</span> PiSi Technologies</h3>
                </div>
            </div>



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