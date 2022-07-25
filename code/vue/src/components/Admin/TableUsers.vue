

<template>

<div class="content">

<div class="wrapper">
  
  <div class="table">
    
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
    
    
    <div class="row" v-for="(user,index) in users" :key="index">
      <div class="cell" data-title="Nom">
        {{user.name}}
      </div>
      <div class="cell" data-title="mail">
       {{user.email}}
      </div>
      <div class="cell" data-title="Telephone">
        0666666666
      </div>
      <div class="cell" data-title="calc">
        8 Calc
      </div>
      <div class="cell" data-title="Vehicules">
        Voir plus
      </div>
      <div class="cell interdire" data-title="Interdire">
        Interdire
      </div>
    </div>

    
  </div>
  
</div>

<div class="pagination">
  <div class="precedent"><a>Précédent</a></div>
  <div class="pages">
    <div><a>2</a></div>
    <div><a>3</a></div>
    <div><a>4</a></div>
  </div>
  <div class="suivant"><a>Suivant</a></div>
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
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com"},
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com"},
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com"},
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com"},
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com"},
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com"},
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com"},
                {name:"Ayoub Basidi" , email:"ayoubbasidi@gmail.com"},
                ]
      }
    },
}
</script>


<style scoped>
.content{
width: 96%; padding: 2% 2%; background: white; border-radius: 5px; box-shadow: 0 0 12px -4px black; display: flex; flex-direction: column; align-items: center;
}

.wrapper {
margin: 0 auto; padding: 3% 1%; width: 98%;
}

.table {
width: 100%; display: table; border-spacing: 2px;text-align: center;
    font-size: 14px;
}
@media screen and (max-width: 580px) {
  .table {
    display: block;
  }
}

.row {
  display: table-row;
}
.row.header {
  font-weight: 900;
  background: #66666621;
}
@media screen and (max-width: 580px) {
  .row {
    padding: 14px 0 7px;
    display: block;
  }
  .row.header {
    padding: 0;
    height: 6px;
  }
  .row.header .cell {
    display: none;
  }
  .row .cell {
    margin-bottom: 10px;
  }
  .row .cell:before {
    margin-bottom: 3px;
    content: attr(data-title);
    min-width: 98px;
    font-size: 10px;
    line-height: 10px;
    font-weight: bold;
    text-transform: uppercase;
    color: #969696;
    display: block;
  }
}

.cell {
  padding: 6px 12px;
  display: table-cell;
  border: solid 1px black;
}
.row:hover{
  background: #66666621;
}
@media screen and (max-width: 580px) {
  .cell {
    padding: 2px 16px;
    display: block;
  }
}
.pagination{
display: flex; width: 55%; justify-content: space-between;color:#666666;
}
.precedent{
border: solid 1px #9b9b9b; padding: 3% 5%; width: 19%;text-align: center;cursor:pointer;
}
.precedent:hover{
  transition: 1s;
  background:#E5004E;
  color:white;
}

.pages{
display: flex; justify-content: space-around; width: 39%;
}

.pages div{
border: solid 1px #9b9b9b; padding: 7% 11%;text-align: center;cursor: pointer;
}
.pages div:hover{
  transition: 1s;
  background:#E5004E;
  color:white;
}

.suivant{
border: solid 1px #9b9b9b; padding: 3% 5%; width: 19%; text-align: center;cursor: pointer;background:white;
}
.suivant:hover{
  transition: 1s;
  background:#E5004E;
  color:white;
}
.interdire:hover{
  transition: 1s;
  background:#E5004E;
  color:white;
  cursor:pointer;
}
</style>
