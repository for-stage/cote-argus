

<template>
 <HeaderComponent title="Calculez la Cote Argus de votre Ford" />
        <PathComponent path="Voitures particulières" />

<div class="details">
    <div class="padd-details">
      <NumPorte />
      <DateComponent  />
      <div class="back-pop">
      <YearsPopup />   
      </div>
      <h1>{{date.month}} hhhhhhh</h1>
      <DateChoice :month="date.month" :year="date.year" />
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
            date:{
                month: '',
                year: ''
            }
        }
    }
}

</script>

<template>
 <HeaderComponent title="Calculez la Cote Argus de votre Ford" />
        <PathComponent path="Voitures particulières" />

<div class="details">
    <div class="padd-details">
      <NumPorte />
      <DateComponent />

      <YearsPopup />   

      <DateChoice />
      <CarburantChoice />
      <KilometrageComponent />

    </div>


</div>
</template>

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