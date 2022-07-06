<script setup>
import LittleCard from './LittleCard.vue'

</script>

<template>

<div class="date-choice">
    <div class="header"><h3>Indiquez le carburant*</h3></div>
    <div class="div-choice">
    <div class="choice">
          <LittleCard />
          <LittleCard />
    </div>
    </div>
    <p>*Pour trouver le carburant de votre voiture, référez-vous à votre carte grise. Cette information se trouve dans le champ P3.</p>
</div>

</template>

<style  scoped>

.date-choice{
    margin-top:5%;
}

.choice{
    display: flex;
    justify-content: space-between;
    width: 60%;
}
.card{
    width:45%;
}
.div-choice{
    display:flex;
    justify-content: center;
}
p{
    font-size: 11px;
    color: #848484;
    margin-top: 3%;
}

</style>