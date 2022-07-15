<template>
<div class="container">
<StatisPage/>
</div>
   

</template>

<script>
import StatisPage from '../components/Admin/StatisPage.vue'





export default {
    name: 'DetailAchat',
    components: {
        StatisPage, 
    },

    props: {
        msg: String
    },
    methods: {
     
    }
}
</script>
<style scoped >
.container{
    background: #E8E8E8;
    margin-top: 0;
    padding: 3% 2%;
}
</style>
