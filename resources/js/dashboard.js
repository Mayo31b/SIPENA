import Chart from 'chart.js/auto';

const ctx = document.getElementById('trendChart');
if (ctx) {
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['2021', '2022', '2023', '2024', '2025'],
            datasets: [{
                label: 'Rata-rata Nilai',
                data: [84, 85, 86, 87, 88],
                borderColor: '#06b6d4',
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } }
        }
    });
}
