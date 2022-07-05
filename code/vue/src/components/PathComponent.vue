<script setup>

defineProps({
  path: String
})

</script>

<template>

<div class="path">
    <p>Vous êtes ici :&ensp;>&ensp;<a>{{ path }}</a></p>
</div>

</template>

<style scoped>

.path{
    padding-left: 10%;
    color:#9C9C9C;
}
.path a{
    color:#E5004E;
}

</style>