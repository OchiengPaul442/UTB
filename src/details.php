<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './partials/head.php'; ?>
    <title>Details</title>
</head>

<body>
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>

        <!-- main body section -->
        <main class="p-10 space-y-10">
            <!-- section one for facility details -->
            <section>
                <!-- first section -->
                <div class="mx-8">
                    <div class="flex pt-8 mb-6">
                        <div id="head_title">

                            <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                                New Jeruzalem Hotel
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <a href="./edits.php" class="p-2">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit facilities</button>
                        </a>
                        <a href="./facilityupload.php" class="p-2">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload facility document</button>
                        </a>
                        <a href="./facilityclassification.php" class="p-2">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Classifications</button>
                        </a>
                    </div>
                </div>
                <div class="mx-8 pt-8">
                    <div class="border-2 border-blue-800 rounded-lg p-6" style="background-color: white;">
                        <div class="pb-6">
                            <h1 style="font-size: 25px;">Details</h1>
                        </div>
                        <div class="pb-6">
                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px; "></div>
                        </div>
                        <div class="table-responsive pb-6">
                            <table class="facility_table w-full">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td><strong>New Jeruzalem Hotel</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Category</td>
                                        <td><strong class="text-success">Motels</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Address</td>
                                        <td><strong>Plot 90, Kanjokya street, Kanjokya house </strong></td>
                                    </tr>

                                    <tr>
                                        <td>District</td>
                                        <td><strong>Buhweju </strong></td>
                                    </tr>


                                    <tr>
                                        <td>Phone Number</td>
                                        <td><strong>+256787444081</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Owner Name</td>
                                        <td><strong>Thembo Charles</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Email</td>
                                        <td><strong>ashley7520charles@gmail.com</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Lettable room count</td>
                                        <td><strong>24</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Number of beds</td>
                                        <td><strong>56</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Number of staff</td>
                                        <td><strong>6</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Type of management</td>
                                        <td><strong>direct</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Contracting company</td>
                                        <td><strong>Shule Technologies Limited</strong></td>
                                    </tr>

                                    <tr>
                                        <td>GPS Cordinates</td>
                                        <td><strong>,</strong></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="pb-6">
                            <h1 style="font-size: 25px;">Document</h1>
                        </div>
                        <div class="pb-6">
                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px; "></div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- ****************************************************************** -->
            <!-- section two for facility classification -->
            <section>
                <!-- first section -->
                <div class="mx-8" id="users">
                    <div class="pt-8 pb-6">
                        <div>

                            <h2 class="mb-2 text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                                Classification 2 for Agip Motel, Villas, Cottages and serviced apartments
                            </h2>
                            <small class="text-sm font-spartan text-blue-800 px-2">Date of inspection: 2022-02-05</small>
                        </div>
                    </div>
                    <div class="flex justify-start flex-wrap">
                        <a href="#" class="p-2">
                            <button type="button" style="display:flex; align-items:end;" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button
                           " data-modal-toggle="authentication-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                                </svg>Add Assessors</button>
                        </a>
                        <a href="#" class="p-2">
                            <button type="button" style="display:flex; align-items:end;" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button
                           " data-modal-toggle="authentication-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>View Assessors</button>
                        </a>
                        <a href="#" class="p-2">
                            <button type="button" style="display:flex; align-items:end;" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button
                           " data-modal-toggle="authentication-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>Assignment summary</button>
                        </a>
                        <a href="#" class="p-2">
                            <button type="button" style="display:flex; align-items:end;" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button
                           " data-modal-toggle="authentication-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>Edit classification</button>
                        </a>
                        <a href="#" class="p-2">
                            <button type="button" style="display:flex; align-items:end;" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button
                           " data-modal-toggle="authentication-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>Upload files</button>
                        </a>
                        <a href="#" class="p-2">
                            <button type="button" style="display:flex; align-items:end;" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button
                           " data-modal-toggle="authentication-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>View Documents</button>
                        </a>
                        <a href="#" class="p-2">
                            <button type="button" style="display:flex; align-items:end;" class="block text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-600 dark:focus:ring-blue-800" type="button
                           " data-modal-toggle="authentication-modal">
                                Essential Marks</button>
                        </a>
                        <a href="#" class="p-2">
                            <button type="button" style="display:flex; align-items:end;" class="block text-white bg-blue-400 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-600 dark:focus:ring-blue-800" type="button
                           " data-modal-toggle="authentication-modal">
                                Non-Essential Marks</button>
                        </a>
                    </div>
                    <div class="p-6 border-2 border-blue-800 rounded-lg" style="background-color: white;">
                        <div>
                            <h1 style="font-size: 25px;">MARKS</h1>
                        </div>
                        <div>
                            <ol type="1" class="list-decimal orderedlist p-6">

                                <li>


                                    <a href="/single_add_assessment_marks/52/2/essential">Occupational Permit (essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/53/2/essential">Valid Operating license (essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/54/2/essential">Drainage (essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/55/2/essential">EIA/Environmental Audit reports (essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/8/2/non-essential">LOCATION (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/9/2/non-essential">BUILDING (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/11/2/non-essential">RECEPTION AREA (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/12/2/non-essential">RECEPTION AREA (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/13/2/non-essential">LIVING ROOM/LOBBY/LOUNGE (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/15/2/non-essential">KITCHENETTE (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/114/2/non-essential">BATHROOMS (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/123/2/non-essential">HYGIENE AND SANITATION (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/124/2/non-essential">SAFETY AND SECURITY (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/129/2/non-essential">SUNDRY SERVICES (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/131/2/non-essential">HUMAN RESOURCE (non-essential)</a>
                                    <hr>

                                </li>

                                <li>


                                    <a href="/single_add_assessment_marks/132/2/non-essential">GENERAL (non-essential)</a>
                                    <hr>

                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Main modal -->
                <div id="authentication-modal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
                    <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <div class="flex justify-end p-2">
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Create a criteria</h3>
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Criteria name</label>
                                    <input type="text" name="name" id="email" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                </div>
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select status</label>
                                    <select id="countries " class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                        <option value="Lodges">Lodges</option>
                                        <option value="Motels">Motels</option>
                                        <option value="Restaurants">Restaurants</option>
                                        <option value="Tented Camps">Tented Camps</option>
                                        <option value="Town Hotels">Town Hotels</option>
                                        <option value="Vacation Hotels">Vacation Hotels</option>
                                        <option value="Villas, Cottages and serviced apartments">Villas, Cottages and serviced apartments</option>
                                    </select>
                                </div>
                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">save</button>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
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