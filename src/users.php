<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './partials/head.php'; ?>

    <title>Users</title>
</head>

<body >
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>


        <!-- main -->
        <main class="p-10 space-y-10">
            <!-- page title -->
            <h2 class="text-5xl font-spartan text-center underline tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl">
                Users
            </h2>

            <!-- FAcilities Section -->
            <div class="space-y-5">

                <!-- CReate new Establishment Type button -->
                <a href="./create.php" class="flex items-center justify-center w-full rounded-md uppercase text-sm font-semibold pl-2 pr-3 py-2 shadow-sm hover:text-white hover:bg-blue-800 text-blue-800 bg-amber-400 hover:no-underline px-5 transition-colors duration-300">
                    <svg width="20" height="20" fill="currentColor" class="mr-2" aria-hidden="true">
                        <path d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
                    </svg>
                    Create New User
                </a>


                <!-- Table -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-blue/40 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-blue text-blue">
                                    <!-- table header -->
                                    <thead class="bg-blue-800 text-white">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                Email
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                                Phone Number
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                                User Type
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                                Edit
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                                Permissions
                                            </th>

                                        </tr>
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody class="bg-white divide-y divide-blue-800/40">
                                        <!-- 1 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">Admin User</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left  font-semibold text-sm">
                                                utb@admin.gov
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center  font-semibold text-sm">
                                                0772123456
                                            </td>
                                            <td class="px-6 py-4  whitespace-nowrap text-center  font-semibold text-sm">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-utb-green">
                                                    Super Admin
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <a href="./edits.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md 
                            bg-blue-800 text-white hover:bg-amber-400 hover:text-blue-800 font-semibold transition-colors duration-300">
                                                        Edit
                                                    </button>
                                                </a>

                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <a href="./managepermissions.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md 
                            bg-utb-green text-white hover:bg-utb-blue  font-semibold transition-colors duration-300">
                                                        View Permissions
                                                    </button>
                                                </a>

                                            </td>

                                        </tr>

                                        <!-- 2 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">Thembo Charles</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left  font-semibold text-sm">
                                                ashley7520charles@gmail.com
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center  font-semibold text-sm">
                                                +256787444081
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center  font-semibold text-sm">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-utb-blue">
                                                    Assessor
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <a href="./edits.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md 
                            bg-blue-800 text-white hover:bg-amber-400 hover:text-blue-800 font-semibold transition-colors duration-300">
                                                        Edit
                                                    </button>
                                                </a>

                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <a href="./managepermissions.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md 
                            bg-utb-green text-white hover:bg-utb-blue  font-semibold transition-colors duration-300">
                                                        View Permissions
                                                    </button>
                                                </a>

                                            </td>

                                        </tr>


                                        <!-- 3 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">Isina Coletta</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left  font-semibold text-sm">
                                                support@ibabazamedia.com
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center  font-semibold text-sm">
                                                07740293094
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center  font-semibold text-sm">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-utb-blue">
                                                    Assessor
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <a href="./edits.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md 
                            bg-blue-800 text-white hover:bg-amber-400 hover:text-blue-800 font-semibold transition-colors duration-300">
                                                        Edit
                                                    </button>
                                                </a>

                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <a href="./managepermissions.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md 
                            bg-utb-green text-white hover:bg-utb-blue  font-semibold transition-colors duration-300">
                                                        View Permissions
                                                    </button>
                                                </a>

                                            </td>

                                        </tr>


                                        <!-- 4 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">Immaculate Mary</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left  font-semibold text-sm">
                                                immy@ibabazamedia.com
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center  font-semibold text-sm">
                                                08438938482
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center  font-semibold text-sm">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-utb-blue">
                                                    Assessor
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <a href="./edits.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md 
                            bg-blue-800 text-white hover:bg-amber-400 hover:text-blue-800 font-semibold transition-colors duration-300">
                                                        Edit
                                                    </button>
                                                </a>

                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <a href="./managepermissions.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md 
                            bg-utb-green text-white hover:bg-utb-blue  font-semibold transition-colors duration-300">
                                                        View Permissions
                                                    </button>
                                                </a>

                                            </td>

                                        </tr>


                                        <!-- 5 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">Ibabaza Watson</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left  font-semibold text-sm">
                                                ibabazamedia@gmail.com
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center  font-semibold text-sm">
                                                0785972745
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center  font-semibold text-sm">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-utb-blue">
                                                    Assessor
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <a href="./edits.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md 
                            bg-blue-800 text-white hover:bg-amber-400 hover:text-blue-800 font-semibold transition-colors duration-300">
                                                        Edit
                                                    </button>
                                                </a>

                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <a href="./managepermissions.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md 
                            bg-utb-green text-white hover:bg-utb-blue  font-semibold transition-colors duration-300">
                                                        View Permissions
                                                    </button>
                                                </a>

                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end table -->


        </main>
        <!-- end main -->
        <!-- footer section -->
        <footer class="text-center content-center grid ">
            <small class="text-white ">© 2022 - UTB E-GRADING SYSTEM | All rights Reserved</small>
        </footer>
    </section>
    <!-- js links -->
    <?php include_once './partials/foot.php'; ?>

</body>

</html>