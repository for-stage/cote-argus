<template>
    <div class="about">
        <h1>About</h1>
        <p>This is the about page</p>
        <button @click="fetchData">warak hnaya</button>
    </div>




</template>
<script>
//use ajax to get data from server
import axios from 'axios';
    export default {
        name: 'AboutView',
        data() {
            return {
                message: 'Welcome to Your Vue.js App'
            }
        },
        methods: {
            fetchData() {
                axios.get('http://localhost:8000/api/test')
                    .then(function(response) {
                        console.log(response.data);
                    
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
        },

        created() {
            this.fetchData();
        }
    }

</script>