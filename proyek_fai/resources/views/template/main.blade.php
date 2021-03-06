<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .form-control:focus {
        transition: 0.8s;
        border-color: rgba(167, 212, 255, 0.438);
        box-shadow: 0px 0px 8px rgba(40, 150, 253, 0.514) inset, 0px 0px 8px rgba(40, 150, 253, 0.514);
    }
    .form-control {
        transition: 0.8s;
        border-color: rgb(228, 228, 228);
    }
    .bg-success{
        transition: 0.8s;
    }
    .card{
        transition: 0.8s ease-in-out;
        box-shadow: rgba(22, 55, 241, 0.425) 0px 0px 40px, rgba(48, 17, 224, 0.1) 0px 0px 80px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        @yield('title')
    </title>
</head>
<body class="" style="background-color: #141414;">
    @yield("navbar")

    @yield('main')

    @yield('second')

    @yield('footer')
</body>
</html>

