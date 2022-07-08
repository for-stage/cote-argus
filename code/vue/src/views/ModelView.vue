<!-- <template>
       <HeaderComponent title="Calculez la Cote Argus de votre Ford" />
        <PathComponent path="Voitures particulières" />
         <SearchBar />
         <div class="models">
    <div class="sous-model">
        <Model />
        <Model />
        <Model />
        <Model />
        <Model />
      </div>
      </div>
 
  



</template>

<script>
import HeaderComponent from '../components/ModelComponent/HeaderModel.vue'
import PathComponent from '../components/Marque/PathComponent.vue'
import SearchBar from '../components/SearchBar.vue'
import Model from '../components/ModelComponent/Model.vue'



export default {
    name: 'MarqueView',
    components: {
        HeaderComponent, 
        PathComponent,         
        SearchBar,
        Model,
     

      
    },
    props: {
        msg: String
    }
}
</script>
<style scoped >


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

@media (max-width: 768px) {}

@media (max-width: 450px) {


  .sous-model {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 450px) {
  .sous-model {
    grid-template-columns: 1fr;
  }

}

</style> -->
