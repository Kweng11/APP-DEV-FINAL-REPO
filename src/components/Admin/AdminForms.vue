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
         <a class="nav-link" href="/Dash">
           <i class="icon-bar-graph menu-icon"></i>
           <span class="menu-title">Dashboard</span>
         </a>
       </li>

     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="#auth">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">OrientalMindoro</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="auth">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/Mindoro">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/OrminT">Table</a></li>
             </ul>
       </div>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Occidental Mindoro</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="ui-basic">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/Occi">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/OcciT">Table</a></li>
             </ul>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Palawan</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="form-elements">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/Pal">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/PalT">Table</a></li>
             </ul>
       </div>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Romblon</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="charts">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/Rom">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/RomT">Table</a></li>
             </ul>
       </div>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Marinduque</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="icons">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/Mar">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/MarT">Table</a></li>
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
         <a class="nav-link" href="/Set">
           <i class="icon-columns menu-icon"></i>
           <span class="menu-title">Change Password</span>
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
            <div class="col-12 grid-margin stretch-card">
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
                  
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">   Information Table</h4>
                  <p class="card-description">
                   Report
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th> Name of Framer</th>
                          <th>Farm Location</th>
                          <th>No. of Cans</th>
                          <th> Seedling Date</th>
                          <th> Expected No. of Area</th>                        
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        
                      
          
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $245.30
                          </td>
                          <td>
                            July 1, 2015
                          </td>
                          <td>
                            July 1, 2015
                          </td>
                        </tr>
                       
                                        
                      </tbody>
                             
                    </table>
                    <br>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Damagedd By Typhoon (ha)</th>
                          <th> Damaged By Heavy Rains(HA)</th>
                          <th>Total Damaged(HA)</th>                        
                          <th>No. of Cans Damaged</th>
                                                  </tr>
                        
                      </thead>
                      
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $245.30
                          </td>
                          <td>
                            July 1, 2015
                          </td>
                        </tr>
                       
                                        
                      </tbody>
                             
                    </table>   
                    <br>
            </div>
               
              <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                         
                          <th>Standing Crop</th>
                          <th>Transplante Date</th>
                          <th>Expected Date of Harvest</th>
                          <th>Expected Area of Harvest(HA)</th>
                          <th>Expected Volume of Harvest (MT)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                          <td>
                            $245.30
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $245.30
                          </td>
                          <td>
                            July 1, 2015
                          </td>
                          <td>
                            $245.30
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $245.30
                          </td>
                          <td>
                            $245.30
                          </td>
                          <td>
                            July 1, 2015
                          </td>
                        </tr>
                       
                       
                                        
                      </tbody>
                    </table>
</div>
                </div>
            

                </div>
              </div>





              
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
  