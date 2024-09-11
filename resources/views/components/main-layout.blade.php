<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.header')
            <div class="-mt-px">
                <!-- Breadcrumb -->

                <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden dark:bg-gray-800 dark:border-gray-700">
                  <div class="flex items-center py-2">
                    <!-- Navigation Toggle -->
                    <button type="button" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-gray-200 dark:hover:text-gray-500 dark:focus:text-gray-500" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                      <span class="sr-only">Toggle Navigation</span>
                      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M15 3v18"/><path d="m8 9 3 3-3 3"/></svg>
                    </button>
                    <!-- End Navigation Toggle -->
                    @if (isset($header))
                    <!-- Breadcrumb -->
                    <ol class="ms-3 flex items-center whitespace-nowrap">
                      <li class="flex items-center text-sm text-gray-800 dark:text-gray-400">
                        Application Layout
                        <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-gray-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                      </li>
                      <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-400" aria-current="page">
                        Dashboard
                      </li>
                    </ol>
                    <!-- End Breadcrumb -->
                    @endif
                  </div>
                </div>
                <!-- End Breadcrumb -->
            </div>
            @include('layouts.sidebar')
            <!-- Page Content -->
            <main class="w-full lg:ps-64">
                <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
