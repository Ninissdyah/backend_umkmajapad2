<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name"><img class="logo" src="{{ asset('/storage/logo head.png')}}" alt="iniGambar"></div>
        <img class="logo-head logo" src="{{ asset('/storage/logo head.png')}}" alt="iniGambar">
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li class="store-list">
        <a href="/dashboardAdmin">
        <img class="img img-profile" src="https://i.etsystatic.com/39180577/r/il/943566/4432680343/il_fullxfull.4432680343_9tjj.jpg" alt="ini-gambar">
          <span class="links_name store">Store Name</span>
         <span class="tooltip">Store Name</span>
        </a>
      </li>
      <li class="list-side">
        <a href="/dashboardAdmin">
          <span class="links_name">Dashboard</span>
          <i class='bx bx-home'></i>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
     <li class="list-side">
       <a href="/storeAdmin">
         <span class="links_name">Store</span>
         <i class='bx bx-store' ></i>
       </a>
       <span class="tooltip">Store</span>
     </li>
     <li class="list-side">
       <a href="/blogAdmin">
         <span class="links_name">Blog</span>
         <i class='bx bx-edit' ></i>
       </a>
       <span class="tooltip">Blog</span>
     </li>
     <a href="{{ url('/logout') }}">
     <li class="button-side">
        <button class="btn btn-logout">LOGOUT</button>
     </li>
     </a>
    </ul>
</div>