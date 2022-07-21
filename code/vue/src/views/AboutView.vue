<template>
    <div class="about">
        <div class="erreur">
            <ul>
                <li v-for="erro in error">
                    {{ erro }}
                </li>
            </ul>

        </div>
        <form @submit.prevent="addAnimal" novalidate>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" v-model="newAnimal.name">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" class="form-control" id="age" v-model="newAnimal.type">
            </div>
            <div class="form-group">
                <label for="species">Species</label>
                <input type="text" class="form-control" id="species" v-model="newAnimal.color">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    //List of animals


    <h1 v-for="animal in animals">


        {{ animal.name }} {{ animal.type }} {{ animal.id }} <button @click="deleteAnimal(animal.id)">delete</button></h1>




</template>
<script>
//use ajax to get data from server
import axios from 'axios';
import router from '../router';
export default {
    name: 'AboutView',
    data() {
        return {
            animals: [],
            newAnimal: {
                name: '',
                type: '',
                color: '',
            },
            error: [],

        }
    },
    created() {
        // this.fetchData();
        this.getAnimals();
    },
    mounted() {
        this.getAnimals();

    },
    methods: {
        fetchData() {
            axios.get('http://localhost:8000/api/test')
                .then(function (response) {
                    console.log(response.data);

                })
                .catch(error => {
                    console.log(error);
                });
        },
        async getAnimals() {
            try {
                const response = await axios.get('http://localhost:8000/api/animals');
                this.animals = response.data;
                console.log(JSON.stringify(this.animals));
            }
            catch (error) {
                console.log(error);
            }
        },
        // add animal to database
        async addAnimal() {
            this.error = [];
            if (!this.newAnimal.name) {
                this.error.push('Name is required');
            }
            if (!this.newAnimal.type) {
                this.error.push('Type is required');
            }
            if (!this.newAnimal.color) {
                this.error.push('Color is required');
            }
            if (!this.error.length) {
                let formData = new FormData();
                formData.append('name', this.newAnimal.name);
                formData.append('type', this.newAnimal.type);
                formData.append('color', this.newAnimal.color);
                try {
                    await axios.post('http://localhost:8000/api/animals', formData)
                    .then(function (response) {
                      
                        alert(response.data.message);
                        // this.newAnimal=null;
                        // this.getAnimals();
                          
                       
                       
                    })
                     this.getAnimals();
                    this.newAnimal = null;
                   
                }
                catch (error) {
                    console.log(error);
                }


            }

        },
        // delete animal from database
        deleteAnimal(id) {
            //windows alert confirm
            if (confirm('Are you sure you want to delete this animal?')) {
                axios.delete('http://localhost:8000/api/animals/' + id)
                    .then(response => {
                        console.log(response);
                        this.getAnimals();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
            // axios.delete('http://localhost:8000/api/animal/' + id);
            // this.getAnimals();
            //  axios.delete('http://localhost:8000/api/animal/${id}');

        }



    },


}

</script>