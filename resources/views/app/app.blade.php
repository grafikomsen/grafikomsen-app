<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- CSS Preline -->
        <link rel="stylesheet" href="https://preline.co/assets/css/main.css?v=3.0.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        <!-- ========== HEADER ========== -->
        <header class="flex flex-wrap  md:justify-start md:flex-nowrap z-50 w-full bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700">
            <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-4 px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center gap-x-1">
                    <a class="flex-none font-semibold text-xl text-black focus:outline-hidden focus:opacity-80 dark:text-white" href="#" aria-label="Brand">Brand</a>

                    <!-- Collapse Button -->
                    <button type="button" class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-sm rounded-sm border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-header-base-collapse"  aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation"  data-hs-collapse="#hs-header-base" >
                    <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                    <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- End Collapse Button -->
                </div>

                <!-- Collapse -->
                <div id="hs-header-base" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block "  aria-labelledby="hs-header-base-collapse" >
                    <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                        <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
                            <div class="grow">
                                <div class="flex flex-col md:flex-row md:justify-center md:items-center gap-0.5 md:gap-1">
                                    <a class="p-2 flex items-center text-sm bg-gray-100 text-gray-800 hover:bg-gray-100 rounded-sm focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#" aria-current="page">
                                        <svg class="shrink-0 size-4 me-3 md:me-2 block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                                        Landing
                                    </a>

                                    <!-- Dropdown -->
                                    <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--adaptive:adaptive] [--is-collapse:true] md:[--is-collapse:false] ">
                                        <button id="hs-header-base-dropdown" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-sm focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                            <svg class="shrink-0 size-4 me-3 md:me-2 block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10 2.5-2.5L3 5"/><path d="m3 19 2.5-2.5L3 14"/><path d="M10 6h11"/><path d="M10 12h11"/><path d="M10 18h11"/></svg>
                                            Dropdown
                                            <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                        </button>

                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-sm md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-4.5 after:w-0.5 after:h-[calc(100%-4px)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown">
                                            <div class="py-1 md:px-1 space-y-0.5">
                                                <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-sm hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                                    About
                                                </a>

                                                <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">
                                                    <button id="hs-header-base-dropdown-sub" type="button" class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-sm p-2 md:px-3 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                    Sub Menu
                                                    <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:-rotate-90 md:-rotate-90 duration-300 ms-auto shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                                    </button>

                                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative md:w-48 hidden z-10 md:mt-2 md:mx-2.5! md:top-0 md:end-full ps-7 md:ps-0 md:bg-white md:rounded-sm md:shadow-md dark:bg-neutral-800 dark:divide-neutral-700 before:hidden md:before:block before:absolute before:-end-5 before:top-0 before:h-full before:w-5 md:after:hidden after:absolute after:top-1 after:start-4.5 after:w-0.5 after:h-[calc(100%-4px)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown-sub">
                                                        <div class="p-1 space-y-1">
                                                            <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-sm hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                                            About
                                                            </a>

                                                            <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-sm hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                                            Downloads
                                                            </a>

                                                            <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-sm hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                                            Team Account
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-sm hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                                    Downloads
                                                </a>

                                                <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-sm hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                                                    Team Account
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Dropdown -->

                                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-sm focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
                                        <svg class="shrink-0 size-4 me-3 md:me-2 block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                        Account
                                    </a>

                                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-sm focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
                                        <svg class="shrink-0 size-4 me-3 md:me-2 block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                                        Work
                                    </a>

                                    <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-sm focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
                                        <svg class="shrink-0 size-4 me-3 md:me-2 block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
                                        Blog
                                    </a>
                                </div>
                            </div>

                            <div class="my-2 md:my-0 md:mx-2">
                                <div class="w-full h-px md:w-px md:h-4 bg-gray-100 md:bg-gray-300 dark:bg-neutral-700"></div>
                            </div>

                            <!-- Button Group -->
                            <div class=" flex flex-wrap items-center gap-x-1.5">
                                <a class="py-2 px-2.5 inline-flex items-center font-medium text-sm rounded-sm bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:bg-blue-600" href="#">
                                    Demande de devis
                                </a>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->

        @yield('main')

        <!-- ========== FOOTER ========== -->
        <footer class="mt-auto bg-gray-900 w-full dark:bg-neutral-950">
            <div class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
            <!-- Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
                <div class="col-span-full lg:col-span-1">
                <a class="flex-none text-xl font-semibold text-white focus:outline-hidden focus:opacity-80" href="#" aria-label="Brand">Brand</a>
                </div>
                <!-- End Col -->

                <div class="col-span-1">
                <h4 class="font-semibold text-gray-100">Product</h4>

                <div class="mt-3 grid space-y-3">
                    <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Pricing</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Changelog</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Docs</a></p>
                </div>
                </div>
                <!-- End Col -->

                <div class="col-span-1">
                <h4 class="font-semibold text-gray-100">Company</h4>

                <div class="mt-3 grid space-y-3">
                    <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">About us</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Blog</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Careers</a> <span class="inline-block ms-1 text-xs bg-blue-700 text-white py-1 px-2 rounded-sm">We're hiring</span></p>
                    <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Customers</a></p>
                </div>
                </div>
                <!-- End Col -->

                <div class="col-span-2">
                <h4 class="font-semibold text-gray-100">Stay up to date</h4>

                <form>
                    <div class="mt-4 flex flex-col items-center gap-2 sm:flex-row sm:gap-3 bg-white rounded-sm p-2 dark:bg-neutral-900">
                    <div class="w-full">
                        <label for="hero-input" class="sr-only">Subscribe</label>
                        <input type="text" id="hero-input" name="hero-input" class="py-2.5 sm:py-3 px-4 block w-full border-transparent rounded-sm sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter your email">
                    </div>
                    <a class="w-full sm:w-auto whitespace-nowrap p-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-sm border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                        Subscribe
                    </a>
                    </div>
                    <p class="mt-3 text-sm text-gray-400">
                    New UI kits or big discounts. Never spam.
                    </p>
                </form>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <div class="mt-5 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
                <div class="flex flex-wrap justify-between items-center gap-2">
                <p class="text-sm text-gray-400 dark:text-neutral-400">
                    © 2025 Preline Labs.
                </p>
                </div>
                <!-- End Col -->

                <!-- Social Brands -->
                <div>
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-transparent text-white hover:bg-white/10 focus:outline-hidden focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </a>
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-transparent text-white hover:bg-white/10 focus:outline-hidden focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                    </svg>
                </a>
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-transparent text-white hover:bg-white/10 focus:outline-hidden focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                </a>
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-transparent text-white hover:bg-white/10 focus:outline-hidden focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                </a>
                <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-transparent text-white hover:bg-white/10 focus:outline-hidden focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                    </svg>
                </a>
                </div>
                <!-- End Social Brands -->
            </div>
            </div>
        </footer>
        <!-- ========== END FOOTER ========== -->

        <!-- JS PLUGINS -->
        <script src="https://cdn.jsdelivr.net/npm/preline/dist/index.js"></script>
    </body>
</html>
