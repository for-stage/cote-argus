<script setup>

defineProps({
    title: String,
    image: String
})

</script>

<template>
    <div class="card">
        <div class="header">
            <img src="../assets/logo.png" alt="hhhhh">
        </div>
        <div class="footer">
        <h2>renault</h2>
        </div>
    </div>
</template>

<style lang="scss" scoped>


.card{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white;
    border: solid 1px #C1C1C1;
    width: 260px;
    height:210px;
    border-radius: 10px;

    .header{
       width: 100%;
       height: 50px;
        img{
            width: 100px;
            height: 100px;
        }
    }
}
</style>
