<template>
<div class="container">
<div class="parent">
    <div class="div1"><StatisPage/></div>
    <div class="div2"><InfoLogin/></div>
    <div class="div3"><TableUsers /></div>
    <div class="div4"><TotalCalc/></div>
</div>



</div>
   

</template>

<script>
import StatisPage from '../components/Admin/StatisPage.vue'
import InfoLogin from '../components/Admin/InfoLogin.vue'
import TotalCalc from '../components/Admin/TotalCalc.vue'
import TableUsers from '../components/Admin/TableUsers.vue'





export default {
    name: 'DetailAchat',
    components: {
        StatisPage, 
        InfoLogin, 
        TotalCalc,
        TableUsers
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
/* .first-line{
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
} */
.parent {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-template-rows: 0.70fr 0.4fr 2.5fr;
    grid-column-gap: 15px;
    grid-row-gap: 10px;
}

.div1 { grid-area: 1 / 1 / 2 / 2; }
.div2 { grid-area: 1 / 2 / 3 / 3; }
.div3 { grid-area: 3 / 1 / 5 / 2; }
.div4 { grid-area: 3 / 2 / 5 / 3; }

</style>
