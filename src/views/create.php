<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once './partials/head.php'; ?>

    <title>create</title>
</head>

<body>
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>

        <!-- main body section -->
        <main class="w-full overflow-y-hidden">
            <!-- creating a facility -->
            <div class="mx-8" id="facility">
                <div class="pt-8 pb-6">
                    <div id="head_title" class="w-full md:w-1/2 xl:w-1/3">
                        <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                            Create a new Facility
                        </h2>
                    </div>
                </div>
                <div>
                    <form action="#" class="border-2 border-blue-800 rounded-lg">
                        <div class="p-6 w-full">
                            <div class=" mb-6 ">
                                <label for="Facilityname " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Facility Name</label>
                                <input type="text " id="Facilityname " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6 ">
                                <label for="Category " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 ">Category</label>
                                <select id="Category " class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                    <option>Lodges</option>
                                    <option>Motels</option>
                                    <option>Villas, Cottages and serviced apartments</option>
                                    <option>Town Hostel</option>
                                    <option>Tented Camps</option>
                                    <option>Restaurants</option>
                                    <option>Vacation Hostels</option>
                                    </select>
                            </div>
                            <div class="mb-6">
                                <label for="districts " class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 ">District</label>
                                <select id="districts " name="district_id " class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                            <option value="1 ">Abim</option>
                                            <option value="2 ">Adjumani</option>
                                            <option value="3 ">Agago</option>
                                            <option value="4 ">Alebtong</option>
                                            <option value="5 ">Amolatar</option>
                                            <option value="6 ">Amudat</option>
                                            <option value="7 ">Amuria</option>
                                            <option value="8 ">Amuru</option>
                                            <option value="9 ">Apac</option>
                                            <option value="10 ">Arua</option>
                                            <option value="11 ">Budaka</option>
                                            <option value="12 ">Bududa</option>
                                            <option value="13 ">Bugiri</option>
                                            <option value="14 ">Buhweju</option>
                                            <option value="15 ">Buikwe</option>
                                            <option value="16 ">Bukedea</option>
                                            <option value="17 ">Bukomansimbi</option>
                                            <option value="18 ">Bukwa</option>
                                            <option value="19 ">Bulambuli</option>
                                            <option value="20 ">Buliisa</option>
                                            <option value="21 ">Bundibugyo</option>
                                            <option value="22 ">Bunyangabo</option>
                                            <option value="23 ">Bushenyi</option>
                                            <option value="24 ">Busia</option>
                                            <option value="25 ">Butaleja</option>
                                            <option value="26 ">Butambala</option>
                                            <option value="27 ">Buvuma</option>
                                            <option value="28 ">Buyende</option>
                                            <option value="29 ">Dokolo</option>
                                            <option value="30 ">Gomba</option>
                                            <option value="31 ">Gulu</option>
                                            <option value="32 ">Hoima</option>
                                            <option value="33 ">Ibanda</option>
                                            <option value="34 ">Iganga</option>
                                            <option value="35 ">Isingiro</option>
                                            <option value="36 ">Jinja</option>
                                            <option value="37 ">Kaabong</option>
                                            <option value="38 ">Kabale</option>
                                            <option value="39 ">Kabarole</option>
                                            <option value="40 ">Kaberamaido</option>
                                            <option value="41 ">Kalangala</option>
                                            <option value="42 ">Kaliro</option>
                                            <option value="43 ">Kalungu</option>
                                            <option value="44 ">Kampala</option>
                                            <option value="45 ">Kamuli</option>
                                            <option value="46 ">Kamwenge</option>
                                            <option value="47 ">Kanungu</option>
                                            <option value="48 ">Kapchorwa</option>
                                            <option value="49 ">Kasese</option>
                                            <option value="50 ">Katakwi</option>
                                            <option value="51 ">Kayunga</option>
                                            <option value="52 ">Kibaale</option>
                                            <option value="53 ">Kiboga</option>
                                            <option value="54 ">Kibuku</option>
                                            <option value="55 ">Kiruhura</option>
                                            <option value="56 ">Kiryandongo</option>
                                            <option value="57 ">Kisoro</option>
                                            <option value="58 ">Kitgum</option>
                                            <option value="59 ">Koboko</option>
                                            <option value="60 ">Kole</option>
                                            <option value="61 ">Kotido</option>
                                            <option value="62 ">Kumi</option>
                                            <option value="63 ">Kween</option>
                                            <option value="64 ">Kyankwanzi</option>
                                            <option value="65 ">Kyegegwa</option>
                                            <option value="66 ">Kyenjojo</option>
                                            <option value="67 ">Lamwo</option>
                                            <option value="68 ">Lira</option>
                                            <option value="69 ">Luuka</option>
                                            <option value="70 ">Luweero</option>
                                            <option value="71 ">Lwengo</option>
                                            <option value="72 ">Lyantonde</option>
                                            <option value="73 ">Manafwa</option>
                                            <option value="74 ">Maracha</option>
                                            <option value="75 ">Masaka</option>
                                            <option value="76 ">Masindi</option>
                                            <option value="77 ">Mayuge</option>
                                            <option value="78 ">Mbale</option>
                                            <option value="79 ">Mbarara</option>
                                            <option value="80 ">Mitooma</option>
                                            <option value="81 ">Mityana</option>
                                            <option value="82 ">Moroto</option>
                                            <option value="83 ">Moyo</option>
                                            <option value="84 ">Mpigi</option>
                                            <option value="85 ">Mubende</option>
                                            <option value="86 ">Mukono</option>
                                            <option value="87 ">Nakapiripirit</option>
                                            <option value="88 ">Nakaseke</option>
                                            <option value="89 ">Nakasongola</option>
                                            <option value="90 ">Namayingo</option>
                                            <option value="91 ">Namutumba</option>
                                            <option value="92 ">Napak</option>
                                            <option value="93 ">Nebbi</option>
                                            <option value="94 ">Ngora</option>
                                            <option value="95 ">Ntoroko</option>
                                            <option value="96 ">Ntungamo</option>
                                            <option value="97 ">Nwoya</option>
                                            <option value="98 ">Otuke</option>
                                            <option value="99 ">Oyam</option>
                                            <option value="100 ">Pader</option>
                                            <option value="101 ">Pallisa</option>
                                            <option value="102 ">Rakai</option>
                                            <option value="103 ">Rubirizi</option>
                                            <option value="104 ">Rukungiri</option>
                                            <option value="105 ">Sembabule</option>
                                            <option value="106 ">Serere</option>
                                            <option value="107 ">Sheema</option>
                                            <option value="108 ">Sironko</option>
                                            <option value="109 ">Soroti</option>
                                            <option value="110 ">Wakiso</option>
                                            <option value="111 ">Yumbe</option>
                                            <option value="112 ">Zombo</option>
                                    </select>
                            </div>
                            <div class="mb-6 ">
                                <label for="Address " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Address Name</label>
                                <input type="text " id="Address " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6 ">
                                <label for="Latitude " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Latitude</label>
                                <input type="text " id="Latitude " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                        </div>
                        <!-- second column -->
                        <div class="p-6 w-full">
                            <div class="mb-6 ">
                                <label for=" management " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 ">Type of management</label>
                                <select id="management " class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                    <option>Direct</option>
                                    <option>Contract</option>
                                    </select>
                            </div>
                            <div class="mb-6 ">
                                <label for="company " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Contracting company</label>
                                <input type="text " id="company " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6 ">
                                <label for="count " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Lettable room count</label>
                                <input type="text " id="count " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6 ">
                                <label for="beds " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Number of beds</label>
                                <input type="text " id="beds " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6 ">
                                <label for="Longitude " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Longitude</label>
                                <input type="text " id="Longitude " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                        </div>
                        <!-- third column -->
                        <div class="p-6 w-full">
                            <div class="mb-6 ">
                                <label for="staff " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Number of staff</label>
                                <input type="text " id="staff " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6 ">
                                <label for="Contact " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Contact person</label>
                                <input type="text " id="Contact " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6 ">
                                <label for="phone " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Contact phone number</label>
                                <input type="text " id="phone " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6">
                                <label for="email " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Contact email</label>
                                <input type="email " id="email" class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px;"></div>
                        </div>
                        <div class="px-6 pb-6">
                            <button type=" submit " class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Save Facility</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- creating a district -->
            <div class="mx-8">
                <div class="pt-8 pb-6">
                    <div id="head_title" class="w-full md:w-1/2 xl:w-1/3">
                        <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                            Create district
                        </h2>
                    </div>
                </div>

                <div>
                    <form action="#" class="border-2 border-blue-800 rounded-lg">
                        <div class="p-6 w-full">
                            <div class=" mb-6 ">
                                <label for="District " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">District Name</label>
                                <input type="text " id="District " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px;"></div>
                        </div>
                        <div class="px-6 pb-6">
                            <button type=" submit " class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- creating a User -->
            <div class="mx-8" id="users">
                <div class="pt-8 pb-6">
                    <div id="head_title" class="w-full md:w-1/2 xl:w-1/3">

                        <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                            Create Users
                        </h2>
                    </div>
                </div>

                <div>
                    <form action="#" class="border-2 border-blue-800 rounded-lg">
                        <div class="p-6 w-full">
                            <div class="mb-6 ">
                                <label for="name " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Name</label>
                                <input type="text " id="name " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6 ">
                                <label for="phone " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Phone number</label>
                                <input type="text " id="phone " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6 ">
                                <label for="email " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Email Address</label>
                                <input type="email " id="email " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>
                            <div class="mb-6 ">
                                <label for="type " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 ">User type</label>
                                <select id="type " class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                    <option>assessor</option>
                                    <option>admin</option>
                                    <option>Super_admin</option>
                                    </select>
                            </div>
                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px;"></div>
                        </div>
                        <div class="px-6 pb-6">
                            <button type=" submit " class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- creating a establishment type -->
            <div class="mx-8" id="establishment">
                <div class="pt-8 pb-6">
                    <div id="head_title" class="w-full md:w-1/2 xl:w-1/3">

                        <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                            Create new establishment type
                        </h2>
                    </div>
                </div>

                <div>
                    <form action="#" class="border-2 border-blue-800 rounded-lg">
                        <div class="p-6 w-full">
                            <div class="mb-6 ">
                                <label for="Name " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 ">Name</label>
                                <select id="Name " class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
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
                            <div class="mb-6 ">
                                <label for="Description " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Description</label>
                                <input type="text " id="Description " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                            </div>

                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px;"></div>
                        </div>
                        <div class="px-6 pb-6">
                            <button type=" submit " class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600  dark:focus:ring-blue-800 ">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- score section -->
            <div class="mx-8" id="score">
                <div class="pt-8 pb-6">
                    <div id="head_title" class="w-full md:w-1/2 xl:w-1/3">

                        <h2 class="text-5xl font-spartan tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl ">
                            Set classification scores
                        </h2>
                    </div>
                </div>

                <div>
                    <form action="#" class="border-2 border-blue-800 rounded-lg">
                        <div class="px-6 pt-6">
                            <small>The Maximum percentage value is determined by the next star minimum value, it should be less by 1</small>
                        </div>
                        <div class="p-6 w-full">
                            <div class="mb-6 ">
                                <label for="countries " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 ">Establishment type</label>
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

                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px; " class="mb-6"></div>

                            <div class="flex flex-wrap three_column_sec">
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="OneStarmin " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">One Star Minimum percentage</label>
                                    <input type="number" id="OneStarmin " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3  p-2">
                                    <label for="OneStarmax " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">One Star Maximum percentage</label>
                                    <input type="number" id="OneStarmax " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2  xl:w-1/3 p-2">
                                    <label for="OneStartotal " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">One Star Posible total</label>
                                    <input type="number" id="OneStartotal " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                            </div>

                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px; " class="mb-6"></div>

                            <div class="flex flex-wrap three_column_sec">
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="twoStarmin " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Two Star Minimum percentage</label>
                                    <input type="number" id="twoStarmin " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3  p-2">
                                    <label for="twoStarmax " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Two Star Maximum percentage</label>
                                    <input type="number" id="twoStarmax " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2  xl:w-1/3 p-2">
                                    <label for="twoStartotal " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Two Star Posible total</label>
                                    <input type="number" id="twoStartotal " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                            </div>

                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px; " class="mb-6"></div>

                            <div class="flex w-full flex-wrap three_column_sec">
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="ThreeStarmin " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Three Star Minimum percentage</label>
                                    <input type="number" id="ThreeStarmin " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3  p-2">
                                    <label for="ThreeStarmax " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Three Star Maximum percentage</label>
                                    <input type="number" id="ThreeStarmax " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="ThreeStarsection2 " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Three Star section  Minimum percentage</label>
                                    <input type="number" id="ThreeStarsection2 " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="ThreeStarsection3 " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Three Star section Maximum percentage</label>
                                    <input type="number" id="ThreeStarsection3" class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="ThreeStarsectiontotal " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Three Star Posible total</label>
                                    <input type="number" id="ThreeStarsectiontotal " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                            </div>
                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px; " class="mb-6"></div>
                            <div class="flex w-full flex-wrap three_column_sec">
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="fourStarmin " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Four Star Minimum percentage</label>
                                    <input type="number" id="fourStarmin " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3  p-2">
                                    <label for="fourStarmax " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Four Star Maximum percentage</label>
                                    <input type="number" id="fourStarmax " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="fourStarsection2 " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Four Star section  Minimum percentage</label>
                                    <input type="number" id="fourStarsection2 " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="fourStarsection3 " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Four Star section Maximum percentage</label>
                                    <input type="number" id="fourStarsection3" class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="fourStarsectiontotal " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Four Star Posible total</label>
                                    <input type="number" id="fourStarsectiontotal " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                            </div>
                            <div style="background-color: rgba(0, 0, 255, 0.459);width: 100%;height: 2px; " class="mb-6"></div>
                            <div class="flex w-full flex-wrap three_column_sec">
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="fiveStarmin " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Five Star Minimum percentage</label>
                                    <input type="number" id="fiveStarmin " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3  p-2">
                                    <label for="fiveStarmax " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Five Star Maximum percentage</label>
                                    <input type="number" id="fiveStarmax " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="fiveStarsection2 " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Five Star section  Minimum percentage</label>
                                    <input type="number" id="fiveStarsection2 " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="fiveStarsection3 " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Five Star section Maximum percentage</label>
                                    <input type="number" id="fiveStarsection3" class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                                <div class="mb-6  md:w-1/2 xl:w-1/3 p-2">
                                    <label for="fiveStarsectiontotal " class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Five Star Posible total</label>
                                    <input type="number" id="fiveStarsectiontotal " class="shadow-sm bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2  dark:border-gray-600 dark:placeholder-gray-400
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " placeholder=" " required=" ">
                                </div>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <button type=" submit " class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Save</button>
                        </div>
                    </form>
                </div>
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