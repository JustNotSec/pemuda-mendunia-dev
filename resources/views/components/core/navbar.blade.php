
<script>
    window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("bg-white", "shadow-md", "py-4", "border-b", "border-red-500", "rounded-b-3xl");
  } else {
    navbar.classList.remove("bg-white", "shadow-md", "py-4", "border-b", "border-red-500", "rounded-b-3xl");
  }
});
</script>

<!-- ========== HEADER ========== -->
<header id="navbar" class="fixed top-0 flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-7 transition-all duration-300">
  <nav class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
    <div class="lg:col-span-3 flex items-center">
<!-- Logo -->
<a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="../templates/creative-agency/index.html" aria-label="Preline">
  <img class="w-28 h-auto" src="https://pemudamendunia.com/wp-content/uploads/2024/09/Logo-05-e1727523129671.png" alt="Logo">
</a>
<!-- End Logo -->


      <div class="ms-1 sm:ms-2">
        
      </div>
    </div>

    <!-- Button Group -->
    <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
      <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl border border-transparent bg-green-500 text-black hover:bg-lime-500 focus:outline-none focus:bg-lime-500 transition disabled:opacity-50 disabled:pointer-events-none"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAACS0lEQVRIS82VX2iPURjHN2oif5IbwiyxkQtFZrULItlcuCNWyr+UZtZK7Go3Uyu7QilpJFyQVi4mWfP/QuRf+ZdocaPWpEipCZ/Pr/Ou1+n9velXq5369J73nOec7/s853nOW142xq18jPcvGxcCK/ByK6yBaqiA13AfrsCjvCjkeTCfhWdgI3yHZ/AGfsJyUHg63IW98D5LqJiAX3obJkEbXIQ/GRtsY+wkuM96eBHbZAnMxugx/IZ18CEvBMwtgH6YBatjT7IErmNUC6tgEPRmArzNEdLGED4MnoyaxgL1zDyAPXAWauApDEMVZIUp2aydThesDGsK47HACcZ2w0wYgUPQHXbwsG/meDGFuSHogdbELhZ4zsQn2BwM9vM8FfoKn8sRcOoqLIOlxQTc/AbsCwZzeHoO32Bu8CpP4xiTB0BvCi324B1jT2B7apcW+obuNOhR3jl4Bqb15MQuFvDrTTczKN0u82I1X4ODYYPzPI23YfkajLWzABcX8+AoE0egEj6nFCbSPw7NYLj8sGlh3iQ4DKay2dYLVnahxR4sZMzC6oSOlEDS3UDHcC0JAxZjA1hoTXAJ/sm2rEIzk1yoq8Waua4HH8EksJq99Lyr1qYXxQKevvE0NT2s/2nJVTEDY8/OTBxtscAmZvpgB/wC3bf8L8CPSG0e7zvBQzezvOxexl8UC3gzmsdJe0VnEVjVd8BwuJl3VV0w8r+wCzIvxVjAw9LwFgzAF5gKW6ARvC29Rvzh3ANTtOQfTuxtSe/j4p9c0pcni/4CV1BwGcl1CfgAAAAASUVORK5CYII="/>
        Whatsapp
      </button>

      <div class="lg:hidden">
        <button type="button" class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-hcail">
          <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
      </div>
    </div>
    <!-- End Button Group -->

    <!-- Navbar -->
<div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6">
  <div class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
    
    <!-- Home -->
    <div>
      <a class="relative inline-block text-black font-bold focus:outline-none before:absolute before:-bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-red-400 before:rounded-sm" href="/">Home</a>
    </div>

    
<button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-black font-ubuntu font-bold hover:bg-red-800   rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-red-700" type="button">Our Porgrams<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>


<!-- Dropdown menu -->
<div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
      <li>
        <a href="/gyis" class="block px-4 py-2 font-bold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">GYIS</a>
      </li>
      <li>
        <a href="/edutrip" class="block px-4 py-2 font-bold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edutrip</a>
      </li>
    </ul>
</div>


    <!-- Articles -->
    <div>
      <a class="inline-block text-black font-bold hover:text-gray-600 focus:outline-none" href="/articles">Articles</a>
    </div>

    <!-- Gallery -->
    <div>
      <a class="inline-block text-black font-bold hover:text-gray-600 focus:outline-none" href="/gallery">Gallery</a>
    </div>

    <!-- Contact -->
    <div>
      <a class="inline-block text-black font-bold hover:text-gray-600 focus:outline-none" href="/contact-us">Contact Us</a>
    </div>
  </div>
</div>

  </nav>
</header>

<!-- ========== END HEADER ========== -->