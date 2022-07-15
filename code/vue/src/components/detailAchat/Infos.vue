<script >
export default {
    name: 'navbar',
    props: {
        title: String
    }
}

</script>

<template> 
    <div class="header">
        <div class="title">
            <h2>Votre véhicule : FORD Mondeo 2.0 EcoBlue 120ch Trend Business 5p (5 portes) - 1 000 km</h2>
        </div> 
    </div>

</template>

<style  scoped>
.header{
    display: flex;
    background: #E5004E;
    color: white;
    justify-content: center;
}
h2{
    font-weight: 600;
}
@media (max-width: 480px) {
    .title{
       font-size: 70%;
    text-align: center;
    padding: 0 2%;
    }

    
}
</style>
