<div class="px-4 pt-6">
    <livewire:soul.navigation />
    <div class="grid gap-4 xl:grid-cols-2 2xl:grid-cols-3">
        <!-- Main widget -->
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flex items-center justify-between mb-4">
                <div class="flex-shrink-0">
                    <span class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">
                        {{-- @foreach ($dayStats as $sta)
                            {{ $sta }}
                        @endforeach --}}
                    </span>
                    <h3 class="text-base font-light text-gray-500 dark:text-gray-400">Sales this Today</h3>
                </div>

            </div>
            <canvas id="myChart"></canvas>

        </div>
        <!--Tabs widget -->
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">Statistics this month
                <button data-popover-target="popover-description" data-popover-placement="bottom-end"
                    type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd"></path>
                    </svg><span class="sr-only">Show information</span></button>
            </h3>
            <canvas id="myChart2"></canvas>

        </div>
    </div>
</div>

@assets
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endassets

@script
    <script>
        const ctx = document.getElementById('myChart');
        const type = $wire.chartType;

        const monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        const soulStats = $wire.dayStats;
        const soulStatsLabel = soulStats.map(item => item.day);
        const soulStatsValue = soulStats.map(item => item.souls);

        const monthStats = $wire.monthStats;
        const monthStatsLabel = monthStats.map(item => monthNames[item.month - 1]);
        // const monthStatsLabel = monthStats.map(item => item.month);
        const monthStatsValue = monthStats.map(item => item.souls);

        new Chart(ctx, {
            type: type,
            data: {
                labels: soulStatsLabel,
                datasets: [{
                    label: 'Contact saved',
                    data: soulStatsValue,
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
