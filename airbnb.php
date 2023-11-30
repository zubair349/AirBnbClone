<?php
include("connect_db.php");
include("addsession.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body onload="loadPage()">
    <section
      id="guest"
      class="text-xl text-center font-semibold underline py-[1rem] bg-gray-100 border-inherit"
    >
      <div>Learn about Guest Favorites, the most loved homes on Airbnb</div>
    </section>
    <section id="navbar" class="sticky px-[5rem]">
      <div class="flex py-3 justify-between">
        <div class="flex items-center gap-2 h-[50px]">
          <img class="h-full" src="./assets/airbnb.png" alt="" />
          <p class="text-red-500 text-[1.2rem] font-bold">airbnb</p>
        </div>
        <div class="flex p-3 h-[50px] border-2 border-inherit rounded-full">
          <p class="px-3 text-black font-semibold">Anywhere</p>
          <p class="px-3 border-l-2 text-black font-semibold">Any week</p>
          <input class="px-3 border-l-2 text-gray-400 outline-none" placeholder="Add guests" >
          <div class="h-full">
            <img
              class="h-[100%] bg-red-500 p-1 rounded-full"
              src="./assets/magnifying-glass.png"
              alt=""
            />
          </div>
        </div>
        <div class="flex gap-[2rem] items-center h-[50px]">
          <button onclick="window.location.href = 'bookingForm.php';"><p>Airbnb your home</p></button>

          <div class="h-full items-center flex">
            <img class="h-[40%]" src="./assets/globe.png" alt="" />
          </div>
          <div
            class="border-2 rounded-full gap-2 border-inheret p-3 h-full items-center flex"
          >
            <img class="h-[70%]" src="./assets/hamburger.png" alt="" />
            <img class="h-[100%]" src="./assets/profile.png" alt="" />
          </div>
        </div>
      </div>

      <div
        class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700"
      >
        <ul class="flex flex-wrap -mb-px">
          <li class="me-2">
            <a
              href="#"
              class="inline-block p-4 rounded-t-lg dark:text-blue-500 dark:border-blue-500"
              >Dashboard</a
            >
          </li>
        </ul>
      </div>
    </section>
    <section  class="mx-[5rem] mt-[2rem]">
      <div id="container" class="flex flex-wrap gap-4">
        <div class="text-gray-400 w-[23%]">
          <img class="rounded" src="./assets/cover.webp" alt="" />
          <div class="flex justify-between mt-[1rem]">
            <h1 class="font-bold text-black">Cotia Brazil</h1>
            <div>⭐ 4.89</div>
          </div>
          <p>Stay with Roberta. Wellness</p>
          <p>Dec 6 -11</p>
          <div class="flex gap-3">
            <h1 class="text-black font-bold">58$</h1>
            <p>night</p>
          </div>
        </div>
</div>
        
        
    </section>

    <section id="footer" class="px-[5rem] py-[2rem] mt-[3rem] bg-gray-100">
      <div class="flex justify-between py-[2rem] border-y-2 border-inherit">
        <div>
          <h1 class="font-bold">Support</h1>
          <ul class="mt-[1rem]">
            <li>Help Center</li>
            <li>AirCover</li>
            <li>Anti-discrimination</li>
            <li>Disability Support</li>
            <li>Cancelation Options</li>
            <li>Report Neighborhood concerns</li>
          </ul>
        </div>
        <div>
          <h1 class="font-bold">Hosting</h1>
          <ul class="mt-[1rem]">
            <li>Help Center</li>
            <li>AirCover</li>
            <li>Anti-discrimination</li>
            <li>Disability Support</li>
            <li>Cancelation Options</li>
            <li>Report Neighborhood concerns</li>
          </ul>
        </div>
        <div>
          <h1 class="font-bold">Airbnb</h1>
          <ul class="mt-[1rem]">
            <li>Help Center</li>
            <li>AirCover</li>
            <li>Anti-discrimination</li>
            <li>Disability Support</li>
            <li>Cancelation Options</li>
            <li>Report Neighborhood concerns</li>
          </ul>
        </div>
      </div>
    </section>
    <script>
      function loadPage() {
      var container = document.getElementById("container");
      
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                container.innerHTML = xhr.responseText;
            }
        };
        xhr.open("GET", "show_listing.php");
        xhr.send();
    } 

    </script>
  </body>
</html>
