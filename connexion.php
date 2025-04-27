<?php require_once "EcoRide/templates/header.php" ?>

<section class="text-white body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <img src="/EcoRide/Asset/images/LOGO EcoRide  avec une voiture écologie.jpg" alt="logo">
        </div>
        <div class="lg:w-2/6 md:w-1/2 bg-stone-400 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="flex items-center justify-center text-white text-lg font-medium title-font mb-5">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit; font-size:2rem;">Connexion</font>
                </font>
            </h2>
            <div class="relative mb-4">
                <label for="username" class="leading-7 text-sm text-white">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit; font-size:1rem; ">Pseudo</font>
                    </font>
                </label>
                <input type="text" id="username" name="username" class="w-full bg-green-700 bg-opacity-20 focus:bg-green-500 focus:ring-2 focus:ring-white rounded border border-black text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="password" class="leading-7 text-sm text-white">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit; font-size:1rem ">Mot de passe</font>
                    </font>
                </label>
                <input type="password" id="password" name="password" class="w-full bg-green-700 bg-opacity-20 focus:bg-green-500 focus:ring-2 focus:ring-white rounded border border-gray-600 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button class="text-white bg-green-700 rounded-full border-x-6 py-2 px-8 focus:outline-none hover:bg-green-500 rounded text-lg">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">C'est partie</font>
                </font>
            </button>
            <button>
                <font style="text-decoration: underline;">
                    <a href="/s'inscrire.php"> S'inscrire</a>
                </font>
            </button>
        </div>
    </div>
</section>

<?php require_once "EcoRide/templates/footer.php" ?>