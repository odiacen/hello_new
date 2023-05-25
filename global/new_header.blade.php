<!-- Include Head -->
@include('nuevo.global.new_head')

<header x-data="header()">
<nav
  class="flex-no-wrap relative flex w-full items-center justify-center bg-white py-2 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-2"
  data-te-navbar-ref>
  <div class="flex w-full flex-wrap items-center px-3">
   
    <!-- Collapsible navigation container -->
    <div class="flex flex-grow items-center" >
      <!-- Logo -->
      
      <a    class="mb-4 md:ml-20 mt-3 flex items-center text-neutral-900 text-sm text-bold hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
            href="#">
              <p class="flex mr-10">info@helloflatmate.com</p>
              <p>600 600 600</p>
      </a>
          
       
      
    </div>
    

    <!-- Right elements -->
    <div class="relative flex items-center">
    <a class="flex md:mr-20 items-center">
        <!-- Facebook -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-5"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
        </svg>
        
        <!-- Instagram -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-5"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg>
        
        <!-- Whatsapp -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-5"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
        </svg>
        
        <!-- Youtube -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-5"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
        </svg>
    </a>

  </div>
</nav>

  <!-- Main navigation container -->
<nav
  class="flex-no-wrap relative flex w-full items-center justify-between bg-cyan-300 py-4 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4"
  data-te-navbar-ref>
  <div class="flex w-full flex-wrap items-center px-3">
   
    <!-- Collapsible navigation container -->
    <div class="flex flex-grow md:ml-20 items-center" >
      <!-- Logo -->
      
      <a
        class="mb-4 mr-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
        href="#">
        <img
          src="https://www.helloflatmate.com/img/img/logo-bar.png"
          style="height: 40px"
          alt=""
          loading="lazy" />
      </a>
     
      <a    class="grid grid-cols-1 mb-4 mr-2 mt-3 flex items-center text-slate-50 text-xl text-bold hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
            href="#">
              <p>hello</p>
              <p>flatmate</p>
      </a>
          
       
      
    </div>
    

    <!-- Right elements -->
    <div class="relative flex items-center">
    
     <!-- Hamburger button for mobile view -->
    <div class="md:mr-20">
    <button
      x-on:click="open = ! open"
      class="block border-0 top-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
      type="button"
      >
      <!-- Hamburger icon -->
      <span class="[&>svg]:w-7">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="h-7 w-7">
          <path
            fill-rule="evenodd"
            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>
    </div>
    <!-- Collapsible navigation container -->
    <div
     
      :class="open ? ' ' : 'hidden items-center'"
      class="!visible flex-grow basis-[100%] lg:!flex lg:basis-auto"
      id="navbarSupportedContent1"
      data-te-collapse-item>
      
      <!-- Right navigation links -->
      <ul
        class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row"
        data-te-navbar-nav-ref>
         <template x-for="menuItem in menuItems">
           <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                 <a
                    class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                    x-bind:href="menuItem.url"
                    x-text="menuItem.desc"
                    ></a
                 >
            </li>
          </template>
      </ul>
      </div>
  </div>
</nav>  
 
</header>

<script>
    function header(){
               return { 
                    open: false,
                    menuItems : [
                                 { desc: "Cómo funciona", url: "#" },
                                 { desc: "Iniciar sesión", url: "#" },
                                 { desc: "Propietario", url: "https://www.helloflatmate.com/es/about" },
                                 { desc: "Contacto", url: "https://www.helloflatmate.com/es/contact" }
                                ]
                    
               }
        
            }
</script>