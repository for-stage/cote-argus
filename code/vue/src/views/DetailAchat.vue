<template>
   <HeaderComponent :title="this.header" />
   <div class="container" >
   <div class="quest">
   <!-- <p>{{v1}} {{v2}} {{v3}} {{v4}} {{v5}} {{v6}} {{v7}} {{v8}} {{v9}} {{v10}}</p> -->
    <Questions @open="onShow" @close="onClose"/> 
    <UploadPics v-if="this.open==true" />
    <Sms @valide="valideSms" />
    <personnel @close="exit" v-if="this.showpopup"/>
        
    <!-- <vue-recaptcha ref="recaptcha" sitekey="6LcqpOogAAAAAPpyqWMgU128ifep-Ax_AvWDMgKI" /> -->
   
                       
                      
  
     <div class="retour" @click="retour">
    <img src="../assets/return.png" alt="">
    <div>Retour</div>
    
   </div>
   </div>
   
   </div>
  
   

</template>

<script>
import HeaderComponent from '../components/Marque/HeaderComponent.vue'
import Questions from '../components/detailAchat/Questions.vue'
import Sms from '../components/detailAchat/Sms.vue'
import UploadPics from '../components/detailAchat/UploadPics.vue';
import Personnel from '../components/detailAchat/Personnel.vue';
// import { VueRecaptcha } from 'vue-recaptcha';





export default {
    name: 'DetailAchat',
    components: {
        HeaderComponent, 
         Questions,         
         Sms,
         UploadPics ,
            Personnel,
        //  VueRecaptcha
        
    },

    props: {
        msg: String,
    },
    data(){ 
        return{
            images: null,
            open:'false',
            showpopup: '',
            header : null,
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
        },
     exit(value){
            this.showpopup = value;
        },
        openPopup(){
            this.showpopup = true;
        },
        valideSms(value){
            this.showpopup = value;
        },
        retour(){
            this.$router.push('/infos');
            
        },
        value(name){
            let value = localStorage.getItem(name) + " ";
            return value;
        }

    },
    mounted(){
        this.header = this.value("marque") + this.value("model") + this.value("num") + this.value("chevaux") + this.value("puisssance") + "Ch " + this.value("cylinder") + "1000 KM" ;
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
    margin-top: 50px;
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
