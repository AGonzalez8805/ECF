<?php
require_once "templates/header.php";
?>

<!-- Recherche trajet -->
<section class="body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12 pt-10">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4">Où allons-nous ?</h1>
        </div>
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4">
            <div class="relative sm:mb-0 flex-grow w-full">
                <label for="arriver" class="leading text-sm text-gray-400">Départ</label>
                <input type="text" id="arriver" name="arriver" class="w-full bg-stone-200 rounded-full border-y-2 border-green-700 focus:border-green-200 focus:ring-2 focus:ring-green-400 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative sm:mb-0 flex-grow w-full">
                <label for="arriver" class="leading text-sm text-gray-400">Arriver</label>
                <input type="text" id="arriver" name="arriver" class="w-full bg-stone-200 rounded-full border-y-2 border-green-700 focus:border-green-200 focus:ring-2 focus:ring-green-400 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative sm:mb-0 flex-grow w-full">
                <label for="date" class="leading text-sm text-gray-400">Date</label>
                <input type="date" id="date" name="date" class="w-full bg-stone-200 rounded-full border-y-2 border-green-700 focus:border-green-200 focus:ring-2 focus:ring-green-400 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        </div>
    </div>
</section>

<!-- Image+texte -->
<section class="body-font relative py-12">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col">
        <div class="text-center w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium">Qui sommes-nous?</h1>
        </div>
        <div class="flex flex-col items-center w-full max-w-4xl mx-auto relative">
            <img class=" w-full max-w-3xl mx-auto mb-8 opacity-30" alt="hero" src="/Asset/images/imagefond.png">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center w-full md:w-5/6 mx-auto px-4">
                    <p class="leading-relaxed mb-8 text-lg md:text-xl">
                        <strong>
                            Notre plateforme révolutionne la mobilité partagée en connectant chauffeurs et passagers avec une priorité claire : l'impact environnemental. Contrairement aux services traditionnels, nous permettons à chaque utilisateur de choisir librement son rôle selon ses besoins du moment, qu'il souhaite conduire ou être passager.
                            <br><br>Notre algorithme intelligent privilégie systématiquement les véhicules électriques pour les déplacements urbains et de proximité, tandis que les voitures à faible consommation sont favorisées pour les trajets longue distance. Cette approche différenciée selon la distance parcourue optimise l'empreinte carbone de chaque trajet.
                            <br><br>En rejoignant notre communauté, vous participez activement à la transition écologique tout en bénéficiant d'une solution de transport flexible et économique. Notre technologie met en relation des utilisateurs partageant les mêmes valeurs environnementales et facilite une mobilité plus responsable au quotidien.
                        </strong>
                    </p>
                </div>
            </div>
            <div class="text-lg md:text-xl">
                <p>Partagez vos trajets, préservez la planète :
                    <br>la mobilité responsable à portée de clic
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Les deux photos -->
<section class="body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -mx-4 -mb-10 text-center">
            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg h-150 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="/Asset/images/Hybrid 1.png">
                </div>
            </div>
            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg h-150 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="/Asset/images/Electric 1.png">
                </div>
            </div>
        </div>
    </div>
</section>



<?php
require_once "templates/footer.php";
?>