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
grid-template-columns: repeat(6, 1fr) 1.5fr 1fr;
grid-template-rows: repeat(2, 1fr) 0.5fr repeat(6, 1fr);
grid-column-gap: 10px;
grid-row-gap: 10px;
}

.div1 { grid-area: 1 / 1 / 3 / 7; }
.div2 { grid-area: 1 / 7 / 4 / 9; }
.div3 { grid-area: 4 / 1 / 10 / 7; }
.div4 { grid-area: 4 / 7 / 7 / 9; }

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
