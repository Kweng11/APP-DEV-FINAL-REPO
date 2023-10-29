<template>
    <div class="home">
      <img alt="Vue logo" src="../assets/logo.svg">
      <HelloWorld msg="Welcome to Your Vue.js App"/>
      <Login/>
    </div>
  </template>
  
  <script>
  import HelloWorld from '@/components/HomeView/HelloWorld.vue';
  
  export default {
    name: 'HomeView',
    components: {
      HelloWorld
    }
  }
  </script>