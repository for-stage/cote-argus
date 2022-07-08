

<template>
 <HeaderComponent title="Calculez la Cote Argus de votre Ford" />
<PathComponent path="Voitures particulières" />

<div class="details">
    <div class="padd-details">
      <NumPorte />
      <DateComponent  @clicked-show-detail="clickedShowDetailMonth" @showpopup="visibilty"/>
      <div class="back-pop">
      <YearsPopup v-if="showpopup" @clicked-show-detail="clickedShowDetailYear"/>   
      </div>
      <DateChoice v-if="show" :month=" monthSelected " :year="yearSelected" />
      <CarburantChoice />
      <KilometrageComponent />
    </div>
      <Years/>


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
  
    },
    props: {
        msg: String
    },
    data(){
        return {
            monthSelected: "",
            yearSelected: "",
            date:{
                month: '',
                year: ''
            },
            show: false,
            showpopup: true,
        }
    },
    methods:{
        clickedShowDetailMonth(value){
            this.monthSelected = value;
            console.log(this.monthSelected);
        },
        clickedShowDetailYear(value){
            this.yearSelected = value;

        },
        visibilty(value){
            this.showpopup = value ;
            console.log(this.showpopup)
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