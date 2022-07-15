<template>
    <div>
        <div class="question">
            <h3>Pouvez vous nous en dire plus sur votre projet ?</h3>
        </div>
        <div class="choix">
            <div class="vente">
                <p class="titre">Pour Vendre</p>
                <div class="all">
                    <div class="check" v-for="vente in questionVendre" @click="changeShow()">
                        <label class="checkinput">
                            <p>{{ vente }}</p>
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                </div>


            </div>
            <div class="vente">
                <p class="titre">Pour Acheter</p>
                <div class="all">
                    <div class="check" v-for="vente in questionAchat" @click="changeHidden()">
                        <label class="checkinput">
                            <p>{{ vente }}</p>
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                </div>

            </div>
        </div>

    </div>

</template>

<script >
export default {
    name: 'navbar',
    props: {
        title: String
    },
    data() {
        return {
            questionVendre: [
                "Je vends pour acheter un véhicule neuf",
                "Je vends pour acheter un véhicule d'occasion",
                "Je vends sans projet d'achat d'un autre véhicule",
            ],
            questionAchat: [
                "Je cote le véhicule que je veux acheter",
                "Je veux acheter un véhicule d'occasion",
                "Autre (Accident, Vol, Legs, succession, etc.)",
            ],  
        }
    },
    methods: {
        changeShow() {
            this.$emit('open', true);
        },
        changeHidden() {

            this.$emit('close');
        }
    },
}

</script>

<style  scoped>
.question {
    margin-top: 30px;
}

.checkinput {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.checkinput input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.checkinput:hover input~.checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.checkinput input:checked~.checkmark {
    background-color: #E5004E;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.checkinput input:checked~.checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.checkinput .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}

.choix {
    display: flex;
    justify-content: space-between;
    width: 93%;
}

.titre {
    text-decoration: 2px underline #8C8C8C;
    font-size: 18px;
    font-weight: bold;
    color: #8C8C8C;
}

@media(max-width: 768px) {}

@media(max-width: 480px) {
    .choix {
        flex-direction: column;
    }
}
</style>
