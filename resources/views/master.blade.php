<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Wondering Seafood application">
        <meta name="keywords" content="Wondering Seafood, membership, rewards, loyalty program">
        @if (App::environment('production') || App::environment('staging'))
            <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        @endif
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- favicon -->
        <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">


        <!-- Css -->
        <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
    </head>
    <body class="font-manrope text-base text-slate-900 dark:text-white dark:bg-slate-900 flex flex-col min-h-screen ">

        <main class="flex-grow">
            @yield('contents')
        </main>

        <!-- Footer -->
        @include('contents.footer')
        <!-- Footer -->
        
        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="fixed text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-red-500 text-white leading-9"><i class="mdi mdi-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-2 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow-sm dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i data-feather="moon" class="size-4 text-yellow-500"></i>
                    <i data-feather="sun" class="size-4 text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <div class="fixed top-1/3 -right-2 z-50">
            <div class="relative inline-block ">
                <button id="langDropdownBtn" type="button" class="w-21 py-1 px-4 relative inline-block rounded-t-md  bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-md dark:shadow-gray-800 font-semibold text-center">
                    {{ App::getLocale() == 'en' ? __('messages.english') : __('messages.chinese') }}
                    <svg class="w-4 h-4 inline-block ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown -->
                <div id="langDropdownMenu" 
                    class="hidden absolute top-0 mr-2 w-21 bg-white dark:bg-slate-900 shadow-lg z-50">
                    <a href="{{ route('switchLang', ['locale' => 'en']) }}" class="block px-4 py-2 text-sm  {{ App::getLocale() == 'en' 
                                ? 'text-red-500 font-bold' 
                                : 'text-slate-700 dark:text-white' }}">{{ __('messages.english') }}</a>
                    <a href="{{ route('switchLang', ['locale' => 'zh']) }}" class="block px-4 py-2 text-sm {{ App::getLocale() == 'zh' 
                                ? 'text-red-500 font-bold' 
                                : 'text-slate-700 dark:text-white' }}">{{__('messages.chinese')}}</a>
                </div>
            </div>
        </div>
        
        <!-- JAVASCRIPTS -->
        <script src="{{ asset ('assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/libs/gumshoejs/gumshoe.polyfills.min.js') }}"></script>
        <script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>
