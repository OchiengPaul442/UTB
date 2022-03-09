<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './partials/head.php'; ?>
    <title>reports</title>
</head>

<body>
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>

        <!-- main body section -->
        <main class="p-10 space-y-10">

            <!-- creating a User -->
            <div class="mx-8">
                <div class="pt-8 pb-6">
                    <div>
                        <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                            Create a Report
                        </h2>
                    </div>
                </div>
                <!-- create user form -->
                <form action="#" class="border-2 border-blue-800 rounded-lg" style="background-color: white;">
                    <div class="p-6 w-full">
                        <div class="mb-6 ">
                            <label for="name " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Establishment Type</label>
                            <input type="text " id="name " class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                        </div>
                        <div class="mb-6 ">
                            <label for="type " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 ">Region</label>
                            <select id="type " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                <option>Western</option>
                                <option>Northern</option>
                                <option>Central</option>
                            </select>
                        </div>
                        <div class="mb-6 ">
                            <label for="email " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Districts</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                        </div>
                        <div class="mb-6 ">
                            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">clear</button>
                        </div>
                        <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px;"></div>
                    </div>
                    <div class="px-6 pb-6">
                        <button type=" submit " class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Generate</button>
                    </div>
                </form>
            </div>
        </main>
        <!-- footer section -->
        <footer class="text-center content-center grid">
            <small class="text-white ">© 2022 - UTB E-GRADING SYSTEM | All rights Reserved</small>
        </footer>
    </section>
    <!-- js links -->
    <?php include_once './partials/foot.php'; ?>

</body>

</html>