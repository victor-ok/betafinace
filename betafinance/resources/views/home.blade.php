<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->




        <!-- Font Awesome -->
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


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>

<style>

.sample-container {
    /* border: 1px solid black; */
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23FF0066' d='M19 -18.3C26.2 -16.6 34.7 -12.1 41.8 -2.8C48.9 6.5 54.6 20.7 51.9 34.2C49.2 47.8 38 60.7 24.4 64.8C10.7 68.8 -5.4 63.9 -20.3 57.7C-35.2 51.4 -48.8 43.7 -52.8 32.6C-56.7 21.4 -50.9 6.7 -49.4 -9.9C-47.9 -26.6 -50.7 -45.2 -43.2 -46.9C-35.7 -48.6 -17.8 -33.4 -6 -26.2C5.9 -19.1 11.8 -20.1 19 -18.3Z' transform='translate(100 100)' /%3E%3C/svg%3E") left 30px bottom 10px no-repeat,
    
    url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23FF0066' d='M33.6 -66.7C39.6 -54.7 37.7 -37.7 44.2 -25.8C50.7 -13.8 65.6 -6.9 70.9 3.1C76.3 13.1 72.1 26.1 66.6 39.8C61 53.5 54.2 67.8 42.9 73.9C31.6 80 15.8 77.9 4.7 69.8C-6.4 61.6 -12.7 47.3 -21.6 39.8C-30.6 32.3 -42 31.6 -54.3 26.1C-66.6 20.6 -79.7 10.3 -82.8 -1.8C-86 -14 -79.3 -27.9 -70.7 -39.9C-62.2 -51.8 -51.7 -61.6 -39.6 -70.1C-27.5 -78.6 -13.8 -85.7 0 -85.7C13.8 -85.7 27.6 -78.7 33.6 -66.7Z' transform='translate(100 100)' /%3E%3C/svg%3E") right top no-repeat ;


    background-size: 30%; 


    /* background-repeat: no-repeat;
    background-position: left 30px bottom 15px;
    background-size: 20%; */
    /* text-align: center; */

    
    /* background: url(img_tree.gif) left top no-repeat, url(img_flwr.gif) right bottom no-repeat, url(paper.gif) left top repeat; */
}
    body{
        font-size: 20px;
    font-weight: 500;


    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23FF0066' d='M19 -18.3C26.2 -16.6 34.7 -12.1 41.8 -2.8C48.9 6.5 54.6 20.7 51.9 34.2C49.2 47.8 38 60.7 24.4 64.8C10.7 68.8 -5.4 63.9 -20.3 57.7C-35.2 51.4 -48.8 43.7 -52.8 32.6C-56.7 21.4 -50.9 6.7 -49.4 -9.9C-47.9 -26.6 -50.7 -45.2 -43.2 -46.9C-35.7 -48.6 -17.8 -33.4 -6 -26.2C5.9 -19.1 11.8 -20.1 19 -18.3Z' transform='translate(100 100)' /%3E%3C/svg%3E") left 30px bottom 10px no-repeat,
    
    url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23FF0066' d='M33.6 -66.7C39.6 -54.7 37.7 -37.7 44.2 -25.8C50.7 -13.8 65.6 -6.9 70.9 3.1C76.3 13.1 72.1 26.1 66.6 39.8C61 53.5 54.2 67.8 42.9 73.9C31.6 80 15.8 77.9 4.7 69.8C-6.4 61.6 -12.7 47.3 -21.6 39.8C-30.6 32.3 -42 31.6 -54.3 26.1C-66.6 20.6 -79.7 10.3 -82.8 -1.8C-86 -14 -79.3 -27.9 -70.7 -39.9C-62.2 -51.8 -51.7 -61.6 -39.6 -70.1C-27.5 -78.6 -13.8 -85.7 0 -85.7C13.8 -85.7 27.6 -78.7 33.6 -66.7Z' transform='translate(100 100)' /%3E%3C/svg%3E") right top no-repeat ;


    background-size: 30%; 
    }
    .home-bottom-image-card{
        /* border: 1px solid red; */
        width: fit-content;
    margin-left: auto;
    }
    .fl{
        display:flex;
        flex-direction: column;
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
    width: 80px;
    height: 80px;
    margin-left: auto;
}
.sf-logo-cont img{
    width: 100%;
    height: 100%;
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

#container{
    margin-top: 10%;
}
 </style>   

       
    </head>
    <body>
        <div class="card text-center "id="footer">
  
            <div class="card-header text-muted  rounded-bottom" id="footer" >
                <h1 class="text-white"id="footer">
                    Enter Details
                </hi>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4 mb-4">
                    <img src="{{ asset('image/BetaFinanceLogo2.jpg') }}"  alt="Sample Image">
                </div>
            </div>
        </div>




        <div class="container h-100" id="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                
                <!-- Form -->
                    <form class="needs-validation" novalidate action="loan-details" method="post">
                    {{ csrf_field() }}

                        <h1></h1>
                        <p class="description"></p>
                        <!-- Input fields -->
                        <div class = "fl">
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control username" id="name" placeholder="john smith" name="Name" required="true">
                            </div>
                        </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="dob" class="col-sm-4 col-form-label">Date Of Birth</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control date" id="dob" placeholder="12/02/2000" name="dob" required="true">
                            </div>
                        </div>

                        <!-- <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                        </div> -->

                        <div class="form-group row mt-2">
                            <label class="col-sm-4 col-form-label" for="inlineFormCustomSelect">ID</label>
                            <div class=" col-sm-4">
                                <select class="custom-select" id="identity" name="identity" required="true">
                                    <option selected required="true">Choose...</option>
                                    <option value="National-Passport">National Passport</option>
                                    <option value="Driver's-Licence">Driver's Licence</option>
                                    <option value="NIN">NIN</option>
                                </select>
                                <div class="col-sm-6 mt-2">
                                    <input id="identityv" name="identityv" type="hidden" Placeholder="enter id number" required="true">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="BVN" class="col-sm-4 col-form-label">BVN</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control username" id="BVN" placeholder="20545223165" name="BVN" required="true">
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control username" id="email" placeholder="john smith@gmail.com" name="email" required="true">
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control username" id="phone" placeholder="081234564452" name="phone" required="true">
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="bank" class="col-sm-4 col-form-label">Bank</label>
                            <div class="col-sm-6">
                                <!-- <input type="text" class="form-control username" id="bank" placeholder="015544817896" name="bank" required="true"> -->
                                <select class="custom-select" id="bank" name="bank">
                                    <option selected>Choose...</option>
                                    <option value="Access-bank">Access bank</option>
                                    <option value="Access-money">Access Money</option>
                                    <option value="Accion-microfinace">Accion Microfinance Bank</option>
                                    <option value="Addosser-microfinance">Addosser Microfinamce Bank</option>
                                    <option value="AG-microfinance">AG Microfinance Bank</option>
                                    <option value="Coronation-Bank">Coronation Bank</option>
                                    <option value="Diamond-bank">Diamond bank</option>
                                    <option value="Ecobank-Nigeria">Ecobank Nigeria Plc</option>
                                    <option value="ECOBANK-XPRESS-ACCOUNT">ECOBANK XPRESS ACCOUNT</option>
                                    <option value="ECOMOBILEk">ECOMOBILE</option>
                                    <option value="eTRANZACT">eTRANZACT</option>
                                    <option value="FCMB-MOBILE">FCMB MOBILE</option>
                                    <option value="Fidelity-bank">Fidelity bank</option>
                                    <option value="FIDELITY-MOBILE">FIDELITY MOBILE</option>
                                    <option value="First-bank">First bank</option>
                                    <option value="First-City-Monument-Bank-Plc">First City Monument Bank Plc</option>
                                    <option value="FIRST GENERATION MORTGAGE BANK">FIRST GENERATION MORTGAGE BANK</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="account" class="col-sm-4 col-form-label">Account</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control username" id="account" placeholder="015544817896" name="account" required="true">
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="loanamount" class="col-sm-4 col-form-label">Loan Amount</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control username" id="loanamount" placeholder="#50,000" name="loanamount" required="true">
                            </div>
                        </div>

                        

                        <!-- <button type="submit" class="btn btn-primary btn-customized mt-4" >Login</button> -->
                        <div class="card text-center border-0  bg-transparent" >
        <!-- <div class="card-header">
            Paystack
        </div> -->
                        <div class="card-body  bg-transparent border-0">
                            <h5 class="card-title">
                            <button class="btn btn-success" type="submit" id="start-payment-button" name="submit">
                                SUBMIT
                            </button>
                            </h5>
                        
                        </div>
</div>
                <!-- <button class="btn btn-light" type="submit" id="start-payment-button" name="submit">
                    SUBMIT
                </button> -->

                    </form>
                <!-- Form end -->
                </div>
            </div>
        </div>

        <!-- <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
  Launch demo modal
</button>

        <form>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Amount</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-outline mb-4">
    <input type="number" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Amount</label>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form> -->

        <!-- Button trigger modal -->


        <!-- <div class="card text-center border-0"> -->
        <!-- <div class="card-header">
            Paystack
        </div> 
             <div class="card-body">
                <h5 class="card-title">Paystack</h5>
                <p class="card-text">CHOOSE A PAYMENT METHOD</p>
    

                onclick="Submit() 

                <button class="btn btn-light" type="submit" id="start-payment-button" name="submit">
                    SUBMIT
                </button>
                <a class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                    Pay with card
                </a>
                <a href="#" class="btn btn-light">Pay with Bank</a>
                <a href="#" class="btn btn-light mb-2">Pay with GTB 737</a>
                <br>
                <a href="#" class="btn btn-light">Pay with Mobile Money</a>
                <a href="#" class="btn btn-light">Pay with Visa QR</a> 
            </div> -->
            <!-- <hr style="width:20%;text-align:center; margin-left:50; margin-left:50"> -->
                <!-- <div class="card-text text-muted border-0">
                    Choose one of the payments above to <br>pay 1000 to paystack
                </div> -->
            <!-- <hr style="width:20%;text-align:center;margin-left:50; margin-left:50"> -->
        <!-- <div> -->

  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

        

<!-- Footer -->

<!-- <div class="card text-center mt-4  bg-transparent rounded-top border-0">
  <div class='home-bottom-image-card'>
  <img src="{{ asset('image/BetaFinanceLogo2.jpg') }}" class="img-responsive center-block d-block mx-auto" height="100" width="100"  alt="Sample Image">
  </div> -->
  <!-- <div class="card-header text-muted bg-primary rounded-bottom"> -->
  <!-- <div class="card-header text-muted mb-0" id='footer'>
    <p class="text-white">
        <span style="color:orange">Powered By:</span> PISI Technologies
    </p>
  </div> -->
<!-- </div> -->

<div class='sample-footer'>
                <div class='sf-logo-cont'>
                <img src="{{ asset('image/BetaFinanceLogo2.jpg') }}"   alt="Sample Image">
                </div>
                <div class='sf-footer-content'>
                    <h3><span>Powered By:</span> PiSi Technologies</h3>
                </div>
            </div>



<script type="text/javascript">

    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    document.getElementById("identity").addEventListener("click", myFunction);

    function myFunction() {
        var y = document.getElementById("identity")
        var x =document.getElementById("identityv");

        if (y.value === "NIN" || y.value === "Driver's-Licence" || y.value === "National-Passport"){
            x.type = "text";
            // console.log(y.type)
            // console.log("hi");
        }
        
    }

    function Submit() {
        // var name = document.getElementById("textName").value;
        var amount = document.getElementById("loanamount").value;
        var email = document.getElementById("email").value;
        var name = document.getElementById("name").value;
        console.log(amount);
        console.log(email);
        console.log(name);

        var url = "{{ url('loan-app') }}?amount=" + encodeURIComponent(amount) + "&email=" + encodeURIComponent(email) + "&name=" + encodeURIComponent(name);
        window.location.href = url;
        console.log(url);
    };
    
    

    function makePayment() {
        var name = document.getElementById("name");
        var dob = document.getElementById("dob");
        var identity = document.getElementById("identity");
        var identityv = document.getElementById("identityv");
        var BVN = document.getElementById("BVN");
        var email = document.getElementById("email");
        var account = document.getElementById("account");
        var loananmount = document.getElementById("loananmount");

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
            email: email.value,
            phone_number: "09035593812",
            name: name.value,
            },
            customizations: {
            title: "Beta Finance",
            description: "Payment for an awesome cruise",
            logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
            },
        });
    }

    // document.getElementById("paycard").addEventListener("click", myFunction1);
    // function myFunction1() {
    //     window.location.href='paycard';
    //     console.log("here double curly bracket");
    // }

 
</script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<script src="https://checkout.flutterwave.com/v3.js"></script>
</body>

<!-- Bootstrap Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> -->


</html>

