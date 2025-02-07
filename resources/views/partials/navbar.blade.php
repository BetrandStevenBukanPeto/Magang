<nav class="bg-white p-3 flex justify-between items-center border-b shadow-sm">
    <div class="flex items-center space-x-2">
        <img src="/img/logo.svg" alt="dada" class="max-w-16 max-h-16">
        <a href="/" class="text-xl font-semibold text-[#3674B5]">Litera</a>
    </div>
    <div class="flex items-center w-1/2 border rounded-full px-3 py-2">
        <select class="text-gray-600 bg-transparent focus:outline-none">
            <option>Category</option>
        </select>
        <input type="text" placeholder="Find Products, Title, and Author" class="w-full px-2 focus:outline-none">
    </div>
    
    <div class="flex items-center space-x-4">
        <button id="dark-mode-toggle" class="mr-4 p-2 rounded-full bg-gray-200 dark:bg-gray-700 focus:outline-none">
        <i id="dark-mode-icon" class="fas fa-sun text-yellow-500 dark:text-gray-300"></i>
    </button>
        <a href="/signin"><button class="border px-4 py-2 rounded">Sign In</button></a>
        <a href="/signup"><button class="bg-blue-600 text-white px-4 py-2 rounded">Sign Up</button></a>
    </div>
</nav>
