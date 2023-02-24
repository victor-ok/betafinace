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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
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
#footer {
    background: darkblue;
}
        </style>
    </head>
    <body>
        <div class="card text-center ">
  
            <div class="card-header text-muted  rounded-bottom" id="footer">
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
                

                    
                    <div class="button-middle mt-4">
                        <div class='button-stretch'>
                        <button type="submit" class="btn btn-success" name="submit" id="but">
                            Proceed
                        </button>
                        </div>
                        <!-- <button type="submit" class="btn btn-success btn-block" name="submit" id="but">
                            Proceed
                        </button> -->

                        <p class="card-text text-muted border-0 mt-4" id="but-text-1">
                            Click proceed to <br>pay 1000 to BetFinance to process your application
                        </p> 
                        
                        <p class="" id="but-text-1">
                                Call +234xxxxxxxxxx or email info@betafinance.ng for any changes
                        </p>
                    </div>
                </div>
            </div> 
            
                    
                   
        </div>
        </form>
        <div class='sample-footer'>
                <div class='sf-logo-cont'>
                <img src="{{ asset('image/BetaFinanceLogo2.jpg') }}"   alt="Sample Image">
                </div>
                <div class='sf-footer-content'>
                    <h3><span>Powered By:</span> PiSi Technologies</h3>
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