

<template>
 <HeaderComponent title="Calculez la Cote Argus de votre Ford" />
<PathComponent path="Voitures particulières" />

<div class="details">
    <div class="padd-details">
      <NumPorte />
      <DateComponent  @clicked-show-detail="clickedShowDetailMonth" @click="changeShow" />
      <div class="back-pop">
      <YearsPopup v-if="!showpopup" @click="showpopup=!showpopup"  @clicked-show-detail="clickedShowDetailYear"/>   
      </div>
      <DateChoice v-if="show" :month=" monthSelected " :year="yearSelected" />
      <CarburantChoice />
      <KilometrageComponent />
      <Years/>
    </div>


</div>
</template>
<script >
import HeaderComponent from '../components/ModelComponent/HeaderModel.vue'
import PathComponent from '../components/Marque/PathComponent.vue'
import NumPorte from '../components/Infos/NumPorte.vue'
import DateComponent from '../components/Infos/DateComponent.vue'
import YearsPopup from '../components/Infos/YearsPopup.vue'
import DateChoice from '../components/Infos/DateChoice.vue'
import CarburantChoice from '../components/Infos/CarburantChoice.vue'
import KilometrageComponent from '../components/Infos/KilometrageComponent.vue'
import Model from '../components/ModelComponent/Model.vue'



export default {
    name: 'DetailCar',
    components: {
        HeaderComponent,
        PathComponent,
        NumPorte, 
        DateComponent,         
        YearsPopup,
        DateChoice,
        CarburantChoice,
        KilometrageComponent,   
        Model,
  
    },
    props: {
        msg: String
    },
    data(){
        return {
            show: false,
            showpopup: true,
            monthSelected: "",
            yearSelected: "",
            date:{
                month: '',
                year: ''
            }
        }
    },
    methods:{
        clickedShowDetailMonth(value){
            this.monthSelected = value;
            console.log(this.monthSelected);
        },
        clickedShowDetailYear(value){
            this.yearSelected = value;
            console.log(this.yearSelected);
        
        },
        changeShow(){
            this.show = true;
            this.showpopup = !this.showpopup;
            
        }
    },
   
}

</script>


<style  scoped>
.details{
    width:100%;
    display:flex;
    justify-content: center;
}
.padd-details{
    width:80%;
}



</style>