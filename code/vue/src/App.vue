<script setup>

import HeaderComponent from './components/HeaderComponent.vue'
<<<<<<< HEAD
import PathComponent from './components/PathComponent.vue'
</script>

<template>
<body>
  <!-- <img alt="Vue logo" src="./assets/logo.png" /> -->
  <!-- <HelloWorld msg="Hello Vue 3 + Vite" /> -->
  <HeaderComponent title="Choisissez la catégorie et la marque de votre véhicule"/>
  <PathComponent path="Voitures particulières"/>
  </body>
</template>

<style >
body{
  margin:0;
=======
import CardMarque from './components/CardMarque.vue'
</script>

<template>

  <body>
    <!-- <img alt="Vue logo" src="./assets/logo.png" /> -->
    <!-- <HelloWorld msg="Hello Vue 3 + Vite" /> -->
    <HeaderComponent title="Choisissez la catégorie et la marque de votre véhicule" />
    <CardMarque />
  </body>
</template>

<style>
body {
  margin: 0;
>>>>>>> e06938167256147a3df9070fa3f84e19f51acc4b
  /* background:color; */
  font-family: Roboto, Arial, Helvetica, sans-serif;
}
</style>
