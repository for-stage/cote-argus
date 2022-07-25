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
grid-template-columns: repeat(4, 1fr) 0.75fr 1fr;
grid-template-rows: repeat(2, 1fr) 0.5fr repeat(3, 1fr);
grid-column-gap: 10px;
grid-row-gap: 10px;
}

.div1 { grid-area: 1 / 1 / 3 / 5; }
.div2 { grid-area: 1 / 5 / 4 / 7; }
.div3 { grid-area: 4 / 1 / 7 / 5; }
.div4 { grid-area: 4 / 5 / 7 / 7; }

</style>
