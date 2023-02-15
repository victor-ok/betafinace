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

        <style>
            .button-middle{
                /* border: 1px solid red; */
                width: fit-content;
                margin: 0 auto;
            }
            .button-stretch{
                /* border: 1px solid yellow; */
                width: 100%;
                
            }
            #but{
                width: 30%;
                margin-left: 35%;
            }
            #but-text-1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="card text-center ">
  
            <div class="card-header text-muted bg-primary rounded-bottom">
                <h1 class="text-white">
                    APPLICATION DETAILS
                </hi>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ asset('image/BetaFinanceLogo2.jpg') }}" class="img-responsive center-block d-block mx-auto" height="100" width="100"  alt="Sample Image">
                </div>
            </div>
        </div>

        <form class="form-example " action="loan-app-pay/<?php echo $name;?>/<?php echo $email;?>"  method="post">
                    {{ csrf_field() }}

        <div class="container h-100 mt-4">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    
                    <p class="text-center font-weight-bold">Name: {{ $name }}</p>
                    <p class="text-center font-weight-bold">Date Of Birth: {{ $DOB }}</p>
                    <p class="text-center font-weight-bold">ID: {{ $id }}</p>
                    <p class="text-center font-weight-bold">ID: {{ $idnum }}</p>
                    <p class="text-center font-weight-bold">BVN: {{ $bvn }}</p>
                    <p class="text-center font-weight-bold">Email: {{ $email }}</p>
                    <p class="text-center font-weight-bold">Phone: {{ $phone }}</p>
                    <p class="text-center font-weight-bold">Bank: {{ $bank }}</p>
                    <p class="text-center font-weight-bold">Account: {{ $account }}</p>
                    <p class="text-center font-weight-bold">Loan Amount: {{ $loanamount }}</p>


                    
                    <div class="button-middle">
                        <div class='button-stretch'>
                        <button type="submit" class="btn btn-success" name="submit" id="but">
                            Proceed
                        </button>
                        </div>
                        <!-- <button type="submit" class="btn btn-success btn-block" name="submit" id="but">
                            Proceed
                        </button> -->

                        <p class="card-text text-muted border-0" id="but-text-1">
                            Click proceed to <br>pay 1000 to BetFinance to process your application
                        </p> 
                        
                        <p class="" id="but-text-1">
                                Call +234xxxxxxxxxx or email info@betafinance.ng for any changes
                        </p>
                    </div>
                </div>
            </div> 
            
                    
                   
        </div>
        <!-- <form action="loan-app-pay" method="get">
            <input type="hidden" name="name" value="  />
            <button type="button" class="btn btn-success btn-block" onclick="window.location='{{ url('loan-app-pay') }}'">
                        Proceed
                    </button>
</form> -->
        <!-- <script type="text/javascript" src="https://sdk.monnify.com/plugin/monnify.js"></script>
        <script>
            function payWithMonnify() {
            MonnifySDK.initialize({
                amount: 100,
                currency: "NGN",
                reference: new String((new Date()).getTime()),
                customerFullName: "Victor Okafor",
                customerEmail: "vua.okafor@gmail.com",
                apiKey: "MK_TEST_L400YM060T",
                contractCode: "909609a054",
                paymentDescription: "Lahray World",
                metadata: {
                    "name": "Damilare",
                    "age": 45
                },

                onLoadStart: () => {
                    console.log("loading has started");
                },
                onLoadComplete: () => {
                    console.log("SDK is UP");
                },

                onComplete: function(response) {
                    //Implement what happens when the transaction is completed.
                    console.log(response);
                },
                onClose: function(data) {
                    //Implement what should happen when the modal is closed here
                    console.log(data);
                }
            });
        }
    </script> -->
    </body>

</html>