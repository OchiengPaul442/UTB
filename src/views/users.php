<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './partials/head.php'; ?>

    <title>Users</title>
</head>

<body>
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>

        <!-- main body section -->
        <main class="p-10 space-y-10">
            <!-- first section -->
            <div>
                <div class="flex flex-wrap justify-between pt-8 ">
                    <div>
                        <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                            Users
                        </h2>
                    </div>
                    <div class="mt-4 ">
                        <a href="./create.php "> <button type="button " class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700
            dark:focus:ring-blue-800 ">Create a new user</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pt-8">

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
                                                Name
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Email
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                Phone number
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider ">
                                                User type
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
                                                    Admin user
                                                </p>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                utb@admin.gov
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                0772123456
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                super_admin
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm ">
                                                <a href="./edits.php">
                                                    <button class="justify-center py-2 px-4 border border-transparent text-sm rounded-md text-red bg-blue-800 hover:bg-blue-600 text-white font-semibold transition-colors duration-300 ">
                                                        Edit
                                                    </button>
                                                </a>
                                                <a href="./managepermissions.php">
                                                    <button class="justify-center py-2 px-4 border border-transparent text-sm rounded-md text-red bg-blue-800 hover:bg-blue-600 text-white font-semibold transition-colors duration-300 ">
                                                        Permissions
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