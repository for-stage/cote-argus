<script>

export default {
    name: 'Dashboard',
    components: {
        // pagination
    },
    mounted(){
      console.log("ddd")
    }
}
// import HeaderComponent from './components/HeaderComponent.vue'
// import PathComponent from './components/PathComponent.vue'
// import CardMarque from './components/CardMarque.vue'
// import SearchBar from './components/SearchBar.vue'
// import DetailCar from './components/DetailCar.vue'
// import Model from './components/Model.vue';

</script>

<template>
<!-- 
  <body>
    <img alt="Vue logo" src="./assets/logo.png" />
    <HelloWorld msg="Hello Vue 3 + Vite" />
     <HeaderComponent title="Choisissez la catégorie et la marque de votre véhicule" />
    <PathComponent path="Voitures particulières" />
    <SearchBar />
    <div class="marque">
      <div class="sous-marque">
        <CardMarque /> 
        <CardMarque />
        <CardMarque />
        <CardMarque />
        <CardMarque />
        <CardMarque />
        <CardMarque />
        <CardMarque />
      </div>

      <div class="sous-model">
        <Model />
        <Model />
        <Model />
        <Model />
        <Model />
      </div>
    </div>
    <DetailCar /> 
   



  </body> -->
  <router-view />

</template>

<style >
body {
  margin: 0;
  font-family: Roboto, Arial, Helvetica, sans-serif;
  padding-bottom: 3%;
  background: #f7f7f7; 
}

.marque {
  margin-top: 1%;
  display: flex;
  justify-content: space-evenly;
  flex-wrap: wrap;
}

.sous-marque {
  display: flex;
  justify-content: space-evenly;
  width: 80%;
  flex-wrap: wrap;
}

.sous-model {
  margin-top: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-items: center;
  justify-content: space-around;
  width: 80%;

}

@media (max-width: 768px) {}

@media (max-width: 450px) {


  .sous-model {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 450px) {
  .sous-model {
    grid-template-columns: 1fr;
  }

}
</style>
