<script setup>

import HeaderComponent from './components/HeaderComponent.vue'
import PathComponent from './components/PathComponent.vue'
import CardMarque from './components/CardMarque.vue'
import SearchBar from './components/SearchBar.vue'
import DetailCar from './components/DetailCar.vue'
</script>

<template>
<body>
  <!-- <img alt="Vue logo" src="./assets/logo.png" /> -->
  <!-- <HelloWorld msg="Hello Vue 3 + Vite" /> -->
  <HeaderComponent title="Choisissez la catégorie et la marque de votre véhicule"/>
  <PathComponent path="Voitures particulières"/>
  <!-- <SearchBar /> -->
  <div class="marque">
  <div class="sous-marque">
  <CardMarque />
  <CardMarque />
  <CardMarque />
  <CardMarque />
  <CardMarque />
  <CardMarque />
    </div>
  </div>
  <DetailCar />
  </body>
</template>

<style>
body {
  margin: 0;
  font-family: Roboto, Arial, Helvetica, sans-serif;
  padding-bottom: 1%;
}
.marque{
  margin-top:1%;
 display: flex;
  justify-content: space-evenly;
  display:none;
}
.sous-marque{
    width: 80%;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    align-items: baseline;
}
</style>
