<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/backend/images/favicon-32x32.png') }}" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('assets/backend/css/pace.min.css') }}" rel="stylesheet" />

    <title>{{ config('app.name') }} - Admin Panel</title>
  </head>
  <body class="bg-surface">
    <!--start wrapper-->
    <div class="wrapper">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-0 border-bottom">
          <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/backend/images/brand-logo-2.png') }}" width="w-full" alt=""/></a>
          </div>
        </nav>
      </header>
      
      <!--start content-->
      <main class="authentication-content">
        @yield('content')
      </main>
      <!--end page main-->
  
      <footer class="bg-white border-top p-3 text-center fixed-bottom">
        <p class="mb-0">Copyright © {{ \Carbon\Carbon::now()->year }}. All right reserved.</p>
      </footer>
    </div>
    <!--end wrapper-->
  
    <!-- Bootstrap bundle JS -->
    <script src="{{ asset('assets/backend/js/bootstrap.bundle.min.js') }}"></script>
  
    <!--plugins-->
    <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pace.min.js') }}"></script>
  </body>
</html>