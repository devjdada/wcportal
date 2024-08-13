<div
    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    <div class="flex items-center justify-between mb-4">
        <div class="flex-shrink-0">
            <span class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">
                WSF Weekly Provincial Reports

            </span>
        </div>

    </div>
    <canvas id="WsfWeeklyReportChart"></canvas>

</div>


@assets
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endassets

@script
    <script>
        const ctx = document.getElementById('WsfWeeklyReportChart');
        const wsfReports = $wire.reports;
        const reportStatsLabel = wsfReports.map(item => item.province);
        const reportStatsValue = wsfReports.map(item => item.total);

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: reportStatsLabel,
                datasets: [{
                    label: 'Provincial Reports',
                    data: reportStatsValue,
                    backgroundColor: reportStatsValue.map(() =>
                        `rgba(${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, 0.6)`
                    ),
                    borderColor: reportStatsValue.map(() =>
                        `rgba(${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, 1)`
                    ),
                    borderWidth: 0
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
