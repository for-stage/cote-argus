<!-- 

<template>

<div class="content">
    <div id="app">
  
  <table>
    <thead>
      <tr>
        <th @click="sort('name')">Name</th>
        <th @click="sort('age')">Age</th>
        <th @click="sort('breed')">Breed</th>
        <th @click="sort('gender')">Gender</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="cat in sortedCats">
        <td>{{cat.name}}</td>
        <td>{{cat.age}}</td>
        <td>{{cat.breed}}</td>
        <td>{{cat.gender}}</td>
      </tr>
    </tbody>
  </table>
  <p>
  <button @click="prevPage">Previous</button> 
  <button @click="nextPage">Next</button>
  </p>
  
  debug: sort={{currentSort}}, dir={{currentSortDir}}, page={{currentPage}}
</div>
</div>

</template>
<script >
const app = new Vue({
  el:'#app',
  data:{
    cats:[],
    currentSort:'name',
    currentSortDir:'asc',
    pageSize:3,
    currentPage:1
  },
  created:function() {
    fetch('https://www.raymondcamden.com/.netlify/functions/get-cats')
    .then(res => res.json())
    .then(res => {
      this.cats = res;
    })
  },
  methods:{
    sort:function(s) {
      //if s == current sort, reverse
      if(s === this.currentSort) {
        this.currentSortDir = this.currentSortDir==='asc'?'desc':'asc';
      }
      this.currentSort = s;
    },
    nextPage:function() {
      if((this.currentPage*this.pageSize) < this.cats.length) this.currentPage++;
    },
    prevPage:function() {
      if(this.currentPage > 1) this.currentPage--;
    }

  },
  computed:{
    sortedCats:function() {
      return this.cats.sort((a,b) => {
        let modifier = 1;
        if(this.currentSortDir === 'desc') modifier = -1;
        if(a[this.currentSort] < b[this.currentSort]) return -1 * modifier;
        if(a[this.currentSort] > b[this.currentSort]) return 1 * modifier;
        return 0;
      }).filter((row, index) => {
        let start = (this.currentPage-1)*this.pageSize;
        let end = this.currentPage*this.pageSize;
        if(index >= start && index < end) return true;
      });
    }
  }
})
</script>
<style  scoped>
.content{
    width: 96%;
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
.statis{
        display: flex;
    align-items: center;
    justify-content: space-between;
    width: 98%;
    padding:2%;
}
.div{
    display: flex;
    align-items: center;
    width: 25%;
}
.icon {
    border-radius: 37px;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.one{
    background: #F7B924;
}
.two{
    background: #DD3B62;
}
.three{
    background: #4ECA8A;
}
.info{
    margin-left: 5%;
}
.info h2{
    margin-top: 5%;
}
.info p{
    margin-bottom:0;
}
label{
    position:relative;
}
label img{
    position: absolute;
    top: 68%;
    right: 2%;
    cursor:pointer;
}
td, th {
  padding: 5px;
}

th {
  cursor:pointer;
}
</style> -->