<script setup>
import LittleCard from './LittleCard.vue'

</script>

<template>

<div class="date-choice">
    <div class="header"><h3>Date de mise en circulation*</h3></div>
    <div class="div-choice">
    <div class="choice">
          <LittleCard />
          <LittleCard />
    </div>
    </div>
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

</style>