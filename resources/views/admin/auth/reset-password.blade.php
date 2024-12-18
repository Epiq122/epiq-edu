{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('admin.password.store') }}">--}}
{{--        @csrf--}}

{{--        <!-- Password Reset Token -->--}}
{{--        <input type="hidden" name="token" value="{{ $request->route('token') }}">--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')"/>--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"--}}
{{--                          :value="old('email', $request->email)" required autofocus autocomplete="username"/>--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')"/>--}}
{{--            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required--}}
{{--                          autocomplete="new-password"/>--}}
{{--            <x-input-error :messages="$errors->get('password')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                          type="password"--}}
{{--                          name="password_confirmation" required autocomplete="new-password"/>--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Reset Password') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

    <!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in</title>
    <!-- CSS files -->
    <link href="{{asset ('admin/assets/dist/css/tabler.min.css?1692870487')}}" rel="stylesheet"/>

    <link href="{{asset ('admin/assets/dist/css/tabler-vendors.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{asset ('admin/assets/dist/css/demo.min.css?1692870487')}}" rel="stylesheet"/>
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body class=" d-flex flex-column">
    <script src="{{asset ('admin/asset/dist/js/demo-theme.min.js?1692870487')}}"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    {{--                    <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">--}}
                </a>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <div class="card card-md">

                <div class="card-body">

                    <form action="{{ route('admin.password.store') }}" method="post" autocomplete="off" novalidate>
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="mt-3">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email" value="{{ old('email', $request->email) }}"
                                   class="form-control mb-3"
                                   placeholder="your@email.com" autocomplete="off" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                        </div>

                        <div class="mb-3">  <!-- Changed from mb-2 to mb-3 -->
                            <label class="form-label">
                                Password
                                <span class="form-label-description"></span>
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control" placeholder="Password"
                                       name="password"
                                       required autocomplete="off">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                        </div>


                        <div class="mb-3">  <!-- Changed from mb-2 to mb-3 -->
                            <label class="form-label">
                                Confirm Password
                                <span class="form-label-description"></span>
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control" placeholder="Confirm Password"
                                       name="password_confirmation"
                                       required autocomplete="off">
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('admin/assets/dist/js/tabler.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('admin/assets/dist/js/demo.min.js?1692870487') }}" defer></script>
</body>
</html>

