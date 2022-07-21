

<template>

<div class="content">
    <h3>Les statistiques de Cote argus</h3>
    <div class="vertical"></div>
    <div class="statis">
        <div class="div">
            <div class="icon one"><img src="../../assets/visit.svg"></div>
            <div class="info">
                <p>Total visiteur</p>
                <h2>1,7M</h2>
            </div>
        </div>
        <div class="div">
            <div class="icon two"><img src="../../assets/client.svg"></div>
            <div class="info">
                <p>Utilisateur Calc</p>
                <h2>90,4k</h2>
            </div>
        </div>
        <div class="div">
            <div class="icon three"><img src="../../assets/sms.svg"></div>
            <div class="info">
                <p>SMS envoyer</p>
                <h2>76,6K</h2>
            </div>
        </div>
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
            
        }
    },
     methods: {
        
  },

}
</script>
<style  scoped>
.content{
    width: 96%;
    padding: 5px 15px;
    background: white;
    border-radius: 5px;
    box-shadow: 0 0 12px -4px black;
}
.vertical{
    height: 0.5px;
    background: #D9D9D9;
}
.h3{
    font-size: 25px;
    font-weight: 400;
}
.statis{
        display: flex;
    align-items: center;
    justify-content: space-between;
    width: 98%;
    padding:2%;
}
.div{
    display: flex;
    align-items: center;
    width: 25%;
}
.icon {
    border-radius: 37px;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.one{
    background: #F7B924;
}
.two{
    background: #DD3B62;
}
.three{
    background: #4ECA8A;
}
.info{
    margin-left: 5%;
}
.info h2{
    margin-top: 5%;
}
.info p{
    margin-bottom:0;
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