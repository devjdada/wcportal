<div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">
        Monthly Total Contact Saved
    </h3>
    <canvas id="myChart2"></canvas>

</div>


@assets
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endassets

@script
    <script>
        const type = $wire.chartType;

        const monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];


        const monthStats = $wire.monthStats;
        const monthStatsLabel = monthStats.map(item => monthNames[item.month - 1]);
        // const monthStatsLabel = monthStats.map(item => item.month);
        const monthStatsValue = monthStats.map(item => item.souls);




        const ctx2 = document.getElementById('myChart2');
        const type2 = $wire.chartType;

        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: monthStatsLabel,
                datasets: [{
                    label: 'Contact saved',
                    data: monthStatsValue,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endscript
