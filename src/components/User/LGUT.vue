<template>
     <div class="container-scroller">
  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Information Table</h4>
                  <p class="card-description">
                 Report
                  </p>
                  <div class="table-responsive pt-3" >
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th> Name of Farmer</th>
                          <th>Farm Location</th>
                          <th>No. of Cans</th>
                          <th> Seedling Date</th>
                          <th> Expected No. of Area</th>
                          <th>Damaged By Typhoon (ha)</th>
                          <th> Damaged By Heavy Rains(HA)</th>
                          <th>Total Damaged(HA)</th>
                          <th>Standing Crop</th>
                          <th>Transplante Date</th>
                          <th>Expected Date of Harvest</th>
                          <th>Expected Area of Harvest(HA)</th>
                          <th>Expected Volume of Harvest (MT)</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr v-for="info in info">
                          <td>{{ info.id }}</td>
                          <td>{{ info.Name }}</td>
                          <td>{{ info.location }}</td>
                          <td>{{ info.nocans }}</td>
                          <td>{{ info.seeddate }}</td>
                          <td>{{ info.area }}</td>
                          <td>{{ info.typhoon }}</td>
                          <td>{{ info.heavyrains }}</td>
                          <td>{{ info.total }}</td>
                          <td>{{ info.standcrop }}</td>
                          <td>{{ info.transdate }}</td>
                          <td>{{ info.expdate }}</td>
                          <td>{{ info.exparea }}</td>
                          <td>{{ info.expvolume }}</td>
                        </tr>
                                        
                      </tbody>
                    </table>
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
      info:[],
    }
  },
  created(){
    this.getInfo();

  },
  methods:{
    async getInfo(){
      try {
        const inf = await axios.get('GetData');
        this.info = inf.data;
      } catch (error) {
        console.log(error);
      }
    }
  }
}
</script>