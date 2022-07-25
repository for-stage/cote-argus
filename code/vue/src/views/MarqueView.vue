<template>
       <HeaderComponent title="Choisissez la catégorie et la marque de votre véhicule" />
        <PathComponent path="Voitures particulières" />
         <SearchBar @keyword="getKeyword"/>
         search:{{Search}}  marque
    <div class="marque">
      <div class="sous-marque" >
      <div v-for="(car,index) in carsSearch" :key="index">
      <div class="cards">
       <CardMarque @click="get(car.name)" @clicked="next"  :name="car.name" :logo="car.logo"/> 
      </div>
      </div>  
      </div>

    </div>

    <div v-if="!this.carsSearch.length">
      <h1>warah makain walo</h1>
<lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_lb9ljjup.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;" ></lottie-player>

    
    
    </div>
  



</template>

<script>
import HeaderComponent from '../components/Marque/HeaderComponent.vue'
import PathComponent from '../components/Marque/PathComponent.vue'
import CardMarque from '../components/Marque/CardMarque.vue'
import SearchBar from '../components/SearchBar.vue'
// import { json } from 'stream/consumers'



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
         
           window.location="./model";
        }
        console.log('goto')
       
      },
      get(value){  
          localStorage.setItem('marque',value);
          //get marque from localStorage
          console.log(localStorage.getItem('marque'));
      },
      getKeyword(value){
        this.Search = value;
        console.log(this.Search);

        this.carsSearch = this.cars.filter(car => {
        return car.name.toLowerCase().includes(this.Search.toLowerCase());
        } 
        );
       
        console.log(this.carsSearch);
      },
      search(){
        
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
                ],
                 Search: "",
                 carsSearch:[],
      }
    },
    mounted(){
      this.carsSearch = this.cars;
      console.log(this.carsSearch);
    },
    
   
   
}
</script>
<style scoped >

.cards {
    width: 260px;
    margin-top: 3px;
  
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
@media screen and (max-width: 768px) {
  .cards {
    width: 44%;
  }

  
}
@media (max-width: 480px) {
  .marque {
    margin-top: 7%;
}
  .cards {
    width: 100%;
    margin-top: 3px;
  }
  
}

</style>
