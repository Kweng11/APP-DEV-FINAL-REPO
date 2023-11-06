<template>
    <div class="container-scroller">
  <div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/Dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
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
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">Bar Chart</a></li>
              </ul>
            </div>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">LineChart</a></li>
              </ul>
            </div>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">PieChart</a></li>
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
               <li class="nav-item"> <a class="nav-link" href="/LGU" >LGU</a></li>
              </ul>
            </div>
          </li>
  
        </ul>
      </nav>

    <div class="main-panel">
    <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bar chart</h4>
                  <canvas id="barChart"></canvas>
                  <div class="row">
                              <div class="col-md-6 border-right">
                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                  <table class="table table-borderless report-table">
                                    <tr>
                                      <td class="text-muted">Illinois</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">713</h5></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Line chart</h4>
                  <canvas id="lineChart"></canvas>
                  <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-6 border-right">
                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                  <table class="table table-borderless report-table">
                                    <tr>
                                      <td class="text-muted">Illinois</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">713</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Washington</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">583</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Mississippi</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">924</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">California</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">664</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Maryland</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">560</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Example lang yan </td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">793</h5></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="south-america-chart"></canvas>
                                <div id="south-america-legend"></div>
                              </div>
                            </div>
                          </div>
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
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
</template>