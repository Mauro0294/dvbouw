<footer class="bg-primary py-12 text-white">
    <div class="lg:flex justify-between container" id="contact">
        <div>
            <div>
                <h2 class="font-bold uppercase">Contact</h2>
                <p class="max-w-[400px]">Wil je met ons samenwerken, heb je een mooie klus voor ons? Stuur ons dan een e-mail.</p>
                <p class="max-w-[400px] mt-8">Via dit formulier vraag je eenvoudig een offerte aan voor in jouw (nieuwbouw)woning of (nieuwbouw)project.</p>
                <p class="max-w-[400px] mt-8">Volg ons op <a target="_blank" rel="noreferrer" href="https://www.facebook.com/p/DV-Onderhoud-100064673394829/">facebook</a> om op de hoogte te blijven van het laatste nieuws!</p>
            </div>
        </div>
        <div class="lg:w-1/3 mt-8 lg:mt-0">
            <div class="w-full">
                <form method="POST" class="flex flex-col" action="{{ route('contact') }}">
                    @csrf
                    <label for="name" class="mb-1">Naam</label>
                    <input name="name" id="name" class="border border-white bg-transparent p-2 rounded mb-6">
                    <label for="email" class="mb-1">E-mail</label>
                    <input name="email" id="name" class="border border-white bg-transparent p-2 rounded mb-6">
                    <label for="subject" class="mb-1">Onderwerp</label>
                    <input name="subject" id="subject" class="border border-white bg-transparent p-2 rounded mb-6">
                    <label for="message" class="mb-1">Bericht</label>
                    <textarea name="message" rows="5" id="message" class="border border-white bg-transparent p-2 rounded resize-none"></textarea>
                    <button type='submit' class="bg-[#D2153D] text-white py-3 px-8 mt-6">Versturen</button>
                </form>
                @if (session('success'))    
                    <div class="flex p-4 mb-4 text-sm text-white border border-green-300 bg-green-500 mt-4" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">{{ session('success') }}</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</footer>

@if(session('scroll'))
    <script>
        window.onload = function() {
            window.scrollTo(0, document.body.scrollHeight);
        };
    </script>
@endif