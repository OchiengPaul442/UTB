<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once './partials/head.php'; ?>

    <title>upload document for New Jeruzalem Hotel</title>
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
                            Uplaod a document for New Jeruzalem Hotel
                        </h2>
                    </div>
                </div>
            </div>
            <div class="mx-8 pt-8">
                <form class="border-2 border-blue-800 rounded-lg p-6">
                    <div class="mb-6 ">
                        <label for="Longitude " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Document name</label>
                        <input type="text " id="Longitude " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600
dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                    </div>
                    <div class="mb-6 ">
                        <label for="Longitude " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Any other information any this file?</label>
                        <input type="text " id="Longitude " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600
dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Select the file from your device</label>
                        <input class="block w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help"
                            id="user_avatar" type="file">
                    </div>
                    <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px;"></div>
                    <div class="pb-6 pt-6">
                        <button type=" submit " class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Save document</button>
                    </div>
                </form>
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