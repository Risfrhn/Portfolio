<div>
    <nav id="navbar" class="navbar fixed  w-full z-20 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 px-5 xl:px-0">
            <!-- Tampil di sm ke atas, sembunyikan di xs -->
            <a href="#"  class="hidden sm:flex items-center space-x-3 rtl:space-x-reverse text-xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">
                Portofolio.io
            </a>

            <!-- Tampil di xs / layar kecil, sembunyikan di sm ke atas -->
            <a href="#" class="flex sm:hidden items-center space-x-3 rtl:space-x-reverse px-2 rounded-full bg-gray-800 text-white font-bold text-xl">
                <span class="bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">P</span>
            </a>
            <!-- Dropdown Language -->
            <div class="flex items-center lg:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                <button type="button" data-dropdown-toggle="language-dropdown-menu" 
                    class="relative inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer group overflow-hidden">

                    <!-- Background gradient overlay -->
                    <span class="absolute inset-0 bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>

                    <!-- Icon dan teks -->
                    <span class="relative z-10 flex items-center space-x-2">
                        <svg class="h-3 w-3.5 rounded-full me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480">
                            <path fill="#ff0000" d="M0 0h640v240H0z"/>
                            <path fill="#ffffff" d="M0 240h640v240H0z"/>
                        </svg>
                        <span>Indonesia</span>
                    </span>
                </button>

                <!-- <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700" id="language-dropdown-menu">
                    <ul class="py-2 font-medium" role="none">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512"><path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/><path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/><path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/><path fill="#fff"  transform="scale(3.9385)"/></svg>              
                                    English (US)
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3 w-3.5 rounded-full me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480">
                                        <path fill="#ff0000" d="M0 0h640v240H0z"/>
                                        <path fill="#ffffff" d="M0 240h640v240H0z"/>
                                    </svg>
                                    Indonesia
                                </div>

                            </a>
                        </li>
                    </ul>
                </div> -->

                <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-language" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>

            <!-- Menu section -->
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-language">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg md:space-x-2 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 bg-transparent">
                    <li>
                        <a href="#" class="relative block py-2 px-2 md:px-4 text-white rounded-md overflow-hidden group">
                            <!-- Background gradient overlay -->
                            <span class="absolute inset-0 bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>
                            
                            <!-- Text -->
                            <span class="relative z-10 transition-all duration-300 group-hover:bg-clip-text group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:via-blue-500 group-hover:to-indigo-600">
                                Home
                            </span>
                        </a>               
                    </li>
                    <li>
                        <a href="#" class="relative block py-2 px-2 text-white rounded-md overflow-hidden group">
                            <!-- Background gradient overlay -->
                            <span class="absolute inset-0 bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>
                            
                            <!-- Text -->
                            <span class="relative z-10 transition-all duration-300 group-hover:bg-clip-text group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:via-blue-500 group-hover:to-indigo-600">
                                About
                            </span>
                        </a>               
                    </li>
                    <li>
                        <a href="#" class="relative block py-2 px-2 text-white rounded-md overflow-hidden group">
                            <!-- Background gradient overlay -->
                            <span class="absolute inset-0 bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>
                            
                            <!-- Text -->
                            <span class="relative z-10 transition-all duration-300 group-hover:bg-clip-text group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:via-blue-500 group-hover:to-indigo-600">
                                Portfolio
                            </span>
                        </a>               
                    </li>
                    <li>
                        <a href="#" class="relative block py-2 px-2 text-white rounded-md overflow-hidden group">
                            <!-- Background gradient overlay -->
                            <span class="absolute inset-0 bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>
                            
                            <!-- Text -->
                            <span class="relative z-10 transition-all duration-300 group-hover:bg-clip-text group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:via-blue-500 group-hover:to-indigo-600">
                                Product
                            </span>
                        </a>               
                    </li>
                    <li>
                        <a href="#" class="relative block py-2 px-2 text-white rounded-md overflow-hidden group">
                            <!-- Background gradient overlay -->
                            <span class="absolute inset-0 bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>
                            
                            <!-- Text -->
                            <span class="relative z-10 transition-all duration-300 group-hover:bg-clip-text group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:via-blue-500 group-hover:to-indigo-600">
                                Contact
                            </span>
                        </a>               
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
