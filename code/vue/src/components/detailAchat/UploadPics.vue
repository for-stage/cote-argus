<script >
export default{

data() {
        return {
           images : null,
        }
    },
    methods: {
      uploadFile() {
        if (this.$refs.file.files.length > 5) {
        alert(`Only 5 files are allowed to upload.`);
        }else{
            this.images = this.$refs.file.files;
        }
      },
      dragFile(e) {
        if (e.dataTransfer.files.length > 5) {
        alert(`Only 5 files are allowed to upload.`);
        }else{
        this.images = e.dataTransfer.files;
        }
      },
      removePic(index) {
        const arr = Array.from(this.images);
        console.log(arr);
        console.log(index);
        this.arr.splice(index, 1);
    }
    },

}


</script>

<template>

<div class="upload">
    <div class="input-upload">
        <div class="title">
        <h3>Téléchargez des images de véhicules</h3>
        </div>
        <a @click="$refs.file.click()" @dragover.prevent @drop.prevent>
        <div class="input" @drop="dragFile">
            <p>Faites Glisser ou <a>Téléchargez</a> des images de véhicules</p>
            <input type="file" @change="uploadFile" ref="file" multiple />
        </div>
        </a>
    </div>
        
    <div class="pictures-uploaded">
        <div class="picture-uploaded" v-for="(image, index) in images" :key="image.id">
            <img class="picture" :src="'../../src/assets/'+image.name">
            <!-- <p>{{image.name}}</p> -->
            <a @click="removePic(index)"><img class="delete" src="../../assets/delete.png"></a>
        </div>
</div>

    </div>

</template>

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
}
.input a{
    color:#E5004E;
    font-weight: bold;
    cursor:pointer;
}
input{
    display: none;
}
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