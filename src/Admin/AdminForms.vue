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
    <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="NameofFramer">Name of Framer</label>
                      <input type="text" class="form-control" id="NameofFarmer" placeholder="Name of Farmer">
                    </div>
                    <div class="form-group">
                      <label for="FarmerLocation">Farmer Location</label>
                      <input type="text" class="form-control" id="FarmerLocation" placeholder="Farmer Location">
                    </div>
                    <div class="form-group">
                      <label for="NoofCans">No. of Cans</label>
                      <input type="number" class="form-control" id="NoofCans" placeholder="No. of Cans">
                    </div>
                    <div class="form-group">
                      <label for="SeedlingDate">Seedling Date</label>
                      <input type="Number" class="form-control" id="SeedlingDate"  placeholder="Seedling Date">
                    </div>
                                
                    <div class="form-group">
                      <label for="NoofArea">Expected No. of Area</label>
                      <input type="text" class="form-control" id="NoofArea" placeholder="Expected No of Area">
                    </div>
                    <div class="form-group">
                      <label for="DamegeTyphoon">Damagedd By Typhoon (ha)</label>
                      <input type="text" class="form-control" id="DamagedTyphoon" placeholder=" Damaged By Typhoon">
                    </div>
                    <div class="form-group">
                      <label for="DamegeTyphoon"> Damaged By Typhoon (ha)</label>
                      <input type="text" class="form-control" id="DamagedTyphoon" placeholder=" Damaged By Typhoon">
                    </div>
                    <div class="form-group">
                      <label for="Rain"> Damaged By Heavy Rains(HA)</label>
                      <input type="text" class="form-control" id="Rain" placeholder=" Damaged By Heavy Rains">
                    </div>
        
                      <div class="form-group">
                      <label for="Toatal">Total Damaged(HA)</label>
                      <input type="text" class="form-control" id="TotalDamagedd" placeholder=" TotalDamagedd">
                    </div>
                    <div class="form-group">
                      <label for="NoofCansDamaged">No. of Cans Damaged</label>
                      <input type="number" class="form-control" id="NoofCansDamaged" placeholder="No. of Cans Damaged">
                    </div>
                    <div class="form-group">
                      <label for="StandingCrop">Standing Crop</label>
                      <input type="text" class="form-control" id="StandingCrop" placeholder="StandingbCrop">
                    </div>
                    <div class="form-group">
                      <label for="TransplateDate">Transplante Date</label>
                      <input type="text" class="form-control" id="TransplateDate" placeholder="Transplate Date">
                    </div>
                    <h4 class="card-title">May Date Dapat Dine</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <div class="form-group">
                      <label for="ExpectedDate">Expected Date of Harvest</label>
                      <input type="number" class="form-control" id="ExpectedDate" placeholder="Expected Date of Harvest">
                    </div>
                    <div class="form-group">
                      <label for="ExpectedArea" >Expected Area of Harvest(HA)</label>
                      <input type="text" class="form-control" id="ExpectedArea" placeholder="Expected Area of Harvest">
                    </div>
                    <div class="form-group">
                      <label for="ExpectedVolume">Expected Volume of Harvest (MT)</label>
                      <input type="number" class="form-control" id="ExpectedVolume" placeholder="Expected Volume of Harvest">
                    </div>
                                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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