<!--Members section-->

<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12 bt-5">
    <div class="text-center pb-12">
        <h2 class="text-base font-bold text-indigo-600">
            Le talent s'acquière mais le skill lui est inné
        </h2>
        <h3 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-gray-900 mb-5">
            Nos membres
        </h3>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 justify-items-center">
        @foreach ($members as $member)
            <div class="w-full rounded-lg p-12 flex flex-col justify-center items-center">

                <img class="object-center object-cover rounded-full h-36 w-36 cursor-pointer" src="{{ asset('storage/' . $member->picture) }}"  wire:click="openModal({{ $member->id }})" alt="photo">

                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">{{ $member->pseudo }}</p>
                    <p class="text-base text-gray-400 font-normal">{{ $member->grade }}</p>
                </div>
                <div class="mt-6 flex space-x-4">
                    <a href="#" class="text-gray-600 hover:text-blue-600">github<i class="fab fa-youtube"></i></a>

                    <a href="#" class="text-gray-600 hover:text-blue-600">twitch<i class="fab fa-twitch"></i></a>
                </div>
            </div>
        @endforeach
    </div>

</section>


{{--<livewire:members-modal />--}}
