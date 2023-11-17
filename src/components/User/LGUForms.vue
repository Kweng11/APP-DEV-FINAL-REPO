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
                  <h4 class="card-title">Farm Information</h4>
                  <p class="card-description">
                    Report
                  </p>
                  <form class="forms-sample" @submit.prevent="save">
                    <div class="form-group">
                      <label for="NameofFramer">Name of Farmer</label>
                      <input type="text" class="form-control" v-model="Name" id="Name" placeholder="Name of Farmer">
                    </div>
                    <div class="form-group">
                      <label for="FarmerLocation">Farmer Location</label>
                      <input type="text" class="form-control" v-model="location" id="location" placeholder="Farmer Location">
                    </div>
                    <div class="form-group">
                      <label for="NoofCans">No. of Cans</label>
                      <input type="number" class="form-control" v-model="cans" id="cans" placeholder="No. of Cans">
                    </div>
                    <div class="form-group">
                      <label for="SeedlingDate">Seedling Date</label>
                      <input type="date" class="form-control" v-model="date" id="date"  placeholder="Seedling Date">
                    </div>
                                
                    <div class="form-group">
                      <label for="NoofArea">Expected No. of Area</label>
                      <input type="text" class="form-control" v-model="area" id="area" placeholder="Expected No of Area">
                    </div>
                  
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Damages</h4>
                  <p class="card-description">
                    Report
                  </p>
                  <form class="forms-sample" @submit.prevent = "save2">
                                 
                    <div class="form-group">
                      <label for="DamegeTyphoon">Damaged By Typhoon (ha)</label>
                      <input type="text" class="form-control" v-model="typhoon" id="typhoon" placeholder=" Damaged By Typhoon">
                    </div>
                                     <div class="form-group">
                      <label for="Rain"> Damaged By Heavy Rains(HA)</label>
                      <input type="text" class="form-control" v-model="heavyRain" id="heavyRain" placeholder=" Damaged By Heavy Rains">
                    </div>
        
                      <div class="form-group">
                      <label for="Toatal">Total Damaged(HA)</label>
                      <input type="text" class="form-control" v-model="total" id="total" placeholder=" TotalDamagedd">
                    </div>
                                                      
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
      
         
            

          
         
          <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Status</h4>
                  <p class="card-description">
                    Report
                  </p>
                  <form class="forms-sample" @submit.prevent="save3">
                  <div class="form-group">
                      <label for="StandingCrop">Standing Crop</label>
                      <input type="text" class="form-control" v-model="standcrop" id="standcrop" placeholder="StandingbCrop">
                    </div>
                    <div class="form-group">
                      <label for="TransplateDate">Transplant Date</label>
                      <input type="date" class="form-control" v-model="transdate" id="transdate" placeholder="Transplate Date">
                    </div>
                  
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
               
                  </form>
                      
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Expected Informations</h4>
                  <p class="card-description">
                    Report
                  </p>
                  <form class="forms-sample" @submit.prevent="save4">
              <div class="form-group">
                      <label for="ExpectedDate">Expected Date of Harvest</label>
                      <input type="date" class="form-control" v-model="expdate" id="expdate" placeholder="Expected Date of Harvest">
                    </div>
                    <div class="form-group">
                      <label for="ExpectedArea" >Expected Area of Harvest(HA)</label>
                      <input type="text" class="form-control" v-model="exparea" id="exparea" placeholder="Expected Area of Harvest">
                    </div>
                    <div class="form-group">
                      <label for="ExpectedVolume">Expected Volume of Harvest (MT)</label>
                      <input type="number" class="form-control" v-model="expvolume" id="expvolume" placeholder="Expected Volume of Harvest">
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
<script>
import axios from 'axios'
export default{
data(){
  return{
Name: "", 
location: "", 
cans: "", 
date: "", 
area: "", 
typhoon: "", 
heavyRain: "", 
total: "", 
standcrop: "", 
transdate: "", 
expdate: "", 
exparea: "", 
expvolume: "", 
  }
},
methods:{
  async save()
  {
    try {
      const ins = await axios.post('save',{
        Name: this.Name,
        location: this.location,
        cans: this.cans,
        date: this.date,
        area: this.area,
      })
    } catch (error) {
      console.log(error);
    }
  },
  async save2()
  {
    try {
      const ins = await axios.post('save2',{
        typhoon: this.typhoon,
        heavyRain: this.heavyRain,
        total: this.total,
      })
    } catch (error) {
      console.log(error);
    }
  },
  async save3()
  {
    try {
      const ins = await axios.post('save3',{
        standcrop: this.standcrop,
        transdate: this.transdate,
      })
    } catch (error) {
      console.log(error);
    }
  },
  async save4()
  {
    try {
      const ins = await axios.post('save4',{
        expdate: this.expdate,
        exparea: this.exparea,
        expvolume: this.expvolume,
      })
    } catch (error) {
      console.log(error);
    }
  }
  
}
}
</script>

