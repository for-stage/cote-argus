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
    margin-top: 0;
    padding: 3% 4% 0;
}
/* .first-line{
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
} */
.parent {
display: grid;
grid-template-columns: repeat(10, 1fr);
grid-template-rows: 1fr repeat(2, 0.5fr) repeat(7, 1fr);
grid-column-gap: 10px;
grid-row-gap: 10px;
}

.div1 { grid-area: 1 / 1 / 3 / 8; }
.div2 { grid-area: 1 / 8 / 4 / 11; }
.div3 { grid-area: 3 / 1 / 11 / 8; }
.div4 { grid-area: 4 / 8 / 8 / 11; }

/* .div5 { grid-area: 7 / 7 / 10 / 9; } */



@media (max-width: 480px) {

    .parent[data-v-316cf2b4] {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: space-between;
}
.div1[data-v-316cf2b4] {
    grid-area: 1 / 1 / 3 / 7;
    width: 93%;
}

.div3[data-v-316cf2b4] {
    /* grid-area: 4 / 1 / 10 / 7; */
    width: 97%;
}

.div4[data-v-316cf2b4] {
    grid-area: 4 / 7 / 7 / 9;
    width: 93%;
}

.div2{
    display:none;
}
}

</style>
