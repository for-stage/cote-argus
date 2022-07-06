<script setup>

import HeaderComponent from './components/HeaderComponent.vue'
import PathComponent from './components/PathComponent.vue'
import CardMarque from './components/CardMarque.vue'
import SearchBar from './components/SearchBar.vue'
import Model from './components/Model.vue';
 

</script>

<template>
<body>
  <!-- <img alt="Vue logo" src="./assets/logo.png" /> -->
  <!-- <HelloWorld msg="Hello Vue 3 + Vite" /> -->
  <HeaderComponent title="Choisissez la catégorie et la marque de votre véhicule"/>
  <PathComponent path="Voitures particulières"/>
  <SearchBar />
  <div class="marque">
  <div class="sous-marque">
  <CardMarque  />
  <CardMarque />
  <CardMarque />
  <CardMarque />
  <CardMarque />
  <CardMarque />
  <CardMarque />
  <CardMarque />
    </div>
  </div>
  <div class="sous-model">
    <Model/>
    <Model/>
    <Model/>
    <Model/>
    <Model/> 
  </div>

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

}
.sous-marque{
    width: 80%;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    align-items: baseline;
}
.sous-model{
      display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    justify-items: center;
    justify-content: center;
}

@media (max-width: 768px) { /*breakpoint*/
  .sous-model {
    grid-template-columns: 1fr 1fr;
  }
}
@media (max-width: 450px) { /*breakpoint*/
  .sous-model {
    grid-template-columns: 1fr;
  }
}
</style>
