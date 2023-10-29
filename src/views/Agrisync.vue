<template>
        <div>
            
            <Program/>
            <AA/>
            <Pro/>
            <Contact/>
            <Footerr/>      
        </div>
</template>

<script>
import Program from '@/Agrisync/Programs.vue';
import AA from '@/Agrisync/Abouts.vue';
import Pro from '@/Agrisync/Pro.vue';
import Contact from '@/Agrisync/Contactt.vue';
import Footerr from '@/Agrisync/Footer.vue';

export default{

    
    name: 'Agrisync',
    components: {Pro, Program,AA,Contact, Footerr}
}
</script>
