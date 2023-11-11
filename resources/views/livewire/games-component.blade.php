
<!-- Games section -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-6">

    <div class="text-center pb-12">
        <h2 class="text-base font-bold text-indigo-600">
            Le gaming est tout un art
        </h2>
        <h3 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-gray-900 mb-5">
            Nos Jeux du moment
        </h3>
    </div>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8 mb-12">
        @foreach ($games as $game)
            <div class="flex justify-center">
                <div class="h-32 rounded-lg"> <img class="object-center object-cover rounded-full h-36 w-36" src="{{ asset('storage/' . $game->picture) }}" alt="photo">
                    <h3 class="text-center font-bold text-2xl "> {{ $game->name }}</h3>
                </div>
            </div>


        @endforeach
    </div>

</section>
