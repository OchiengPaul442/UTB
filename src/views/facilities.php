<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once './partials/head.php'; ?>

    <title>facilities</title>
</head>

<body>
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>

        <!-- main body section -->
        <main class="p-10 space-y-10">
            <!-- first section -->
            <div>
                <div class=" flex flex-wrap justify-between pt-8 ">
                    <div>
                        <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                            Facilities
                        </h2>
                    </div>
                    <div class="mt-4 ">
                        <a href="./create.php "> <button type="button " class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700
            dark:focus:ring-blue-800 ">CREATE NEW FACILITY</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pt-8 ">
                <div class="flex flex-wrap justify-between ">
                    <div class="flex gap-2 flex-wrap mb-6 ">
                        <a href="# " style="display: flex;align-items: end; " class="rounded-xl bg-green-200 p-2 border-2 border-green-400 ">
                            <img src=" ../../svgs/Xls.svg " class="pr-2 "> Export as Excel Document
                            <svg xmlns="http://www.w3.org/2000/svg " class="h-6 w-6 pl-2 " fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                            <path stroke-linecap="round " stroke-linejoin="round " class="exp1_icon " stroke-width="2 " d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10 " />
                          </svg>
                        </a>
                        <a href="# " style="display: flex;align-items: end; " class="rounded-xl bg-red-200 p-2 border-2 border-red-400 ">
                            <img src=" ../../svgs/Group 14.svg " class="pr-2 "> Export as a PDF Document
                            <svg xmlns="http://www.w3.org/2000/svg " class="h-6 w-6 pl-2 " fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                            <path stroke-linecap="round " stroke-linejoin="round " class="exp2_icon " stroke-width="2 " d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10 " />
                          </svg>
                        </a>
                    </div>
                    <div class="flex justify-center">
                        <div class="">
                            <div class="input-group relative flex items-stretch w-full mb-4">
                                <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    placeholder="Search Anything by Name, Type, Grade" aria-label="Search" aria-describedby="button-addon2">
                                <button class="btn inline-block px-6 py-2.5 bg-amber-400 text-blue-800 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-800 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                                    type="button" id="button-addon2">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                              </svg>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
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
                                                ID
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Name
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Type
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                District
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Grade
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Date Graded
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Exp Date
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody class="bg-white divide-y divide-blue-800/40 ">
                                        <!-- 1 -->
                                        <tr class="text-blue-800 ">
                                            <td class="px-6 py-4 ">
                                                <p class="text-sm font-bold text-left ">
                                                    1
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                Cephas
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                Motels
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                Buhweju
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                <span class="px-2 inline-flex text-xs leading-5 rounded-full bg-red-200 text-red-500 ">
                                                    ungraded
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                <span class="text-green-400 ">
                                                    2022-02-05
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                2022-09-29 7 months left
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                <a href="./details.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red bg-blue-800 hover:bg-blue-600 text-white font-semibold transition-colors duration-300 ">
                                                        Details
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