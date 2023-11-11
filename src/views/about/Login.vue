<template>
        <ILI/>
        <L/>
        <Footie/>
</template>

<script>

import ILI from '@/Login/Header.vue';

import L from '@/Login/Log.vue';
import Footie from '@/Agrisync/Footer.vue';
export default {
    name: 'Contact',
      components: {ILI,L,Footie },
      mounted() {
      const scriptPaths = [
               '/agrisync/js/jquery-3.4.1.min.js',
          '/agrisync/js/bootstrap.js',
          'agrisync/js/bootstrap.min.js',
          '/agrisync/js/owl-carousel.min.js',
          '/agrisync/js/custom.js',
          '/agrisync/js/dropdown.js',
          '/agrisync/js/util.js',
          '/adminuser/vendors/js/vendor.bundle.base.js',
      '/adminuser/vendors/chart.js/Chart.min.js',
      '/adminuser/vendors/datatables.net/jquery.dataTables.js',
      '/adminuser/vendors/datatables.net-bs4/dataTables.bootstrap4.js',
      '/adminuser/js/dataTables.select.min.js',
      '/adminuser/js/off-canvas.js',
      '/adminuser/js/hoverable-collapse.js',
      '/adminuser/js/template.js',
      '/adminuser/js/settings.js',
      '/adminuser/js/todolist.js',
      '/adminuser/js/dashboard.js',
      '/adminyser/js/Chart.roundedBarCharts.js',
      '/adminuser/js/chart.js',
      ];
          // di ko alam bat di matawag lahat ng script at 2 lang ang nagagamit
      const loadScript = (path) => {
      return new Promise((resolve, reject) => {
          const script = document.createElement('script');
          script.src = path;
          script.onload = resolve;
          script.onerror = reject;
          document.body.appendChild(script);
      });
      };

      const loadScripts = async () => {
      try {
          await loadScript(scriptPaths[0]); // Load jQuery first
          for (let i = 1; i < scriptPaths.length; i++) {
          await loadScript(scriptPaths[i]);
          }
      } catch (error) {
          console.error('Failed to load scripts:', error);
      }
      };
      loadScripts();
  }
}
</script>

<style scoped>
@import '@/assets/agrisync/css/bootstrap.css';
@import '@/assets/agrisync/css/style.css';
@import '@/assets/agrisync/css/responsive.css';
@import '@/assets/agrisync/css/bootstrap.min.css';
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');

@import '@/assets/adminuser/vendors/feather/feather.css';
@import '@/assets/adminuser/vendors/ti-icons/css/themify-icons.css';
@import '@/assets/adminuser/vendors/css/vendor.bundle.base.css';
@import '@/assets/adminuser/vendors/datatables.net-bs4/dataTables.bootstrap4.css';
@import'@/assets/adminuser/vendors/ti-icons/css/themify-icons.css';
@import'@/assets/adminuser/js/select.dataTables.min.css';
@import'@/assets/adminuser/css/vertical-layout-light/style.css';
</style>