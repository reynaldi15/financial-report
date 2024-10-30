<style>		
    /* Styles for light and dark mode */
    body.light-mode { background-color: #ffffff; color: #1A202C; }
     body.light-mode .bg-right { background-color: #f7fafc; }
     body.dark-mode { background-color: #1A202C; color: #E2E8F0; }
 
   /* Animation Styles */
    .slide-in-bottom{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both}
    .slide-in-bottom-h1{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both}
    .slide-in-bottom-subtitle{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both}
    .fade-in{-webkit-animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both;animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both}
    .bounce-top-icons{-webkit-animation:bounce-top .9s 1s both;animation:bounce-top .9s 1s both}
 
    /* Switch Icon Animation */
    #theme-toggle {
       cursor: pointer;
       display: inline-flex;
       align-items: center;
       justify-content: center;
       width: 40px;
       height: 40px;
       border-radius: 50%;
       transition: background-color 0.3s ease;
     }
     /* Animation for icon rotation */
     .icon {
       width: 24px;
       height: 24px;
       fill: currentColor;
       transition: transform 0.5s ease, opacity 0.3s ease;
     }
     .icon.sun { opacity: 1; transform: rotate(0deg); }
     .icon.moon { opacity: 0; transform: rotate(180deg); }
 
     /* Toggle visibility */
     .dark-mode .icon.sun { opacity: 0; transform: rotate(180deg); }
     .dark-mode .icon.moon { opacity: 1; transform: rotate(0deg); }
    
    /* Keyframe Animations */
    @-webkit-keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}
    @-webkit-keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}@keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}
    @-webkit-keyframes fade-in{0%{opacity:0}100%{opacity:1}}@keyframes fade-in{0%{opacity:0}100%{opacity:1}}
        
   </style>
  <div class="h-screen pb-14 bg-right bg-cover" style="background-image:url('{{ asset('assets/bg.svg') }}');">
    <!--Nav-->
    <div class="w-full container mx-auto p-6">
      <div class="w-full flex items-center justify-between">
        <a href="/" class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
          <svg class="h-8 fill-current text-indigo-600 pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z"/></svg> 
          FRM
        </a>
        
        <div class="flex items-center gap-4"> <!-- Flexbox wrapper with gap between elements -->
          <!-- Theme Toggle Button with Sun and Moon Icons -->
          <button id="theme-toggle" class="text-indigo-400">
            <!-- Sun Icon (Light Mode) -->
            <svg id="sun-icon" class="icon sun" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path d="M12 4v2m0 12v2m8-10h2m-18 0H2m15.364-5.636l1.414 1.414M5.636 5.636L7.05 7.05m10.607 10.607l1.414-1.414M5.636 18.364L7.05 16.95M12 10a2 2 0 100 4 2 2 0 000-4z" />
            </svg>
            <!-- Moon Icon (Dark Mode) -->
            <svg id="moon-icon" class="icon moon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
            </svg>
          </button>
          
          <!-- Twitter Icon -->
          <a class="text-blue-300 no-underline hover:text-indigo-800" href="https://twitter.com/intent/tweet?url=#">
            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path>
            </svg>
          </a>
          <a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 " data-tippy-content="#facebook_id" href="https://www.facebook.com/sharer/sharer.php?u=#">
            <svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path></svg>
          </a>
        </div>
      </div>
    </div>

    <script>
        // Check and apply stored theme on load
        document.addEventListener("DOMContentLoaded", function() {
          const currentTheme = localStorage.getItem("theme") || "light";
          document.body.classList.toggle("dark-mode", currentTheme === "dark");
          document.body.classList.toggle("light-mode", currentTheme === "light");
          document.getElementById("theme-icon").classList.toggle("dark", currentTheme === "dark");
        });
  
        // Toggle theme and icon rotation
        document.getElementById("theme-toggle").addEventListener("click", function() {
          const isDarkMode = document.body.classList.toggle("dark-mode");
          document.body.classList.toggle("light-mode", !isDarkMode);
          localStorage.setItem("theme", isDarkMode ? "dark" : "light");
  
          // Rotate the icon
          const themeIcon = document.getElementById("theme-icon");
          themeIcon.classList.toggle("dark", isDarkMode);
        });
      </script>