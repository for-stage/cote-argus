<script setup>


</script>

<template>

<div class="year">
    <p>2022</p>
</div>

</template>

<style  scoped>

.year{
background: #e8e8e8;
    width: 24%;
    text-align: center;
    border-radius: 10px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #737373;
    margin-top: 2%;
    cursor: pointer;
    font-weight: bold;
}
.year:hover{
    background:#e5004e;
    color:white;
}

@media( max-width: 480px){

p{
    font-size:10px;
}

}

</style>