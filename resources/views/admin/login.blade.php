<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="isolate bg-white px-6 py-6">
            <div class="mx-auto max-w-4xl text-center mt-24">
                <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Contact sales</h2>
                <p class="mt-2 text-lg/8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim voluptate.</p>
                @if(Session::has('error'))
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ Session::get('error') }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif
            </div>
            <form action="{{ route('admin.login.request') }}" method="POST" class="mx-auto  max-w-xl sm:mt-8">
                @csrf
                <div class="grid grid-cols-1 gap-x-8 gap-y-2 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm/6 font-semibold text-gray-900">E-mail</label>
                        <div class="mt-1.5">
                            <input type="email" name="email" id="email" @if(isset($_COOKIE['email'])) value="{{ $_COOKIE['email'] }}" @endif  class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                            @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="password" class="block text-sm/6 font-semibold text-gray-900">Mot de passe</label>
                        <div class="mt-1.5">
                            <input type="password" name="password" id="password" @if(isset($_COOKIE['password'])) value="{{ $_COOKIE['password'] }}" @endif class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                            @error('password')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex gap-x-4 sm:col-span-2">
                        <div class="flex h-6 items-center">
                            <input type="checkbox" @if(isset($_COOKIE['email'])) checked="" @endif name="remember" id="remember">
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-1.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Se connectez</button>
                </div>
            </form>
        </div>
    </body>
</html>
