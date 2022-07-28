

<template>

<div class="choice">
<div class="actifUsers" :class="{ active: actif }" v-on:click="ChangeTable('actif')"><a>Utilisateur actif</a></div>
<div class="banniUsers" :class="{ active: banni }" v-on:click="ChangeTable('banni')"><a>Utilisateur banni</a></div>
</div>
<div class="content">


  <div class="table-header"><input class="input-search" placeholder="cherecher ..." @change="get" v-model="keyword"><div>you have {{count}} in the result</div></div>

<div class="wrapper">
    <h3 style="text-align:center;">{{ headerTable }}</h3>
  <div class="table" v-if="actif">
    
    <div class="row header">
      <div class="cell">
        Nom et Prenom
      </div>
      <div class="cell">
        E-mail
      </div>
      <div class="cell">
        Telephone
      </div>
      <div class="cell">
        Nombre de calc
      </div>
      <div class="cell">
        Vehicules
      </div>
      <div class="cell">
        Interdire
      </div>
    </div>
    
    
    <div class="row" v-for="(user,index) in itemsSearch.slice(this.firstrow,this.lastrow) " :key="index">
      <div class="cell" data-title="Nom" v-html="highlightMatches(user.name)">
      </div>
      <div class="cell" data-title="mail" >
       {{user.email}}
      </div>
      <div class="cell" data-title="Telephone" v-html="highlightMatches(user.phone)">
      </div>
      <div class="cell" data-title="calc">
        8 Calc
      </div>
      <div class="cell" data-title="Vehicules" v-on:click="morePage(user.name)">
        Voir plus
      </div>
      <div class="cell interdire" data-title="Interdire">
        Interdire
      </div>
    </div>

    
  </div>
  <div class="table" v-if="banni">
    
    <div class="row header">
      <div class="cell">
        Nom et Prenom
      </div>
      <div class="cell">
        E-mail
      </div>
      <div class="cell">
        Telephone
      </div>
      <div class="cell">
        Nombre de calc
      </div>
      <div class="cell">
        Vehicules
      </div>
      <div class="cell">
        Débloquer
      </div>
    </div>
    
    
    <div class="row" v-for="(user,index) in itemsSearch.slice(this.firstrow,this.lastrow) " :key="index">
      <div class="cell" data-title="Nom" v-html="highlightMatches(user.name)">
      </div>
      <div class="cell" data-title="mail" >
       {{user.email}}
      </div>
      <div class="cell" data-title="Telephone" v-html="highlightMatches(user.phone)">
      </div>
      <div class="cell" data-title="calc">
        8 Calc
      </div>
      <div class="cell" data-title="Vehicules">
        Voir plus
      </div>
      <div class="cell débloquer" data-title="Interdire">
        Débloquer
      </div>
    </div>

    
  </div>
  
</div>

<div class="pagination">
  <div class="div-precedent"><div class="precedent" v-on:click="precedent()"><a>Précédent</a></div><div class="disable" v-if="disabled"></div></div>
  <div class="pages">
    <div v-for="numberpage in page.slice(this.start,this.last)" v-on:click="nextpage(numberpage)" :class="{ checked: selected == numberpage }"><a>{{numberpage}}</a></div>
  </div>
  <div class="div-suivant"><div class="suivant" v-on:click="suivant()"><a>Suivant</a></div><div class="disable" v-if="disable"></div></div>
</div>




</div>

</template>

<script>
export default {
    name: 'table',
    props: {
        msg: String
    },
    data(){
      return{
        users:[
                {name:"Abdellah Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"1" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"2" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"3" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"4" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"5" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"6aaz" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"7" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"8" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"9" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"0" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"8" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"9" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"0" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"4" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"4" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"4" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"8" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"9" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"0" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"8" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"9" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"0" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"8" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"9" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"0" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"8" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"9" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"0" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"8" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"9" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"0" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"8" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"9" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"0" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"42" },
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com" ,phone:"8" },
                ],
                pages:null,
                page:[],
                start:0,
                last:3,
                selected : 1,
                disabled : true,
                disable : false,
                firstrow: 0,
                lastrow:15,
                keyword: '',
                itemsSearch:[],
                count: null,
                actif :true,
                banni :false,
                headerTable: "Tableau des utilisateurs actif",
      }
    },
    mounted(){
      console.log(this.users.length);
      this.count = this.users.length;
      this.itemsSearch = this.users;
     let pagination = this.users.length/15;
     this.pages = Math.ceil(pagination);
      for(let i = 0 ; i < this.pages ; i++){
        this.page.push(i+1);
      }

      
    },

    methods:{
      nextpage(page){
          let index = page-1;
          let count = this.page.length;
          if(page == count-1){
            this.start = index-1;
            this.last = index + 2;
          }else if(page == count){
            this.disable = true;
          }else{
            this.start = index;
            this.last = index + 3;
          }
          this.selected = page;
          if(this.selected == this.page.length){
            this.disable = true;
          }else{
            this.disable = false;
          }
          if(this.selected == 1){
            this.disabled = true;
          }else{
            this.disabled = false;
          }
          this.changetable(page);
      },
      precedent(){
        this.disable = false;
        if(this.start == 0){
          this.selected -= 1;
        }else{
          this.start -= 1;
          this.last -= 1;
          this.selected -= 1;
        }
        if(this.selected == 1){
          this.disabled = true;
        }
        this.changetable(this.selected);
      },
      suivant(){
        this.disabled = false;
        if(this.start == this.page.length-3){
          this.selected += 1;
        }else{
          this.start += 1;
          this.last += 1;
          this.selected += 1;
        }
        if(this.selected  == this.page.length){
        this.disable = true;
      }
      this.changetable(this.selected);
      },
      changetable(index){
        this.firstrow = (index-1) * 15;
        this.lastrow = (index) * 15;
        console.log(this.firstrow);
        console.log(this.lastrow);
      },
      get(){
            this.itemsSearch = this.users.filter(user => {
              const name = user.name.toString().toLowerCase();
              const phone = user.phone.toLowerCase();
              const searchTerm = this.keyword.toLowerCase();
              return (
                name.includes(searchTerm) || phone.includes(searchTerm)
              );
            });
            this.start = 0;
            this.last = 3;
            this.firstrow = 0;
            this.lastrow = 15;
            this.selected = 1;
            this.disabled = true;
            
            let pagination = this.itemsSearch.length/15;
            this.pages = Math.ceil(pagination);
            this.page = [];
            console.log("page" ,this.page);
              for(let i = 0 ; i < this.pages ; i++){
                this.page.push(i+1);
              }
            this.count = this.itemsSearch.length;
            if(this.page.length != 3){
              this.disable = false;
            }
        },
        ChangeTable(type){
          if(type == "actif"){
            this.headerTable = "Tableau des utilisateurs actif";
            this.actif = true;
            this.banni = false;
          }else{
            this.headerTable = "Tableau des utilisateurs banni";
            this.actif = false;
            this.banni = true;
          }
        },
        morePage(user){
          window.location = "./more?user="+user;
        },


        highlightMatches(text) {
      const matchExists = text
        .toLowerCase()
        .includes(this.keyword.toLowerCase());
      if (!matchExists) return text;

      const re = new RegExp(this.keyword, "ig");
      return text.replace(re, matchedText => `<strong>${matchedText}</strong>`);
    }
    }
}
</script>


<style scoped>
.content{
width: 96%;position:relative; padding: 2% 2%; background: white; border-radius: 0 5px 5px 5px; box-shadow: 0 0 12px -4px black; display: flex; flex-direction: column; align-items: center;
}

.wrapper {
margin: 0 auto; padding: 3% 1%; width: 98%;
}



.table {
width: 100%; display: table; border-spacing: 2px;text-align: center;
    font-size: 14px;
}


.row {
  display: table-row;
}
.row.header {
  font-weight: 900;
  background: #66666621;
}


.cell {
  padding: 6px 12px;
  display: table-cell;
  border: solid 1px black;
}
.row:hover{
  background: #66666621;
}
.pagination{
    display: flex;
    width: 55%;
    justify-content: space-between;
    color: #666666;
}

.pages{
    display: flex;
    justify-content: space-around;
    width: 30%;
}

.pages div{
border: solid 1px #9b9b9b; padding: 7% 11%;text-align: center;cursor: pointer;
}
.pages div:hover , .precedent:hover , .suivant:hover{
  transition: 1s;
  background:#E5004E;
  color:white;
}

.suivant, .precedent{
    border: solid 1px #9b9b9b;
    padding: 9% 12%;
    width: 71%;
    text-align: center;
    cursor: pointer;
}
.div-precedent, .div-suivant{
    width: 23%;
    position: relative;
}
.interdire:hover{
  transition: 1s;
  background:#E5004E;
  color:white;
  cursor:pointer;
}
.débloquer:hover{
  transition: 1s;
  background:#4eca8a;
  color:white;
  cursor:pointer;
}
.checked{
  background:#E5004E;
  color:white;
}

.disable{
    background: #ffffff6b;
    width: 100%;
    height: 100%;
    top: 0;
    POSITION: absolute;
    LEFT: 0;
}

.table-header{
  display: flex;
    justify-content: space-between;
    align-items: center;
    width: 97%;
    font-size: 14px;
    color: #E5004E;
}
.input-search{
  height: 30px;
    width: 25%;
    font-weight: 500;
}
.input-search:focus{
  outline: none;
  font-size: 14px;
}


@media (max-width: 480px) {
  .content[data-v-5df100ea] {
    padding: 2% 2%;
    background: white;
    border-radius: 5px;
    box-shadow: 0 0 12px -4px black;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 5%;
}
.table-header[data-v-5df100ea] {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 97%;
    font-size: 14px;
    color: #E5004E;
    height: 53px;
    font-size: 10px;
}

.wrapper[data-v-5df100ea] {
    margin: 0 auto;
    padding: 3% 1%;
    width: 98%;
    overflow-x: auto;
}

.table[data-v-5df100ea] {
    width: 100%;
    display: table;
    border-spacing: 2px;
    text-align: center;
    font-size: 14px;
}

.pagination[data-v-5df100ea] {
    display: flex;
    width: 96%;
    justify-content: space-between;
    color: #666666;
    font-size: 12px;
}

}

.choice{
  
    display: flex;
    justify-content: space-between;
    width: 54%;

}
.actifUsers{
background: #ffffff;
    padding: 3% 12%;
    border-radius: 5px 5px 0 0;
    cursor: pointer;
}
.banniUsers{
    background: #ffffff;
    padding: 3% 12%;
    border-radius: 5px 5px 0 0;
    cursor: pointer;
}
.active{
  z-index:1;
}
</style>
