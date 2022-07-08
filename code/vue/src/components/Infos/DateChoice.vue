

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
        month: {
            type: String,
            default: "hhhhhhh",
        },

        year: String,
    },

}
</script>
<style  scoped>
.card {
    border-radius: 10px;
    width: 30%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-top: 2%;
    background:#E5004F;
    color: white;
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