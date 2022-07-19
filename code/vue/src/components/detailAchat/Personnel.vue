<template>
<div class="back-pop">
<div class="popup-infos"  ref="popup" :style="top">
    <div class="header">
        <div class="title">
        <h3>Année de mise en circulation*</h3>
        </div>
        <div class="out">
            <a @click="close">&#x2716</a>
           
        </div>
        
    </div>
    <div class="infos"  >
   
         <form >
            <label for="name">
            <p>Nom </p>
            <input id="name" type="text" name="fullname" >
            </label>
            <label for="name">
            <p>Prenom</p>
            <input id="name" type="text" name="fullname" >
            </label> <label for="name">
            <p>Email</p>
            <input id="name" type="text" name="fullname" >
            </label>
        
                <input class="btn " type="submit" value="continue">
 
            
           
          
        </form>
       
    </div>
</div>
</div>
</template>

<script>

export default {
    name: 'infosPopup',
 

    props: {
        msg: String,
        // value:String
    },

    data() {
         return {
            top: 0,
            value: ""
        }
    },

    mounted() {    
    },

    computed: {
    },
    methods: {
    close(){
        this.$emit('close', false);     
    }
  },
}
</script>

<style  scoped>
.header{
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    width: 100%;
    color:#717171;
    text-align: center;
}
.popup-infos{
    border: solid 2px #6C6C6C;
    position: fixed;
    background: white;
    border-radius: 8px;
    padding: 0% 2% 2%;
    top: 160px;
    left: 30%;
    width: 35%;
}
.infos{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top:2%;
}
.out{
    width:7%;
    cursor: pointer;
}
.out a{
    /* css hover a cercle hover */
    font-size: 20px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;

}
.out a:hover{
    color: #000000;
}
.title{
    height: 50px;
    border-bottom: solid 1px #bfbfbf;
    width:100%;
}
.back-pop{
    /* display:none; */
    background: rgb(0 0 0 / 40%);
    width: 100%;
    position: fixed;
    height: 100%;
    top: 0;
    left: 0;
}
label{
    width: 90%;
}
input{
    border: solid 1px black;
    width: 98%;
    height: 40px;
    padding-left: 10px;
    font-weight: 500;
    font-size: 1.2em;
    border-radius: 5px;
    background: none;
}
form{
    width:100% ;
    color: #717171;
    display: flex;
    flex-direction: column;
    align-items: center;

}
.btn{
    margin-top: 30px;
    width: 40%;
    height: 40px;
    background: #6C6C6C;
    color: white;
    border-radius: 5px;
    font-weight: 500;
    font-size: 1.2em;
    border: none;
    cursor: pointer;
}
.btn:hover{
    background: #000000;
    transition: all 0.5s ease-in-out;
}
@media( max-width: 768px){
.popup-infos{
    left: 15%;
    width: 66%;
}

}
@media( max-width: 480px){
.popup-infos{
    left: 7%;
    width: 80%;
}

h3{
    font-size:15px;
}

}



@media( max-width: 480px){

p{
    font-size:10px;
}

}
</style>