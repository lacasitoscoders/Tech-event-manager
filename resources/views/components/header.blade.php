<div>
    <nav class="navbar navbar-light bg-white">
        <div class="container-fluid">
          <a class="navbar-brand techvents" href="{{ route('home') }}">
            <img src="{{asset('images/img/logo.png')}}" alt="" width="38" height="38" class="d-inline-block align-text-center">
            TECHVENTS
          </a>
            <div>
            @auth 
           
           hola 
                
            
            @else     
                <a href="{{ url('login') }}" class="text-dark text-decoration-none" >
                Login
                <a href="{{ url('register') }}" class="text-dark m-2 text-decoration-none"> 
                Registro
                </a>  
                @endif 
            </div> 
        </div>
      </nav>    

</div>  