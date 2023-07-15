<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center pb-12">
        <h2 class="text-base font-bold text-indigo-600">
            We have the best equipment
        </h2>
        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
            Nos membres
        </h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
        @foreach ($members as $member)
            <div class="w-full rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8 -mt-20">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="{{ asset('storage/' . $member->picture) }}" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">{{ $member->pseudo }}</p>
                    <p class="text-base text-gray-400 font-normal">{{ $member->grade }}</p>
                </div>
                <div class="mt-6 flex flex-wrap justify-center space-x-2 w-full">
                    <div>
                        <span class="bg-green-500 text-white rounded-full px-2 py-1 text-sm font-semibold">{{ date('d/m/Y', strtotime($member->entryDate)) }}</span>
                    </div>
                    @if($member->endDate !== null)
                        <div>
                            <span class="bg-red-500 text-white rounded-full px-2 py-1 text-sm font-semibold" hidden>{{ date('d/m/Y', strtotime($member->endDate)) }}</span>
                        </div>
                    @endif
                </div>
                <p class="mt-6 text-gray-600">{{ $member->description }}</p>
                <div class="mt-6 flex space-x-4">
                    <a href="#" class="text-gray-600 hover:text-blue-600">github<i class="fab fa-github"></i></a>
                </div>
            </div>
        @endforeach
    </div>
</section>
