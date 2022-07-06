<template>
    <div>
        <div class="question">
            <h3>Pouvez vous nous en dire plus sur votre projet ?</h3>
        </div>
        <div class="choix">
            <div class="vente">
            <p class="titre">Pour vendre</p>
                <div class="all">
                <div class="check">
                    <label class="checkinput"> <p>Pouvez vous nous en dire plus sur votre projet</p> 
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                 <div class="check">
                    <label class="checkinput"> <p>Pouvez vous nous en dire plus sur votre projet</p>
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                 <div class="check">
                    <label class="checkinput"> <p>Pouvez vous nous en dire plus sur votre projet</p>
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                 <div class="check">
                    <label class="checkinput"> <p>Pouvez vous nous en dire plus sur votre projet</p>
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                </div>


            </div>
            <div class="vente" >
                <p class="titre">Pour acheter</p>
                <div class="all">
                <div class="check">
                    <label  class="checkinput"> <p>Pouvez vous nous en dire plus sur votre projet</p> 
                        <input  type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                 <div class="check">
                    <label class="checkinput"> <p>Pouvez vous nous en dire plus sur votre projet</p>
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                 <div class="check">
                    <label class="checkinput"> <p>Pouvez vous nous en dire plus sur votre projet</p>
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                 <div class="check">
                    <label class="checkinput"> <p>Pouvez vous nous en dire plus sur votre projet</p>
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
    }
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
  font-size: 22px;
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
.checkinput:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.checkinput input:checked ~ .checkmark {
  background-color: #E5004E;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.checkinput input:checked ~ .checkmark:after {
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

}
.titre{
        text-decoration: 2px underline #8C8C8C;
        font-size: 20px;
        font-weight: bold;
        color: #8C8C8C;
}
</style>
