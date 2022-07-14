

<template>
 <HeaderComponent title="Calculez la Cote Argus de votre Ford" />
<PathComponent path="Voitures particulières" />

<div class="details">
    <div class="padd-details">
      <NumPorte />
      <DateComponent  @clicked-show-detail="clickedShowDetailMonth" @showpopup="visibilty"/>
      <div class="back-pop">
      <YearsPopup v-if="this.showpopup" @clicked-show-detail="clickedShowDetailYear" @popupclose="choose" @close="exit"/>   
      </div>
      <DateChoice v-if="this.show" :month=" monthSelected " :year="yearSelected" />
      <CarburantChoice />
      <div class="same-line">
      <BoiteVitesse/>
      <NbrChevaux/>
      </div>
      <div class="same-line">
      <LitreCylindr/>
      <LaPuissance/>
      </div>
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
import BoiteVitesse from '../components/Infos/BoiteVitesse.vue'
import NbrChevaux from '../components/Infos/NbrChevaux.vue'
import LitreCylindr from '../components/Infos/LitreCylindr.vue'
import LaPuissance from '../components/Infos/LaPuissance.vue'
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
        BoiteVitesse,
        NbrChevaux,
        LitreCylindr,
        LaPuissance,
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
            showpopup: false,
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
            // console.log(this.showpopup)
        },
        choose(value){
            this.showpopup = value ;
            this.show = !value ;
        },
        exit(value){
            this.showpopup = value ;
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
.same-line{
    display: flex;
    justify-content: space-between;
}
@media  (max-width: 445px) {
   .same-line{
       flex-direction: column;
   }

    
}

</style>