<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './partials/head.php'; ?>
    <title>Dashboard</title>
</head>

<body>
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>

        <!-- main body section -->
        <main class="p-10 space-y-10">


            <!-- Dashboard Section -->
            <div class="space-y-5 ">
                <h2 class="text-5xl font-spartan text-center tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                    Dashboard
                </h2>
                <!-- div grid of 3 columns -->
                <div class="mt-10 grid-cols-3 gap-2 mx-auto grid ">
                    <!-- Result Card 1-->
                    <article class=" hover:cursor-pointer rounded-lg p-4 transition-colors duration-300 hover:text-blue-800 text-white bg-blue-800 hover:bg-amber-400 justify-center text-center items-center ">
                        <!-- title -->
                        <h1 class="text-2xl text-center uppercase tracking-tight font-bold pb-2 border-b-2 border-b-current hover:border-b-current ">
                            LODGES
                        </h1>
                        <!-- counts -->
                        <h2 class="p-4 text-6xl font-spartan text-center tracking-tight font-extrabold ">
                            100
                        </h2>
                        <p class="font-bold text-center ">Facilities</p>
                    </article>

                    <!-- Result Card 2-->
                    <article class=" hover:cursor-pointer rounded-lg p-4 transition-colors duration-300 text-blue-800 hover:text-white hover:bg-blue-800 bg-amber-400 justify-center text-center items-center ">
                        <!-- title -->
                        <h1 class="text-2xl text-center uppercase tracking-tight font-bold pb-2 border-b-2 border-b-current hover:border-b-current ">
                            MOTELS
                        </h1>
                        <!-- counts -->
                        <h2 class="p-4 text-6xl font-spartan text-center tracking-tight font-extrabold ">
                            90
                        </h2>
                        <p class="font-bold text-center ">Facilities</p>
                    </article>

                    <!-- Result Card 3-->
                    <article class=" hover:cursor-pointer rounded-lg p-4 transition-colors duration-300 hover:text-blue-800 text-white bg-blue-800 hover:bg-amber-400 justify-center text-center items-center ">
                        <!-- title -->
                        <h1 class="text-2xl text-center uppercase tracking-tight font-bold pb-2 border-b-2 border-b-current hover:border-b-current ">
                            APARTMENTS
                        </h1>
                        <!-- counts -->
                        <h2 class="p-4 text-6xl font-spartan text-center tracking-tight font-extrabold ">
                            60
                        </h2>
                        <p class="font-bold text-center ">Facilities</p>
                    </article>

                    <!-- Result Card 4-->
                    <article class=" hover:cursor-pointer rounded-lg p-4 transition-colors duration-300 text-blue-800 hover:text-white hover:bg-blue-800 bg-amber-400 justify-center text-center items-center ">
                        <!-- title -->
                        <h1 class="text-2xl text-center uppercase tracking-tight font-bold pb-2 border-b-2 border-b-current hover:border-b-current ">
                            Restaurants
                        </h1>
                        <!-- counts -->
                        <h2 class="p-4 text-6xl font-spartan text-center tracking-tight font-extrabold ">
                            80
                        </h2>
                        <p class="font-bold text-center ">Facilities</p>
                    </article>

                    <!-- Result Card 5-->
                    <article class=" hover:cursor-pointer rounded-lg p-4 transition-colors duration-300 hover:text-blue-800 text-white bg-blue-800 hover:bg-amber-400 justify-center text-center items-center ">
                        <!-- title -->
                        <h1 class="text-2xl text-center uppercase tracking-tight font-bold pb-2 border-b-2 border-b-current hover:border-b-current ">
                            TENTED CAMPS
                        </h1>
                        <!-- counts -->
                        <h2 class="p-4 text-6xl font-spartan text-center tracking-tight font-extrabold ">
                            60
                        </h2>
                        <p class="font-bold text-center ">Facilities</p>
                    </article>


                    <!-- Result Card 6-->
                    <article class=" hover:cursor-pointer rounded-lg p-4 transition-colors duration-300 text-blue-800 hover:text-white hover:bg-blue-800 bg-amber-400 justify-center text-center items-center ">
                        <!-- title -->
                        <h1 class="text-2xl text-center uppercase tracking-tight font-bold pb-2 border-b-2 border-b-current hover:border-b-current ">
                            VILLAS
                        </h1>
                        <!-- counts -->
                        <h2 class="p-4 text-6xl font-spartan text-center tracking-tight font-extrabold ">
                            40
                        </h2>
                        <p class="font-bold text-center ">Facilities</p>
                    </article>
                </div>
            </div>

            <!-- Star Grading Section -->
            <div class="space-y-5 ">
                <h2 class="text-5xl font-spartan text-center tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                    Star Grading
                </h2>
                <!-- Table -->
                <div class="flex flex-col ">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 ">
                            <div class="shadow overflow-hidden border-b border-blue/40 sm:rounded-lg ">
                                <table class="min-w-full divide-y divide-blue text-blue ">
                                    <!-- table header -->
                                    <thead class="bg-blue-800 text-white ">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider ">
                                                NAME
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                ONE STAR
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                TWO STAR
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                THREE STAR
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                FOUR STAR
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                FIVE STAR
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody class="bg-white divide-y divide-blue-800/40 ">
                                        <!-- 1 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    LODGES
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                        </tr>


                                        <!-- 2 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    APARTMENTS
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>


                                        </tr>

                                        <!-- 3 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    TENTED CAMPS
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>

                                        </tr>

                                        <!-- 4 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    VILLAS
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                80
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                80
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                80
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                90
                                            </td>

                                        </tr>

                                        <!-- 5 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    COTTAGES
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                70
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                70
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                70
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                70
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                70
                                            </td>

                                        </tr>

                                        <!-- 6 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    ROOMS
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                60
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                60
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                60
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                60
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                60
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end table -->

            </div>


            <!-- Pending Grading Section -->
            <div class="space-y-5 ">
                <h2 class="text-5xl font-spartan text-center tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                    Pending Grading
                </h2>
                <!-- Table -->
                <div class="flex flex-col ">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 ">
                            <div class="shadow overflow-hidden border-b border-blue/40 sm:rounded-lg ">
                                <table class="min-w-full divide-y divide-blue text-blue ">
                                    <!-- table header -->
                                    <thead class="bg-blue-800 text-white ">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider ">
                                                FACILITY
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                INSPECTION DATE
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                STATUS
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                DETAILS
                                            </th>

                                        </tr>
                                    </thead>

                                    <!-- Table Body -->
                                    <tbody class="bg-white divide-y divide-blue-800/40 ">
                                        <!-- 1 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    NEW JERUZALEM HOTEL
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center font-semibold text-sm text-green-600 ">
                                                2022-02-01
                                            </td>
                                            <td class="px-6 py-4 justify-center items-center text-center whitespace-nowrap ">
                                                <span class="px-2 inline-flex text-xs leading-5 rounded-full bg-red-200 text-red-500 ">
                                                    Pending
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red hover:bg-blue-800 hover:text-white bg-amber-400 text-blue-800 font-semibold transition-colors duration-300 ">
                                                    View Details
                                                </button>

                                            </td>

                                        </tr>

                                        <!-- 2 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    AGIP MOTEL
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center font-semibold text-sm text-green-600 ">
                                                2021-12-01
                                            </td>
                                            <td class="px-6 py-4 justify-center items-center text-center whitespace-nowrap ">
                                                <span class="px-2 inline-flex text-xs leading-5 rounded-full bg-red-200 text-red-500 ">
                                                    Pending
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red hover:bg-blue-800 hover:text-white bg-amber-400 text-blue-800 font-semibold transition-colors duration-300 ">
                                                    View Details
                                                </button>

                                            </td>

                                        </tr>


                                        <!-- 3 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    BIG TIME HOTEL
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center font-semibold text-sm text-green-600 ">
                                                2021-12-01
                                            </td>
                                            <td class="px-6 py-4 justify-center items-center text-center whitespace-nowrap ">
                                                <span class="px-2 inline-flex text-xs leading-5 rounded-full bg-red-200 text-red-500 ">
                                                    Pending
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red hover:bg-blue-800 hover:text-white bg-amber-400 text-blue-800 font-semibold transition-colors duration-300 ">
                                                    View Details
                                                </button>

                                            </td>

                                        </tr>

                                        <!-- 4 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    ARUA PARK
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center font-semibold text-sm text-green-600 ">
                                                2021-12-01
                                            </td>
                                            <td class="px-6 py-4 justify-center items-center text-center whitespace-nowrap ">
                                                <span class="px-2 inline-flex text-xs leading-5 rounded-full bg-red-200 text-red-500 ">
                                                    Pending
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red hover:bg-blue-800 hover:text-white bg-amber-400 text-blue-800 font-semibold transition-colors duration-300 ">
                                                    View Details
                                                </button>

                                            </td>

                                        </tr>


                                        <!-- 5 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    KALYA COURTS HOTEL
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center font-semibold text-sm text-green-600 ">
                                                2021-12-01
                                            </td>
                                            <td class="px-6 py-4 justify-center items-center text-center whitespace-nowrap ">
                                                <span class="px-2 inline-flex text-xs leading-5 rounded-full bg-red-200 text-red-500 ">
                                                    Pending
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
                                                <!-- on click, call js code that calls the php file to change status -->
                                                <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red hover:bg-blue-800 hover:text-white bg-amber-400 text-blue-800 font-semibold transition-colors duration-300 ">
                                                    View Details
                                                </button>

                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end table -->

            </div>
        </main>
        <!-- footer section -->
        <footer class="text-center content-center grid ">
            <small class="text-white ">© 2022 - UTB E-GRADING SYSTEM | All rights Reserved</small>
        </footer>
    </section>
    <!-- js links -->
    <?php include_once './partials/foot.php'; ?>

</body>

</html>