<template>
    <ILI/>
    
    <Footie/>
</template>

<script>

import ILI from '@/views/TRY.vue';

import Footie from '@/Agrisync/Footer.vue';
export default {
name: 'Contact',
  components: {ILI,Footie },
  mounted() {
  const scriptPaths = [
      '/agrisync/js/jquery-3.4.1.min.js',
      '/agrisync/js/popper.min.js',
      '/agrisync/js/bootstrap.js',
      '/agrisync/js/owl-carousel.min.js',
      '/agrisync/js/custom.js',
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
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
@import url('https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap');
</style>