<div>
    <div class="fixed w-screen">
        <livewire:composant.navbar/>
    </div>
    <section class="py-16 bg-gray-100 h-screen">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Contactez-Nous</h2>
            <div class="max-w-xl mx-auto">
                <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Nom</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700 font-bold mb-2">Sujet</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-yellow-500 text-black py-2 px-6 rounded hover:bg-yellow-600 transition-colors">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
