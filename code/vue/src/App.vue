<script setup>
// This starter template is using Vue 3 <script setup> SFCs
// Check out https://vuejs.org/api/sfc-script-setup.html#script-setup
// import HelloWorld from './components/HelloWorld.vue'
import HeaderComponent from './components/HeaderComponent.vue'
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
  /* background:color; */
  font-family: Roboto, Arial, Helvetica, sans-serif;
}
</style>
