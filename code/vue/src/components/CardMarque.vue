<script setup>

defineProps({
    title: String,
    image: String
})

</script>

<template>
    <div class="card">
        <div class="card-img">
            <img src="../assets/volkswagen.png" alt="hhhhh">
        </div>
        <div class="card-title">
            <h2>renault</h2>
        </div>
    </div>

</template>

<style scoped>
.card {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white;
    border: solid 2px #C1C1C1;
    width: 23%;
    height: 210px;
    border-radius: 5px;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    margin-top: 2%;
}

.card:hover {
    border: solid 2px #E5004E;
    transition: 0.3s;
    box-shadow: #000000 0px 0px 7px;
}

.card:hover .card-title {
    color: #E5004E;
    border-top: solid 2px #E5004E;
    background:white;
}

.card-img {
    width: 100%;
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-img img {
    width: 150px;
    height: 100px;
}

.card-title {
    width: 100%;
    height: 50px;
    background-color: #D9D9D9;
    color: #555555;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 0 0 2px 2px;
}
</style>
