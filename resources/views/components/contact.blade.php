
<section id="contact" class="contact">
    <div
        class="max-w-screen-xl mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
        <div class="flex flex-col ">
            <div class="mb-24">
                <h2 class="text-4xl lg:text-4xl font-bold leading-tight">Vous pouvez nous envoyer un messages </h2>

            </div>
            <div class="mb-24">
                <h2 class="text-4xl lg:text-4xl font-bold leading-tight">Vous pouvez aussi nous retrouver sur </h2>

            </div>
            <div class="flex ml-32">



            </div>

        </div>
        <form id="FormContact" action="">
            @csrf
            <div class="">
                <div>
                    <label for="Name" class="uppercase text-sm text-gray-600 font-bold">Nom Prénom</label>
                    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                           type="text" id="Name" name="Name" placeholder="">
                    @if ($errors->has('Name'))
                        <span class="text-danger">{{ $errors->first('Name') }}</span>
                    @endif
                </div>
                <div class="mt-8">
                    <label for="email" class="uppercase text-sm text-gray-600 font-bold">Email</label>
                    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                           type="email" id="email" name="email">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="mt-8">
                    <label for="object" class="uppercase text-sm text-gray-600 font-bold">Objet</label>
                    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                           type="text" id="object" name="object">
                    @if ($errors->has('object'))
                        <span class="text-danger">{{ $errors->first('object') }}</span>
                    @endif
                </div>
                <div class="mt-8">
                    <label for="Message" class="uppercase text-sm text-gray-600 font-bold">Message</label>
                    <textarea
                        class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" id="Message" name="Message"></textarea>
                    @if ($errors->has('Message'))
                        <span class="text-danger">{{ $errors->first('Message') }}</span>
                    @endif
                </div>
                <div class="mt-8">
                    <button type="submit"
                            class="uppercase text-sm font-bold tracking-wide bg-indigo-600 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
