<template>
       <HeaderComponent title="Choisissez la catégorie et la marque de votre véhicule" />
        <PathComponent path="Voitures particulières" />
         <SearchBar />
    <div class="marque">
      <div class="sous-marque" >
        <CardMarque v-for="(car,index) in cars" :key="index" @clicked="next" :name="car.name" :logo="car.logo"/> 
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
    },
    methods:{
      next(value){
        if(value){
           window.location="./infos";
        }
        console.log('goto')
       
      }
    },
    data(){
      return{
        cars:[
                {name:"Renault" , logo:"../src/assets/renault.png"},
                {name:"Ford" , logo:"../src/assets/ford.png"},
                {name:"Audi" , logo:"../src/assets/audi.png"},
                {name:"Dacia" , logo:"../src/assets/dacia.png"},
                {name:"BMW" , logo:"../src/assets/bmw.png"},
                {name:"Mini" , logo:"../src/assets/mini.png"},
                {name:"Tesla" , logo:"../src/assets/tesla.png"},
                {name:"Mercedes" , logo:"../src/assets/mercedes.png"},
                ]
      }
    },
    mounted(){
      console.log(this.cars[0].name)
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
