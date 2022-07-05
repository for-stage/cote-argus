<script setup>

import HeaderComponent from './components/HeaderComponent.vue'
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
  /* background:color; */
}
</style>
