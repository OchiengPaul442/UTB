<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once './partials/head.php'; ?>

    <title>classifications</title>
</head>

<body>
    <section class="main_con">
        <!-- nav bar -->
    <?php include_once './partials/navbar.php'; ?>
       
        <!-- main body section -->
        <main class="w-full overflow-y-hidden">
            <!-- first section -->
            <div class="mx-8">
                <div class="flex pt-8 mb-6">
                    <div id="head_title">

                        <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                            Classifications under New Jeruzalem Hotel
                        </h2>
                    </div>
                </div>
                <div>
                    <a href="#" class="flex pt-2 mb-6">
                        <button type="button" style="display: flex;align-items: end;" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="authentication-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>Add a new classification</button>
                    </a>
                </div>
            </div>

            <div class="mx-8 pt-8">
                <div class="flex flex-wrap justify-between">
                    <div class="flex flex-wrap justify-between">
                        <div class="flex gap-2 flex-wrap mb-6">
                            <a href="#" style="display: flex;align-items: end;" class="rounded-xl bg-green-200 p-2 border-2 border-green-400">
                                <img src=" ../../../svgs/Xls.svg " class="pr-2"> Export as Excel Document
                                <svg xmlns="http://www.w3.org/2000/svg " class="h-6 w-6 pl-2" fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                                <path stroke-linecap="round " stroke-linejoin="round " class="exp1_icon " stroke-width="2 " d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10 " />
                              </svg>
                            </a>
                            <a href="#" style="display: flex;align-items: end;" class="rounded-xl bg-red-200 p-2 border-2 border-red-400">
                                <img src=" ../../../svgs/Group 14.svg " class="pr-2"> Export as a PDF Document
                                <svg xmlns="http://www.w3.org/2000/svg " class="h-6 w-6 pl-2" fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                                <path stroke-linecap="round " stroke-linejoin="round " class="exp2_icon " stroke-width="2 " d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10 " />
                              </svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-center drop-shadow-md">
                            <form class=" mb-3 xl:w-96 ">
                                <input type="search " class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white
                            focus:border-blue-600 focus:outline-none " id="exampleSearch " placeholder="Search Anything by Name, Type, Grade " />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-auto rounded-lg ">
                    <table class="min-w-full bg-white border border-blue-800 table_body ">
                        <thead class="bg-blue-800 text-white ">
                            <tr class="table_head ">
                                <th class=" text-left py-3 px-4 uppercase font-semibold text-sm ">
                                    ID
                                </th>
                                <th class=" text-left py-3 px-4 uppercase font-semibold text-sm ">
                                    Inspection Date
                                </th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm ">
                                    STATUS
                                </th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm ">
                                    GRADING
                                </th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm ">
                                    EXPIRY DATE
                                </th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm ">
                                    DETAILS
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class=" text-left py-3 px-4 ">1</td>
                                <td class=" text-left py-3 px-4 ">New Jeruzalem Hotel</td>
                                <td class="text-left py-3 px-4 ">
                                    pending
                                </td>
                                <td class="text-left py-3 px-4">
                                    <span style="color:red;">Ungraded</span>
                                </td>
                                <td class="text-left py-3 px-4 ">
                                    2022-09-29 7 months left
                                </td>
                                <td class="text-left py-3 px-4 ">
                                    <a class="hover:text-blue-500 " href="./details.php">
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Details</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class=" text-left py-3 px-4 ">2</td>
                                <td class=" text-left py-3 px-4 ">New Jeruzalem Hotel</td>
                                <td class="text-left py-3 px-4 ">
                                    pending
                                </td>
                                <td class="text-left py-3 px-4">
                                    <span style="color:green;">Two star</span>
                                </td>
                                <td class="text-left py-3 px-4 ">
                                    2022-09-29 7 months left
                                </td>
                                <td class="text-left py-3 px-4 ">
                                    <a class="hover:text-blue-500 " href="./details.php">
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Details</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class=" text-left py-3 px-4 ">3</td>
                                <td class=" text-left py-3 px-4 ">New Jeruzalem Hotel</td>
                                <td class="text-left py-3 px-4 ">
                                    pending
                                </td>
                                <td class="text-left py-3 px-4">
                                    <span style="color:red;">Ungraded</span>
                                </td>
                                <td class="text-left py-3 px-4 ">
                                    2022-09-29 7 months left
                                </td>
                                <td class="text-left py-3 px-4 ">
                                    <a class="hover:text-blue-500 " href="./details.php">
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Details</button>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Main modal -->
            <div id="authentication-modal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
                <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
                        <div class="flex justify-end p-2">
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
    </button>
                        </div>
                        <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">Create a new classification</h3>
                            <div>
                                <label for="date1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date of inspection</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input id="date1" datepicker datepicker-orientation="bottom right" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date">
                                </div>
                            </div>
                            <divs>
                                <label for="date2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Expiry date</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input datepicker datepicker-orientation="bottom right" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-50"
                                        placeholder="Select date">
                                </div>
                            </divs>
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">save</button>

                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="text-center content-center grid ">
            <small class="text-white ">© 2022 - UTB E-GRADING SYSTEM | All rights Reserved</small>
        </footer>
    </section>
    <!-- js links -->
    <?php include_once './partials/foot.php'; ?>

</body>

</html>