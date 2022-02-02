<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
=======
    <link rel="stylesheet" href="{{asset('css/app.css')}}">  
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modallogin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Poppins:wght@400;700&family=Share+Tech&display=swap" rel="stylesheet">
    <title>TECHVENTS</title>
>>>>>>> feature/headerFooter
</head>
<body>
    <header>
        <x-header/>
    </header>
    <main>
        <div>
            @yield('content')
        </div>
    </main>
<<<<<<< HEAD
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>

=======




    
    <nav aria-label="">
        <ul class="pagination d-flex justify-content-center">
          <li class="page-item ">
            <a class="page-link text-dark" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
          <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
          <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link text-dark" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/modallogin.js')}}"></script>
>>>>>>> feature/headerFooter
</body>

<footer>
    <x-footer/>
</footer>

</html>