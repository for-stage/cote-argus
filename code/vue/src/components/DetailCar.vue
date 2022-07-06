<script setup>

import NumPorte from './NumPorte.vue'
import DateComponent from './DateComponent.vue'
import YearsPopup from './YearsPopup.vue'
import DateChoice from './DateChoice.vue'
import CarburantChoice from './CarburantChoice.vue'

</script>

<template>
<div class="details">
    <div class="padd-details">
      <NumPorte />
      <DateComponent />
      <div class="back-pop">
      <YearsPopup />   
      </div>
      <DateChoice />
      <CarburantChoice />
    </div>


</div>
</template>

<style  scoped>
.details{
    width:100%;
    display:flex;
    justify-content: center;
}
.padd-details{
    width:80%;
}
.back-pop{
    display:none;
    background: rgb(0 0 0 / 40%);
    width: 100%;
    position: absolute;
    height: 100%;
    top: 0;
    left: 0;
}


</style>