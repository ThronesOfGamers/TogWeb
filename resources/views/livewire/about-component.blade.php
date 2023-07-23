
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                    ThronesOfGamers
                </h2>

                <p class="mt-4 text-gray-500 sm:text-xl">
            
                </p>
            </div>

            <div class="mt-8 sm:mt-12">
                <dl class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                    <div class="flex flex-col rounded-lg bg-blue-100 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">
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

                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">25 000</dd>
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
