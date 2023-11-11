<template>
   
<div class="container-scroller">

<div class="container-fluid page-body-wrapper">

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" href="/Landing">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#dash" aria-expanded="false" aria-controls="dash">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="dash">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/Dashboard">Oriental Mindoro</a></li>
              <li class="nav-item"> <a class="nav-link" href="/Dashboard">Occidental</a></li>
              <li class="nav-item"> <a class="nav-link" href="/Dashboard">Romblon</a></li>
              <li class="nav-item"> <a class="nav-link" href="/Dashboard">Palawan</a></li>
              <li class="nav-item"> <a class="nav-link" href="/Dashboard">Marinduque</a></li>
            </ul>
          </div>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/Report">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Table">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Table</span>
            </a>
          </li>
             <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
             
          <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Bar Chart</a></li>
              </ul>
            </div>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">LineChart</a></li>
              </ul>
            </div>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">PieChart</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=""> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href=""> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=""> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href=""> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
      </div>

    </div>
      <!-- page-body-wrapper ends -->
</div>
  <!-- container-scroller -->
  
</template>