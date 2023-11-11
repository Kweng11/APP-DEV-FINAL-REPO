<template>

    <AdminNavbar/>
    <AdminForms/>
    <AdminTable/>
    <AdminSettings/>
    <AdminFooter/>
</template>

<script>
import AdminNavbar from '@/components/Admin/AdminNavbar.vue';
import AdminForms from '@/components/Admin/AdminForms.vue';
import AdminTable from '@/components/Admin/AdminTable.vue'
import AdminSettings from '@/components/Admin/AdminSettings.vue';
import AdminFooter from '@/components/Admin/AdminFooter.vue';


export default {
name: 'Table',
  components: {AdminNavbar,AdminForms,AdminTable,AdminSettings,AdminFooter },
  mounted() {
  const scriptPaths = [
'./adminuser/vendors/js/vendor.bundle.base.js',
'./adminuser/vendors/chart.js/Chart.min.js',
'./adminuser/vendors/datatables.net/jquery.dataTables.js',
'./adminuser/vendors/datatables.net-bs4/dataTables.bootstrap4.js',
'./adminuser/js/dataTables.select.min.js',
'./adminuser/js/off-canvas.js',
'./adminuser/js/hoverable-collapse.js',
'./adminuser/js/template.js',
'./adminuser/js/settings.js',
'./adminuser/js/todolist.js',
'./adminuser/js/dashboard.js',
'./adminyser/js/Chart.roundedBarCharts.js',
    
  ];
      
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
@import '@/assets/adminuser/vendors/feather/feather.css';
@import '@/assets/adminuser/vendors/ti-icons/css/themify-icons.css';
@import '@/assets/adminuser/vendors/css/vendor.bundle.base.css';
@import '@/assets/adminuser/vendors/datatables.net-bs4/dataTables.bootstrap4.css';
@import'@/assets/adminuser/vendors/ti-icons/css/themify-icons.css';
@import'@/assets/adminuser/js/select.dataTables.min.css';
@import'@/assets/adminuser/css/vertical-layout-light/style.css';
</style>