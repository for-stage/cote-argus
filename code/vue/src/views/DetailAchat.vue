<template>
   <Infos />
   <div class="container">
   <div class="quest">
    <Questions/>
   </div>
   </div>
   

</template>

<script>
import Infos from '../components/detailAchat/Infos.vue'
import Questions from '../components/detailAchat/Questions.vue'


export default {
    name: 'DetailAchat',
    components: {
        Infos, 
         Questions         
    },
    props: {
        msg: String
    }
}
</script>
<style scoped >
.container{
    display: flex;
    justify-content: center;
}
.quest{
    width: 80%;
    

}
</style>
