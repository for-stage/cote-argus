<template>

<div class="content">
    <div class="infosUser">
        <div><h4>Ayoub Basidi</h4></div>
        <div><h4>ayoubbasidi@gmail.com</h4></div>
        <div><h4>+212681530508</h4></div>
    </div>
    <div class="filter">
        <div class="filterByRaison">
        <div class="all choice"><p>Tous</p></div>
        <div class="vendre choice"><p>Pour Vendre</p></div>
        <div class="acheter choice"><p>Pour Acheter</p></div>
        </div>
        <div class="filterBySearch">
            <input class="search" type="text" placeholder="Recherche ...">
            <a class="search-icon"><img src="../assets/search.svg"></a>
        </div>
    </div>
    <div class="vehicules">
        <div class="vehicule">
            <div class="image"><img src="../assets/car1.jpg"></div>
            <div class="infos">
                <div class="name">
                    <p>Vehicule :</p>
                    <h3><span>Mini Focus Fiesta 4 portes 4 null Ch 1,2 l (1 248 cm³) 1000 KM</span></h3>
                </div>
                <div class="details">
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
        <div class="vehicule">
            <div class="image"><img src="../assets/car1.jpg"></div>
            <div class="infos">
                <div class="name">
                    <p>Vehicule :</p>
                    <h3><span>Mini Focus Fiesta 4 portes 4 null Ch 1,2 l (1 248 cm³) 1000 KM</span></h3>
                </div>
                <div class="details">
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
        <div class="vehicule">
            <div class="image"><img src="../assets/car1.jpg"></div>
            <div class="infos">
                <div class="name">
                    <p>Vehicule :</p>
                    <h3><span>Mini Focus Fiesta 4 portes 4 null Ch 1,2 l (1 248 cm³) 1000 KM</span></h3>
                </div>
                <div class="details">
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
            user:'Ayoub Basidi',
        }
    },
    mounted() {
        this.user = this.$route.query.user;
    }
}
</script>

<style scoped>

.content{
    display: flex;
    flex-direction: column;
    align-items: center;
    row-gap: 15px;
    margin-top: 3%;
}
.infosUser{
    background: white;
    width: 60%;
    display: flex;
    justify-content: space-between;
    padding: 0.5% 2%;
    border-radius: 5px;
    box-shadow: 0 0 12px -7px black;
}
.filter{
    width: 64%;
    display: flex;
    justify-content: space-between;
    height: 40px;
    align-items: center;
}
.filterByRaison{
    display: flex;
    width: 50%;
    height: 100%;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
    color: #606060;
}

.vendre{
    padding: 0% 8%;
}
.acheter{
    padding: 0% 8%;
}

.all{
    padding: 0% 5%;

}

.choice{
    background: white;
    border-radius: 5px;
    height: 100%;
    display: flex;
    align-items: center;
    box-shadow: 0 0 12px -7px black;
    cursor: pointer;
}

.choice:hover{
    transition: 1s;
    background: #E5004E;
    
}
.choice:hover p{
    transition: 1s;
    color : white;
}
.filterBySearch{
    height: 99%;
    width: 36%;
    position:relative;
}
.search{
    height: inherit;
    padding: 0% 2%;
    width: 96%;
    border-radius: 5px;
    border: solid 1px #d1d1d1;
    font-size: 15px;
    box-shadow: 0 0 12px -7px black;
    outline: none;
}
.vehicules{
    width: 64%;
    display: flex;
    flex-direction: column;
    row-gap: 15px;
}
.vehicule{
    background: white;
    display: flex;
    border-radius: 5px;
    width: 100%;
    justify-content: space-between;
    box-shadow: 0 0 12px -7px black;
}
.image{
    width: 35%;
    display: flex;
}
.image img{
    width: 100%;
    border-radius: 5px 0 0 5px;
    object-fit: cover;
}
.infos{
    padding: 0px 3%;
    width: 78%;
    display: flex;
    flex-direction: column;
}
.details{
    display: flex;
    justify-content: space-between;
    width: 80%;
}
span{
    color:#E5004E;
}
p {
    color: #757575;
}
.search-icon{
    position: absolute;
    right: 3%;
    top: 28%;
    cursor:pointer;
}
</style>