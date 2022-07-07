<template>
   <h1 v-onclick="hi">abouuuuuuuuuuuuuuuuuut {{value}}</h1>
   <YearCard @clicked="onClickChild"/>
</template>

<script>


import YearCard from '../components/Infos/YearCard.vue'
export default {
    name: 'navbar',
    props: {
        msg: String,
    },
    data(){
        return{
            value:""
        };
    },
        components: {
           YearCard
    },
    method:{
    hi () {
                 this.$emit('clicked', 'someValue')
    }
    },


}
</script>
<style scoped >

</style>
