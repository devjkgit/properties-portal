<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>

                <!----- Latest compiled and minified CSS ----->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"
            />

        <!----- Font Awesome CSS ----->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            />
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
    <!-- For custom js(jquery functions etc)  -->
    @yield('customscripts')
</body>

</html>