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
    <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome To Agrisync</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (4 Nov 2023)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="@/assets/agrisync/images/614_256.jpg" alt="people" width="100">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Oriental Mindoro</h4>
                        <h6 class="font-weight-normal">Philippines</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
   
              
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Number of Farmers</p>
                      <p class="fs-30 mb-2">{{ farmersCount }}</p>
                      <p>{{ percentage }} (30 days)</p>
                      </div>
                    </div>
                  
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Damage </p>
                      <p class="fs-30 mb-2">{{ totalDamage }}</p>
                      <p>10.00% (30 days)</p>
                    </div>
                  </div>
                </div>
          
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4"> Standing Crop</p>
                      <p class="fs-30 mb-2">{{standingCrop}}</p>
                      <p>22.00% (30 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of Cans</p>
                      <p class="fs-30 mb-2">{{numcans}}</p>
                      <p>0.22% (30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           <div class="row">
            
            <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="card-title">Reports</p>
            </div>
            <p class="font-weight-500">Number of Cans</p>
            <canvas ref="lineChartCanvas"></canvas>
          </div>
        </div>
      </div>
            <div class="col-md-6 mt-3">
              <p style="text-align: center;">Total Damages</p>
              <canvas ref="barChartCanvas"></canvas>
                              </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <a href="/Report" class="text-info">View all</a>
                            <div class="ml-xl-4 mt-3">
                          
                            <p class="card-title">Detailed Reports</p>
                          
                              <h1 class="text-primary">Oriental Mindoro </h1>
                              <h3 class="font-weight-500 mb-xl-4 text-primary"></h3>
                              <p class="mb-2 mb-xl-0">Report</p>
                            </div>  
                            </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-6 border-right">
                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                  <table class="table table-borderless report-table">
                                    <tr>
                                      <td class="text-muted">Number of farmers</td>
                                      <td><h5 class="font-weight-bold mb-0">{{farmersCount}}</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Number of Cans</td>
                                      <td><h5 class="font-weight-bold mb-0">{{numcans}}</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Standing Crops</td>
                                      <td><h5 class="font-weight-bold mb-0">{{standingCrop}}</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Total Damaged of Heavy Rain</td>
                                      <td><h5 class="font-weight-bold mb-0">{{heavyRain}}</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Total Damaged of Typhoon</td>
                                      <td><h5 class="font-weight-bold mb-0">{{Typhoon}}</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">No of Cans Damaged</td>
                                      <td><h5 class="font-weight-bold mb-0">{{totalDamage}}</h5></td>
                                    </tr>
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
import axios from 'axios';
import { Chart } from 'chart.js/auto';

export default {
  data() {
    return {
      farmersCount: 0,
      percentage: '0.00',
      totalDamage: 0,
      standingCrop: 0,
      numcans: 0,
      heavyRain: 0,
      Typhoon: 0,
    };
  },
  async created() {
    try {
      const response = await axios.get('GetData');
      const data = response.data;
      console.log(data);

      this.farmersCount = data.length;

      this.percentage = ((data.length / 34040) * 100).toFixed(2) + '%';

      data.forEach((record) => {
        this.totalDamage += parseInt(record.total, 10) || 0;
        this.standingCrop += parseInt(record.standcrop, 10) || 0;
        this.numcans += parseInt(record.nocans, 10) || 0;
        this.heavyRain += parseInt(record.heavyrains, 10) || 0;
        this.Typhoon += parseInt(record.typhoon, 10) || 0;
      });

      console.log(this.totalDamage);

      // Call the function to create the line chart
      this.createLineChart(data.map(record => record.nocans));

      // Call the function to create the bar chart for Typhoon and Heavy Rain damages
      this.createBarChart(data.map(record => ({
        typhoon: record.typhoon,
        heavyRains: record.heavyrains,
      })));
    } catch (error) {
      console.log(error);
    }
  },
  methods: {
    createLineChart(monthlyData) {
      const lineChartCanvas = this.$refs.lineChartCanvas;

      new Chart(lineChartCanvas, {
        type: 'line',
        data: {
          labels: Array.from({ length: monthlyData.length }, (_, i) => `Month ${i + 1}`),
          datasets: [{
            label: 'Number of Cans',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            data: monthlyData,
            fill: false,
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          scales: {
            xAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'Months',
              },
            }],
            yAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'Number of Cans',
              },
            }],
          },
          plugins: {
            legend: {
              display: false,
            },
          },
          layout: {
            padding: {
              left: 10,
              right: 10,
              top: 10,
              bottom: 10,
            },
          },
          elements: {
            line: {
              borderWidth: 2,
            },
            point: {
              radius: 0,
            },
          },
        },
      });
    },
    createBarChart(damagesData) {
      const barChartCanvas = this.$refs.barChartCanvas;

      new Chart(barChartCanvas, {
        type: 'bar',
        data: {
          labels: Array.from({ length: damagesData.length }, (_, i) => `Month ${i + 1}`),
          datasets: [
            {
              label: 'Typhoon Damages',
              backgroundColor: 'rgba(255, 99, 132, 0.5)',
              borderColor: 'rgba(255, 99, 132, 1)',
              borderWidth: 1,
              data: damagesData.map(record => record.typhoon),
            },
            {
              label: 'Heavy Rain Damages',
              backgroundColor: 'rgba(54, 162, 235, 0.5)',
              borderColor: 'rgba(54, 162, 235, 1)',
              borderWidth: 1,
              data: damagesData.map(record => record.heavyRains),
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          scales: {
            xAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'Records',
              },
            }],
            yAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'Damages',
              },
              ticks: {
                beginAtZero: true,
              },
            }],
          },
        },
      });
    },
  },
};
</script>