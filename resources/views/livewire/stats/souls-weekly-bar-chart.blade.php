<div
    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    <div class="flex items-center justify-between mb-4">
        <div class="flex-shrink-0">
            <span class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">
                Daily Soul Statistics
            </span>
            <h3 class="text-base font-light text-gray-500 dark:text-gray-400">
                From {{ $this->startDate }} to {{ $this->endDate }}

            </h3>
        </div>

        <div>
            {{-- <x-select wire:model.live='chartType'>
                <option value="{{ $chartType }}">{{ $chartType }}</option>
                @foreach ($chartList as $ch)
                    <option value="{{ $ch }}">{{ $ch }}</option>
                @endforeach
            </x-select> --}}
        </div>

    </div>
    <canvas id="myChart"></canvas>

</div>


@assets
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endassets

@script
    <script>
        const ctx = document.getElementById('myChart');
        const type = $wire.chartType;



        const soulStats = $wire.dayStats;
        const LastSoulStats = $wire.lastMonthStats;
        const soulStatsLabel = soulStats.map(item => item.day);
        const soulStatsValue = soulStats.map(item => item.souls);
        const LastSoulStatsValue = LastSoulStats.map(item => item.souls);


        new Chart(ctx, {
            type: type,
            data: {
                labels: soulStatsLabel,
                datasets: [{
                        label: 'Soul Wiining Report for the Past 21days',
                        data: soulStatsValue,
                        borderWidth: 1
                    },
                    {
                        label: 'Comparing Last Month with this month',
                        data: LastSoulStatsValue,
                        borderWidth: 1
                    }
                ]
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
