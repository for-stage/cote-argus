<script >
export default {
    name: 'carburant',
    props: {
    },
    data() {
        return {
            keyword: null ,
        }
    },
     methods: {
        get(){
            this.$emit('keyword', this.keyword);
        }
  },
  

}
</script>

<template>

<div class="search-bar">
    <div class="search">
    <input type="text" name="search" placeholder="Chercher ..." v-model="keyword">
    <div class="search-btn" v-on:click="get">
       <a><img src="../assets/search-icon.png"></a> 
    </div>
    
    </div>
</div>

</template>

<style  scoped>

.search a {
    display: flex;
    align-items: center;
    justify-content: center;
}
.search input {
    border: solid 2px #E5004E;
    width: 98%;
    height: 100%;
    border-radius: 5px;
    color: #393939;
    font-size: 18px;
    padding: 0 0 0 1%;
}
.search input:focus{
    outline:none;
    background: #e5004e14;
}
.search {
    width: 50%;
    position: relative;
    height: 40px;
}
.search img{
    width:100%;
    }
.search-bar{
display: flex;
    justify-content: center;
}
.search-btn{
    background: #E5004E;
    position: absolute;
    padding: 0% 3%;
    width: 3%;
    height: 109%;
    right: 0%;
    top: 0.5px;
    border-radius: 0 5px 5px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

@media( max-width: 768px){
 .search{
    width: 77%;
    }
    .search-btn{
        width:4%;
    }
}
@media( max-width: 480px){
    .search{
    width: 80%;
    }
    .search-btn{
        width:6%;
    }
}


</style>