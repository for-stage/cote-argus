<script setup>

// defineProps({
//   path: String
// })
import LittleCard from './LittleCard.vue'

</script>

<template>
<div class="date-circulation">
    <div class="header"><h3>Mois de mise en circulation*</h3></div>
    <div class="choice">
          <LittleCard />
          <LittleCard />
          <LittleCard />
          <LittleCard />
          <LittleCard />
          <LittleCard />
    </div>
    <div class="info">
        <p>*Pour trouver la date de mise en circulation (mois et année) de votre voiture, référez-vous à votre carte grise. Cette information se trouve dans le champ B</p>
    </div>
</div>
</template>

<style  scoped>
.date-circulation{
    margin-top:3%;
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