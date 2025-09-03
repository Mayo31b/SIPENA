import './bootstrap';
import Chart from 'chart.js/auto';
import './dashboard.js';


document.addEventListener("DOMContentLoaded", () => {
    const ctx = document.getElementById('grafikCapaian');
    if (!ctx) return;

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['2019', '2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Nilai Capaian',
                data: [60, 70, 68, 75, 80],
                borderColor: 'blue',
                borderWidth: 2,
                fill: false
            }]
        }
    });
});


//admin//
document.addEventListener("DOMContentLoaded", () => {
    const ctx = document.getElementById('grafikAdmin');
    if (!ctx) return;

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['2019', '2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Nilai Capaian',
                data: [65, 70, 75, 78, 82],
                borderColor: 'rgb(139,92,246)', // ungu
                backgroundColor: 'rgba(139,92,246,0.2)',
                tension: 0.4,
                pointBackgroundColor: 'rgb(139,92,246)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
});
