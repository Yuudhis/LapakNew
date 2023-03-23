    {{-- navbar section --}}
    <nav class="sticky top-0 z-50 bg-white mt-5 mx-20 sm:px-4 py-2.5 rounded dark:bg-gray-900">

        <div class="container flex flex-wrap items-center justify-between">

            <a href="/" class="flex items-center">
                <img src="img/mainlogo.png" class="h-6 mr-3 sm:h-9" alt="Firo Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Danasaurus
                    Store</span>
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
                        <a href="/"
                            class="block py-2 pl-3 pr-4 text-xl rounded text-[#333333] hover:text-transparent  hover:bg-clip-text hover:bg-gradient-to-r from-purple-400 to-pink-600 md:p-1 dark:text-white transition ease-linear duration-700">Home</a>
                    </li>

                    <li>
                        <a href="/#about"
                            class="block py-2 pl-3 pr-4 text-xl rounded text-[#333333] hover:text-transparent  hover:bg-clip-text hover:bg-gradient-to-r from-purple-400 to-pink-600 md:p-1 dark:text-white transition ease-linear duration-700">About</a>
                    </li>

                    <li>
                        <a href="/#price"
                            class="block py-2 pl-3 pr-4 text-xl rounded text-[#333333] hover:text-transparent  hover:bg-clip-text hover:bg-gradient-to-r from-purple-400 to-pink-600 md:p-1 dark:text-white transition ease-linear duration-700">Pricing</a>
                    </li>

                    <li>
                        <a href="/#contact"
                            class="block py-2 pl-3 pr-4 text-xl rounded text-[#333333] hover:text-transparent  hover:bg-clip-text hover:bg-gradient-to-r from-purple-400 to-pink-600 md:p-1 dark:text-white transition ease-linear duration-700">Contact</a>
                    </li>

                    <li>

                        <a href="/login">
                            <button
                                class="md:p-1 text-xl w-40 h-12 border-2 border-pink-600 text-pink-600 rounded-lg hover:font-semibold hover:border-none hover:bg-gradient-to-r from-purple-400 to-pink-600 hover:text-white transition ease-linear duration-700">
                                Subscribe Now
                            </button>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
