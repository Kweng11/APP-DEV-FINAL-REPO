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
          <!-- Farm Information -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Farm Information</h4>
              <p class="card-description">
                Report
              </p>
              <form class="forms-sample" @submit.prevent="save">
                <!-- General Information -->
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
                  <input type="number" class="form-control" v-model="nocans" id="cans" placeholder="No. of Cans">
                </div>
                <div class="form-group">
                  <label for="SeedlingDate">Seedling Date</label>
                  <input type="date" class="form-control" v-model="seeddate" id="date" placeholder="Seedling Date">
                </div>
                <div class="form-group">
                  <label for="NoofArea">Expected No. of Area (sq m)</label>
                  <div class="form-control">{{ calculatedArea }}</div>
                </div>
                <!-- Damages -->
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Damages</h4>
                    <p class="card-description">
                      Report
                    </p>
                    <div class="form-group">
                      <label for="DamegeTyphoon">Damaged By Typhoon(HA)</label>
                      <input type="text" class="form-control" v-model="typhoon" id="typhoon" placeholder=" Damaged By Typhoon">
                    </div>
                    <div class="form-group">
                      <label for="Rain"> Damaged By Heavy Rains(HA)</label>
                      <input type="text" class="form-control" v-model="heavyrains" id="heavyRain" placeholder=" Damaged By Heavy Rains">
                    </div>
                    <div class="form-group">
                      <label for="Toatal">Total Damaged(HA)</label>
                      <div class="form-control">{{ total }}</div>
                    </div>
                  </div>
                </div>
                <!-- Status -->
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Status</h4>
                    <p class="card-description">
                      Report
                    </p>
                    <div class="form-group">
                      <label for="StandingCrop">Standing Crop</label>
                      <input type="text" class="form-control" v-model="standcrop" id="standcrop" placeholder="StandingbCrop">
                    </div>
                    <div class="form-group">
                      <label for="TransplateDate">Transplant Date</label>
                      <input type="date" class="form-control" v-model="transdate" id="transdate" placeholder="Transplate Date">
                    </div>
                  </div>
                </div>
                <!-- Expected Information -->
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Expected Informations</h4>
                    <p class="card-description">
                      Report
                    </p>
                    <div class="form-group">
                      <label for="ExpectedDate">Expected Date of Harvest</label>
                      <input type="date" class="form-control" v-model="expdate" id="expdate" placeholder="Expected Date of Harvest" :readonly="true">
                    </div>
                    <div class="form-group">
                      <label for="ExpectedArea" >Expected Area of Harvest(sq m)</label>
                      <input type="text" class="form-control" v-model="exparea" id="exparea" placeholder="Expected Area of Harvest" :readonly="true">
                    </div>
                    <div class="form-group">
                      <label for="ExpectedVolume">Expected Volume of Harvest (MT)</label>
                      <input type="number" class="form-control" v-model="expvolume" id="expvolume" placeholder="Expected Volume of Harvest" :readonly="true">
                    </div>
                  </div>
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
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      Name: "", 
      location: "", 
      nocans: "", 
      seeddate: "", 
      area: "",
      typhoon: "", 
      heavyrains: "", 
      total: "", 
      standcrop: "", 
      transdate: "", 
      expdate: "", 
      exparea: "", 
      expvolume: "",
    };
  },
  methods: {
    calculateExpectedArea() {
      this.exparea = (parseFloat(this.area || 0) - parseFloat(this.total || 0)).toFixed(2);
    },
    calculateExpectedVolume() {
      this.expvolume = (parseFloat(this.standcrop || 0) - parseFloat(this.total || 0)).toFixed(2);
    },
    calculateExpectedDate() {
      const seedlingDate = new Date(this.seeddate);
      const expectedDate = new Date(seedlingDate.setDate(seedlingDate.getDate() + 90));
      this.expdate = expectedDate.toISOString().split('T')[0];
    },
    async save() {
      try {
        const ins = await axios.post('save', {
          Name: this.Name,
          location: this.location,
          nocans: this.nocans,
          seeddate: this.seeddate,
          area: this.area = this.calculatedArea,
          typhoon: this.typhoon,
          heavyrains: this.heavyrains,
          total: this.total = parseFloat(this.typhoon || 0) + parseFloat(this.heavyrains || 0),
          standcrop: this.standcrop,
          transdate: this.transdate,
          expdate: this.expdate,
          exparea: this.exparea,
          expvolume: this.expvolume,
        });
      } catch (error) {
        console.log(error);
      }
    },
  },
  watch: {
    // Watch for changes in data and recalculate
    typhoon(newValue) {
      this.total = parseFloat(newValue || 0) + parseFloat(this.heavyrains || 0);
      this.calculateExpectedArea();
      this.calculateExpectedVolume();
    },
    heavyrains(newValue) {
      this.total = parseFloat(this.typhoon || 0) + parseFloat(newValue || 0);
      this.calculateExpectedArea();
      this.calculateExpectedVolume();
    },
    standcrop(newValue) {
      this.area = parseFloat(newValue || 0) / 15;
      this.calculateExpectedArea();
      this.calculateExpectedVolume();
    },
    transdate(newValue) {
      this.calculateExpectedDate();
    },
    seeddate(newValue) {
      this.calculateExpectedDate();
    },
    area(newValue) {
      this.calculateExpectedArea();
      this.calculateExpectedVolume();
    },
    total(newValue) {
      this.calculateExpectedArea();
      this.calculateExpectedVolume();
    },
  },
  computed: {
    calculatedArea() {
      return (parseFloat(this.standcrop || 0) / 15).toFixed(2);
    },
  },
};
</script>