<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title></title>
</head>
<body style="overflow-x: hidden">



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand  fw-bold p-5 " href="/">Agarta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-end p-5" id="navbarNavAltMarkup">
            <div class="navbar-nav fw-light" style=" font-family: Helvetica; color: black ">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/gallery">Gallery</a>
                <a class="nav-link" href="/about">About Us</a>
                <a class="nav-link" href="/contact">Contact</a>
            </div>
        </div>
    </div>
</nav>

<div>
    @yield('container')
</div>

<div class="row">
    <div class="col-12 bg-light px-4 py-4">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-3 ">
                <p><a href="" class="link-dark fw-bold" style="text-decoration: none">Why Us?</a></p>
            </div>
            <div class="col-3">
                <p><a href="" class="link-dark fw-bold" style="text-decoration: none">Services</a></p>
            </div>
            <div class="col-3 ">
                <p><a href="" class="link-dark fw-bold" style="text-decoration: none"  >Reach us</a></p>
            </div>

        </div>
        <div class="row">
            <div class="col-12 text-center mt-5">
                <p><a href="" class="link-dark fw-bold" style="text-decoration: none">&#169 2022 Agarta Photography. All rights reserved</a></p>
            </div>
        </div>
    </div>
</div>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>
