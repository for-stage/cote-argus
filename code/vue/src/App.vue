<script setup>

import HeaderComponent from './components/HeaderComponent.vue'
import PathComponent from './components/PathComponent.vue'
import CardMarque from './components/CardMarque.vue'
import SearchBar from './components/SearchBar.vue'
</script>

<template>
<body>
  <!-- <img alt="Vue logo" src="./assets/logo.png" /> -->
  <!-- <HelloWorld msg="Hello Vue 3 + Vite" /> -->
  <HeaderComponent title="Choisissez la catégorie et la marque de votre véhicule"/>
  <PathComponent path="Voitures particulières"/>
  <CardMarque />
  </body>
</template>

<style>
body {
  margin: 0;
  font-family: Roboto, Arial, Helvetica, sans-serif;
}
</style>
