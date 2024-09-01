<div>
    <section class="relative h-screen flex flex-col items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1529390079861-591de354faf5?ixid=M3w1NjExMzd8MHwxfHNlYXJjaHw3fHwlQzMlQTlkdWNhdGlvbnxlbnwwfHx8fDE3MjM5ODU4OTJ8MA&ixlib=rb-4.0.3&fm=webp&w=1920');">
        <!-- Navbar -->
        <nav class="absolute top-0 left-0 right-0 bg-black bg-opacity-70 text-white py-4 px-6 flex justify-between items-center z-20">
            <a href="#" class="text-2xl font-bold">TechEdu</a>
            <div class="space-x-6">
                <a href="{{route('home')}}" class="hover:text-yellow-500">Accueil</a>
                <a href="{{route('lecon')}}" class="hover:text-yellow-500">Leçons</a>
                <a href="{{route('about')}}" class="hover:text-yellow-500">À Propos</a>
                <a href="{{route('contact')}}" class="hover:text-yellow-500">Contact</a>
            </div>
        </nav>
    
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 max-w-6xl text-center mx-auto px-4">
            <h1 class="text-white text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight mt-12 md:mt-24 lg:mt-32 transition-transform duration-300 transform hover:scale-105">Maîtrisez les TIC avec Nos Leçons</h1>
            <p class="text-white text-lg md:text-xl mt-4 mb-8">Accédez à des leçons interactives et engageantes pour améliorer vos compétences en tic et exceller dans vos études.</p>
            <div class="mt-8 md:mt-12">
                <a href="#lessons" class="bg-yellow-500 text-black py-3 px-6 md:py-4 md:px-8 text-lg md:text-xl font-semibold inline-block rounded shadow-lg hover:bg-yellow-600 transition-colors">Explorer les Leçons</a>
            </div>
        </div>
    </section>
</div>
