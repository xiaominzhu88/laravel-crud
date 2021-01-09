<html>
<head>
    <title>Crud-Zhu @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .row {
            background-color: lightgray;
            color: white;
            margin: 1rem auto;
            padding: 0.5rem;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .button {
            margin-right:1.5rem;
        }


        .footer {
            margin: 1rem auto;
            background-color: lightgray;
            color: white;
            text-align: center;
            padding: 1rem;

        }

    </style>

</head>

<body>
    {{-- TIL in readme --}}
  @section('sidebar')
  @show
    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">
      <h4>xiaomin.zhu88@gmail.com</h4>
    </div>
</body>

</html>
