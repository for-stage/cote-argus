

<template>

<div class="kilometrage">
    <h3>Indiquez le kilométrage de votre Ford Mondeo</h3>
    <form class="kilometrage-form">
    <div class="kilometrage-input">
        <input type="text" name="kilo" placeholder="kilométrage de votre véhicule ">
    </div>
    <div class="kilometrage-btn">
      <router-link to="/details">
        <button  type="submit" name="valider">Valider</button>
        </router-link>
    </div>


    



    </form>
</div>

</template>

<style  scoped>
.kilometrage{
    margin-top:5%;
}
.kilometrage-form {
    margin-top:3%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    height: 40px;
}
.kilometrage-input{
    width: 80%;
    height: 100%;
}
.kilometrage-input input{
    border: solid 2px #6F6F6F;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    color: #393939;
    font-size: 18px;
    padding: 0 0 0 1%;
    background: #F5F5F5;
}
.kilometrage-btn {
    width: 16%;
    height: 110%;
}
.kilometrage-btn button{
    width: 100%;
    background: #E5004E;
    height: 100%;
    border: none;
    border-radius: 10px;
    color:white;
    font-weight:bold;
    font-size:16px;
    cursor:pointer;
}

</style>