

<template>

<div class="content">
    <h3>Info de connexion</h3>
    <div class="vertical"></div>
    <div class="info">
        <p class="err" v-if="err">Click Edit button to Make change</p>
        <form>
            <label for="name" >
            <p>Nom d'utilisateur</p>
            <div v-on:click="error">
                <input  id="name" type="text" name="fullname" value="Ayoub Basidi" :disabled="edit">
            </div>
            
            </label>
            <label for="pass" >
            <p>Mot de Passe</p>
            <div v-on:click="error">
            <input v-if="show" id="pass" type="text" name="pwd" value="************" :disabled="edit">
            <input  v-if="hide" id="pass" type="text" name="pwd" value="code123" :disabled="edit">
            </div>
            <img v-if="show" v-on:click="show = false, hide = true" src="../../assets/eye.svg">
            <img v-if="hide" v-on:click="show = true, hide = false" src="../../assets/hide.svg">
            </label>
            
            <button v-if="!edit" class="submit">Submit</button>
        </form>
        <button v-if="edit" class="edit" v-on:click="edit = false">Edit</button>
    </div>
</div>

</template>
<script >
export default {
    name: 'statistique',
    props: {
    },
    data() {
        return {
            show:true,
            hide:false,
            edit:true,
            err:false,
        }
    },
     methods: {
        error(){
            if(this.edit == true){
                this.err = true;
                console.log(this.err);
                setTimeout(()=>{
                this.err = false;
                },2000);
            }else{
                return;
            }
        },
  },

}
</script>
<style  scoped>
.content{
    width: 25%;
    padding: 20px 22px;
    background: white;
    border-radius: 5px;
    box-shadow: 0 0 12px -4px black;
}
.err{
    margin-bottom: 0;
    font-size: 13px;
    color: red;
}
h3{
    margin-top: 0;
}
.vertical{
    height: 0.5px;
    background: #D9D9D9;
}
.h3{
    font-size: 25px;
    font-weight: 400;
}
form{
    display: flex;
    flex-direction: column;
}
input{
    border: solid 1px black;
    width: 98%;
    padding: 3% 1%;
    border-radius: 5px;
    background: none;
    font-size: 15px;
    font-weight: 400;
    font-family: Roboto, Arial, Helvetica, sans-serif;
}
label p{
    margin-bottom: 5px;
    font-weight: 400;
    color: #707070;
}
.edit,.submit{
    margin-top: 7%;
    border: solid 2px #E5004E;
    color: #E5004E;
    font-weight:400;
    background: none;
    width: 30%;
    border-radius: 5px;
    padding: 1% 1%;
    margin-left: 71%;
    font-family: Roboto, Arial, Helvetica, sans-serif;
    cursor: pointer;
}
.edit:hover{
    background:#E5004E;
    color:white;
}
label{
    position:relative;
}
label img{
    position: absolute;
    top: 68%;
    right: 2%;
    cursor:pointer;
}
</style>