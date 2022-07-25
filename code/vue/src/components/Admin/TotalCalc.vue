

<template>

<div class="content">
    <h3>Les statistiques de Cote argus</h3>
    <div class="vertical"></div>
    <div class="total">
        <div>
            <canvas id="myChart" width="400" height="210"></canvas>
        </div>
        <div class="some-info">
            <div class="info">
                <h4>Statistique maximale</h4>
                <p>Mars : 393 Calc</p>
            </div>
            <div class="info">
                <h4>Derniere mois</h4>
                <p>Mai : 97 Calc</p>
            </div>
        </div>
    </div>
</div>

</template>
<script>

import Chart from 'chart.js/auto';

export default {
    name: 'statistique',
    props: {
    },
    data() {
        return {
            labels : ['Janvier' , 'Fevrier' , 'Mars' , 'April' , 'May', 'juin'],
            data:[563 ,729,541, 318, 642, 230]
        }
    },
     mounted() {
        const ctx = document.getElementById('myChart');
        const labels = this.labels;
        const data = {
        labels: labels,
        datasets: [{
            label: 'Number Of Calc',
            data: this.data,
              fill: {
                target: 'origin',
                above: '#FFAAC7',
              },
            backgroundColor:"white",
            borderWidth:3,
            borderColor: '#E5004E',
            tension: 0.3,            
        }]
        };
        const myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                plugins: {
                    legend: {
                        display:false
                    }
                },
                scales: {
                    x: {
                        grid: {
                        display: false,
                        },
                        display:false,
                    },
                    y: {
                        grid: {
                        display: false,
                        },
                        beginAtZero:true,
                        min:0,
                        max:1000,
                        ticks:{
                            stepSize:10
                        },
                        display: false,
                    }
                }
            }
        });
        myChart;
    },

}
</script>
<style  scoped>
.content{
    width: 93%;
    padding: 5px 15px;
    background: white;
    border-radius: 5px;
    box-shadow: 0 0 12px -4px black;
}
.vertical{
    height: 0.5px;
    background: #D9D9D9;
}
.h3{
    font-size: 25px;
    font-weight: 400;
}
.some-info{
    display: flex;
    justify-content: space-between;
    padding: 0 3%;
}
.info p{
    color:#E5004E;
}


@media (max-width: 480px) {
    .content[data-v-764fe34e] {
    width: 100%;
    padding: 5px 15px;
    background: white;
    border-radius: 5px;
    box-shadow: 0 0 12px -4px black;
    margin-top: 5%;
}
}
</style>