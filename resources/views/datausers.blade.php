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

    <section class="ml-64 my-10 p-4 mr-10">

        {{-- users table --}}
        <section class="">
            <div class="flex items-center justify-between">
                <h1
                    class="inline-flex mb-5 text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    Users Table
                </h1>

                <a href="">
                    <p class="text-gray-400 underline underline-offset-2 hover:text-gray-600">Add new user</p>
                </a>
            </div>

            <div class="relative overflow-x-auto">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                        <tr>

                            <th scope="col" class="px-6 py-3">
                                id
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($datausers as $u)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $u->id }}
                                </th>

                                <td class="px-6 py-4">
                                    {{ $u->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $u->email }}
                                </td>

                                <td class="px-6 py-4">
                                    <ul class="underline underline-offset-2">
                                        <li>
                                            <a href="{{ route('datausers.edit', $u->id) }}">Edit</a>
                                        </li>

                                        <li>
                                            <form action="{{ route('datausers.destroy', $u->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button id="deleteButton" data-modal-toggle="deleteModal"
                                                    class="underline underline-offset-2">Delete</button>
                                            </form>
                                        </li>



                                    </ul>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </section>

        {{-- modal section use if you can solve why 
            the modal delete the first row if the modal inside foreach looping and 
            delete the last row if the modal outside foreach looping --}}
        {{-- <div id="deleteModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">

            <div class="relative p-4 w-full max-w-md h-full md:h-auto">

                <!-- Modal content -->
                <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">

                    <button type="button"
                        class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="deleteModal">

                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>

                        <span class="sr-only">Close modal</span>
                    </button>

                    <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure
                        you want to delete this item?</p>

                    <div class="flex justify-center items-center space-x-4">

                        <button data-modal-toggle="deleteModal" type="button"
                            class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                            No, cancel
                        </button>

                        <form action="{{ route('datausers.destroy', $u->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                Yes, I'm sure
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>

    {{-- flowbite js script --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>

</html>
