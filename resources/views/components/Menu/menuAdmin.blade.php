<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
       <div class="sidebar-brand">
           <a href="">BarterBox</a>
       </div>
       <div class="sidebar-brand sidebar-brand-sm">
           <a href="">Bx</a>
       </div>
       <hr>
       <ul class="sidebar-menu">
           <li class="menu-header">Dashboard</li>
           <li class="nav-item dropdown">
               <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i><span>Data</span></a>
               <ul class="dropdown-menu">
                   <li class="list-unstyled">
                       <a class="nav-link" href="{{ route('index.dataUser') }}">Data User</a>
                   </li>
               </ul>
               <ul class="dropdown-menu">
                   <li class="list-unstyled">
                       <a class="nav-link" href="{{ route('index.dataItem') }}">Data Item</a>
                   </li>
               </ul>
           </li>
       </ul>
   </aside>
 </div>