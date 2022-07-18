

<template>
 <HeaderComponent title="Calculez la Cote Argus de votre Ford" />
<PathComponent path="Voitures particulières"/>

<div class="details">
    <div class="padd-details">
      <NumPorte @step="step"/>
      <div class="part" >
        <DateComponent  @clicked-show-detail="clickedShowDetailMonth" @showpopup="visibilty"/>
        <div class="desactive" ref="step1"></div>
      </div>
      
      <div class="back-pop">
      <YearsPopup v-if="this.showpopup" @clicked-show-detail="clickedShowDetailYear" @popupclose="choose" @close="exit" @step="step"/>   
      </div>
      
      <DateChoice v-if="this.show" :month=" monthSelected " :year="yearSelected" />
      <div ref="hide" class="hide">
        <div class="part">
        <CarburantChoice />
        <div class="desactive" ref="step2"></div>
      </div>
     
      <div class="same-line">
            <div class="partie" >
                <BoiteVitesse/>
                <div class="desactive" ref="step3"></div>
            </div>
            <div class="partie">
                <NbrChevaux/>
                <div class="desactive" ref="step4"></div>
            </div> 
      </div>

      <div class="same-line">
            <div class="partie">
                <LitreCylindr/>
                <div class="desactive" ref="step5"></div>
            </div>  
            <div class="partie">
                <LaPuissance/>
                <div class="desactive" ref="step6"></div>
            </div> 
      
      </div>
      <KilometrageComponent />
    </div>
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
        },
        step(value){
            if(value == 'step1'){
                const el = this.$refs.step1;
                if (el) {
                    el.scrollIntoView({ behavior: "smooth" });
                    el.classList.remove("desactive");
                }
            }else if(value == 'step2'){
                const el = this.$refs.hide;
                 if (el) {
                    el.classList.remove("hide");
                };
                setTimeout('', 1000);
                const e = this.$refs.step2;
                if (e) {
                    e.scrollIntoView({ behavior: "smooth" });
                    e.classList.remove("desactive");
                }
            }
        }
        
    },
    mounted(){
         console.log(localStorage.getItem('marque'));
         
    }
   
}

</script>


<style  scoped>
html {
  scroll-behavior: smooth;
}
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
.desactive{
    position: absolute;
    width: 100%;
    height: 100%;
    background: #ffffffb3;
    top: 0;
}
.part{
    position:relative;
}
.partie{
    position:relative;
    width:49%;
}
.hide{
    display:none;
}
@media  (max-width: 445px) {
   .same-line{
       flex-direction: column;
   }

    
}

</style>