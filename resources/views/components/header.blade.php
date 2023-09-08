
<nav class="navbar navbar-expand-md navbar-light shadow-sm foodie-header-container">
   <div class="container">
     <a class="navbar-brand" href="{{ url('/') }}">

     <!--Logo and size--------------------------------------------------------------------->
     <img src="{{asset('img/logo.png')}}" alt="Foodie" style="width: 100px; height: auto;">  

     </a>
     <form class="row g-1">
       <div class="col-auto">
       <h2 class="mt-2">おいしいお店を探す</h2>
         <input class="form-control foodie-header-search-input" placeholder="店名" >
       </div>
       <div class="col-auto">
         <button type="submit" class="btn foodie-header-search-button"><i class="fas fa-search foodie-header-search-icon"></i></button>
       </div>
       
       <select> 
       <option>カテゴリ</option> 
       <option>居酒屋</option> 
       <option>焼肉</option> 
       <option>🍣</option> 
     </select>
     <br> 
     </form>

     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
       <span class="navbar-toggler-icon"></span>
     </button>
 
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <!-- Right Side Of Navbar -->
       <ul class="navbar-nav ms-auto mr-5 mt-2">
         <!-- Authentication Links -->
         @guest
        <!-- <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
         </li> -->

         <hr>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}"><i class="far fa-heart"></i></a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-shopping-cart"></i></a>
         </li>
         @else
         <li class="nav-item mr-5">
           <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             ログアウト
           </a>
 
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
           </form>
         </li>
         @endguest
       </ul>
     </div>
   </div>
 </nav>