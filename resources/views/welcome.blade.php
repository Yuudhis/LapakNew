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

    <style>
        .filled {
            fill: currentColor;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    <title>Danasaurus Store</title>
</head>

<body>

    @include('layouts.navbar')

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
                        href="login">
                        Subscribe Now
                    </a>

                    <a class="block w-full rounded px-12 py-3 text-sm font-medium text-pink-500 shadow hover:text-pink-600 focus:outline-none focus:ring active:text-pink-400 sm:w-auto"
                        href="/#about">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- feature section --}}
    <section class="my-1 md:my-20" id="about">

        {{-- feature section 1 --}}
        <section class="bg-white dark:bg-gray-900 my-1 md:my-5">

            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">

                <div class="font-light text-gray-500 dark:text-gray-400 text-3xl">

                    <h2
                        class="mb-4 md:text-7xl tracking-tight font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                        Code Like a Pro</h2>

                    <p class="mb-4 text-base md:text-lg">Ask ChatGPT plus to make a code and debug easily and fastly</p>

                </div>

                <div class="grid grid-cols-2 gap-4 mt-8">

                    <img class="w-full rounded-lg" src="img/Frame13.png" alt="office content 1">

                    <img class="mt-4 w-full lg:mt-10 rounded-lg" src="img/Frame14.png" alt="office content 2">

                </div>
            </div>
        </section>

        {{-- feature section 2 (desktop view) --}}
        <section class="hidden md:block bg-white dark:bg-gray-900 my-1 md:my-5">

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

        {{-- feature section 2 (mobile view) --}}
        <section class="block md:hidden bg-white dark:bg-gray-900 my-1 md:my-5">

            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">

                <div class="font-light text-gray-500 text-sm md:text-lg dark:text-gray-400">

                    <h2
                        class="mb-4 text-3xl md:text-7xl tracking-tight font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                        Write with philosopher idea</h2>

                    <p class="mb-4">Ask ChatGPT plus to help your copywriting and generating ideas. Faster like never
                        before</p>

                </div>

                <div class="grid grid-cols-2 gap-4 mt-8">

                    <img class="w-full rounded-lg" src="img/Frame15.png" alt="office content 1">

                    <img class="mt-4 w-full lg:mt-10 rounded-lg" src="img/Frame18.png" alt="office content 2">

                </div>
            </div>
        </section>

        {{-- feature section 3 --}}
        <section class="bg-white dark:bg-gray-900 my-1 md:my-5">

            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">

                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400 grid justify-center text-center ">

                    <h2
                        class="mb-4 text-7xl tracking-tight font-extrabold text-transparent  bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 dark:text-white md:text-left">
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
    <section class="grid justify-center my-20" id="price">

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
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
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
                        <a href="login"
                            class="text-white bg-gradient-to-r from-purple-400 to-pink-600 hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Subscribe</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- contact section -->
    <section class="my-40">

        <p id="contact"
            class="flex justify-center text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
            Contact Us</p>

        <div class="grid grid-rows lg:flex justify-center gap-10 mt-10">

            <!-- email -->
            <div
                class="max-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <i data-feather="mail" class="w-10 h-10 mb-2 text-red-600"></i>

                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Email</h5>

                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Contact us for information about
                    partnership or anything!</p>

                <a href="mailto:saurusdana396@gmail.com" target="_blank"
                    class="inline-flex items-center text-blue-600 hover:underline">
                    Email
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                        </path>
                        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                        </path>
                    </svg>
                </a>

            </div>

            <!-- Whatsapp -->
            <div
                class="max-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <i data-feather="phone" class="w-10 h-10 mb-2 text-green-400"></i>

                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Whatsapp</h5>

                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Reach us through Whatsapp and we'll give
                    the fastest respond as soon as we can</p>

                <a href="https://wa.me/6283110823050/" target="_blank"
                    class="inline-flex items-center text-blue-600 hover:underline">
                    Whatsapp
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                        </path>
                        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                        </path>
                    </svg>
                </a>

            </div>

            <!-- instagram -->
            <div
                class="max-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <i data-feather="instagram" class="w-10 h-10 mb-2 text-pink-500"></i>

                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Instagram</h5>

                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Take a look of our gallery and recent
                    post on Instagram</p>

                <a href="https://www.instagram.com/danasaurus.store/" target="_blank"
                    class="inline-flex items-center text-blue-600 hover:underline">
                    Instagram
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                        </path>
                        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                        </path>
                    </svg>
                </a>

            </div>

        </div>

    </section>

    {{-- CTA section --}}
    <section class="bg-white dark:bg-gray-900 mb-20">

        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">

            <div class="mx-auto max-w-screen-sm text-center">

                <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 dark:text-white">
                    Start your subscription today</h2>

                <p class="mb-10 font-light text-gray-500 dark:text-gray-400 md:text-lg">Feel the creativity of ChatGPT
                    directly, it's in your hand!</p>

                <a href="login"
                    class="text-white bg-gradient-to-r from-purple-400 to-pink-600 hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-800 font-semibold rounded-lg text-xl px-5 py-2.5 mr-2 mb-2">Subcribe
                    Now</a>
            </div>
        </div>
    </section>

    @include('layouts.footer')

</body>

</html>
