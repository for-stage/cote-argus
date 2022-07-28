<script>

export default {
  name: 'path',

  props: {
        stepOne: String
    },

  data(){
    return{
        exist:false,
    }
  },


    created(){
    //     let path = localStorage.getItem("marque")
    //     if(path != undefined){
    //         this.stepOne = "&ensp;>&ensp;<a>" + path + "</a>";
    //         console.log(this.stepOne);
    //     }
    this.check();
    
    },
    methods:{
        check(){
            if(this.stepOne != ""){
        this.exist = true; 
        console.log("isset");
    }else{
        console.log(this.stepOne);
    }
        }
    }
}
</script>

<template>

<div class="path">
    <p>Vous êtes ici :&ensp;>&ensp;<a>Marque de voiture</a><span v-if="exist">&ensp;>&ensp;</span><a>{{stepOne}}</a></p>
</div>

</template>

<style  scoped>

.path{
    padding-left: 10%;
    color:#9C9C9C;
}
.path a{
    color:#E5004E;
    cursor:pointer;
}
.path a:hover{
    text-decoration:underline;
}

@media( max-width: 768px){
    .path{
    font-size: 20px;
    }
}
@media( max-width: 480px){
    .path{
    font-size: 13px;
    }
}

</style>