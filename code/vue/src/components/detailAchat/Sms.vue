

<template> 
    <div class="">
        <div class="">
            <h2>Recevoir la Cote Argus par SMS</h2>
        </div> 
        <div>
            <input  type="text" placeholder="Votre numero de telephone">
            <input type="submit" value="Envoyer">
        </div>
    </div>

</template>
<script >
export default {
    name: 'navbar',
    props: {
        title: String
    }
}

</script>
<style  scoped>
input[type="text"]{
    width: 70%;
    height: 45px;
    border-radius: 5px;
    background-color: #F5F5F5;
    border: solid 1px #6F6F6F;
    padding: 0 10px;
    margin-bottom: 10px;
}

input:focus{
    outline:none;

}

input[type="submit"]{
    width: 10%;
    height: 46px;
    border-radius: 5px;
    background-color: #E5004E;
    color: white;
    font-size: 18px;
    border: none;
    cursor: pointer;
    margin-left: 1%;
    font-weight: 700;
    font-size: 14px;

}
</style>
