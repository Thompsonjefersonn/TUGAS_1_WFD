<nav class="bg-white border-gray-200 dark:bg-gray-800">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PromoKampus</span>
    </a>
    
    <!-- Hamburger Button (Only visible on small screens) -->
    <button data-collapse-toggle="navbar-default" type="button" 
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden 
               hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 
               dark:hover:bg-gray-700 dark:focus:ring-gray-600" 
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>

    <!-- Navigation Menu (Always visible on desktop screens) -->
    <div class="hidden md:flex w-full md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 
                 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white 
                 dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700">
        <li>
          <a href="{{ route('promotions') }}" 
             class="block py-2 px-3 text-gray-800 rounded-sm hover:bg-gray-100 md:hover:bg-transparent 
                    md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 
                    dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Promosi</a>
        </li>
        <li>
          <a href="{{ route('home') }}" 
             class="block py-2 px-3 text-gray-800 rounded-sm hover:bg-gray-100 md:hover:bg-transparent 
                    md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 
                    dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
        </li>
        <li>
          <a href="{{ route('about') }}" 
             class="block py-2 px-3 text-gray-800 rounded-sm hover:bg-gray-100 md:hover:bg-transparent 
                    md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 
                    dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
    // JavaScript to toggle the menu visibility for small screens
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.querySelector("[data-collapse-toggle='navbar-default']");
        const menu = document.getElementById("navbar-default");

        toggleButton.addEventListener("click", function() {
            // Toggle the 'hidden' class on the menu when the hamburger button is clicked
            menu.classList.toggle("hidden");
        });
    });
</script>
