<!DOCTYPE html>
<html lang="en">
<head>
    @include('frame.head')
</head>
<body class="navbar-top">

    @include('frame.nav')
    <div class="page-container">
        <div class="page-content">
            @include('frame.sidebar')
            <div id="app"></div>
        </div>
    </div>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>