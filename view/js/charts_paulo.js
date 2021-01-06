

var ctx = document.getElementById('financeiro').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'jun'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },

        legend: {
            display: false,
        },
    }
});


var ctx = document.getElementById('circulo').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Pagos", "Vencidos", "A Vencer"],
        datasets: [
            {
                label: "Population (millions)",
                backgroundColor: ["#1CC928", "rgba(226,46,46,0.8)","rgba(69,168,255,0.2)","#e8c3b9","#c45850"],
                data: [2478,5267,734]
            }
        ]
    },
    options: {
        title: {
            display: false,
            text: 'Predicted world population (millions) in 2050'
        },
        legend: {
            display: false,
        },
    }
});