
    <section class="bg-white bt-5" id="about" x-data="{ visible: false }" x-intersect="visible = true">

        <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 md:py-16 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-5xl font-bold text-transparent text-gray-900 from-red-600 via-pink-600 to-blue-600 bg-gradient-to-r bg-clip-text">
                    ThronesOfGamers
                </h2>

                <p class="mt-4 text-gray-500 ">
                   Une team de gamers qui jouent pour le plaisir et qui aime le tryhard depuis plus de {{ $years }} ans.<br/>
                    De nos débuts sur minecraft en passant par différents jeux comme World Of Tank, Trove, Paladin et bien d'autres, nous avons toujours gardé le même objectif : s'amuser.
                    Mais nous avons aussi été présent sur les jeux mobile tel que Clash Of Clan, Clash Royal, Brawl Star et bien d'autres.
                </p>
            </div>



            <div class="mt-8 sm:mt-12">
                <div x-data="{
    members: {{$members}},
    games: {{$games}},
    years: {{$years}},
    targets: {
        members: {{$members}},
        games: {{$games}},
        hours: 25863,
        years: {{$years}},
    },
    init: function () {
        Object.entries(this.targets).forEach(([key, target]) => {
            this[key] = 0;
            const interval = Math.max(2500 / (target - this[key]), 5);
            const step = (target - this[key]) / (2500 / interval);
            const handle = setInterval(() => {
                if (this[key] < target)
                    this[key] += step;
                else {
                    clearInterval(handle);
                    this[key] = target;
                }
            }, interval);
        });
    },
}" x-intersect="init()">
                    <dl class="grid grid-cols-1 gap-4 md:grid-cols-4">
                        <div class="flex flex-col px-4 py-8 text-center bg-blue-100 rounded-lg">
                            <dt class="order-last text-lg font-medium text-gray-500">
                                Membres
                            </dt>
                            <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl" x-text="Math.round(members)"></dd>
                        </div>

                        <div class="flex flex-col px-4 py-8 text-center bg-blue-100 rounded-lg">
                            <dt class="order-last text-lg font-medium text-gray-500">
                                Jeux
                            </dt>

                            <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl" x-text="Math.round(games)"></dd>
                        </div>

                        <div class="flex flex-col px-4 py-8 text-center bg-blue-100 rounded-lg">
                            <dt class="order-last text-lg font-medium text-gray-500">
                                Heures de jeu
                            </dt>

                            <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl" x-text="Math.round(hours)"></dd>
                        </div>

                        <div class="flex flex-col px-4 py-8 text-center bg-blue-100 rounded-lg">
                            <dt class="order-last text-lg font-medium text-gray-500">
                                Années d'existence
                            </dt>
                            <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl" x-text="Math.round(years)"> </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

    </section>

    <script>
        function init() {
            return {
                current: 0,
                target: {{$members}},
                time: 2500,
                startAnimation() {
                    const interval = Math.max(this.time / (this.target - this.current), 5);
                    const step = (this.target - this.current) / (this.time / interval);
                    const handle = setInterval(() => {
                        if (this.current < this.target)
                            this.current += step;
                        else {
                            clearInterval(handle);
                            this.current = this.target;
                        }
                    }, interval);
                },
            };
        }
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
