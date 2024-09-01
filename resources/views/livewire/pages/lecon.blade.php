<div>
    <div class="fixed w-screen mb-32">
        <livewire:composant.navbar/>
    </div>
<section class="relative bg-cover bg-center bg-no-repeat h-64 flex items-center justify-center" style="background-image: url('https://source.unsplash.com/random/1920x600');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold">Leçons en Vidéo</h1>
        <p class="mt-4 text-lg md:text-xl">Apprenez à votre rythme avec nos vidéos interactives</p>
    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <!-- Paragraphe Introductif -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-4 text-center">Pourquoi Apprendre avec Nos Vidéos ?</h2>
            <p class="text-gray-700 leading-relaxed text-center max-w-3xl mx-auto">
                Nos vidéos éducatives sont conçues pour vous aider à maîtriser les concepts clés des TIC de manière interactive et engageante. Que vous soyez débutant ou que vous cherchiez à approfondir vos connaissances, nos leçons couvrent un large éventail de sujets pour répondre à tous vos besoins. Chaque vidéo est structurée pour vous guider pas à pas, vous permettant de progresser à votre propre rythme et de revoir les concepts aussi souvent que nécessaire.
            </p>
        </div>

        <!-- Section Vidéos -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Exemple de carte vidéo -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img src="https://source.unsplash.com/random/350x200" alt="Thumbnail de la vidéo" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Titre de la Vidéo</h3>
                    <p class="text-gray-600">Description courte de la vidéo pour donner un aperçu du contenu.</p>
                    <a href="#" class="mt-4 inline-block bg-yellow-500 text-black py-2 px-4 rounded shadow hover:bg-yellow-600 transition-colors">Voir la Vidéo</a>
                </div>
            </div>
            <!-- Répéter pour d'autres vidéos -->
        </div>
    </div>
</section>

</div>