<div class="grid w-full grid-cols-8 gap-4 mt-4 text-center">

    <div
        class="items-center justify-between p-2 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">
                Total
            </h3>
            <span class="text-2xl font-bold leading-none text-center text-gray-900 sm:text-3xl dark:text-white">
                {{ $total }}
            </span>
            <p class="flex items-center text-xs font-normal text-center text-gray-500 dark:text-gray-400">

                {{ date('l jS \of F Y', strtotime($week)) }}
            </p>
        </div>
    </div>

    <div
        class="items-center justify-between p-2 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">
                Male
            </h3>
            <span class="text-2xl font-bold leading-none text-center text-gray-900 sm:text-3xl dark:text-white">
                {{ $male }}
            </span>
            <p class="flex items-center text-xs font-normal text-center text-gray-500 dark:text-gray-400">

                {{ date('l jS \of F Y', strtotime($week)) }}
            </p>
        </div>
    </div>

    <div
        class="items-center justify-between p-2 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">
                Female
            </h3>
            <span class="text-2xl font-bold leading-none text-center text-gray-900 sm:text-3xl dark:text-white">
                {{ $female }}
            </span>
            <p class="flex items-center text-xs font-normal text-center text-gray-500 dark:text-gray-400">

                {{ date('l jS \of F Y', strtotime($week)) }}
            </p>
        </div>
    </div>

    <div
        class="items-center justify-between p-2 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">
                Children
            </h3>
            <span class="text-2xl font-bold leading-none text-center text-gray-900 sm:text-3xl dark:text-white">
                {{ $children }}
            </span>
            <p class="flex items-center text-xs font-normal text-center text-gray-500 dark:text-gray-400">

                {{ date('l jS \of F Y', strtotime($week)) }}
            </p>
        </div>
    </div>

    <div
        class="items-center justify-between p-2 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">
                New Convert
            </h3>
            <span class="text-2xl font-bold leading-none text-center text-gray-900 sm:text-3xl dark:text-white">
                {{ $nc }}
            </span>
            <p class="flex items-center text-xs font-normal text-center text-gray-500 dark:text-gray-400">

                {{ date('l jS \of F Y', strtotime($week)) }}
            </p>
        </div>
    </div>

    <div
        class="items-center justify-between p-2 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">
                First Timer
            </h3>
            <span class="text-2xl font-bold leading-none text-center text-gray-900 sm:text-3xl dark:text-white">
                {{ $ft }}
            </span>
            <p class="flex items-center text-xs font-normal text-center text-gray-500 dark:text-gray-400">

                {{ date('l jS \of F Y', strtotime($week)) }}
            </p>
        </div>
    </div>

    <div
        class="items-center justify-between p-2 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">
                New Homecell
            </h3>
            <span class="text-2xl font-bold leading-none text-center text-gray-900 sm:text-3xl dark:text-white">
                {{ $nh }}
            </span>
            <p class="flex items-center text-xs font-normal text-center text-gray-500 dark:text-gray-400">

                {{ date('l jS \of F Y', strtotime($week)) }}
            </p>
        </div>
    </div>

    <div
        class="items-center justify-between p-2 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">
                Awainting
            </h3>
            <span class="text-2xl font-bold leading-none text-center text-gray-900 sm:text-3xl dark:text-white">
                {{ $yetTo }}
            </span>
            <p class="flex items-center text-xs font-normal text-center text-gray-500 dark:text-gray-400">

                {{ date('l jS \of F Y', strtotime($week)) }}
            </p>
        </div>
    </div>



</div>
