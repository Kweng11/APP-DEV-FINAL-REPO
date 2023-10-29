<template>
    <div>
        <tact/>
        <Footie/>
    </div>
</template>
  
  <script>
import tact from '@/Agrisync/Info.vue';
import Footie from '@/Agrisync/Footer.vue';
  
  export default{
      name: 'Contact',
      components: { tact,Footie }
}
</script>