<template>
  <div class="container-scroller">
<div class="container-fluid page-body-wrapper">
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
          <a class="nav-link" href="/StaffHome">
            <i class="icon-contract menu-icon"></i>
            <span class="menu-title">Home</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/LGUDashboard">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/LGUReport">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/LGUTable">
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
  <div class="card">







    <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Information</h4>
                  <p class="card-description">
                    Report
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
                      <input type="date" class="form-control" id="SeedlingDate"  placeholder="Seedling Date">
                    </div>
                                
                    <div class="form-group">
                      <label for="NoofArea">Expected No. of Area</label>
                      <input type="text" class="form-control" id="NoofArea" placeholder="Expected No of Area">
                    </div>
                  
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Information</h4>
                  <p class="card-description">
                    Report
                  </p>
                  <form class="forms-sample">
                                 
                    <div class="form-group">
                      <label for="DamegeTyphoon">Damagedd By Typhoon (ha)</label>
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
                                                      
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
      
         
            

          
         
          <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Information</h4>
                  <p class="card-description">
                    Report
                  </p>
                  <form class="forms-sample">
                  <div class="form-group">
                      <label for="StandingCrop">Standing Crop</label>
                      <input type="text" class="form-control" id="StandingCrop" placeholder="StandingbCrop">
                    </div>
                    <div class="form-group">
                      <label for="TransplateDate">Transplante Date</label>
                      <input type="date" class="form-control" id="TransplateDate" placeholder="Transplate Date">
                    </div>
                  
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
               
                  </form>
                      
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Information</h4>
                  <p class="card-description">
                    Report
                  </p>
                  <form class="forms-sample">
              <div class="form-group">
                      <label for="ExpectedDate">Expected Date of Harvest</label>
                      <input type="date" class="form-control" id="ExpectedDate" placeholder="Expected Date of Harvest">
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

