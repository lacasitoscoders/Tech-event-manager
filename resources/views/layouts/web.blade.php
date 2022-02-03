<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">  
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modallogin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Poppins:wght@400;700&family=Share+Tech&display=swap" rel="stylesheet">
    <title>TECHVENTS</title>
</head>
<body>
    <header>
        <x-header/>
    </header>
    <main>
      <x-slider/>
        <div>
            @yield('content')
        </div>
    </main>

    {{-- <nav aria-label="">
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
      </nav> --}}

      {{-- <livewire:event-list />  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/modallogin.js')}}"></script>
</body>

<footer>
    <x-footer/>
</footer>

</html>