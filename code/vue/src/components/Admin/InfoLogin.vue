

<template>

<div class="content">
    <h3>Info de connexion</h3>
    <div class="vertical"></div>
    <div class="info">
        <form>
            <label for="name">
            <input id="name" type="text" name="fullname" value="Ayoub Basidi" disabled>
            </label>
            <label for="pass">
            <input id="pass" type="text" name="pwd" value="************" disabled>
            </label>
            <button>Edit</button>
            <button>Submit</button>
        </form>
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
    width: 25%;
    padding: 5px 15px;
    background: white;
    border-radius: 5px;
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