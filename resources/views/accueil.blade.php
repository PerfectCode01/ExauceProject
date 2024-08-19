<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Éducation Tech Simplifiée</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Cover Section -->
    <section class="relative h-screen flex flex-col items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1529390079861-591de354faf5?ixid=M3w1NjExMzd8MHwxfHNlYXJjaHw3fHwlQzMlQTlkdWNhdGlvbnxlbnwwfHx8fDE3MjM5ODU4OTJ8MA&ixlib=rb-4.0.3&fm=webp&w=1920');">
        <!-- Navbar -->
        <nav class="absolute top-0 left-0 right-0 bg-black bg-opacity-70 text-white py-4 px-6 flex justify-between items-center z-20">
            <a href="#" class="text-2xl font-bold">TechEdu</a>
            <div class="space-x-6">
                <a href="#home" class="hover:text-yellow-500">Accueil</a>
                <a href="#lessons" class="hover:text-yellow-500">Leçons</a>
                <a href="#about" class="hover:text-yellow-500">À Propos</a>
                <a href="#contact" class="hover:text-yellow-500">Contact</a>
            </div>
        </nav>
    
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 max-w-6xl text-center mx-auto px-4">
            <h1 class="text-white text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight mt-12 md:mt-24 lg:mt-32 transition-transform duration-300 transform hover:scale-105">Maîtrisez les Technologies avec Nos Leçons</h1>
            <p class="text-white text-lg md:text-xl mt-4 mb-8">Accédez à des leçons interactives et engageantes pour améliorer vos compétences en technologie et exceller dans vos études.</p>
            <div class="mt-8 md:mt-12">
                <a href="#lessons" class="bg-yellow-500 text-black py-3 px-6 md:py-4 md:px-8 text-lg md:text-xl font-semibold inline-block rounded shadow-lg hover:bg-yellow-600 transition-colors">Explorer les Leçons</a>
            </div>
        </div>
    </section>
    

    <!-- Section Features -->
    <section class="w-full bg-[#f7f7f7] py-12 px-4 md:px-8">
        <div class="max-w-6xl mx-auto flex gap-8 justify-center">
            <!-- Objective 1 -->
            <div class="flex flex-col items-center text-center bg-white p-16 rounded-lg shadow-lg">
                <h2 class="text-black text-3xl md:text-4xl font-semibold mb-4">Objectif 1</h2>
                <p class="text-gray-700 text-lg md:text-xl font-medium">Fournir des ressources pédagogiques adaptées et interactives pour les élèves du Congo afin de stimuler leur engagement et leur réussite scolaire.</p>
            </div>
            
            <!-- Objective 2 -->
            <div class="flex flex-col items-center text-center bg-white p-16 rounded-lg shadow-lg">
                <h2 class="text-black text-3xl md:text-4xl font-semibold mb-4">Objectif 2</h2>
                <p class="text-gray-700 text-lg md:text-xl font-medium">Offrir des outils de soutien aux enseignants pour améliorer leur efficacité et leur confort dans la gestion des cours et l'évaluation des élèves.</p>
            </div>
    
            <!-- Objective 3 -->
            <div class="flex flex-col items-center text-center bg-white p-16 rounded-lg shadow-lg">
                <h2 class="text-black text-3xl md:text-4xl font-semibold mb-4">Objectif 3</h2>
                <p class="text-gray-700 text-lg md:text-xl font-medium">Encourager l'innovation et la collaboration entre les éducateurs à travers des formations continues et des ateliers adaptés aux besoins locaux.</p>
            </div>
        </div>
    </section>

    <!-- Section Our Values -->
    <section class="w-full bg-[#f7f7f7] py-12 px-4 md:px-8">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="md:w-1/2 text-center">
                <h1 class="text-black text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Nos Valeurs, Votre Réussite!</h1>
                <p class="text-gray-700 text-lg md:text-xl mb-6">Nous croyons en une éducation accessible et enrichissante pour chaque élève. Notre mission est de soutenir les enseignants avec des ressources de qualité tout en valorisant l'innovation, la collaboration et le respect.</p>
                <a href="#" class="bg-black text-white text-lg md:text-xl font-semibold py-3 px-6 md:py-4 md:px-8 rounded shadow-lg hover:bg-gray-800 transition-colors">Rejoignez-Nous!</a>
            </div>
            <img src="https://tyler.com/wp-content/uploads/2023/11/Fresh-Home-2nd-Sec-Image.jpeg" alt="Nos Valeurs" class="w-full md:w-1/2 rounded-lg shadow-lg"/>
        </div>
    </section>

    <!-- Section How to Help -->
    <section class="relative w-full bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1516383607781-913a19294fd1?ixid=M3w1NjExMzd8MHwxfHNlYXJjaHwxM3x8JUMzJUE5ZHVjYXRpb258ZW58MHx8fHwxNzIzOTg1ODkyfDA&ixlib=rb-4.0.3&fm=webp&w=1920'); min-height: 400px;">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative max-w-6xl mx-auto pt-16 pb-16 text-center text-white px-4">
            <p class="text-4xl md:text-5xl font-bold mb-8">Comment Nous Aider?</p>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="w-full md:w-1/3 text-center bg-white p-6 rounded-lg shadow-lg">
                    <p class="text-xl font-semibold mb-2">Leçons Interactives!</p>
                    <p class="text-base text-gray-700">Des leçons engageantes et interactives pour captiver vos élèves!</p>
                </div>
                <div class="w-full md:w-1/3 text-center bg-white p-6 rounded-lg shadow-lg">
                    <p class="text-xl font-semibold mb-2">Ressources Prêtes!</p>
                    <p class="text-base text-gray-700">Accédez à des outils éducatifs utiles en un clic!</p>
                </div>
                <div class="w-full md:w-1/3 text-center bg-white p-6 rounded-lg shadow-lg">
                    <p class="text-xl font-semibold mb-2">Formation Continue!</p>
                    <p class="text-base text-gray-700">Participez à des ateliers pour grandir et apprendre ensemble!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Personalized Support -->
    <section class="p-5 md:p-10">
        <div class="text-center mb-6 md:mb-8">
            <p class="text-black text-3xl md:text-4xl font-semibold mb-2">Support Personnalisé!</p>
            <p class="text-black text-xl md:text-2xl font-normal mb-4">30 $ par session</p>
            <p class="text-gray-700 text-base md:text-lg font-normal mt-2">Bénéficiez d'un accompagnement sur mesure pour répondre à vos besoins spécifiques et améliorer votre enseignement.</p>
        </div>
        <div class="flex justify-center">
            <a href="#" class="bg-black text-white py-3 px-6 md:py-4 md:px-8 text-lg font-semibold rounded shadow-lg hover:bg-gray-800 transition-colors">Demandez de l'aide!</a>
        </div>
    </section>

    <!-- Section Contact Us -->
   <!-- Section Contact -->
    <!-- Section Contact -->
    <!-- Section Contact -->
    <section class="relative bg-cover bg-center min-h-screen py-24 px-5" style="background-image: url('https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixid=M3w1NjExMzd8MHwxfHNlYXJjaHwyfHwlQzMlQTlkdWNhdGlvbnxlbnwwfHx8fDE3MjM5ODU4OTJ8MA&ixlib=rb-4.0.3&fm=webp&w=1920');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-center text-white px-4">
            <div>
                <p class="text-4xl md:text-5xl font-bold mb-6">Contactez-Nous</p>
                <p class="text-lg md:text-xl mb-12">
                    Nous sommes là pour répondre à toutes vos questions et vous fournir l'aide dont vous avez besoin. Utilisez le formulaire ci-dessous pour nous envoyer un message et nous vous répondrons dans les plus brefs délais.
                </p>
            </div>
            <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
                <form action="#" method="POST" class="space-y-6">
                    <div class="flex flex-col">
                        <label for="name" class="text-sm font-medium text-gray-700 mb-1">Nom</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 text-sm placeholder-gray-400">
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 text-sm placeholder-gray-400">
                    </div>
                    <div class="flex flex-col">
                        <label for="subject" class="text-sm font-medium text-gray-700 mb-1">Sujet</label>
                        <input type="text" id="subject" name="subject" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 text-sm placeholder-gray-400">
                    </div>
                    <div class="flex flex-col">
                        <label for="message" class="text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 text-sm placeholder-gray-400"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-yellow-500 text-black py-3 px-6 text-base font-semibold rounded-lg shadow-lg hover:bg-yellow-600 transition-colors focus:outline-none focus:ring-2 focus:ring-yellow-500">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="bg-gray-800 text-white py-8 px-4 md:px-8">
        <div class="max-w-6xl mx-auto flex flex-wrap gap-8 justify-between">
            <!-- Informations de Contact -->
            <div class="w-full md:w-1/3">
                <h2 class="text-xl font-bold mb-4">Contactez-Nous</h2>
                <p class="mb-2">Adresse : 123 Rue de la Technologie, Kinshasa, RDC</p>
                <p class="mb-2">Téléphone : +243 123 456 789</p>
                <p class="mb-2">Email : <a href="mailto:contact@techsite.com" class="text-yellow-400 hover:underline">contact@techsite.com</a></p>
            </div>
    
            <!-- Liens Rapides -->
            <div class="w-full md:w-1/3">
                <h2 class="text-xl font-bold mb-4">Liens Rapides</h2>
                <ul>
                    <li><a href="#home" class="hover:text-yellow-400">Accueil</a></li>
                    <li><a href="#lessons" class="hover:text-yellow-400">Leçons</a></li>
                    <li><a href="#about" class="hover:text-yellow-400">À Propos</a></li>
                    <li><a href="#contact" class="hover:text-yellow-400">Contact</a></li>
                </ul>
            </div>
    
            <!-- Réseaux Sociaux -->
            <div class="w-full md:w-1/3">
                <h2 class="text-xl font-bold mb-4">Suivez-Nous</h2>
                <div class="flex space-x-4">
                    <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22 12.1c0 5.1-4.1 9.1-9.1 9.1-5.1 0-9.1-4-9.1-9.1 0-5.1 4-9.1 9.1-9.1 5.1 0 9.1 4 9.1 9.1zm-5.3-1.2h-1.3v-1c0-.4.2-.6.6-.6h.7v-1.4h-1.1c-1 0-1.8.8-1.8 1.8v1.1h-1.4v1.4h1.4v3.5h1.4v-3.5zm-1.3-1.6h.6c.2 0 .3.1.3.3v.3h-.9v-.3c0-.2.1-.3.3-.3zm1.3 6.6c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8zm-1.5-2.3c-.8.8-1.8 1.3-2.8 1.3s-2-1.1-2-2.8c0-1.6 1.1-2.7 2.6-2.7.6 0 1.1.2 1.6.6s.7.9.7 1.5c0 .6-.3 1.2-.7 1.6zm3.1 3.1c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8zm-1.5-2.3c-.8.8-1.8 1.3-2.8 1.3s-2-1.1-2-2.8c0-1.6 1.1-2.7 2.6-2.7.6 0 1.1.2 1.6.6s.7.9.7 1.5c0 .6-.3 1.2-.7 1.6z"></path></svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22 5.4c-.8.4-1.7.7-2.6.8.9-.5 1.6-1.3 2-2.3-.8.5-1.6.8-2.5 1-.8-.8-1.8-1.3-2.8-1.3-2.3 0-4.2 1.9-4.2 4.2 0 .3 0 .5.1.7-3.5-.2-6.7-1.8-8.8-4.3-.4.7-.6 1.5-.6 2.4 0 1.7.9 3.1 2.2 4-.8 0-1.5-.2-2.2-.5v.1c0 2.3 1.6 4.2 3.7 4.6-.4.1-.9.2-1.4.2-.3 0-.7 0-1-.1.7 2.1 2.7 3.7 5.1 3.7 6.1 0 9.4-5 9.4-9.4 0-.1 0-.3-.1-.4.7-.5 1.3-1.1 1.8-1.8-.6.3-1.3.5-2 .6.7-.4 1.2-1.1 1.5-1.9z"></path></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4.1 3.4c0-1.3 1-2.3 2.3-2.3s2.3 1 2.3 2.3c0 1.2-1 2.3-2.3 2.3s-2.3-1-2.3-2.3zm.2 4.2h4.2v12h-4.2v-12zm6.6-1.6c.8 0 1.5.3 2.1.8s.8 1.2.8 2v.1h.1v.1h-4.2v-1.5c0-.5-.2-.9-.5-1.2-.3-.3-.7-.4-1.2-.4-.8 0-1.5.7-1.5 1.5v1.5h-4.2v-1.5c0-1.6 1.3-2.8 2.8-2.8zm6.5 0c.9 0 1.7.3 2.4.8s.9 1.3.9 2.1v8.9h-4.2v-8.9c0-.8-.3-1.5-.9-2.1s-1.4-.8-2.3-.8c-1.6 0-2.8 1.2-2.8 2.8v8.9h-4.2v-8.9c0-2.6 2.1-4.8 4.7-4.8z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-8 border-t border-gray-700 pt-4">
            <p class="text-sm">&copy; 2024 TechEdu. Tous droits réservés.</p>
        </div>
    </footer>
    




   
  

</body>
</html>
