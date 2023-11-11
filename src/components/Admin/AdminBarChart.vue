<template>
  <div class="container-scroller">
<div class="container-fluid page-body-wrapper">
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  
        <ul class="nav">
          <li class="nav-item">
          <a class="nav-link" href="/AdminHome">
            <i class="icon-contract menu-icon"></i>
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
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Table">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Table</span>
            </a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Log Out</span>
            </a>
          </li>
  
  
        </ul>
      </nav>


    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Line chart</h4>
                <canvas id="lineChart"></canvas>
              </div>
            </div>
          </div>

       
          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Bar chart</h4>
                <canvas id="barChart"></canvas>
              </div>
            </div>
       </div>

       <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Pie chart</h4>
                <canvas id="pieChart"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Pie chart</h4>
                <canvas id="pieChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
       
   
     
        <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
</template>
