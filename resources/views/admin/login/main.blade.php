@extends('../admin/layout/' . $layout)

@section('head')
    <title>Admin Login</title>
@endsection

@section('content')

<div class="container sm:px-10">
    <div class="block grid-cols-2 gap-4 xl:grid">
        <!-- BEGIN: Login Info -->
        <div class="flex-col hidden min-h-screen xl:flex">
            <a href="" class="flex items-center pt-5 -intro-x">
                <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="{{ asset('build/assets/images/logo.svg') }}">
                <span class="ml-3 text-lg text-white">
                    Admin Login
                </span>
            </a>
            <div class="my-auto">
                <img alt="Icewall Tailwind HTML Admin Template" class="w-1/2 -mt-16 -intro-x" src="{{ asset('build/assets/images/illustration.svg') }}">
                <div class="mt-10 text-4xl font-medium leading-tight text-white -intro-x">A few more clicks to <br> sign in to your account.</div>
                <div class="mt-5 text-lg text-white -intro-x text-opacity-70 dark:text-slate-400">Manage all your e-commerce accounts in one place</div>
            </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="flex h-screen py-5 my-10 xl:h-auto xl:py-0 xl:my-0">
            <div class="w-full px-5 py-8 mx-auto my-auto bg-white rounded-md shadow-md xl:ml-20 dark:bg-darkmode-600 xl:bg-transparent sm:px-8 xl:p-0 xl:shadow-none sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="text-2xl font-bold text-center intro-x xl:text-3xl xl:text-left">Sign In</h2>
                <div class="mt-2 text-center intro-x text-slate-400 xl:hidden">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                <div class="mt-8 intro-x">
                    <form id="login-form">
                        <input id="email" type="text" class="block px-4 py-3 intro-x login__input form-control" placeholder="Email" value="midone@left4code.com">
                        <div id="error-email" class="mt-2 login__input-error text-danger"></div>
                        <input id="password" type="password" class="block px-4 py-3 mt-4 intro-x login__input form-control" placeholder="Password" value="password">
                        <div id="error-password" class="mt-2 login__input-error text-danger"></div>
                    </form>
                </div>
                <div class="flex mt-4 text-xs intro-x text-slate-600 dark:text-slate-500 sm:text-sm">
                    <div class="flex items-center mr-auto">
                        <input id="remember-me" type="checkbox" class="mr-2 border form-check-input">
                        <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                    </div>
                    <a href="">Forgot Password?</a>
                </div>
                <div class="mt-5 text-center intro-x xl:mt-8 xl:text-left">
                    <button id="btn-login" class="w-full px-4 py-3 align-top btn btn-primary xl:w-32 xl:mr-3">Login</button>
                    <button class="w-full px-4 py-3 mt-3 align-top btn btn-outline-secondary xl:w-32 xl:mt-0">Register</button>
                </div>
                <div class="mt-10 text-center intro-x xl:mt-24 text-slate-600 dark:text-slate-500 xl:text-left">
                    By signin up, you agree to our <a class="text-primary dark:text-slate-200" href="">Terms and Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy Policy</a>
                </div>
            </div>
        </div>
        <!-- END: Login Form -->
    </div>
</div>
@endsection

@section('script')
    <script type="module">
        (function () {
            async function login() {
                // Reset state
                $('#login-form').find('.login__input').removeClass('border-danger')
                $('#login-form').find('.login__input-error').html('')

                // Post form
                let email = $('#email').val()
                let password = $('#password').val()

                // Loading state
                $('#btn-login').html('<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>')
                tailwind.svgLoader()
                await helper.delay(1500)

                axios.post(`login`, {
                    email: email,
                    password: password
                }).then(res => {
                    location.href = '/admin/dashboard'
                }).catch(err => {
                    $('#btn-login').html('Login')
                    if (err.response.data.message != 'Wrong email or password.') {
                        for (const [key, val] of Object.entries(err.response.data.errors)) {
                            $(`#${key}`).addClass('border-danger')
                            $(`#error-${key}`).html(val)
                        }
                    } else {
                        $(`#password`).addClass('border-danger')
                        $(`#error-password`).html(err.response.data.message)
                    }
                })
            }

            $('#login-form').on('keyup', function(e) {
                if (e.keyCode === 13) {
                    login()
                }
            })

            $('#btn-login').on('click', function() {
                login()
            })
        })()
    </script>
@endsection
