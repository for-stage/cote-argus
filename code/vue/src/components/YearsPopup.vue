<script setup>

import YearCard from './YearCard.vue'

</script>

<template>


<div class="popup-years">
    <div class="header">
        <div class="title">
        <h3>Année de mise en circulation*</h3>
        </div>
        <div class="out">
            <a><img src="../assets/out.png"></a>
        </div>
    </div>
    <div class="years">
        <YearCard />
        <YearCard />
        <YearCard />
        <YearCard />
        <YearCard />
        <YearCard />
        <YearCard />
        <YearCard />
        <YearCard />
        <YearCard />
        <YearCard />
        <YearCard />
    </div>
</div>

</template>

<style  scoped>
.header{
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    width: 80%;
    padding-left: 22%;
    color:#717171;
}
.popup-years{
    border: solid 2px #6C6C6C;
    position: fixed;
    background: white;
    border-radius: 8px;
    padding: 0% 2% 2%;
    top: 40%;
    left: 30%;
    width: 35%;
}
.years{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top:2%;
}
.out{
    width:7%;
    cursor: pointer;
}
.out img{
    width:100%;
}
.title{
    height: 50px;
    border-bottom: solid 1px #bfbfbf;
}

</style>