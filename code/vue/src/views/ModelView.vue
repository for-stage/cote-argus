<template>
  <HeaderComponent title="Calculez la Cote Argus de votre Ford" />
  <PathComponent path="Voitures particulières" />
  <SearchBar />
  <div class="models">
    <div class="sous-model">

        <div class="choice" v-for="(model,index) in models" :key="index" v-on:click="giveStyle(index)" >
            <div class="model"  :class="{ checkeddiv: selected == index }" >
               <h3 :class="{ checkedtitle: selected == index }" class="title">{{model}} </h3>
            </div>
     
        </div>
        
    </div>
  </div>





</template>

<script>
import HeaderComponent from '../components/ModelComponent/HeaderModel.vue'
import PathComponent from '../components/Marque/PathComponent.vue'
import SearchBar from '../components/SearchBar.vue'
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
            models:[ " Ford ", " Audi ", " BMW ", " Mercedes ", " Volkswagen ", " Opel ", ],
            checked :false,
            selected : null,
        }
    },
    methods: {
    giveStyle(i) {
        this.selected = i;
    }
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
