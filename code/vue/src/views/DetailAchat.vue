<template>
   <Infos />
   <div class="container">
   <div class="quest">
    <Questions/>
    <Sms/>
    <UploadPics/>
     <div class="retour">
    <img src="../assets/Vector.png" alt="">
    <img src="../assets/retour.png" alt="">
    <div>Retour</div>
     <!-- <div v-if="filenames.length" >
                <ul> 
                    <li v-for= '(filename,index) in filenames' > 
                        {{ filename }} 
                    </li> 
                </ul>
            </div>  -->
   </div>
   </div>
   
   </div>
  
   

</template>

<script>
import Infos from '../components/detailAchat/Infos.vue'
import Questions from '../components/detailAchat/Questions.vue'
import Sms from '../components/detailAchat/Sms.vue'
import UploadPics from '../components/detailAchat/UploadPics.vue';




export default {
    name: 'DetailAchat',
    components: {
        Infos, 
         Questions,         
         Sms,
         UploadPics ,
    },

    props: {
        msg: String
    },
    data: () => ({images: null}),
    methods: {
      uploadFile() {
        this.images = this.$refs.file.files[0];
        console.log(this.images)
      },
      hi(){
        alert('parent');
    }
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
.retour{
    margin-top: 30px;
    display: flex;
}

</style>
