<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
        <!-- Styles -->
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
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

.sample-header {
    /* border: 1px solid black; */
    height: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
}


.sample-content {
    /* border: 1px solid red; */
    margin: 15px 0;
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

.sample-content-body h1 {
    font-size: 50px;
    font-weight: 700;
}

.sample-content-body h1 span {
    color: purple;
}

.sample-content-body button {
    font-size: 24px;
    font-weight: 500;
    padding: 10px 15px;
    border: 1px solid lightseagreen;
    border-radius: 25px;
    background-image: -webkit-linear-gradient(90deg, #0ff188 50%, transparent 50%);
    background-image: linear-gradient(90deg, #0ff188 50%, transparent 50%);
    background-position: 100%;
    background-size: 400%;
    -webkit-transition: background 300ms ease-in-out;
    transition: background 300ms ease-in-out;
}

.sample-content-body button:hover {
    background-position: 0;
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
 </style>   

       
 </head>
    <body>
    <div class='sample-container'>
            <!-- <div class='sample-header'>
                <h1>Landing Page</h1>
            </div> -->
            <div class='sample-content'>
                <div class='sample-content-top'>
                    <img src="{{ asset('image/BetaFinanceLogo2.jpg') }}" class="img-responsive center-block d-block mx-auto" height="100" width="100"  alt="Sample Image">
                </div>
                <div class='sample-content-body'>
                    <h1>Get Quick Cash <br><span>After Verification</span></h1>
                    <button onclick="window.location='apply'"; >
                        Start Here
                    </button>
                </div>
            </div>
            <div class='sample-footer'>
                <div class='sf-logo-cont'>
                <img src="{{ asset('image/BetaFinanceLogo2.jpg') }}" class="img-responsive center-block d-block mx-auto" height="100" width="100"  alt="Sample Image">
                </div>
                <div class='sf-footer-content'>
                    <h3><span>Powered By:</span> PiSi Technologies</h3>
                </div>
            </div>
        </div>
</body>
</html>