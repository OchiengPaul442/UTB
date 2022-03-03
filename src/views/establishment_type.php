<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once './partials/head.php'; ?>

    <title>Establishment</title>
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
                            Establishment type
                        </h2>
                    </div>
                    <div class="mt-4">
                        <a href="./create.php"> <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create a new Establishment</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mx-8 pt-8">
                <div class="flex flex-wrap justify-between">
                    <div class="flex gap-2 flex-wrap mb-6">
                        <a href="#" style="display: flex;align-items: end;" class="rounded-xl bg-green-200 p-2 border-2 border-green-400">
                            <img src=" ../../svgs/Xls.svg " class="pr-2"> Export as Excel Document
                            <svg xmlns="http://www.w3.org/2000/svg " class="h-6 w-6 pl-2" fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                            <path stroke-linecap="round " stroke-linejoin="round " class="exp1_icon " stroke-width="2 " d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10 " />
                          </svg>
                        </a>
                        <a href="#" style="display: flex;align-items: end;" class="rounded-xl bg-red-200 p-2 border-2 border-red-400">
                            <img src=" ../../svgs/Group 14.svg " class="pr-2"> Export as a PDF Document
                            <svg xmlns="http://www.w3.org/2000/svg " class="h-6 w-6 pl-2" fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                            <path stroke-linecap="round " stroke-linejoin="round " class="exp2_icon " stroke-width="2 " d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10 " />
                          </svg>
                        </a>
                    </div>
                    <div class="flex justify-center drop-shadow-md">
                        <form class=" mb-3 xl:w-96 ">
                            <input type="search " class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white
                        focus:border-blue-600 focus:outline-none " id="exampleSearch " placeholder="Search Anything by Name, Type, Grade " />
                        </form>
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

                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Name
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Description
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Number of facilities
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Criteria
                                            </th>

                                        </tr>
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody class="bg-white divide-y divide-blue-800/40 ">
                                        <!-- 1 -->
                                        <tr class="text-blue-800 ">
                                            <td class="text-center px-6 py-4">
                                                <p class="text-sm font-bold">
                                                    1
                                                </p>
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                None
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                4
                                            </td>
                                            <td class="text-center px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                <a href="./criteria.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red bg-blue-800 hover:bg-blue-600 text-white font-semibold transition-colors duration-300 ">
                                                        Criteria
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