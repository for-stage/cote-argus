<script >
import Model from '../ModelComponent/Model.vue'
export default {
    name: 'NumeroPort',
    components: {
        Model
          
    },
    props: {
        msg: String
    }
}

</script>
<template>
<div class="nbr-porte">
    <div class="header"><h3>Carrosserie et nombre de portes*</h3></div>
    <div class="choice">
    <Model/> <Model/> <Model/>
    </div>
    <div class="info">
        <ul>
            <li>*3 portes : 2 portes + coffre avec un hayon (porte + vitre)</li>
            <li>4 portes : 4 portes seulement, le coffre est une malle c'est à dire sans vitre.</li>
            <li>5 portes : 4 portes + coffre avec un hayon (porte + vitre)</li>
        </ul>
    </div>
</div>
</template>

<style  scoped>

ul{
    list-style: none;
    border-top: solid 1px #A7A7A7;
    border-bottom: solid 1px #A7A7A7;
    width: 40%;
    font-size: 10px;
    padding: 2% 0;
    color: #717171;
}
.choice{
   display: flex;
   justify-content: space-around;
}
.sous-model {
    width: 101% ;
}

@media( max-width: 768px){
    ul{
        width: 80%;
    }  
}
@media( max-width: 480px){
    ul{
        width: 100%;
    }
    .search{
    width: 80%;
    }
}

</style>