<template>
   
</template>

<script>
// import {pagination} from 'vue-bootstrap-pagination'
export default {
    name: 'Dashboard',
    components: {
       
    },
    data() {
        return {
            perPage: 3,
            currentPage: 1,
            items: [
                { id: 1, first_name: 'Fred', last_name: 'Flintstone' },
                { id: 2, first_name: 'Wilma', last_name: 'Flintstone' },
                { id: 3, first_name: 'Barney', last_name: 'Rubble' },
                { id: 4, first_name: 'Betty', last_name: 'Rubble' },
                { id: 5, first_name: 'Pebbles', last_name: 'Flintstone' },
                { id: 6, first_name: 'Bamm Bamm', last_name: 'Rubble' },
                { id: 7, first_name: 'The Great', last_name: 'Gazzoo' },
                { id: 8, first_name: 'Rockhead', last_name: 'Slate' },
                { id: 9, first_name: 'Pearl', last_name: 'Slaghoople' }
            ]
        }
    },
    computed: {
        rows() {
            return this.items.length
        }
    }
}
</script>