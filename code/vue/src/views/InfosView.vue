

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
        <CarburantChoice @step="step" @carburant="arrLength"/>
        <div class="desactive" ref="step2"></div>
      </div>
     
      <div class="same-line">
            <div class="partie">
                <BoiteVitesse @step="step" @boit="arrLength"/>
                <div class="desactive" ref="step3"></div>
            </div>
            <div class="partie">
                <NbrChevaux @step="step" @chevaux="arrLength"/>
                <div class="desactive" ref="step4"></div>
            </div> 
      </div>

      <div class="same-line">
            <div class="partie">
                <LitreCylindr @step="step" @cylinder="arrLength"/>
                <div class="desactive" ref="step5"></div>
            </div>  
            <div class="partie">
                <LaPuissance @step="step" @puissance="arrLength" />
                <div class="desactive" ref="step6"></div>
            </div> 
      
      </div>
        <div class="part">
            <KilometrageComponent />
            <div class="desactive" ref="step7"></div>
        </div> 
      
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
            monthSelected: null,
            yearSelected: null,
            date:{
                month: '',
                year: ''
            },
            show: false,
            showpopup: false,
            run : false,
            carburant : null,
            boit : null,
            chevaux : null,
            cylinder : false,
            puissance : false,
        }
    },
    methods:{
        clickedShowDetailMonth(value){
            this.monthSelected = value;
            localStorage.setItem('month',value);
        },
        clickedShowDetailYear(value){
            this.yearSelected = value;
            localStorage.setItem('year',value);
        },
        visibilty(value){
            this.showpopup = value ;
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
                    this.scroll(el);
                }
            }else if(value == 'step2'){
                if(this.carburant){
                   const el = this.$refs.hide;
                    if (el) {
                        el.classList.remove("hide");
                    };
                    setTimeout('', 1000);
                    const e = this.$refs.step2;
                    if (e) {
                        this.scroll(e);
                    }
                   const elm = this.$refs.step3;
                        if (elm) {
                            this.scroll(elm);
                        }
                }else{
                    const el = this.$refs.hide;
                    if (el) {
                        el.classList.remove("hide");
                    };
                    setTimeout('', 1000);
                    const e = this.$refs.step2;
                    if (e) {
                        this.scroll(e);
                    }
                }
            }else if(value == 'step3'){
                const el = this.$refs.step4;
                const e = this.$refs.step3;
                if(this.boit){
                    if (e) {
                        this.scroll(e);
                    } 
                    if (el) {
                        this.scroll(el);
                    } 
                }else{
                    if (e) {
                        this.scroll(e);
                    } 
                }    
            }else if(value == 'step4'){
                const e = this.$refs.step4;
                const el = this.$refs.step5;
                if(this.chevaux){
                    if (e) {
                        this.scroll(e);
                    } 
                    if (el) {
                        this.scroll(el);
                    } 
                }else{
                    if (e) {
                        this.scroll(e);
                    } 
                }
            }else if(value == 'step5'){
                const e = this.$refs.step5;
                const el = this.$refs.step6;
                if(this.cylinder){
                    if (e) {
                        this.scroll(e);
                    } 
                    if (el) {
                        this.scroll(el);
                    } 
                }else{
                    if (e) {
                        this.scroll(e);
                    } 
                }
            }else if(value == "step6"){
                const e = this.$refs.step6;
                const el = this.$refs.step7;
                if(this.puissance){
                    if (e) {
                        this.scroll(e);
                    } 
                    if (el) {
                        this.scroll(el);
                    } 
                }else{
                    if (e) {
                        this.scroll(e);
                    } 
                }
            }else if (value == "step7"){
                const el = this.$refs.step7;
                if (el) {
                        this.scroll(el);
                    } 
            }
        },
        arrLength(value){
            if(value == 'carburant'){
                this.carburant = true;
            }else if(value == 'boit'){
                this.boit = true;
            }else if(value == 'chevaux'){
                this.chevaux = true;
            }else if(value == 'cylinder'){
                this.cylinder = true;
            }else if(value == 'puissance'){
                this.puissance = true;
            }
        },
        scroll(e){
            e.scrollIntoView({ behavior: "smooth" });
            e.classList.remove("desactive");
        }
        
    },
    mounted(){
        //  console.log(localStorage.getItem('marque'));
        
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
    height: 105%;
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