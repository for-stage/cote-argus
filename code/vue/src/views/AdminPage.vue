<template>
<div class="container">
<div class="first-line">
    <StatisPage/>
<InfoLogin/>
</div>

</div>
   

</template>

<script>
import StatisPage from '../components/Admin/StatisPage.vue'
import InfoLogin from '../components/Admin/InfoLogin.vue'





export default {
    name: 'DetailAchat',
    components: {
        StatisPage, 
        InfoLogin, 
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
    padding: 3% 4%;
}
.first-line{
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}
</style>
