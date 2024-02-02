
<!-- Games section -->
<section class="max-w-6xl px-4 py-6 mx-auto sm:px-6 lg:px-4">

    <div class="pb-12 text-center">
        <h2 class="text-base font-bold text-indigo-600">
            Le gaming est tout un art
        </h2>
        <h3 class="mb-5 text-2xl font-bold text-gray-900 md:text-3xl lg:text-4xl font-heading">
            Nos Jeux du moment
        </h3>
    </div>
    <div class="grid grid-cols-1 gap-4 mb-12 lg:grid-cols-4 lg:gap-8">
        @foreach ($games as $game)
            <div class="flex justify-center">
                <div class="h-32 rounded-lg"> <img class="object-cover object-center rounded-full h-36 w-36" src="{{ asset('storage/' . $game->picture) }}" alt="photo">
                    <h3 class="text-2xl font-bold text-center "> {{ $game->name }}</h3>
                </div>
            </div>


        @endforeach
    </div>

</section>
