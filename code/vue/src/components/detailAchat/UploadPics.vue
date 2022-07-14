

<template>

<div class="upload">
    <div class="input-upload">
        <div class="title">
        <h3>Téléchargez des images de véhicules</h3>
        </div>
        <a @click="$refs.file.click()" @dragover.prevent @drop.prevent>
        <div class="input" @drop="dragFile">
            <p>Faites Glisser ou <a>Téléchargez</a> des images de véhicules</p>
            <input hidden type="file" @change="uploadFile" ref="file" multiple />
        </div>
        </a>
    </div>
        
    <div class="pictures-uploaded">
        <div class="picture-uploaded" v-for="(image, index) in images" :key="image.id">
            <img class="picture" :src="'../../src/assets/'+image.name">
            <a @click="deletePic(index)"><img class="delete" src="../../assets/delete.png"></a>
        </div>
       
          
</div>


    </div>

</template>
<script >
import { remove } from '@vue/shared';

export default{

data() {
        return {
<<<<<<< HEAD
           filelist: []
=======
           images : [],
        //    arr : ['foo', 'bar', 10, 'qux'],
            arr : [0,1,2]


>>>>>>> 1d4d97c414230bfcf2911d2a505aa636c89cd4da
        }
    },
    methods: {
      dragFile(e) {
        if (e.dataTransfer.files.length > 5) {
        alert(`Only 5 files are allowed to upload.`);
        }else{
        this.filelist = [...this.$refs.file.files];
        }
      },
<<<<<<< HEAD
      onChange() {
        if (this.$refs.file.files.length > 5) {
        alert(`Only 5 files are allowed to upload.`);
        }else{
            this.filelist = [...this.$refs.file.files];
        }
    },
    remove(i) {
    console.log(this.filelist);
    this.filelist.splice(i, 1);
    console.log(this.filelist);
    },
=======
<<<<<<< HEAD
    deletePic(index) {
        console.log(this.images)
        console.log(JSON.stringify(this.images));
        // delete this.images[0][index];
        console.log(JSON.stringify(this.images[index]));
        this.images = this.images[0];
        console.log(JSON.stringify(this.images));
       
=======
      removePic(index) {
        const arr = Array.from(this.images);
        console.log(arr);
        console.log(index);
        this.arr.splice(index, 1);
    }
>>>>>>> 1d2217d750a8e3ef7b9a5b3f47e3ef1bab20c6c9
>>>>>>> 1d4d97c414230bfcf2911d2a505aa636c89cd4da
    },
     
  


}
}


</script>
<<<<<<< HEAD

<template>

<div class="upload">
    <div class="input-upload">
        <div class="title">
        <h3>Téléchargez des images de véhicules</h3>
        </div>
        <a  @dragover.prevent @drop.prevent>
        <div class="input" @drop="dragFile">
            <p>Faites Glisser ou <a>Téléchargez</a> des images de véhicules</p>
            <!-- <input type="file" @change="uploadFile"  multiple /> -->
            <input type="file" multiple name="fields[assetsFieldHandle][]" id="assetsFieldHandle" class="w-px h-px opacity-0 overflow-hidden absolute" @change="onChange" ref="file" accept=".pdf,.jpg,.jpeg,.png" />
        </div>
        </a>
    </div>
        
    <div class="pictures-uploaded">
        <div class="picture-uploaded" v-for="file in filelist">
            <img class="picture" :src="'../../src/assets/'+file.name">
            <!-- <p>{{image.name}}</p> -->
            <a @click="remove(filelist.indexOf(file))"><img class="delete" src="../../assets/delete.png"></a>
        </div>
</div>
<!-- <div class="flex w-full h-screen items-center justify-center text-center" id="app">
  <div class="p-12 bg-gray-100 border border-gray-300" @dragover="dragover" @dragleave="dragleave" @drop="drop">
    
  
    <label for="assetsFieldHandle" class="block cursor-pointer">
      <div>
        Explain to our users they can drop files in here 
        or <span class="underline">click here</span> to upload their files
      </div>
    </label>
    <ul class="mt-4" v-if="this.filelist.length" v-cloak>
      <li class="text-sm p-1" >
        ${ file.name }<button class="ml-2" type="button" @click="remove(filelist.indexOf(file))" title="Remove file">remove</button>
      </li>
    </ul>
  </div>
</div> -->

    </div>

</template>

=======
>>>>>>> 1d4d97c414230bfcf2911d2a505aa636c89cd4da
<style  scoped>

.input{
    background: #F4F4F4;
    padding: 5% 4%;
    background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='10' ry='10' stroke='red' stroke-width='4' stroke-dasharray='10%2c 15%2c 23%2c 11' stroke-dashoffset='36' stroke-linecap='square'/%3e%3c/svg%3e");
    border-radius: 10px;
    text-align: center;
    cursor:pointer;
}
.input:hover{
    background:#e5e5e5;
    padding: 5% 4%;
    background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='10' ry='10' stroke='red' stroke-width='4' stroke-dasharray='10%2c 15%2c 23%2c 11' stroke-dashoffset='36' stroke-linecap='square'/%3e%3c/svg%3e");
    border-radius: 10px;
}

.delete{
    width: 40%;
    cursor: pointer;
}
.input a{
    color:#E5004E;
    font-weight: bold;
    cursor:pointer;
}
<<<<<<< HEAD
/* input{
    display: none;
} */
[v-cloak] {
  display: none;
}
=======

>>>>>>> 1d4d97c414230bfcf2911d2a505aa636c89cd4da
.pictures-uploaded{
    display:flex;
    margin-top: 1%;
}
.picture-uploaded{
    width: 6%;
    height: 60px;
    position: relative;
    border-radius: 10px;
    margin-right: 2%;
}
    
.picture{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}

.picture-uploaded a{
        background: rgb(0 0 0 / 60%);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* text-align: center; */
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
}
.upload{
    margin-top:5%;
}

</style>