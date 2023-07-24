
    <section class="bg-white bt-5">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-5xl font-bold text-gray-900 from-red-600 via-pink-600 to-blue-600 bg-gradient-to-r bg-clip-text text-transparent">
                    ThronesOfGamers
                </h2>

                <p class="mt-4 text-gray-500 ">
                   Une team de gamers qui joue pour le fun et qui aime le tryhard depuis plus de {{ $years }} ans.<br/>
                    De nos début sur minecraft en passant par différents jeux comme World Of Tank, Trove, Paladin et bien d'autres, nous avons toujours gardé le même objectif : s'amuser.
                    Mais nous avons aussi été présent sur les jeux mobile tel que Clash Of Clan, Clash Royal, Brawl Star et bien d'autres.
                </p>
            </div>

            <div class="mt-8 sm:mt-12">
                <dl class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                    <div class="flex flex-col rounded-lg bg-blue-100 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500" >
                            Membres
                        </dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">
                            {{ $members}}
                        </dd>
                    </div>

                    <div class="flex flex-col rounded-lg bg-blue-100 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">
                            Jeux
                        </dt>

                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">{{$games}}</dd>
                    </div>

                    <div class="flex flex-col rounded-lg bg-blue-100 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">
                            Heures de jeu
                        </dt>

                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl" >
                            25863
                        </dd>
                    </div>

                    <div class="flex flex-col rounded-lg bg-blue-100 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">
                            Années d'existence
                        </dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl"> {{ $years }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

