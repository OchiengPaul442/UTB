<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './partials/head.php'; ?>

    <title>Establishment</title>
</head>

<body >
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>

        <!-- main -->
        <main class="p-10 space-y-10">
            <!-- page title -->
            <h2 class="text-5xl font-spartan text-center underline tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl">
                Establishment Types
            </h2>

            <!-- FAcilities Section -->
            <div class="space-y-5">

                <!-- CReate new Establishment Type button -->
                <a href="./create.php" class="flex items-center justify-center w-full rounded-md uppercase text-sm font-semibold pl-2 pr-3 py-2 shadow-sm hover:text-white hover:bg-blue-800 text-blue-800 bg-amber-400 hover:no-underline px-5 transition-colors duration-300">
                    <svg width="20" height="20" fill="currentColor" class="mr-2" aria-hidden="true">
                        <path d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
                    </svg>
                    Create New Establishment Type
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
                                                ID
                                            </th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                                DISTRICT
                                            </th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                                NUMBER OF FACILITIES
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody class="bg-white divide-y divide-blue-800/40">
                                        <!-- 1 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">1.</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left text-red font-semibold text-sm">
                                                KYENJOJO
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                                90
                                            </td>
                                        </tr>

                                        <!-- 2 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">2.</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left text-red font-semibold text-sm">
                                                ARUA
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                                90
                                            </td>
                                        </tr>

                                        <!-- 3 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">3.</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left text-red font-semibold text-sm">
                                                KAMPALA
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                                70
                                            </td>
                                        </tr>

                                        <!-- 4 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">4.</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left text-red font-semibold text-sm">
                                                FORT-PORTAL
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                                60
                                            </td>
                                        </tr>

                                        <!-- 5 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">5.</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left text-red font-semibold text-sm">
                                                FORT-PORTAL
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                                60
                                            </td>
                                        </tr>

                                        <!-- 6 -->
                                        <tr class="text-blue-800">
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-bold text-left">6.</p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-left text-red font-semibold text-sm">
                                                ARUA
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center text-red font-semibold text-sm">
                                                90
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