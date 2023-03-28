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
                                        <a href="{{ route('datausers.edit', $u->id) }}">Edit</a>
                                        <form action="{{ route('datausers.destroy', $u->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="underline underline-offset-2">Delete</button>
                                        </form>
                                    </ul>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </section>
    </section>



</body>

</html>
