<script setup>

import NumPorte from './NumPorte.vue'
import DatePage from './DatePage.vue'
import YearsPopup from './YearsPopup.vue'

</script>

<template>
<div class="details">
    <div class="padd-details">
      <NumPorte />
      <DatePage />
      <div class="back-pop">
      <YearsPopup />
      </div>
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