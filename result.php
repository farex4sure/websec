<?php 
// include "./config.php";
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){

    $domain = $_POST['domain'];
    $date = time();
    $date = date("d M Y",$date);

    echo '
    <div class="w-full flex flex-col h-full gap-y-3">
                    <div class="flex w-full flex-col">
                        <div class="justify-between flex block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div>
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dark Web Scan Result is Here</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400"><span class="font-bold">Domain: </span>'.$domain.'</p>
                                <p class="font-normal text-gray-700 dark:text-gray-400"><span class="font-bold">Scan Date: </span>'.$date.'</p>
                            </div>
                            
                            <div class="flex flex-col text-center">
                                <p class="font-normal text-gray-700 dark:text-gray-400"><span class="font-bold">Status: </span>Completed</p>
                                <i class="text-7xl fa-solid fa-gauge"></i>
                                <p class="font-normal text-gray-700 dark:text-gray-400">Exposure Level</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex w-full flex-col">
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><i class="fa-solid fa-shield-halved"></i> Employee Credential Leak</h5>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">Breach Time</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">Credential Data</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">Source</p>
                            </div>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">2023-08-26</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                            </div>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">2023-08-26</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                            </div>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">2023-08-26</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                            </div>
                        </a>
                    </div>

                    <div class="flex w-full flex-col">
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><i class="fa-solid fa-arrows-turn-to-dots"></i> Stealer Logs for Sale</h5>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">Affected Asset</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">Tag</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">Source</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">Price</p>
                            </div>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">2023-08-26</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                            </div>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">2023-08-26</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                            </div>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">2023-08-26</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                            </div>
                        </a>
                    </div>


                    <div class="flex w-full flex-col">
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><i class="fa-solid fa-code-branch"></i> Stealer Log from Infected Machine</h5>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">Affected Asset</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">Tag</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">User</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-bold">Machine IP</p>
                            </div>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">2023-08-26</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                            </div>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">2023-08-26</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                            </div>
                            <div class="flex w-full justify-between mt-4">
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">2023-08-26</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                                <p class=" text-gray-700 dark:text-gray-400 font-normal">COMBOLIST</p>
                            </div>
                        </a>
                    </div>


                    <div class="flex w-full flex-col">
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><i class="fa-solid fa-circle-info"></i> Dark Web Mention</h5>
                            <div class="flex w-full justify-between mt-4">
                                <p class="w-full text-center text-gray-700 dark:text-gray-400 font-bold">Dark Web Mentions Not Found</p>
                            </div>
                        </a>
                    </div>


                    <div class="flex w-full flex-col">
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white"><i class="fa-solid fa-hat-cowboy-side"></i> Hacker Channel Mentions</h5>
                            <div class="flex w-full justify-between mt-4">
                                <p class="w-full text-center text-gray-700 dark:text-gray-400 font-bold">Hacker Channel Mentions Not Found</p>
                            </div>
                        </a>
                    </div>


                </div>
    ';

}