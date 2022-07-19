<template>
<div class="back-pop">
<div class="popup-years"  ref="popup" :style="top">
    <div class="header">
        <div class="title">
        <h3>Année de mise en circulation*</h3>
        </div>
        <div class="out">
            <a @click="close">&#x2716</a>
        </div>
    </div>
    <div class="years"  >
   
            <div v-for="(year,index) in Years" :key="index"   class="year" @click="showDetailYear(year);nextstep();">
                <p>{{year}}</p>

        </div>
       
    </div>
</div>
</div>
</template>

<script>

export default {
    name: 'YearsPopup',
 

    props: {
        msg: String,
        // value:String
    },

    data() {
         return {
            yearSelected: {},
           Years : [2022,2021,2020,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007],
            top: 0,
            value: ""
        }
    },

    mounted() {
        let height=this.$refs.popup.clientHeight;
        this.top = height - 40;
    },

    computed: {
        top () {
            return {
                top: `${this.top}px`,
            }
        }
    },
    methods: {
    showDetailYear(year){
      this.yearSelected = year;
      this.$emit('clicked-show-detail', year);
      this.visibility();
    },
    visibility(){
        this.$emit('popupclose', false);
    },
    close(){
        this.$emit('close', false);     
    },
    nextstep(){
        this.$emit('step', 'step2');    
    }
  },
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
.out a{
    /* css hover a cercle hover */
    font-size: 20px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;

}
.out a:hover{
    color: #000000;
}
.title{
    height: 50px;
    border-bottom: solid 1px #bfbfbf;
    width:100%;
}
.back-pop{
    background: rgb(0 0 0 / 40%);
    width: 100%;
    position: fixed;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 10;
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

.year{
background: #e8e8e8;
    width: 24%;
    text-align: center;
    border-radius: 10px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #737373;
    margin-top: 2%;
    cursor: pointer;
    font-weight: bold;
}
.year:hover{
    background:#e5004e;
    color:white;
}

@media( max-width: 480px){

p{
    font-size:10px;
}

}
</style>