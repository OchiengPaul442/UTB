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
        <main class="p-10 space-y-10">
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
                        <button type="button" style="display: flex;align-items: end;" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Add a new classification</button>
                    </a>
                </div>
            </div>

            <div class="mx-8 pt-8">
                <div class="flex flex-wrap justify-between">
                    <!-- Put Buttons here -->
                    <div class="inline-flex flex-wrap space-y-2 space-x-2 pb-4">
                        <!-- Print -->
                        <button onclick="" class="inline-flex items-center border-2 border-red-600 bg-red-600/20 text-red-600 hover:bg-red-600 hover:border-red-600/30 hover:text-white rounded-md font-semibold uppercase px-3 py-2 text-sm transition-colors duration-300">
                            <!-- icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12.819 14.427c.064.267.077.679-.021.948-.128.351-.381.528-.754.528h-.637v-2.12h.496c.474 0 .803.173.916.644zm3.091-8.65c2.047-.479 4.805.279 6.09 1.179-1.494-1.997-5.23-5.708-7.432-6.882 1.157 1.168 1.563 4.235 1.342 5.703zm-7.457 7.955h-.546v.943h.546c.235 0 .467-.027.576-.227.067-.123.067-.366 0-.489-.109-.198-.341-.227-.576-.227zm13.547-2.732v13h-20v-24h8.409c4.858 0 3.334 8 3.334 8 3.011-.745 8.257-.42 8.257 3zm-12.108 2.761c-.16-.484-.606-.761-1.224-.761h-1.668v3.686h.907v-1.277h.761c.619 0 1.064-.277 1.224-.763.094-.292.094-.597 0-.885zm3.407-.303c-.297-.299-.711-.458-1.199-.458h-1.599v3.686h1.599c.537 0 .961-.181 1.262-.535.554-.659.586-2.035-.063-2.693zm3.701-.458h-2.628v3.686h.907v-1.472h1.49v-.732h-1.49v-.698h1.721v-.784z" />
                            </svg>

                            <!-- text -->
                            <span class="ml-2">Export PDF</span>
                        </button>

                        <!-- Print -->
                        <button onclick="" class="inline-flex items-center border-2 border-green-700 bg-green-700/20 text-green-700 hover:bg-green-700 hover:border-green-700/30 hover:text-white rounded-md font-semibold uppercase px-3 py-2 text-sm transition-colors duration-300">
                            <!-- icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
                                <path d="M6 12v-2h3v2H6z" />
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z" />
                            </svg>

                            <!-- text -->
                            <span class="ml-2">Export EXCEL</span>
                        </button>
                        <!-- Print -->

                        <button onclick="" class="inline-flex items-center border-2 border-blue-800 bg-blue-800/20 text-blue-800 hover:bg-blue-800 hover:border-blue-800/30 hover:text-white rounded-md font-semibold uppercase px-3 py-2 text-sm transition-colors duration-300">
                            <!-- icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M16 17h-8v-1h8v1zm8-12v13h-4.048c-.404 2.423-3.486 6-6.434 6h-9.518v-6h-4v-13h4v-5h16v5h4zm-18 0h12v-3h-12v3zm12 9h-12v8h6.691c3.469 0 2-3.352 2-3.352s3.309 1.594 3.309-2v-2.648zm4-7h-20v9h2v-4h16v4h2v-9zm-9 11h-5v1h5v-1zm7.5-10c-.276 0-.5.224-.5.5s.224.5.5.5.5-.224.5-.5-.224-.5-.5-.5z" />
                            </svg>

                            <!-- text -->
                            <span class="ml-2">Print</span>
                        </button>
                    </div>

                    <!-- search field with an icon -->
                    <div class="inline-flex items-center justify-end">
                        <div class="max-w-xs bg-blue-800 p-2 rounded-md flex items-center" id="search" aria-expanded="false" aria-haspopup="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-white  " width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13 8h-8v-1h8v1zm0 2h-8v-1h8v1zm-3 2h-5v-1h5v1zm11.172 12l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z" />
                            </svg>
                        </div>

                        <input type="text" name="teacherid" placeholder="Search Anything by Name, Type, Grade" class="text-blue-800 mt-1 ml-1  w-full px-3 py-2 bg-white border-2 border-blue-800 rounded-md text-sm shadow-sm
          placeholder-blue-800/50 focus:outline-none focus:border-black focus:ring-1 focus:ring-black" />

                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-blue/40 sm:rounded-lg">
                                <table class="min-w-full bg-white table_body ">
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
                                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm ">
                                                DETAILS
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=" text-left py-3 px-4 ">1</td>
                                            <td class=" text-left py-3 px-4 ">New Jeruzalem Hotel</td>
                                            <td class="text-left py-3 px-4 ">
                                                <span class="px-2 inline-flex text-xs leading-5  rounded-full bg-red-200 text-red-500 font-semibold">
                                                    pending
                                                </span>
                                            </td>
                                            <td class="text-left py-3 px-4">
                                                <span class="px-2 inline-flex text-xs leading-5  rounded-full bg-red-200 text-red-500 font-semibold">
                                                    Ungraded
                                                </span>
                                            </td>
                                            <td class="text-left py-3 px-4 ">
                                                2022-09-29 7 months left
                                            </td>
                                            <td class="text-left py-3 px-4 ">
                                                <a class="hover:text-blue-500 " href="./details.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red hover:bg-amber-400 hover:text-blue-800 bg-blue-800 text-white font-semibold transition-colors duration-300 ">
                                                        View Details
                                                    </button> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" text-left py-3 px-4 ">2</td>
                                            <td class=" text-left py-3 px-4 ">New Jeruzalem Hotel</td>
                                            <td class="text-left py-3 px-4 ">
                                                <span class="px-2 inline-flex text-xs leading-5  rounded-full bg-red-200 text-red-500 font-semibold">
                                                    pending
                                                </span>
                                            </td>
                                            <td class="text-left py-3 px-4">
                                                <span class="px-2 inline-flex text-xs leading-5  rounded-full bg-red-200 text-red-500 font-semibold">
                                                    Ungraded
                                                </span>
                                            </td>
                                            <td class="text-left py-3 px-4 ">
                                                2022-09-29 7 months left
                                            </td>
                                            <td class="text-left py-3 px-4 ">
                                                <a class="hover:text-blue-500 " href="./details.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red hover:bg-amber-400 hover:text-blue-800 bg-blue-800 text-white font-semibold transition-colors duration-300 ">
                                                        View Details
                                                    </button> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" text-left py-3 px-4 ">3</td>
                                            <td class=" text-left py-3 px-4 ">New Jeruzalem Hotel</td>
                                            <td class="text-left py-3 px-4 ">
                                                <span class="px-2 inline-flex text-xs leading-5  rounded-full bg-red-200 text-red-500 font-semibold">
                                                    pending
                                                </span>
                                            </td>
                                            <td class="text-left py-3 px-4">
                                                <span class="px-2 inline-flex text-xs leading-5  rounded-full bg-red-200 text-red-500 font-semibold">
                                                    Ungraded
                                                </span>
                                            </td>
                                            <td class="text-left py-3 px-4 ">
                                                2022-09-29 7 months left
                                            </td>
                                            <td class="text-left py-3 px-4 ">
                                                <a class="hover:text-blue-500 " href="./details.php">
                                                    <button class="justify-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-red hover:bg-amber-400 hover:text-blue-800 bg-blue-800 text-white font-semibold transition-colors duration-300 ">
                                                        View Details
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
            </div>
            <!-- Main modal -->
            <div id="authentication-modal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
                <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
                        <div class="flex justify-end p-2">
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">Create a new classification</h3>
                            <div>
                                <label for="date1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date of inspection</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="date1" datepicker datepicker-orientation="bottom right" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                </div>
                            </div>
                            <divs>
                                <label for="date2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Expiry date</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-orientation="bottom right" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-50" placeholder="Select date">
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