<template>

<div class="container">
    <div class="infosUser">
        <div><p>{{user}}</p></div>
        <div><p>ayoubbasidi@gmail.com</p></div>
        <div><p>+212681530508</p></div>
    </div>
    <div class="filter">
        <div class="filterByRaison">
        <div><p>Pour Vendre</p></div>
        <div><p>Pour Acheter</p></div>
        </div>div>
        <div class="filterBySearch">
            <input type="text">
        </div>
    </div>
    <div class="vhehicules">
        <div>
            <div class="image"><img src="#"></div>
            <div>
                <div class="vehicule">
                    <p>Vehicule :</p>
                    <h3>Mini Focus Fiesta 4 portes 4 null Ch 1,2 l (1 248 cm³) 1000 KM</h3>
                </div>
                <div>
                    <div class="date">
                        <p>Date de Calc :</p>
                        <h3>2021-01-01</h3>
                    </div>
                    <div class="raison">
                        <p>Raison :</p>
                        <h3>Pour Vendre</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</template>
<script>
export default {
    name: 'MarqueView',
    data(){
        return{
            user:'',
        }
    },
    mounted() {
        this.user = this.$route.query.user;
    }
}
</script>

<style>

.container{
}

</style>