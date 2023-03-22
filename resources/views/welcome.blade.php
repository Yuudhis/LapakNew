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

    <title>Firo Store</title>
</head>

<body>

    {{-- <h1 class="flex justify-center text-6xl font-bold my-20">Hello World</h1> --}}

    {{-- navbar section --}}
    <nav class="sticky top-0 z-50 bg-white mt-5 mx-20 sm:px-4 py-2.5 rounded dark:bg-gray-900">

        <div class="container flex flex-wrap items-center justify-between">

            <a href="#" class="flex items-center">
                <img src="img/mainlogo.png" class="h-6 mr-3 sm:h-9" alt="Firo Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Firo Store</span>
            </a>

            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-xl rounded text-[#333333] hover:text-transparent  hover:bg-clip-text hover:bg-gradient-to-r from-purple-400 to-pink-600 md:p-1 dark:text-white transition ease-linear duration-700">Home</a>
                    </li>

                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-xl rounded text-[#333333] hover:text-transparent  hover:bg-clip-text hover:bg-gradient-to-r from-purple-400 to-pink-600 md:p-1 dark:text-white transition ease-linear duration-700">About</a>
                    </li>

                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-xl rounded text-[#333333] hover:text-transparent  hover:bg-clip-text hover:bg-gradient-to-r from-purple-400 to-pink-600 md:p-1 dark:text-white transition ease-linear duration-700">Pricing</a>
                    </li>

                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-xl rounded text-[#333333] hover:text-transparent  hover:bg-clip-text hover:bg-gradient-to-r from-purple-400 to-pink-600 md:p-1 dark:text-white transition ease-linear duration-700">Contact</a>
                    </li>

                    <li>

                        <button
                            class="md:p-1 text-xl w-40 h-12 border-2 border-pink-600 text-pink-600 rounded-lg hover:font-semibold hover:border-none hover:bg-gradient-to-r from-purple-400 to-pink-600 hover:text-white transition ease-linear duration-700">
                            Subscribe Now
                        </button>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    {{-- hero section --}}
    <section class="">

        <div class="mx-auto max-w-screen-xl py-20 px-4 lg:flex lg:items-center">

            <div class="mx-auto max-w-xl text-center">

                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    Feel The Future In Your Hands With
                    <strong
                        class="mt-5 text-6xl font-extrabold text-transparent  bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 sm:block">
                        ChatGPT 3.5 Plus & ChatGPT 4
                    </strong>
                </h1>

                <p class="mt-4 sm:text-xl sm:leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
                    tenetur fuga ducimus numquam ea!
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a class="block w-full rounded bg-pink-500 px-12 py-3 text-sm font-medium text-white shadow hover:bg-pink-600 focus:outline-none focus:ring active:bg-pink-400 sm:w-auto"
                        href="/get-started">
                        Subscribe Now
                    </a>

                    <a class="block w-full rounded px-12 py-3 text-sm font-medium text-pink-500 shadow hover:text-pink-600 focus:outline-none focus:ring active:text-pink-400 sm:w-auto"
                        href="/about">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- feature section --}}
    <section class="my-20">

        {{-- feature section 1 --}}
        <section class="bg-white dark:bg-gray-900 my-5">

            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">

                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">

                    <h2
                        class="mb-4 text-7xl tracking-tight font-extrabold text-transparent  bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 dark:text-white">
                        Code Like a Pro</h2>

                    <p class="mb-4">Ask ChatGPT plus to make a code and debug easily and fastly</p>

                </div>

                <div class="grid grid-cols-2 gap-4 mt-8">

                    <img class="w-full rounded-lg" src="img/Frame13.png" alt="office content 1">

                    <img class="mt-4 w-full lg:mt-10 rounded-lg" src="img/Frame14.png" alt="office content 2">

                </div>
            </div>
        </section>

        {{-- feature section 2 --}}
        <section class="bg-white dark:bg-gray-900 my-5">

            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">

                <div class="grid grid-cols-2 gap-4 mt-8">

                    <img class="w-full rounded-lg" src="img/Frame15.png" alt="office content 1">

                    <img class="mt-4 w-full lg:mt-10 rounded-lg" src="img/Frame18.png" alt="office content 2">

                </div>

                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">

                    <h2
                        class="mb-4 text-7xl tracking-tight font-extrabold text-transparent  bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 dark:text-white">
                        Write with philosopher idea</h2>

                    <p class="mb-4">Ask ChatGPT plus to help your copywriting and generating ideas. Faster like never
                        before</p>

                </div>
            </div>
        </section>

        {{-- feature section 3 --}}
        <section class="bg-white dark:bg-gray-900 my-5">

            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">

                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">

                    <h2
                        class="mb-4 text-7xl tracking-tight font-extrabold text-transparent  bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 dark:text-white">
                        24/7 No outgage capacity</h2>

                    <p class="mb-4">With ChatGPT Plus, do not worry with outage capacity. The Plus subscription ensure
                        you can use ChatGPT even when demand is high</p>

                </div>

                <div class="grid grid-cols-2 gap-4 mt-8">

                    <img class="w-full rounded-lg" src="img/Frame17.png" alt="office content 1">

                    <img class="mt-4 w-full lg:mt-10 rounded-lg" src="img/Frame16.png" alt="office content 2">

                </div>
            </div>
        </section>

    </section>

    {{-- pricing section --}}
    <section class="grid justify-center my-20">

        <p
            class="inline-flex justify-center mb-5 text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
            Our Price</p>

        <p class="inline-flex justify-center font-light text-lg text-gray-500">Dont worry about the price, we keep it
            low just
            for you so you can get creative!</p>

        <div class="flex justify-center gap-10 mt-10">

            {{-- card 1 --}}
            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <a href="#">
                    <img class="p-8 rounded" src="img/Frame19.png" alt="product image" />
                </a>

                <div class="px-5 pb-5">

                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">ChatGPT 3.5 Plus
                            & <br> ChatGPT 4</h5>
                    </a>

                    <div class="flex items-center mt-2.5 mb-5">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Second star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Third star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fourth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fifth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <span
                            class="bg-red-100 text-red-500 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ml-3">HOT</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp 85.000</span>
                        <a href=""
                            class="text-white bg-gradient-to-r from-purple-400 to-pink-600 hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Subscribe</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    {{-- CTA section --}}
    <section class="bg-white dark:bg-gray-900">

        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">

            <div class="mx-auto max-w-screen-sm text-center">

                <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 dark:text-white">
                    Start your subscription today</h2>

                <p class="mb-10 font-light text-gray-500 dark:text-gray-400 md:text-lg">Feel the creativity of ChatGPT directly, it's in your hand!</p>

                <a href="#"
                    class="text-white bg-gradient-to-r from-purple-400 to-pink-600 hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-800 font-semibold rounded-lg text-xl px-5 py-2.5 mr-2 mb-2">Subcribe Now</a>
            </div>
        </div>
    </section>
    C:\laragon\www\LapakNew
    {{-- footer section --}}
    <section class="mx-10">
        <footer class="bg-white rounded-lg  dark:bg-gray-900 m-4">

            <div class="w-full container mx-auto p-4 md:px-6 md:py-8">

                <div class="sm:flex sm:items-center sm:justify-between">

                    <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                        <img src="img/mainlogo.png" class="h-8 mr-3" alt="FiroStore Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Firo
                            Store</span>
                    </a>

                    <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">

                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6 ">Home</a>
                        </li>

                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
                        </li>

                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6 ">Pricing</a>
                        </li>

                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>

                </div>

                <hr class="my-6 sm:mx-auto lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">©2023
                    <a href="#" class="hover:underline">Firo Store™</a>. All Rights
                    Reserved.</span>
            </div>
        </footer>
    </section>



    {{-- flowbite js script --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>

</html>
