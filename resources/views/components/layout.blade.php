<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <script src="https://cdn.tailwindcss.com" ></script>

</head>
<body class="h-full">
<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-900">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <nav class="bg-yellow-500">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img src="data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100%22%20height%3D%2240%22%3E%0A%20%20%3Ctext%20x%3D%2210%22%20y%3D%2225%22%20font-size%3D%2218%22%20fill%3D%22white%22%3EANIMY%3C%2Ftext%3E%0A%3C%2Fsvg%3E%0A" alt="ANIMY" class="size-20" />
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-6">
                            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')" >Home</x-nav-link>
                            <x-nav-link href="/genre" :active="request()->is('genre')">Genre</x-nav-link>
                            <x-nav-link href="/series" :active="request()->is('series')">Series</x-nav-link>
                            <x-nav-link href="/movies" :active="request()->is('movies')">Movies</x-nav-link>
                            <x-nav-link href="/age" :active="request()->is('age')">Age</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button" class="relative rounded-full p-1 text-gray-800 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <el-dropdown class="relative ml-3">
                            <button class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img src="https://italeemc.iium.edu.my/pluginfile.php/40608/user/icon/remui/f3?rev=335346" alt="" class="size-8 rounded-full outline -outline-offset-1 outline-white/10 border-2 border-gray" />
                            </button>

                            <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-gray-800 py-1 outline-1 -outline-offset-1 outline-white/10 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden">Your profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden">Sign out</a>
                            </el-menu>
                        </el-dropdown>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <el-disclosure id="mobile-menu" hidden class="block md:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                <a href="/" aria-current="page" class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Home</a>
                <a href="/genre" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Genre</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Series</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Movies</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Age</a>
            </div>
            <div class="border-t border-white/10 pt-4 pb-3">
                <div class="flex items-center px-5">
                    <div class="shrink-0">
                        <img src="https://italeemc.iium.edu.my/pluginfile.php/40608/user/icon/remui/f3?rev=335346" alt="" class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
                    </div>
                    <div class="ml-3">
                        <div class="text-base/5 font-medium text-white">Ezhad Eminuddin</div>
                        <div class="text-sm font-medium text-gray-400">ezhad@example.com</div>
                    </div>
                    <button type="button" class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Your profile</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign out</a>
                </div>
            </div>
        </el-disclosure>
    </nav>

    <header class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white">{{$heading}}</h1>
        </div>
    </header>


    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            {{$slot}}
        </div>
    </main>
</div>

</body>
</html>
