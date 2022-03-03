<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once './partials/head.php'; ?>

    <title>Score settings</title>
</head>

<body>
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>

        <!-- main body section -->
        <main class="w-full overflow-y-hidden">
            <!-- first section -->
            <div class="mx-8">
                <div class="flex flex-wrap justify-between pt-8">
                    <div>
                        <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                            Classification Score Setting
                        </h2>
                    </div>
                    <div class="mt-4">
                        <a href="./create.html"> <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Set gradding scores</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mx-8 pt-8">

                <!-- Table -->
                <div class="flex flex-col ">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 ">
                            <div class="shadow overflow-hidden border-b border-blue/40 sm:rounded-lg ">
                                <table class="min-w-full divide-y divide-blue text-blue ">
                                    <!-- table header -->
                                    <thead class="bg-blue-800 text-white ">
                                        <tr>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Establishment type</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 1 Min</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 1 Max</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 1 Total</th>

                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 2 Min</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 2 Max</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 2 Total</th>

                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 3 Min</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 3 Max</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 3 Section Min</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 3 Section Max</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 3 Total</th>

                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 4 Min</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 4 Max</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 4 Section Min</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 4 Section Max</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 4 Total</th>

                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 5 Min</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 5 Max</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 5 Section Min</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 5 Section Max</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Star 5 Total</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">Action</th>
                                        </tr>
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody class="bg-white divide-y divide-blue-800/40 ">
                                        <!-- 1 -->
                                        <tr class="text-blue-800 ">
                                            <td class="text-center px-6 py-4">
                                                <p class="text-sm font-bold">
                                                    Lodges
                                                </p>
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                54
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                77
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                <a href="./edits.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red bg-blue-800 hover:bg-blue-600 text-white font-semibold transition-colors duration-300 ">
                                                        Edit
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