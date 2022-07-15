<template>
   <Infos />
   <div class="container" >
   <div class="quest">
    <Questions @open="onShow" @close="onClose"/>
    <UploadPics v-if="this.open==true" />
    <Sms/>
    <personnel @close="exit"/>
        
    <!-- <vue-recaptcha ref="recaptcha" sitekey="6LcqpOogAAAAAPpyqWMgU128ifep-Ax_AvWDMgKI" /> -->
   
                       
                      
  
     <div class="retour">
    <img src="../assets/return.png" alt="">
    <div>Retour</div>
    
   </div>
   </div>
   
   </div>
  
   

</template>

<script>
import Infos from '../components/detailAchat/Infos.vue'
import Questions from '../components/detailAchat/Questions.vue'
import Sms from '../components/detailAchat/Sms.vue'
import UploadPics from '../components/detailAchat/UploadPics.vue';
import Personnel from '../components/detailAchat/Personnel.vue';
// import { VueRecaptcha } from 'vue-recaptcha';





export default {
    name: 'DetailAchat',
    components: {
        Infos, 
         Questions,         
         Sms,
         UploadPics ,
            Personnel,
        //  VueRecaptcha
    },

    props: {
        msg: String
    },
    data(){ 
        return{
            images: null,
            open:'false',
        }
        },
    methods: {
      uploadFile() {
        this.images = this.$refs.file.files[0];
        console.log(this.images)
      },
      hi(){
        alert('parent');
    },
    onEvent() {
        // when you need a reCAPTCHA challenge
        this.$refs.recaptcha.execute();
      },
      onShow(value) {
        console.log(value);
        this.open = value;
        console.log(this.open);
      },
        onClose() {
            this.open = false;
        }
    },
   

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
    cursor: pointer;
    width: 6%;
}
.retour img{
    border: solid 3px #E5004E;
    padding: 8px;
}
.retour div{
    border:  solid 3px #E5004E;
    border-left: 0 ;
    padding: 8px;
    font-size: 20px;
    font-weight: bold;
    color: #E5004E;
}
.retour div{
    display: none;
}
.retour:hover div{
    display: block;
    transition: 3s;
}
.retour:hover img{
    transform: rotate(360deg);
    transition: 1s;
    border-right: 0ch;
}


</style>
