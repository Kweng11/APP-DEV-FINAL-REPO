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

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Password</h5>
                            <form>
                                <div class="form-group">
                                    <label for="inputEmail">Email </label>
                                    <input type="email" class="form-control" id="inputEmail" required>
                             
                                </div>
                                <div class="form-group">
                                    <label for="password">New password</label>
                                    <input type="password" class="form-control" id="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Verify password</label>
                                    <input type="password" class="form-control" id="confirm_password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Apply</button> <span>    </span>
                                <button type="reset" class="btn btn-primary">Cancel</button>
                            </form>
                        </div>
                        </div>
                </div>
             </div>
          <!-- page-body-wrapper ends -->
    </div>
      <!-- container-scroller -->
      
    </template>

