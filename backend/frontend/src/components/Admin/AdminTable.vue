<template>

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
      <th>Actions</th>
      <th>Name of Farmer</th>
      <th>Farm Location</th>
      <th>No. of Cans</th>
      <th>Seedling Date</th>
      <th>Expected No. of Area</th>
      <th>Damages by Typhoon</th>
      <th>Damages by Heavy Rains</th>
      <th>Total Damages</th>
      <th>Standing Crops</th>
      <th>Transplant Date</th>
      <th>Expected Date of Harvest</th>
      <th>Expected Area of Harvest</th>
      <th>Expected Volume of Harvest</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="info in info">
      <td>{{ info.id }}</td>
      <td><button class="btn btn-primary mr-2">Update</button> <button class="btn btn-primary mr-2" @click="deleteRecord(info.id)">Delete</button></td>
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
<br>

  
    </div>

  </div>

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
    async deleteRecord(recordId){
      const confirm = window.confirm("Are you sure you want to delete?");
      if(confirm){
        await axios.post("del",{
        id: recordId,
      });
      }
      this.getInfo();
    },
    async getInfo(){
      try {
        const inf = await axios.get('GetData');
        this.info = inf.data;
      } catch (error) {
        console.log(error);
      }
      this.getInfo();
    }
  }
}
</script>