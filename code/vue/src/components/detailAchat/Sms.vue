

<template> 
<div class="kilometrage">
    <h3>Recevoir la Cote Argus par SMS</h3>
    <form class="kilometrage-form" @submit.prevent="sendSms">
    <div class="kilometrage-input">
        <input type="text" name="phone" v-model="sms.phone" placeholder="Votre numero de telephone">
        <input type="text" name="message" v-model="sms.message" placeholder="message">
    </div>
    <div class="kilometrage-btn">
        <button  type="submit" name="Send">Send</button>
    </div>
    </form>
</div>




</template>
<script >
import axios from 'axios';
// import { parsePhoneNumberFromString } from 'libphonenumber-js'
export default {
    name: 'navbar',
    props: {
        title: String
    },
    data() {
        return {
            sms:{
                phone:null,
                message:null,
                formattedPhone:null,
                sending : false,
            }
           
        }
    },
      methods: {
    valide(){
        this.$emit('valide', true);     
    },
    sendSms(){
        // alert("sent");

        const phoneNumber = parsePhoneNumberFromString(this.sms.phone, 'MA');
        if(!phoneNumber.isValid())
        {
            alert("Phone Number is not valid");
        }
        else
        {
            console.log(phoneNumber);
        }


        this.sms.formattedPhone = phoneNumber.number;
        console.log(this.sms.formattedPhone);
        this.sms.sending = true;

        // axios.post('sendsms.php', this.sms)
        // .then(res => {
        //     console.log(res.data);
        // })
        // .catch(err => {

        // })
        // axios.post("http://localhost:3000/sendsms.php", this.sms)
		// 		.then(res => {
		// 			alert(res);
		// 		})
		// 		.catch(err => {
		// 			console.log(err.response);
		// 		});

        const article = { title: 'Axios POST Request Example' };
axios.post('http://localhost:3000/sendsms.php', article)
    .then(response => console.log(response.data));

    }
  },
}

</script>
<style  scoped>
input[type="text"]{
    width: 70%;
    height: 45px;
    border-radius: 5px;
    background-color: #F5F5F5;
    border: solid 1px #6F6F6F;
    padding: 0 10px;
    margin-bottom: 10px;
}

input:focus{
    outline:none;

}

input[type="submit"]{
    width: 10%;
    height: 46px;
    border-radius: 5px;
    background-color: #E5004E;
    color: white;
    font-size: 18px;
    border: none;
    cursor: pointer;
    margin-left: 1%;
    font-weight: 700;
    font-size: 14px;

}
.kilometrage{
    margin-top:5%;
}
.kilometrage-form {
    margin-top:3%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    height: 40px;
}
.kilometrage-input{
    width: 80%;
    height: 100%;
}
.kilometrage-input input{
    border: solid 2px #6F6F6F;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    color: #393939;
    font-size: 18px;
    padding: 0 0 0 1%;
    background: #F5F5F5;
}
.kilometrage-btn {
    width: 16%;
    height: 110%;
}
.kilometrage-btn button{
    width: 100%;
    background: #E5004E;
    height: 100%;
    border: none;
    border-radius: 10px;
    color:white;
    font-weight:bold;
    font-size:16px;
    cursor:pointer;
}
@media (max-width: 480px) {
    .kilometrage-input input{
        width: 90%;
        font-size: 90%;
        padding-left: 10px;
    }
    .kilometrage-btn {
        width: 22%;
    }
    
    
}

</style>
