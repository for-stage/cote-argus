<script setup>


defineProps({
  title: String
})


</script>

<template> 
<!-- <p>Hello This is MarquePage</p> -->

    <div class="header">
        <div class="title">
            <h2>{{ title }}</h2>
        </div> 
    </div>

</template>

<style  scoped>
.header{
    display: flex;
    background: #E5004E;
    color: white;
    justify-content: center;
}
h2{
    font-weight: 600;
}
</style>
