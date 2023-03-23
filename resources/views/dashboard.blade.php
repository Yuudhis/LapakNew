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

    @include('layouts.sidebar')

    {{-- content section --}}
    <section class="ml-64 my-10 p-4 mr-10">

        {{-- recent purchase --}}
        <section class="">
            <div class="flex items-center justify-between">
                <h1
                    class="inline-flex mb-5 text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    Recent Purchase
                </h1>

                <a href="">
                    <p class="text-gray-400 underline underline-offset-2 hover:text-gray-600">See all purchases</p>
                </a>
            </div>

            <div class="relative overflow-x-auto">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                        <tr>

                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>

                            <td class="px-6 py-4">
                                Silver
                            </td>

                            <td class="px-6 py-4">
                                $2999
                            </td>

                        </tr>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>

                            <td class="px-6 py-4">
                                White
                            </td>

                            <td class="px-6 py-4">
                                $1999
                            </td>

                        </tr>

                        <tr class="bg-white border-b dark:bg-gray-800">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>

                            <td class="px-6 py-4">
                                Black
                            </td>

                            <td class="px-6 py-4">
                                $99
                            </td>

                        </tr>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>

                            <td class="px-6 py-4">
                                White
                            </td>

                            <td class="px-6 py-4">
                                $1999
                            </td>

                        </tr>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>

                            <td class="px-6 py-4">
                                Silver
                            </td>

                            <td class="px-6 py-4">
                                $2999
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>

        </section>

        {{-- user n sales section --}}
        <section class="my-10">

            <div class="flex items-center justify-between">
                <h1
                    class="inline-flex mb-5 text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    Overview
                </h1>

                <a href="">
                    <p class="text-gray-400 underline underline-offset-2 hover:text-gray-600">See all user</p>
                </a>
            </div>

            <div class="flex justify-center gap-5">
                <a class="flex items-center justify-center w-56 h-40 p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <span class="mb-2 text-6xl font-bold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 ">23
                        <p class="text-xl grid justify-center font-semibold tracking-normal text-gray-900">Users</p>
                    </span>
                </a>

                <a class="flex items-center justify-center w-56 h-40 p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <span class="mb-2 text-6xl font-bold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">30
                        <p class="text-xl grid justify-center font-semibold tracking-normal text-gray-900">Sales</p>
                    </span>
                </a>
            </div>


        </section>

    </section>


    {{-- <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
        </div>
    </div> --}}

</body>

</html>
