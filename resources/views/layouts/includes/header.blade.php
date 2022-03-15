
<header class="container-fluid m-0 p-0">
   <div class="header-info d-flex align-items-center justify-content-around">
       <div></div>
        <div class="d-flex">
           <div class="mx-3">DC POWER&#8480; VISA&reg;</div>
           <div class="mx-3">ADDITIONAL DC SITES &nabla;</div>
        </div>
   </div>
   <div class="menu">
      <div class="logo">
         <img src="{{asset('images/dc-logo.png')}}" alt="Logo DC">
     </div>
      <nav>
        
         <ul>
            @foreach (config('menu') as $link)
               <li><a href="{{route('comics')}}" class="{{request()->routeIs($link['route']) ? 'active' : ''}}">{{$link['name']}}</a></li>        
            @endforeach
         </ul>
      </nav>
   </div>

</header>