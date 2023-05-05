<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">
          <a href="/"><img class="logo" src="{{ asset('/storage/logo head.png')}}" alt="iniGambar"></a>
        </div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li class="store-list">
        <a href="/dashboard">
        <img class="img img-profile" src="https://i.etsystatic.com/39180577/r/il/943566/4432680343/il_fullxfull.4432680343_9tjj.jpg" alt="ini-gambar">
          <span class="links_name store">Store Name</span>
         <span class="tooltip">Store Name</span>
        </a>
      </li>
      <li class="list-side">
        <a href="/dashboard">
          <span class="links_name">Dashboard</span>
          <i class='bx bx-home'></i>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li class="list-side">
       <a href="/myStore">
         <span class="links_name">My Store</span>
         <i class='bx bx-user' ></i>
       </a>
       <span class="tooltip">My Store</span>
     </li>
     <li class="list-side">
       <a href="/product">
         <span class="links_name">Product</span>
         <i class='bx bx-cart' ></i>
       </a>
       <span class="tooltip">Product</span>
     </li>
     <li class="list-side">
       <a href="/blogUMKM">
         <span class="links_name">Blog</span>
         <i class='bx bx-edit' ></i>
       </a>
       <span class="tooltip">Blog</span>
     </li>
     <li class="button-side">
     <a class="btn btn-logout" href="{{ url('/logout') }}"><button class="btn btn-logout">LOGOUT</button></a>
     </li>
    </ul>
</div>