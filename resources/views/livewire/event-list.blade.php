<div class="mx-3" >
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h1>Probando livewere</h1>


    <div class="events_list_header">

        {{-- titulo sección de enventos --}}
    <div>
        <h2 class="section_name">Próximos eventos</h2>
    </div>

        {{-- botónn filtrar --}}
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn_filter" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          Filtrar
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Actuales</a></li>
            <li><a class="dropdown-item" href="#">Pasados</a></li>
        </ul>
    </div>
  </div>

        {{-- contenedor de cards --}}
    <div class="card-group">
      <div class="card rounded-2">
        <img src="{{asset('assets/img/logo.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>

          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            About 
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>      
      
      <div class="card rounded">
        <img src="{{asset('assets/img/logo.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>

          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            About 
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <div class="card rounded">
        <img src="{{asset('assets/img/logo.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>

          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            About 
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

        {{-- paginador --}}
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center mt-3">
        <li class="page-item disabled">
          <a class="page-link">Anterior</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Siguiente</a>
        </li>
      </ul>
    </nav>


</div>
