<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<style>
    .card{
        box-shadow: rgba(65, 123, 231, 0.25) 0px 14px 28px, rgba(79, 78, 128, 0.22) 0px 10px 10px;
    }
    .side{
        position: fixed;
    }
    .link-light{
        text-decoration: none;
        font-size: 12pt;
    }
    .btn-toggle{
        font-size:16pt;
    }
    .content{
        position: relative !important;
    }
    .h-88{
        height: 88%;
    }
    .h-12{
        height: 12%;
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
<body class="" style="background-color: #ebebeb;">
    @yield("navbar")

    @yield('main')

    @yield('second')

    @yield('footer')
</body>
</html>
