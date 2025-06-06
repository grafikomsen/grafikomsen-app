<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        @vite('resources/css/app.css')
    </head>

    <body class="">

        <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-2xs">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800">Se connecter</h1>
                    <p class="mt-2 text-sm text-gray-600">
                        Don't have an account yet?
                        <a class="text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500" href="../examples/html/signup.html">
                        Sign up here
                        </a>
                    </p>
                </div>

                @if(Session::has('error'))
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ Session::get('error') }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                <div class="mt-5">
                    <!-- Form -->
                    <form action="{{ route('admin.login.request') }}" method="POST" >
                        @csrf
                        <div class="grid gap-y-4">
                        <!-- Form Group -->
                        <div>
                            <label for="email" class="block text-sm mb-2 dark:text-white">Adresse email</label>
                            <div class="relative">
                                <input type="email" id="email" name="email" @if(isset($_COOKIE['email'])) value="{{ $_COOKIE['email'] }}" @endif class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                            @error('email')
                                <p class="hidden text-xs text-red-600 mt-2" id="email-error">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div>
                            <div class="flex flex-wrap justify-between items-center gap-2">
                                <label for="password" class="block text-sm mb-2 dark:text-white">Mot de passe</label>
                            </div>
                            <div class="relative">
                                <input type="password" id="password" name="password" @if(isset($_COOKIE['password'])) value="{{ $_COOKIE['password'] }}" @endif class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                            @error('password')
                                <p class="hidden text-xs text-red-600 mt-2" id="email-error">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <!-- End Form Group -->

                        <!-- Checkbox -->
                        <div class="flex items-center">
                            <div class="flex">
                                <input id="remember" name="remember" @if(isset($_COOKIE['email'])) checked="" @endif type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                            </div>
                            <div class="ms-3">
                                <label for="remember" class="text-sm text-black"></label>
                            </div>
                        </div>
                        <!-- End Checkbox -->

                        <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign in</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>

        <!-- JS PLUGINS -->
        <!-- Required plugins -->
        <script src="https://cdn.jsdelivr.net/npm/preline/dist/index.js"></script>
    </body>
</html>
