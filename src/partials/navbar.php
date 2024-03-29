<nav class="font-lato w-full  md:px-2 px-2 py-2 z-50 sticky top-0 left-0 right-0 bg-blue-800 text-white drop-shadow-md shadow-black">
    <div class="flex justify-between">
        <!-- icon -->
        <a href="./index.php" class="bg-amber-400 p-2 rounded-md">
            <img src="../../img/utb_noback.png" height="30px" width="50px" alt="logo" />
        </a>

        <!-- Actions -->
        <div  class="space-x-2 flex justify-end items-center mt-4 md:mt-0 flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0">
            <!-- HOme -->
            <a onclick="goToHome()" class="inline-flex items-center text-blue-800 bg-amber-400
                    rounded-md font-semibold uppercase px-3 py-2 text-sm transition-colors duration-300">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
                    <g>
                        <rect fill="none" height="24" width="24" />
                    </g>
                    <g>
                        <path d="M19,9.3V4h-3v2.6L12,3L2,12h3v8h5v-6h4v6h5v-8h3L19,9.3z M10,10c0-1.1,0.9-2,2-2s2,0.9,2,2H10z" />
                    </g>
                </svg>
                <!-- text -->
                <span class="ml-2">Home</span>
            </a>

            <!-- Facilities -->
            <a onclick="goToFacilities()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
                    <g>
                        <rect fill="none" height="24" width="24" />
                    </g>
                    <g>
                        <g>
                            <polygon points="22,9 12,2 2,9 11,9 11,22 13,22 13,9" />
                            <polygon points="4.14,12 2.18,12.37 3,16.74 3,22 5,22 5.02,18 7,18 7,22 9,22 9,16 4.9,16" />
                            <polygon points="19.1,16 15,16 15,22 17,22 17,18 18.98,18 19,22 21,22 21,16.74 21.82,12.37 19.86,12" />
                        </g>
                    </g>
                </svg>
                <!-- text -->
                <span class="ml-2">Facilities</span>
            </a>

            <!-- Establishment Types -->
            <a onclick="goToEstablishmentType()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <circle cx="20" cy="12" r="2" />
                    <circle cx="4" cy="12" r="2" />
                    <circle cx="12" cy="20" r="2" />
                    <path d="M10.05 8.59L6.03 4.55h-.01l-.31-.32-1.42 1.41 4.02 4.05.01-.01.31.32zm3.893.027l4.405-4.392L19.76 5.64l-4.405 4.393zM10.01 15.36l-1.42-1.41-4.03 4.01-.32.33 1.41 1.41 4.03-4.02zm9.75 2.94l-3.99-4.01-.36-.35L14 15.35l3.99 4.01.35.35z" />
                    <circle cx="12" cy="4" r="2" />
                </svg>
                <!-- text -->
                <span class="ml-2">Establishment Types</span>
            </a>

            <!-- Score Settings -->
            <a onclick="goToScoreSettings()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="24px" height="24px" viewBox="0 0 24 24">
                    <path d="M19 2c1.654 0 3 1.346 3 3v14c0 1.654-1.346 3-3 3h-14c-1.654 0-3-1.346-3-3v-14c0-1.654 1.346-3 3-3h14zm5 3c0-2.761-2.238-5-5-5h-14c-2.762 0-5 2.239-5 5v14c0 2.761 2.238 5 5 5h14c2.762 0 5-2.239 5-5v-14zm-8 5c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm-8 2c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm8-4c.343 0 .677.035 1 .101v-1.101c0-.552-.447-1-1-1s-1 .448-1 1v1.101c.323-.066.657-.101 1-.101zm-8 2c.343 0 .677.035 1 .101v-3.101c0-.552-.447-1-1-1s-1 .448-1 1v3.101c.323-.066.657-.101 1-.101zm8 8c-.343 0-.677-.035-1-.101v3.101c0 .552.447 1 1 1s1-.448 1-1v-3.101c-.323.066-.657.101-1 .101zm-8 2c-.343 0-.677-.035-1-.101v1.101c0 .552.447 1 1 1s1-.448 1-1v-1.101c-.323.066-.657.101-1 .101z" />
                </svg>
                <!-- text -->
                <span class="ml-2">Score Settings</span>
            </a>

            <!-- Districts -->
            <a onclick="goToDistricts()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="24px" height="24px" viewBox="0 0 24 24">
                    <path d="M23.961 8.429c-.831.982-1.614 1.918-1.961 3.775v6.683l-4 2.479v-9.161c-.347-1.857-1.13-2.793-1.961-3.775-.908-1.075-2.039-2.411-2.039-4.629l.019-.345-2.019-1.456-5.545 4-6.455-4v18l6.455 4 5.545-4 5.545 4 6.455-4v-11.618l-.039.047zm-12.961 9.826l-4 2.885v-13.067l4-2.886v13.068zm9-18.255c-2.1 0-4 1.702-4 3.801 0 3.121 3.188 3.451 4 8.199.812-4.748 4-5.078 4-8.199 0-2.099-1.9-3.801-4-3.801zm0 5.5c-.828 0-1.5-.671-1.5-1.5s.672-1.5 1.5-1.5 1.5.671 1.5 1.5-.672 1.5-1.5 1.5z" />
                </svg>
                <!-- text -->
                <span class="ml-2">Districts</span>
            </a>
            <!-- Users -->
            <a onclick="goToUsers()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="24px" height="24px" viewBox="0 0 24 24">
                    <path d="M17.997 18h-11.995l-.002-.623c0-1.259.1-1.986 1.588-2.33 1.684-.389 3.344-.736 2.545-2.209-2.366-4.363-.674-6.838 1.866-6.838 2.491 0 4.226 2.383 1.866 6.839-.775 1.464.826 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.811-2.214c-1.29-.298-2.49-.559-1.909-1.657 1.769-3.342.469-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.324 0 3.903 2.268 1.77 2.246 6.676h4.501l.002-.463c0-.946-.074-1.493-1.192-1.751zm-22.806 2.214h4.501c-.021-4.906 2.246-2.772 2.246-6.676 0-1.507-.983-2.324-2.248-2.324-1.869 0-3.169 1.787-1.399 5.129.581 1.099-.619 1.359-1.909 1.657-1.119.258-1.193.805-1.193 1.751l.002.463z" />
                </svg>
                <!-- text -->
                <span class="ml-2">Users</span>
            </a>
            <!-- dropdown -->
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                Others
                <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="./reports.php" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">REPORTS</a>
                    </li>
                    <li>
                        <a href="./userlogs.php" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">USER LOGS</a>
                    </li>
                    <li>
                        <a href="./region.php" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">REGION</a>
                    </li>
                </ul>
            </div>

            <div class="items-center hidden sm:flex">
                <!-- user menu -->
                <a id="dropdownButton" data-dropdown-toggle="dropdown" type="button" style="background-color: #fbbf24;" class="max-w-xs bg-blue-400 p-2 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 text-blue-800 focus:ring-offset-blue-100 focus:ring-blue-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true" onclick="goToProfile()">
                    <span class="sr-only">User Menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="24px" height="24px" viewBox="0 0 24 24">
                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7.753 18.305c-.261-.586-.789-.991-1.871-1.241-2.293-.529-4.428-.993-3.393-2.945 3.145-5.942.833-9.119-2.489-9.119-3.388 0-5.644 3.299-2.489 9.119 1.066 1.964-1.148 2.427-3.393 2.945-1.084.25-1.608.658-1.867 1.246-1.405-1.723-2.251-3.919-2.251-6.31 0-5.514 4.486-10 10-10s10 4.486 10 10c0 2.389-.845 4.583-2.247 6.305z" />
                    </svg>
                </a>
                <div id="dropdown" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-sky-50">
                    <ul class="py-1 user_btn_dropdown" aria-labelledby="dropdownButton">
                        <li>
                            <a href="./permissions.php" class="flex align-center py-2 px-4 text-sm text-blue-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-blue-500 dark:hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>My Permissions</a>
                        </li>
                        <li>
                            <a href="" class="flex align-center py-2 px-4 text-sm text-red-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-blue-500 dark:hover:text-red"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" id="logout_icon" />
                                </svg>Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- hamburger menu -->
        <div class="flex flex-end" style="position: relative;bottom:10px;">
            <div class="hamburger_menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>

            </div>
            <div class="hamburger_menu2">
                <svg xmlns=" http://www.w3.org/2000/svg " class="h-10 w-10 " fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                    <path stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " d="M6 18L18 6M6 6l12 12 " />
                </svg>
            </div>
        </div>
    </div>

    <!-- mobile view -->
    <div class="mobiledropdown mt-2 ">
        <div class="flex flex-col justify-center">
            <!-- HOme -->
            <a onclick="goToHome()" class="inline-flex items-center text-blue-800 bg-amber-400
  rounded-md font-semibold uppercase px-3 py-2 text-sm transition-colors duration-300">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
                    <g>
                        <rect fill="none" height="24" width="24" />
                    </g>
                    <g>
                        <path d="M19,9.3V4h-3v2.6L12,3L2,12h3v8h5v-6h4v6h5v-8h3L19,9.3z M10,10c0-1.1,0.9-2,2-2s2,0.9,2,2H10z" />
                    </g>
                </svg>
                <!-- text -->
                <span class="ml-2">Home</span>
            </a>

            <!-- Facilities -->
            <a onclick="goToFacilities()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
                    <g>
                        <rect fill="none" height="24" width="24" />
                    </g>
                    <g>
                        <g>
                            <polygon points="22,9 12,2 2,9 11,9 11,22 13,22 13,9" />
                            <polygon points="4.14,12 2.18,12.37 3,16.74 3,22 5,22 5.02,18 7,18 7,22 9,22 9,16 4.9,16" />
                            <polygon points="19.1,16 15,16 15,22 17,22 17,18 18.98,18 19,22 21,22 21,16.74 21.82,12.37 19.86,12" />
                        </g>
                    </g>
                </svg>
                <!-- text -->
                <span class="ml-2">Facilities</span>
            </a>

            <!-- Establishment Types -->
            <a onclick="goToEstablishmentType()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <circle cx="20" cy="12" r="2" />
                    <circle cx="4" cy="12" r="2" />
                    <circle cx="12" cy="20" r="2" />
                    <path d="M10.05 8.59L6.03 4.55h-.01l-.31-.32-1.42 1.41 4.02 4.05.01-.01.31.32zm3.893.027l4.405-4.392L19.76 5.64l-4.405 4.393zM10.01 15.36l-1.42-1.41-4.03 4.01-.32.33 1.41 1.41 4.03-4.02zm9.75 2.94l-3.99-4.01-.36-.35L14 15.35l3.99 4.01.35.35z" />
                    <circle cx="12" cy="4" r="2" />
                </svg>
                <!-- text -->
                <span class="ml-2">Establishment Types</span>
            </a>

            <!-- Score Settings -->
            <a onclick="goToScoreSettings()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="24px" height="24px" viewBox="0 0 24 24">
                    <path d="M19 2c1.654 0 3 1.346 3 3v14c0 1.654-1.346 3-3 3h-14c-1.654 0-3-1.346-3-3v-14c0-1.654 1.346-3 3-3h14zm5 3c0-2.761-2.238-5-5-5h-14c-2.762 0-5 2.239-5 5v14c0 2.761 2.238 5 5 5h14c2.762 0 5-2.239 5-5v-14zm-8 5c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm-8 2c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm8-4c.343 0 .677.035 1 .101v-1.101c0-.552-.447-1-1-1s-1 .448-1 1v1.101c.323-.066.657-.101 1-.101zm-8 2c.343 0 .677.035 1 .101v-3.101c0-.552-.447-1-1-1s-1 .448-1 1v3.101c.323-.066.657-.101 1-.101zm8 8c-.343 0-.677-.035-1-.101v3.101c0 .552.447 1 1 1s1-.448 1-1v-3.101c-.323.066-.657.101-1 .101zm-8 2c-.343 0-.677-.035-1-.101v1.101c0 .552.447 1 1 1s1-.448 1-1v-1.101c-.323.066-.657.101-1 .101z" />
                </svg>
                <!-- text -->
                <span class="ml-2">Score Settings</span>
            </a>

            <!-- Districts -->
            <a onclick="goToDistricts()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="24px" height="24px" viewBox="0 0 24 24">
                    <path d="M23.961 8.429c-.831.982-1.614 1.918-1.961 3.775v6.683l-4 2.479v-9.161c-.347-1.857-1.13-2.793-1.961-3.775-.908-1.075-2.039-2.411-2.039-4.629l.019-.345-2.019-1.456-5.545 4-6.455-4v18l6.455 4 5.545-4 5.545 4 6.455-4v-11.618l-.039.047zm-12.961 9.826l-4 2.885v-13.067l4-2.886v13.068zm9-18.255c-2.1 0-4 1.702-4 3.801 0 3.121 3.188 3.451 4 8.199.812-4.748 4-5.078 4-8.199 0-2.099-1.9-3.801-4-3.801zm0 5.5c-.828 0-1.5-.671-1.5-1.5s.672-1.5 1.5-1.5 1.5.671 1.5 1.5-.672 1.5-1.5 1.5z" />
                </svg>
                <!-- text -->
                <span class="ml-2">Districts</span>
            </a>

            <!-- Users -->
            <a onclick="goToUsers()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="24px" height="24px" viewBox="0 0 24 24">
                    <path d="M17.997 18h-11.995l-.002-.623c0-1.259.1-1.986 1.588-2.33 1.684-.389 3.344-.736 2.545-2.209-2.366-4.363-.674-6.838 1.866-6.838 2.491 0 4.226 2.383 1.866 6.839-.775 1.464.826 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.811-2.214c-1.29-.298-2.49-.559-1.909-1.657 1.769-3.342.469-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.324 0 3.903 2.268 1.77 2.246 6.676h4.501l.002-.463c0-.946-.074-1.493-1.192-1.751zm-22.806 2.214h4.501c-.021-4.906 2.246-2.772 2.246-6.676 0-1.507-.983-2.324-2.248-2.324-1.869 0-3.169 1.787-1.399 5.129.581 1.099-.619 1.359-1.909 1.657-1.119.258-1.193.805-1.193 1.751l.002.463z" />
                </svg>
                <!-- text -->
                <span class="ml-2">Users</span>
            </a>
            <!-- permissions -->
            <a onclick="gotoMypermissions()" class="inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30 ">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <!-- text -->
                <span class="ml-2 ">My Permissions</span>
            </a>

            <!-- dropdown section -->
            <a type="button" class=" text-left inline-flex items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <!-- <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                </svg> -->
                <span class="flex-1 ml-3whitespace-nowrap" sidebar-toggle-item>OTHERS</span>
                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <ul id="dropdown-example" class="pl-4 hidden py-2 space-y-2">
                <li>
                    <a href="#" class="block py-2 text-white px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">REPORTS</a>
                </li>
                <li>
                    <a href="#" class="block py-2 text-white px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">USER LOGS</a>
                </li>
                <li>
                    <a href="#" class="block py-2 text-white px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">REGION</a>
                </li>
            </ul>


            <!-- logout -->
            <a onclick="" class="inline-flex text-red-500 items-center hover:text-blue-800 hover:bg-amber-400 rounded-md font-semibold uppercase px-3 py-2 text-sm bg-transparent transition-colors duration-300 hover:border-blue-800/30 ">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
                <!-- text -->
                <span class="ml-2 ">Sign-out</span>
            </a>
        </div>
    </div>
</nav>