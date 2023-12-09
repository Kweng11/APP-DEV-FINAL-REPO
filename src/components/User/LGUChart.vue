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
            
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total Number of Cans</h4>
                  <canvas ref="lineChartCanvas"></canvas>
                </div>
              </div>
            </div>

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Typhoon Damages - Heavy Rain Damages</h4>
                  <canvas ref="barChartCanvas"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total Typhoon and Heavy Rain Damages</h4>
                  <canvas id="areaChartCanvas"></canvas>
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

      this.farmersCount = data.length;

      this.percentage = ((data.length / 34040) * 100).toFixed(2) + '%';

      data.forEach((record) => {
        this.totalDamage += parseInt(record.total, 10) || 0;
        this.standingCrop += parseInt(record.standcrop, 10) || 0;
        this.numcans += parseInt(record.nocans, 10) || 0;
        this.heavyRain += parseInt(record.heavyrains, 10) || 0;
        this.Typhoon += parseInt(record.typhoon, 10) || 0;
      });

      // Call the function to create the line chart
      this.createLineChart(data.map(record => record.nocans));

      // Call the function to create the bar chart for Typhoon and Heavy Rain damages
      this.createBarChart(data.map(record => ({
        typhoon: record.typhoon,
        heavyRains: record.heavyrains,
      })));

      // Call the function to create the area chart for total damages
      this.createAreaChart(data.map(record => record.typhoon + record.heavyrains));
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
          labels: Array.from({ length: damagesData.length }, (_, i) => `Record ${i + 1}`),
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
    createAreaChart(totalDamagesData) {
      const areaChartCanvas = document.getElementById('areaChartCanvas');

      new Chart(areaChartCanvas, {
        type: 'line',
        data: {
          labels: Array.from({ length: totalDamagesData.length }, (_, i) => `Record ${i + 1}`),
          datasets: [
            {
              label: 'Total Typhoon and Heavy Rain Damages',
              backgroundColor: 'rgba(75, 192, 192, 0.2)',
              borderColor: 'rgba(75, 192, 192, 1)',
              borderWidth: 2,
              data: totalDamagesData,
              fill: true,
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
                labelString: 'Total Damages',
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