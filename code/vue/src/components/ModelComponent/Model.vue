<template>
<div class="model">
    <h3 class="title">Fiesta</h3>
</div>

  
</template>

<script>
export default {
  name: 'Model',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped >
.model{
    width: 30%;
    height: 70px;
    background-color: #EEEEEE;
    border-radius: 10px;
    border : solid 2px #909090;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor:pointer;
    margin-bottom: 15px;

}
.model:hover{
    background-color: #E5004E;
    transition: 1s;
    border: solid 2px #E5004E;
}
.model:hover .title{
    color: white;

   
}

.btn:focus {
  outline: none;
}

.btn:active {
  transform: scale(0.98);
}

.title{
    font-size: 25px;
    font-weight: 500;
    color: #717171;
}

@media( max-width: 768px){
    .model{
        width: 48%;
     
    }  
}
@media( max-width: 480px){
    .model{
        width: 80%;
       
    }

    
}


</style>
