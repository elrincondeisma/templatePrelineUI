<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Hero -->
                <div class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
                    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
                    <!-- Announcement Banner -->
                    <div class="flex justify-center">
                        <a class="inline-flex items-center gap-x-2 bg-white border border-gray-200 text-sm text-gray-800 p-1 ps-3 rounded-full transition hover:border-gray-300 focus:outline-none focus:border-gray-300 dark:bg-slate-400 dark:border-slate-200 dark:text-white" href="https://www.youtube.com/@elrincondeisma?sub_confirmation=1">
                        Visita el canal de El Rincón de Isma
                        <span class="py-1.5 px-2.5 inline-flex justify-center items-center gap-x-2 rounded-full bg-gray-200 font-semibold text-sm text-gray-600">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </span>
                        </a>
                    </div>
                    <!-- End Announcement Banner -->

                    <!-- Title -->
                    <div class="mt-5 max-w-2xl text-center mx-auto">
                        <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-white">
                        Prepárate para Crear
                        <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">Juntos</span>
                        </h1>
                    </div>
                    <!-- End Title -->

                    <div class="mt-5 max-w-3xl text-center mx-auto">
                        <p class="text-lg text-gray-600 dark:text-white">Este template es un proyecto de El Rincón de Isma, creado con Laravel y Preline UI.</p>
                    </div>


                </div>
                <!-- End Hero -->
            </div>
        </div>
    </div>
</x-app-layout>
