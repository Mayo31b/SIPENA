import Chart from 'chart.js/auto';

document.addEventListener("DOMContentLoaded", () => {
    console.log("Chart.js loaded"); // cek apakah script masuk

    const ctx = document.getElementById('grafikCapaian');
    if (!ctx) {
        console.error("Canvas grafikCapaian tidak ditemukan!");
        return;
    }

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['2019', '2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Nilai Capaian',
                data: [60, 70, 68, 75, 80],
                borderColor: 'rgb(59,130,246)',
                backgroundColor: 'rgba(59,130,246,0.2)',
                tension: 0.4,
                pointBackgroundColor: 'rgb(59,130,246)'
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
