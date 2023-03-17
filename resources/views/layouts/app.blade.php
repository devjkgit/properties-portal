<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>

        <!----- meta links ----->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!----- Font Family Link ----->
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <!----- Latest compiled and minified CSS ----->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"
            />

        <!----- Font Awesome CSS ----->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            />

        <!----- Slick Slider CSS ----->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
        <!----- Custom style sheet links ----->
        @yield('customcss')
        <link rel="stylesheet" href="/assets/css/style.css">

    </head>
    <!-- For main content  -->
    @yield('section')
    <!-- For main content  -->

    <!-- jQuery library -->
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <!-- Popper JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js">
    </script>
    <!-- Latest compiled JavaScript -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js">
    </script>
    <!-- slick slider JavaScript -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    </script>
    <!-- For custom js(jquery functions etc)  -->
    @yield('customscripts')
</body>

</html>