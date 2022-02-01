<section>
        {{-- titulo sección de enventos --}}
    <div>
        <h2>Próximos eventos</h2>
    </div>

    <div class="alert alert-success" role="alert">
        POR DIOS ALGO QUE FUNCIONA!!
    </div>

        {{-- botónn filtrar --}}
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-info" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          Filtrar
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Actuales</a></li>
            <li><a class="dropdown-item" href="#">Pasados</a></li>
        </ul>
    </div>


        {{-- contenedor de cards --}}
    <div class="card-group">
      <div class="card">
        <img src="{{asset('assets/img/logo.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="{{asset('assets/img/logo.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
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
</section>