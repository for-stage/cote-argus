

<template>

    <div class="date-choice">
        <div class="header">
            <h3>Date de mise en circulation*</h3>
        </div>
        <div class="div-choice">
            <div class="choice">
                <div class="card">
                    <p class="title"> {{ month }}</p>
                </div>
                 <div class="card">
                    <p class="title"> {{ year }}</p>
                </div>

            </div>
        </div>
    </div>

</template>

<script >



export default {
    name: 'DateChoice',
    props: {
        month: String,
        year: String,
    },

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
}

.date-choice {
    margin-top: 5%;
}

.choice {
    display: flex;
    justify-content: space-between;
    width: 60%;
}

.card {
    width: 45%;
    display: flex;
    flex-direction: column;
}

.div-choice {
    display: flex;
    justify-content: center;
}
</style>