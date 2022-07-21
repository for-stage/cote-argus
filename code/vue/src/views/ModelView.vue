<template>
  <HeaderComponent title="Calculez la Cote Argus de votre" :mark="this.mark" :subtitle="this.subtitle"/>
  <PathComponent path="Voitures particulières" />
  <SearchBar />
  <div class="models" >
    <div class="sous-model" >
        <div class="choice" v-for="(model,index) in models" :key="index" v-on:click="giveStyle(index),get(model)"  >
            <div @click="next" class="model"  :class="{ checkeddiv: selected == index }" >
               <h3 :class="{ checkedtitle: selected == index }" class="title">{{model}} </h3>
            </div>
     
        </div>
        
    </div>
     
  </div>
 <div class="precedent">
  <div class="retour" @click="retour">
    <img src="../assets/return.png" alt="">
    <div>Retour</div>
    
   </div>
 
 </div>

  





</template>

<script>
import HeaderComponent from '../components/Marque/HeaderComponent.vue'
import PathComponent from '../components/Marque/PathComponent.vue'
import SearchBar from '../components/SearchBar.vue'
import router from '../router'
// import Model from '../components/ModelComponent/Model.vue'



export default {
  name: 'MarqueView',
  components: {
    HeaderComponent,
    PathComponent,
    SearchBar,
    // Model,



  },
  props: {
    msg: String
  },
    data() {
        return {
            models:[ " Fiesta ", " Focus ", " C-MAX ", " Custom ", " Explorer ", " Ka ", ],
            checked :false,
            selected : null,
            mark : null,
            subtitle: null
        }
    },
    methods: {
    giveStyle(i) {
        this.selected = i;
    },
    next(){
     router.push('/infos');
    },
       retour(){
            this.$router.push('/');

        },
        get(value){
            localStorage.setItem('model',value);
          console.log(localStorage.getItem('model'));
        }
    
  },
  mounted(){
        this.mark = localStorage.getItem('marque');
        this.subtitle = "Otoclic vous propose de calculer la Cote Argus de votre" + this.mark + "en sélectionnant votre modèle parmi la liste ci-dessous";
        console.log(this.subtitle);
  }
}
</script>
<style scoped >
.models{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
}
.model {
    width: 92%;
    height: 70px;
    background-color: #EEEEEE;
    border-radius: 10px;
    border: solid 2px #909090;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin-bottom: 15px;

}

.title {
    font-size: 25px;
    font-weight: 500;
    color: #717171;
    text-align: center;
}


.model:hover {
    transition: 1s;
    border: solid 2px #E5004E;
}


.checkeddiv {
    background-color: #E5004E;
    transition: 1s;
    border: solid 2px #E5004E;
}

.checkedtitle {
    color: white;
}

.btn:focus {
    outline: none;
}

.btn:active {
    transform: scale(0.98);
}

ul {
    list-style: none;
    border-top: solid 1px #A7A7A7;
    border-bottom: solid 1px #A7A7A7;
    width: 40%;
    font-size: 10px;
    padding: 2% 0;
    color: #717171;
}

.choice {
    width: 33%;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    flex-direction: column;

}

.sous-model {
    width: 101%;
}
.precedent{
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.retour{
    margin-top: 30px;
    display: flex;
    cursor: pointer;
    width: 80%;
}
.retour img{
    border: solid 3px #E5004E;
    padding: 8px;
}
.retour div{
    border:  solid 3px #E5004E;
    border-left: 0 ;
    padding: 8px;
    font-size: 20px;
    font-weight: bold;
    color: #E5004E;
}
.retour div{
    display: none;
}
.retour:hover div{
    display: block;
    transition: 3s;
}
.retour:hover img{
    transform: rotate(360deg);
    transition: 1s;
    border-right: 0ch;
}

@media(max-width: 768px) {
    ul {
        width: 80%;
    }
}

@media(max-width: 480px) {
    ul {
        width: 100%;
    }

    .search {
        width: 80%;
    }
    .model {
        width: 100%;

    }
    .choice{
        width: 80%;
    }
}
.models {
  display: flex;
  justify-content: space-evenly;
}

.sous-model {
  margin-top: 40px;
  display: flex;
  flex-wrap: wrap;
  justify-items: center;
  justify-content: space-around;
  width: 80%;

}

</style>
