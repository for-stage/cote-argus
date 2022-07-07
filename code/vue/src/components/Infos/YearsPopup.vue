
<template>
<div class="back-pop"   v-if="showPopup">
<div class="popup-years"  ref="popup" :style="top">
    <div class="header">
        <div class="title">
        <h3>Année de mise en circulation*</h3>
        </div>
        <div class="out">
            <a @click="getData"><img src="../../assets/out.png"></a>
        </div>
    </div>
    <div class="years" @click="showPopup=!showPopup"   >
        <YearCard v-for="(data,index) in Years" :key="index"  :year="data" @name="getYear"/>
       
    </div>
</div>
</div>
</template>

<script>

import YearCard from './YearCard.vue'

export default {
    name: 'YearsPopup',
    components: {
           YearCard
    },

    props: {
        msg: String,
        // value:String
    },

    data() {
         return {
           Years : [2022,2021,2020,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007],
            showPopup: true,
            top: 0,
            value: ""
        }
    },

    mounted() {
        let height=this.$refs.popup.clientHeight;
            this.top = height - 40;
            console.log(this.top);
            console.log(height);
    },

    computed: {
        top () {
            return {
                top: `${this.top}px`,
            }
        }
    },
    method:{
        getYear(value){
          this.value = value
        }
    }
}
</script>

<style  scoped>
.header{
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    width: 100%;
    color:#717171;
    text-align: center;
}
.popup-years{
    border: solid 2px #6C6C6C;
    position: fixed;
    background: white;
    border-radius: 8px;
    padding: 0% 2% 2%;
    top: 160px;
    left: 30%;
    width: 35%;
}
.years{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top:2%;
}
.out{
    width:7%;
    cursor: pointer;
}
.out img{
    width:100%;
}
.title{
    height: 50px;
    border-bottom: solid 1px #bfbfbf;
    width:100%;
}
.back-pop{
    /* display:none; */
    background: rgb(0 0 0 / 40%);
    width: 100%;
    position: fixed;
    height: 100%;
    top: 0;
    left: 0;
}

@media( max-width: 768px){
.popup-years{
    left: 15%;
    width: 66%;
}

}
@media( max-width: 480px){
.popup-years{
    left: 7%;
    width: 80%;
}

h3{
    font-size:15px;
}

}

</style>