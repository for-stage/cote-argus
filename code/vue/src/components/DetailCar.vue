<script setup>

import NumPorte from './NumPorte.vue'
import DatePage from './DatePage.vue'

</script>

<template>
<div class="details">
    <div class="padd-details">
      <NumPorte />
      <DatePage />
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


</style>