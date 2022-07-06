<script setup>

</script>

<template>

<div class="search-bar">
    <div class="search">
    <input type="text" name="search" placeholder="Chercher ...">
    <a><img src="../assets/search-icon.png"></a>
    </div>
</div>

</template>

<style  scoped>

.search a {
background: #E5004E;
    position: absolute;
    padding: 1% 3%;
    width: 3%;
    height: 78%;
    right: -1%;
    top: 2%;
    border-radius: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor:pointer;
}
.search input {
border: solid 2px #E5004E;
    width: 100%;
    height: 100%;
    border-radius: 5px;
    color: #393939;
    font-size: 18px;
}
.search input:focus{
    outline:none;
    background: #e5004e14;
}
.search {
    width: 50%;
    position: relative;
    height: 40px;
}
.search img{
    width:100%;
    }
.search-bar{
display: flex;
    justify-content: center;
}

</style>