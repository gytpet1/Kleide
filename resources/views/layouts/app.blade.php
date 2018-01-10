<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vestuvių namai - Kleidė</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
    <body>
        @include('inc.nav')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @yield('content')
                </div>
                <div class="col-md-4 col-lg-8">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
        <footer id="footer" class="text-center">
            <p>Visos teisės saugomos &copy; Vestuvių namai - Kleidė.</p>
        </footer>
    </body>
</html>