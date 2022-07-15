

<template>

<div class="content">
    <h3>Les statistiques de Cote argus</h3>
    <div class="vertical"></div>
    <div class="total">
        <div></div>
        <div class="some-info">
            <div>
                <h4>Statistique maximale</h4>
                <p>Mars : 393 Calc</p>
            </div>
            <div>
                <h4>Derniere mois</h4>
                <p>Mai : 97 Calc</p>
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
    width: 66%;
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
</style>