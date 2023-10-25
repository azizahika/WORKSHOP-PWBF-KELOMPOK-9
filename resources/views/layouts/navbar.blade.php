
@section('navbar')
<div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                     <a class="nav-link" href="{{ route('home') }}">Home</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="{{ route('about') }}">About</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="{{ route('services') }}">services</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="{{ route('gallery') }}">vehicles</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="{{ route('client') }}">client</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="{{ route('contact') }}">contact</a>
                     </li>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">login</a>
                     </li>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">register</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
         </div>
      </div>
@endsection
