
<template>
    <div class="nbr-porte">
        <div class="header">
            <h3>Carrosserie et nombre de portes*</h3>
        </div>
        <div class="choices">
        <div class="choice" v-for="(model,index) in models" :key="index"  >
            <div class="model"  :class="{ checkeddiv: selected == index }" v-on:click="giveStyle(index);nextstep();" >
                <h3 :class="{ checkedtitle: selected == index }" class="title">Fiesta <br><span>Fiesta {{model}} portes</span></h3>
            </div>
        </div>
     
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
<script >
export default {
    name: 'NumeroPort',
    props: {
        msg: String
    },
    data() {
        return {
            models: [
                3,4,5
            ],
            checked :false,
            selected : null,
        }
    },
    methods: {
    giveStyle(i) {
        this.selected = i;
    },
    nextstep(){
        this.$emit('step', 'step1');     
  }
  },
  
  mounted(){
    if(this.models.length == 1){
        this.selected= 0;
        console.log('hell yeah');
    }
  }
  
}

</script>
<style  scoped>
html {
  scroll-behavior: smooth;
}
.choices{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;


}

.model {
    width: 92%;
    height: 70px;
    background-color: #EEEEEE;
    border-radius: 10px;
    border: solid 2px #909090;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin-bottom: 15px;

}

.title {
    font-size: 25px;
    font-weight: 500;
    color: #717171;
    text-align: center;
}
.title span{
    font-size:18px;
}

.model:hover {
    transition: 1s;
    border: solid 2px #E5004E;
}

.checkeddiv {
    background-color: #E5004E;
    transition: 1s;
    border: solid 2px #E5004E;
}

.checkedtitle {
    color: white;
}

.btn:focus {
    outline: none;
}

.btn:active {
    transform: scale(0.98);
}

ul {
    list-style: none;
    border-top: solid 1px #A7A7A7;
    border-bottom: solid 1px #A7A7A7;
    width: 40%;
    font-size: 10px;
    padding: 2% 0;
    color: #717171;
}

.choice {
    width: 33%;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    flex-direction: column;

}

.choice a{
    text-decoration:none;
}

.sous-model {
    width: 101%;
}

@media(max-width: 768px) {
    ul {
        width: 80%;
    }
}

@media(max-width: 480px) {
    ul {
        width: 100%;
    }

    .search {
        width: 80%;
    }
    .model {
        width: 100%;

    }
    .choice{
        width: 80%;
    }
}

</style>