<template>
    <div id="{{month}}" class="card" v-on:click="getValue($e)">
        <p>{{ month }} </p>
    </div>
</template>
<script >
export default {
    name: 'MonthCard',
    data() {
        return {
            month: '',
            div: ''
        }
    },
    props: {
        month: String
    },
    methods: {
        getValue(e) {
            this.div = e.target.id;
            this.month = e.target.innerText;
            console.log(this.div);
            console.log(id);
            this.$emit('getValue', this.div);
        }

    }
}
</script>
<style  scoped>
.card {
    border: solid 2px #909090;
    border-radius: 10px;
    width: 30%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #717171;
    margin-top: 2%;
    background: #EEE;
    cursor: pointer;
}

.card:hover {
    background: #e5004e;
    color: #ffffff;
    border: solid 2px #E5004F;
    transition: 1s;
}
</style>