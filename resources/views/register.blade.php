<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- tailwindcss --}}
    @vite('resources/css/app.css')

    {{-- flowbite js --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- pages logo -->
    <link rel="icon" type="image/x-icon" href="img/mainlogo.png">

    <title>Danasaurus Store</title>
</head>

<body>

    @include('layouts.navbar')

    <section class="bg-gray-50">

        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                <img class="w-8 h-8 mr-2" src="img/mainlogo.png" alt="logo">
                Danasaurus Store
            </a>

            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">

                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Create an account
                    </h1>

                    <form class="space-y-4 md:space-y-6" action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                                name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="name" required>
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="name@mail.com" required>
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="***"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                required>
                        </div>

                        <div>
                            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm
                                password</label>
                            <input type="password" name="confirm-password" id="confirm-password" placeholder="***"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                required>
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-gradient-to-r from-purple-400 to-pink-600 hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create
                            an account</button>
                        <p class="text-sm font-light text-gray-500">
                            Already have an account? <a href="login"
                                class="font-medium text-primary-600 hover:underline">Login
                                here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

</body>

</html>
