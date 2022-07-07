<template>
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

    </div>
  



</template>

<script>
import HeaderComponent from '../components/Marque/HeaderComponent.vue'
import PathComponent from '../components/Marque/PathComponent.vue'
import CardMarque from '../components/Marque/CardMarque.vue'
import SearchBar from '../components/SearchBar.vue'



export default {
    name: 'MarqueView',
    components: {
        HeaderComponent, 
        PathComponent,         
        CardMarque,
        SearchBar,
     

      
    },
    props: {
        msg: String
    }
}
</script>
<style scoped >


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

</style>
