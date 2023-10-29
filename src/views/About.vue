<template>
    <div>
      
        <AA/>
        <CC/>
        <Footer/>
    </div>  
</template>
  
  <script>
import AA from '@/Agrisync/abouthis.vue';
import CC from '@/Agrisync/This.vue';
import Footer from '@/Agrisync/Footer.vue';
  
  export default{
  
      
      name: 'About',
      components: { AA,CC,Footer,}
}
</script>