<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './partials/head.php'; ?>

    <title>userlogs</title>
</head>

<body>
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>

        <!-- main -->
        <main class="p-10 space-y-10">

            <!-- page title -->
            <h2 class="text-5xl font-spartan text-center underline tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl">
                User Logs
            </h2>

            <!-- FAcilities Section -->
            <div class="space-y-5">

                <div class="justify-between flex flex-wrap">
                    <!-- Put Buttons here -->
                    <div class="inline-flex flex-wrap space-y-2 space-x-2">
                        <!-- Print -->
                        <button onclick="" class="inline-flex items-center border-2 border-red-600 bg-red-600/20 text-red-600
      hover:bg-red-600 hover:border-red-600/30 hover:text-white rounded-md font-semibold uppercase px-3 py-2
      text-sm
      transition-colors
      duration-300 ">
                            <!-- icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12.819 14.427c.064.267.077.679-.021.948-.128.351-.381.528-.754.528h-.637v-2.12h.496c.474 0 .803.173.916.644zm3.091-8.65c2.047-.479 4.805.279 6.09 1.179-1.494-1.997-5.23-5.708-7.432-6.882 1.157 1.168 1.563 4.235 1.342 5.703zm-7.457 7.955h-.546v.943h.546c.235 0 .467-.027.576-.227.067-.123.067-.366 0-.489-.109-.198-.341-.227-.576-.227zm13.547-2.732v13h-20v-24h8.409c4.858 0 3.334 8 3.334 8 3.011-.745 8.257-.42 8.257 3zm-12.108 2.761c-.16-.484-.606-.761-1.224-.761h-1.668v3.686h.907v-1.277h.761c.619 0 1.064-.277 1.224-.763.094-.292.094-.597 0-.885zm3.407-.303c-.297-.299-.711-.458-1.199-.458h-1.599v3.686h1.599c.537 0 .961-.181 1.262-.535.554-.659.586-2.035-.063-2.693zm3.701-.458h-2.628v3.686h.907v-1.472h1.49v-.732h-1.49v-.698h1.721v-.784z" />
                            </svg>

                            <!-- text -->
                            <span class="ml-2">Export PDF</span>
                        </button>

                        <!-- Print -->
                        <button onclick="" class="inline-flex items-center border-2 border-green-700 bg-green-700/20 text-green-700
      hover:bg-green-700 hover:border-green-700/30 hover:text-white rounded-md font-semibold uppercase px-3 py-2
      text-sm
      transition-colors
      duration-300 ">
                            <!-- icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
                                <path d="M6 12v-2h3v2H6z" />
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z" />
                            </svg>

                            <!-- text -->
                            <span class="ml-2">Export EXCEL</span>
                        </button>
                      

                    </div>

                    <!-- Search -->
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

                <!-- Table -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 text-center lg:px-8">
                            <div class="shadow overflow-hidden border-b border-blue/40 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-blue text-blue">
                                    <!-- table header -->
                                    <thead class="bg-blue-800 text-white">
                                   
                                        <tr>
                                            <th class="px-6 text-center py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Log id</th>
                                            <th class="px-6 text-center py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Time</th>
                                            <th class="px-6 text-center py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Module</th>
                                            <th class="px-6 text-center py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Module ID</th>
                                            <th class="px-6 text-center py-3 text-center text-xs font-medium text-white uppercase tracking-wider">IP address</th>
                                            <th class="px-6 text-center py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Description</th>
                                            <th class="px-6 text-center py-3 text-center text-xs font-medium text-white uppercase tracking-wider">User</th>
                                        </tr>
                                
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody class="bg-white divide-y divide-blue-800/40">
                                        <!-- 1 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 text-center py-4">
                                                <p class="text-sm font-bold text-left ">
                                                    1.
                                                </p>
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap hover:underline  hover:cursor-pointer text-left text-red font-semibold text-sm">
                                            2022-03-03 00:18:55
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                            Criteria
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                                1
                                            </td>
                                            <td class="px-6 text-center py-4 justify-center items-center text-center whitespace-nowrap">
                                            154.228.7.46
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center font-semibold text-sm text-green-600">
                                            Edited a criteria Occupational Permit
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center font-semibold text-sm text-red-600">
                                            Admin user
0772123456
                                            </td>
                                           
                                        </tr>
                                            <!-- 2 -->
                                            <tr class="text-blue-800">
                                            <td class="px-6 text-center py-4">
                                                <p class="text-sm font-bold text-left ">
                                                    1.
                                                </p>
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap hover:underline  hover:cursor-pointer text-left text-red font-semibold text-sm">
                                            2022-03-03 00:18:55
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                            Criteria
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                                1
                                            </td>
                                            <td class="px-6 text-center py-4 justify-center items-center text-center whitespace-nowrap">
                                            154.228.7.46
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center font-semibold text-sm text-green-600">
                                            Edited a criteria Occupational Permit
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center font-semibold text-sm text-red-600">
                                            Admin user
0772123456
                                            </td>
                                           
                                        </tr>
                                            <!-- 3 -->
                                            <tr class="text-blue-800">
                                            <td class="px-6 text-center py-4">
                                                <p class="text-sm font-bold text-left ">
                                                    1.
                                                </p>
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap hover:underline  hover:cursor-pointer text-left text-red font-semibold text-sm">
                                            2022-03-03 00:18:55
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                            Criteria
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                                1
                                            </td>
                                            <td class="px-6 text-center py-4 justify-center items-center text-center whitespace-nowrap">
                                            154.228.7.46
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center font-semibold text-sm text-green-600">
                                            Edited a criteria Occupational Permit
                                            </td>
                                            <td class="px-6 text-center py-4 whitespace-nowrap text-center font-semibold text-sm text-red-600">
                                            Admin user
0772123456
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