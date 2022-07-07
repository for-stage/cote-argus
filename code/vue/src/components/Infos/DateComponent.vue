

<template>
<div class="date-circulation">
    <div class="header"><h3>Mois de mise en circulation*</h3></div>
    <div class="choice">
          <LittleCard  v-for="(Month,index) in Months" :key="index"  :month="Month"/>
         
    </div>
    <div class="info">
        <p>*Pour trouver la date de mise en circulation (mois et année) de votre voiture, référez-vous à votre carte grise. Cette information se trouve dans le champ B</p>
    </div>
</div>
</template>

<script >

import LittleCard from './LittleCard.vue'

export default {
    name: 'YearsPopup',
    components: {
              LittleCard    
    },
    props: {
        msg: String
    },
     data() {
        return {
           Months : ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
        }
    },
}
</script>
<style  scoped>
.date-circulation{
    margin-top:5%;
}
.choice{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: -2%;
}
.info p{
    font-size: 11px;
    color: #848484;
    margin-top: 3%;
}

</style>