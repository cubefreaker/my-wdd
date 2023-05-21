<x-slot name="title">{{ $title }}</x-slot>
<x-slot name="themeClass">{{ $themeClass }}</x-slot>

@vite(['resources/js/theme.js'])

<div>
  <div id="app" class="flex flex-col place-items-center text-center">
    <section id="cover" class="main-theme-section flex flex-col place-items-center justify-between !bg-[url(/public/icons/wave.svg)] bg-cover p-10 w-screen min-h-screen">
      <img src="{{ asset('images/leaf_1.png') }}" alt="" class="absolute w-28 md:w-72 -top-10 -left-10 md:-top-28 md:-left-24 hidden lg:block">
      <img src="{{ asset('images/leaf_1.png') }}" alt="" class="absolute w-28 md:w-72 -top-16 left-4 md:-top-44 md:left-8 hidden lg:block">
      <img src="{{ asset('images/leaf_1.png') }}" alt="" class="absolute -scale-x-100 w-28 md:w-72 -top-10 -right-10 md:-top-28 md:-right-24 hidden lg:block">
      <img src="{{ asset('images/leaf_1.png') }}" alt="" class="absolute -scale-x-100 w-28 md:w-72 -top-16 right-4 md:-top-44 md:right-8 hidden lg:block">
      
      <img src="{{ asset('images/leaf_2.png') }}" alt="" class="absolute rotate-[65deg] w-56 -bottom-28 -left-16 md:w-72 md:-bottom-32 md:-left-4 hidden lg:block">
      <img src="{{ asset('images/leaf_2.png') }}" alt="" class="absolute rotate-[10deg] w-60 -bottom-16 -left-36 md:w-80 md:-bottom-24 md:-left-32 hidden lg:block">
      <img src="{{ asset('images/leaf_2.png') }}" alt="" class="absolute -scale-x-100 -rotate-[65deg] w-56 -bottom-28 -right-16 md:w-72 md:-bottom-32 md:-right-4 hidden lg:block">
      <img src="{{ asset('images/leaf_2.png') }}" alt="" class="absolute -scale-x-100 -rotate-[10deg] w-60 -bottom-16 -right-36 md:w-80 md:-bottom-24 md:-right-32 hidden lg:block">
      
      <img src="{{ asset('images/leaf_3.png') }}" alt="" class="absolute rotate-[100deg] w-28 md:w-72 -top-[75px] left-24 md:-top-44 md:left-60 hidden lg:block">
      <img src="{{ asset('images/leaf_3.png') }}" alt="" class="absolute -scale-x-100 -rotate-[100deg] w-28 md:w-72 -top-[75px] right-24 md:-top-44 md:right-60 hidden lg:block">
      
      <img class="mx-auto my-[1em] w-[60%] md:h-[calc(100vh-50px)] md:w-[30vw] absolute left-[50%] translate-x-[-50%] z-0" src="{{ asset('images/gate_border.png') }}" alt="">
      <h2 class="main-theme-h2 mt-4 md:mt-2 slide-in-top">The Wedding of</h2>
      <img id="figure1" class="mx-auto w-[80%] md:w-[20%] !-scale-x-100 scale-in-center" src="{{ asset('/images/figure.png') }}" alt="">
      <div id="coupleName" class="flex flex-col flex-col-reverse xs:flex-row xs:flex-row-reverse justify-center mt-10 md:mt-8">
        <h1 id="brideName" class="main-theme-h1 slide-in-left">{{ explode(' ', $detailUndangan->bride_name)[0] }}</h1>
        <h1 class="main-theme-h1 scale-in-center">&nbsp;&&nbsp;</h1>
        <h1 id="groomName" class="main-theme-h1 slide-in-right">{{ explode(' ', $detailUndangan->groom_name)[0] }}</h1>
      </div>
      <div id="yth" class="text-[1.5em] md:mb-2 slide-in-bottom"></div>
      <button id="btnOpen" class="w-32 border border-[navy] hover:bg-slate-100 hover:text-gray-700 font-bold py-1 px-2 rounded inline-flex items-center z-[999]">
        <img id="mail-icon" class="mr-2 vibrate-1" src="{{ asset('/icons/mail.svg') }}" width="25" alt="">
        <span>Buka Undangan</span>
      </button>
      <div class="h-8"></div>
    </section>
    <section id="date" class="main-theme-section flex flex-col place-items-center justify-between py-20">
      <img class="mx-auto my-[2em] w-[60%] md:h-[calc(100vh-100px)] md:w-[30vw] absolute left-[50%] !-translate-x-[50%] z-0" src="/images/gate_border.png" alt="" data-aos="zoom-out">
      <h2 class="main-theme-h2 mt-8 relative" data-aos="fade-up">Save The Date</h2>
      <img id="figure2" class="w-[70%] md:w-[20%] -m-20 md:-m-0 !-scale-x-100" src="/images/figure.png" alt="" data-aos="zoom-in">
      <p data-aos="zoom-in"><span class="text-2xl font-extrabold my-4 eventDateMain"></span></p>
      <div id="countdown" class="w-[70%] md:w-[20%] relative flex justify-between text-2xl md:text-4xl">
        <div class="flex flex-col" data-aos="fade-up" data-aos-duration="500">
          <span id="days"></span>
          <span>Hari</span>
        </div>
        <div class="flex flex-col" data-aos="fade-up" data-aos-duration="1000">
          <span id="hours"></span>
          <span>Jam</span>
        </div>
        <div class="flex flex-col" data-aos="fade-up" data-aos-duration="1500">
          <span id="minutes"></span>
          <span>Menit</span>
        </div>
        <div class="flex flex-col" data-aos="fade-up" data-aos-duration="2000">
          <span id="seconds"></span>
          <span>Detik</span>
        </div>
      </div>
      <div class="h-8"></div>
    </section>
    <section id="brideAndGroom" class="main-theme-section -mt-32 md:-mt-0 pb-60 md:pb-0">
      <img class="relative left-[50%] !-translate-x-[50%] w-40" src="/images/rose.png" alt="" data-aos="zoom-in">
      <div class="my-6 text-center" data-aos="zoom-in">
        <h3 class="text-2xl mb-2">Assalamu'alaikum Warahmatullahi Wabarakatuh</h3>
        <p>Maha suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan. ya Allah semoga ridho-Mu tercurah mengiring pernikahan kami :</p>
      </div>
      <div id="coupleFigure" class="flex flex-col md:flex-row md:flex-row-reverse justify-center place-items-center">
        <div id="bride" class="flex flex-col justify-center place-items-center">
          <img class="w-80" src="/images/bride.png" alt="" data-aos="fade-up">
          <p class="font-[adlery-pro] text-4xl mt-4" data-aos="fade-bottom" data-aos-duration="500">{{ $detailUndangan->bride_name }}</p>
          <p data-aos="fade-up">{{ $detailUndangan->bride_parent_text }}</p>
        </div>
        <div class="w-16 mt-6 heartbeat" data-aos="zoom-in" data-aos-duration="2000">
          <svg viewBox="-15.41 0 126.74 126.74" xmlns="http://www.w3.org/2000/svg" fill="deeppink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill: var(--primary);}</style> </defs> <g id="Layer_2" data-name="Layer 2"> <g id="Layer_1-2" data-name="Layer 1"> <path d="M51.31,27.71c3.14-4.32,5.57-7.81,8.14-11.18,3.41-4.48,8.16-7.16,13.23-9.25A13.76,13.76,0,0,1,78.5,6.22c8.49.52,16.2,8,17.14,16.56,1.14,10.28-1.35,20-5.58,29.15A156.23,156.23,0,0,1,70.73,84.24c-6.9,8.67-14.2,17.12-18.87,27.35-1.77,3.89-3.5,7.8-5.28,11.68a5.53,5.53,0,0,1-9.68,1.09A13.66,13.66,0,0,1,35,120.52c-4.77-14.21-12.35-27.06-19.62-40-5.07-9-9.77-18.2-12.59-28.13C-.75,39.72-1.63,26.93,4.32,14.62a35.18,35.18,0,0,1,6.19-9.16A17.46,17.46,0,0,1,31.8,2.27c9,5.18,16.1,11.83,18.41,22.46A28.62,28.62,0,0,0,51.31,27.71ZM47.89,50.89c-.61-.76-1.68-1.52-2-2.51-1.31-4.67-3.16-9.37-3.4-14.12-.46-9.08-4.81-15.65-11.4-21.2-5.58-4.71-10.79-4-15.29,2C11.1,21.33,10,28.51,10.39,36.13c.46,9.64,3.68,18.52,8,26.95,6.1,12,12.57,23.76,19,35.52,1.45,2.64,2.07,5.9,5.69,8.77.67-1.22,1.14-2.25,1.76-3.18,4.46-6.62,8.9-13.26,13.43-19.83S67.79,71.45,72,64.67c5-8,9.38-16.4,11.76-25.61,1.13-4.4,2.51-9,2.27-13.44-.51-9.44-5.55-12.23-13.72-7A32.7,32.7,0,0,0,61.14,31.37c-2.6,5.07-5,10.27-7.12,15.55C52.87,49.79,51,50.86,47.89,50.89Z"></path> <path class="cls-1" d="M47.89,50.89c3.11,0,5-1.1,6.13-4,2.13-5.28,4.52-10.48,7.12-15.55A32.7,32.7,0,0,1,72.33,18.65c8.17-5.26,13.21-2.47,13.72,7,.24,4.44-1.14,9-2.27,13.44C81.4,48.27,77,56.67,72,64.67c-4.23,6.78-9.18,13.11-13.73,19.69s-9,13.21-13.43,19.83c-.62.93-1.09,2-1.76,3.18-3.62-2.87-4.24-6.13-5.69-8.77-6.48-11.76-12.95-23.54-19-35.52-4.29-8.43-7.51-17.31-8-26.95C10,28.51,11.1,21.33,15.84,15c4.5-6,9.71-6.69,15.29-2,6.59,5.55,10.94,12.12,11.4,21.2.24,4.75,2.09,9.45,3.4,14.12C46.21,49.37,47.28,50.13,47.89,50.89Z"></path> </g> </g> </g></svg>
        </div>
        <div id="groom" class="flex flex-col justify-center">
          <img class="w-80" src="/images/groom.png" alt="" data-aos="fade-up">
          <p class="font-[adlery-pro] text-4xl mt-4" data-aos="fade-bottom" data-aos-duration="500">{{ $detailUndangan->groom_name }}</p>
          <p data-aos="fade-up">{{ $detailUndangan->groom_parent_text }}</p>
        </div>
      </div>
    </section>
    <section id="schedule" class="main-theme-section">
      <img class="relative left-[50%] !-translate-x-[50%] w-60" src="/images/bismillah.png" alt="" data-aos="zoom-in">
      <div class="my-8 text-center" data-aos="zoom-in">
        <p>Kami mengundang Bapak/Ibu/Saudara/i, untuk menghadiri Resepsi Pernikahan</p>
      </div>
      <span id="brideSchedule">
        <div class="flex flex-col md:flex-row justify-center place-items-center">
          <div class="event-card w-72 h-42 p-8 flex flex-col justify-center">
            <p class="font-[adlery-pro] text-4xl my-4" data-aos="fade-bottom" data-aos-duration="500">Akad Nikah</p>
            <div class="w-full flex place-items-center justify-center mb-2">
              <img class="w-8 mr-3" src="{{ asset('icons/calendar.svg') }}" alt="" data-aos="zoom-in">
              <p data-aos="zoom-in"><span class="eventDateAkad"></span></p>
            </div>
            <div class="w-full flex place-items-center justify-center">
              <img class="w-8 mr-3" src="{{ asset('icons/clock.svg') }}" alt="" data-aos="zoom-in">
              <p data-aos="zoom-in">
                @php
                  $timeStartAkad = date('H.i', strtotime($detailUndangan->time_akad_start));
                  $timeZone = date('T');
                  $timeEndAkad = $detailUndangan->time_akad_end ? date('H.i', strtotime($detailUndangan->time_akad_end)) : 'Selesai';
                  echo $timeStartAkad.' - '.$timeEndAkad.' '.$timeZone;
                @endphp
              </p>
            </div>
          </div>
          <div class="my-6 md:mx-2">
            <add-to-calendar-button
              id="addCalendarBride"
              data-aos="zoom-in"
              class="mx-auto"
              styleLight="--btn-background: var(--primary); --btn-text: var(--secondary); --font: milk-tea;"
              buttonStyle="text"
              name="Wedding of {{ $detailUndangan->bride_name }} &amp; {{ $detailUndangan->groom_name }}"
              description="Acara 'Akad &amp; Resepsi' pernikahan {{ $detailUndangan->bride_name }} &amp; {{ $detailUndangan->groom_name }}"
              options="'Apple','Google','Outlook.com','Yahoo'"
              startDate="{{ date('Y-m-d', strtotime($detailUndangan->date_akad)) }}"
              startTime="{{ date('Y-m-d', strtotime($detailUndangan->time_akad_start)) }}"
              endTime="{{ date('Y-m-d', strtotime($detailUndangan->time_resepsi_end)) }}"
              timeZone="Asia/Jakarta"
              listStyle="overlay"
            ></add-to-calendar-button>
          </div>
          <div class="event-card w-72 h-42 p-8 flex flex-col justify-center">
            <p class="font-[adlery-pro] text-4xl my-4" data-aos="fade-bottom" data-aos-duration="500">Resepsi</p>
            <div class="w-full flex place-items-center justify-center mb-2">
              <img class="w-8 mr-3" src="{{ asset('icons/calendar.svg') }}" alt="" data-aos="zoom-in">
              <p data-aos="zoom-in"><span class="eventDateResepsi"></span></p>
            </div>
            <div class="w-full flex place-items-center justify-center">
              <img class="w-8 mr-3" src="{{ asset('icons/clock.svg') }}" alt="" data-aos="zoom-in">
              <p data-aos="zoom-in">
                @php
                  $timeStartResepsi = date('H.i', strtotime($detailUndangan->time_resepsi_start));
                  $timeZoneResepsi = date('T');
                  $timeEndResepsi = $detailUndangan->time_resepsi_end ? date('H.i', strtotime($detailUndangan->time_resepsi_end)) : 'Selesai';
                  echo $timeStartResepsi.' - '.$timeEndResepsi.' '.$timeZone;
                @endphp
              </p>
            </div>
          </div>
        </div>
        <p class="text-2xl font-extrabold my-4" data-aos="zoom-in">Lokasi</p>
        <div class="w-full flex flex-col md:flex-row place-items-center justify-center mb-14" data-aos="zoom-in">
          <img class="w-8 mb-2 md:mb-0 md:mr-3" src="{{ asset('icons/house.svg') }}" alt="">
          <p>{{ $detailUndangan->address_akad }}</p>
        </div>
      </span>
      <span id="groomSchedule">
        <div class="flex flex-col md:flex-row justify-center place-items-center">
          <div class="event-card w-72 h-42 p-8 flex flex-col justify-center">
            <p class="font-[adlery-pro] text-4xl my-4" data-aos="fade-bottom" data-aos-duration="500">Ngunduh Mantu</p>
            <div class="w-full flex place-items-center justify-center mb-2">
              <img class="w-8 mr-3" src="{{ asset('icons/calendar.svg') }}" alt="" data-aos="zoom-in">
              <p data-aos="zoom-in"><span class="eventDateUnduhmantu"></span></p>
            </div>
            <div class="w-full flex place-items-center justify-center">
              <img class="w-8 mr-3" src="{{ asset('icons/clock.svg') }}" alt="" data-aos="zoom-in">
              <p data-aos="zoom-in">
                @php
                  $timeStart = date('H.i', strtotime($detailUndangan->time_unduhmantu_start));
                  $timeZone = date('T');
                  $timeEnd = $detailUndangan->time_unduhmantu_end ? date('H.i', strtotime($detailUndangan->time_unduhmantu_end)) : 'Selesai';
                  echo $timeStart.' - '.$timeEnd.' '.$timeZone;
                @endphp
              </p>
            </div>
            <span class="mx-auto">
              <add-to-calendar-button
                id="addCalendarGroom"
                data-aos="zoom-in"
                styleLight="--btn-background: var(--primary); --btn-text: var(--secondary); --font: milk-tea;"
                buttonStyle="text"
                name="Wedding of {{ $detailUndangan->groom_name }} &amp; {{ $detailUndangan->bride_name }}"
                description="Acara 'Ngunduh Mantu' pernikahan {{ $detailUndangan->groom_name }} &amp; {{ $detailUndangan->bride_name }}"
                options="'Apple','Google','Outlook.com','Yahoo'"
                startDate="{{ date('Y-m-d', strtotime($detailUndangan->date_unduhmantu)) }}"
                startTime="{{ date('Y-m-d', strtotime($detailUndangan->time_unduhmantu_start)) }}"
                endTime="{{ date('Y-m-d', strtotime($detailUndangan->time_unduhmantu_end)) }}"
                timeZone="Asia/Jakarta"
                listStyle="overlay"
              ></add-to-calendar-button>
            </span>
          </div>
        </div>
        <p class="text-2xl font-extrabold my-4" data-aos="zoom-in">Lokasi</p>
        <div class="w-full flex flex-col md:flex-row place-items-center justify-center mb-8" data-aos="zoom-in">
          <img class="w-8 mb-2 md:mb-0 md:mr-3" src="{{ asset('icons/house.svg') }}" alt="">
          <p>{{ $detailUndangan->address_unduhmantu }}</p>
        </div>
      </span>
    </section>
    <section id="location" class="main-theme-section -mt-10 -mb-20 md:-mt-0 md:-mb-0"> 
      <div class="flex flex-col justify-center place-items-center">
        <p class="font-[adlery-pro] text-4xl my-4" data-aos="fade-bottom" data-aos-duration="500">Peta Lokasi Acara</p>
        <div id="map" class="h-[500px] w-full md:w-[80%]"></div>
      </div>
    </section>
    <section id="prayer" class="main-theme-section -mt-10">
      <div class="flex flex-col justify-center place-items-center">
        <p class="text-xl" data-aos="zoom-in">
          "Semoga Allah menghimpun yang  terserak dari keduanya, memberkati mereka berdua  dan kiranya Allah meningkatkan kualitas keturunan mereka, menjadikannya pembuka pintu rahmat, sumber ilmu dan hikmah, serta pemberi rasa aman bagi umat"
        </p>
        <p class="text-xl" data-aos="zoom-in">( Doa Nabi Muhammad pada pernikahan putrinya, Fatimah Azzahra dengan Ali Bin Abi Thalib )</p>
        <div class=" bg-sky-300 p-4 w-full md:w-[60%] rounded-lg mt-4 text-xl" data-aos="fade-up">
          Merupakan suatu kehormatan dan kebahagiaan bagi kami sekeluarga apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu  kepada kedua mempelai. Atas kehadiran serta doa restu, Kami ucapkan terimakasih.
        </div>
      </div>
    </section>
  </div>
  <div id="nav" class="w-full rounded-t-[2rem] fixed bottom-0 bg-[#EBE8E2] shadow-lg z-[9999] hidden slide-in-bottom">
    <ul class="h-auto py-2 flex justify-around place-items-center">
      <li>
        <button onclick="scrollToDiv('cover')">
          <img src="{{ asset('icons/house-nav.svg') }}" alt="" class="w-10 hover:animate-bounce nav-item">
        </button>
      </li>
      <li>
        <button onclick="scrollToDiv('date')">
          <img src="{{ asset('icons/calendar-nav.svg') }}" alt="" class="w-10 hover:animate-bounce nav-item">
        </button>
      </li>
      <li>
        <button onclick="scrollToDiv('brideAndGroom')">
          <img src="{{ asset('icons/heart-nav.svg') }}" alt="" class="w-10 hover:animate-bounce nav-item">
        </button>
      </li>
      <li>
        <button onclick="scrollToDiv('schedule')">
          <img src="{{ asset('icons/clock-nav.svg') }}" alt="" class="w-10 hover:animate-bounce nav-item">
        </button>
      </li>
      <li>
        <button onclick="scrollToDiv('location')">
          <img src="{{ asset('icons/map-nav.svg') }}" alt="" class="w-10 hover:animate-bounce nav-item">
        </button>
      </li>
    </ul>
  </div>
  <div id="audioFab" class="fixed top-[50%] w-[60px] h-[60px] rounded-[50%] heartbeat hidden z-[1000]">
    <button class="flex justify-center items-center w-full h-full rounded-[50%] bg-[#EBE8E2] text-white z-[1000] shadow-2xl">
      <img src="{{ asset('icons/music-note.svg') }}" class="w-8"/>
    </button>
  </div>
  <audio id="backsound" loop>
    <source src="{{ $detailUndangan->getFirstMediaUrl('undanganDetailBacksound') }}" type="{{ $detailUndangan->mime_type }}">
  </audio>
</div>

<script type="module">
  if (history.scrollRestoration) {
      history.scrollRestoration = 'manual';
  } else {
      window.onbeforeunload = function () {
          window.scrollTo(0, 0);
      }
  }

  //Map
  // config map
  let config = {
      minZoom: 7,
      maxZoom: 18
  };
  // magnification with which the map will start
  const zoom = 12;
  // co-ordinates
  const latView = {{ (trim(explode(',', $detailUndangan->map_akad_latlng)[0]) + trim(explode(',', $detailUndangan->map_unduhmantu_latlng)[0])) / 2 }};
  const lngView = {{ (trim(explode(',', $detailUndangan->map_akad_latlng)[1]) + trim(explode(',', $detailUndangan->map_unduhmantu_latlng)[1])) / 2 }};
  const lat1 = {{ trim(explode(',', $detailUndangan->map_akad_latlng)[0]) }};
  const lng1 = {{ trim(explode(',', $detailUndangan->map_akad_latlng)[1]) }};
  const lat2 = {{ trim(explode(',', $detailUndangan->map_unduhmantu_latlng)[0]) }};
  const lng2 = {{ trim(explode(',', $detailUndangan->map_unduhmantu_latlng)[1]) }};

  // calling map
  const map = L.map("map", config).setView([latView, lngView], zoom);

  // Used to load and display tile layers on the map
  // Most tile servers require attribution, which you can set under `Layer`
  L.tileLayer("http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}", {
  subdomains:['mt0','mt1','mt2','mt3']
  }).addTo(map);

  // add marker
  const house1 = L.icon({
      iconUrl: "{{ asset('icons/house-1.svg') }}",
      iconSize: [48, 48],
      iconAnchor: [30, 15],
  });

  const house2 = L.icon({
      iconUrl: "{{ asset('icons/house-2.svg') }}",
      iconSize: [48, 48],
      iconAnchor: [30, 15],
  });

  const htmlPopup1 = `
      <div class="flex flex-col justify-center">
          <p><Strong>Lokasi Akad & Resepsi</Strong></p>
          <a href="https://goo.gl/maps/5kccbJ7nTCEnARqq8"  target="_blank" class="flex justify-center border border-[navy] hover:bg-slate-100 hover:text-gray-700 py-1 px-2 rounded items-center">
              <img class="mr-2" src="/icons/map.svg" width="15" alt="">
              GoogleMap
          </a>
      </div>
  `;

  const htmlPopup2 = `
      <div class="flex flex-col justify-center">
          <p><Strong>Lokasi Ngunduh Mantu</Strong></p>
          <a href="https://goo.gl/maps/MtJyM7Ttvo5hnPAq8"  target="_blank" class="flex justify-center border border-[navy] hover:bg-slate-100 hover:text-gray-700 py-1 px-2 rounded items-center">
              <img class="mr-2" src="/icons/map.svg" width="15" alt="">
              GoogleMap
          </a>
      </div>
  `;

  // Url Params
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const yth = urlParams.get('yth');
  const m = urlParams.get('m');

  if (yth) {
      document.getElementById('yth').innerHTML = `
          <p>Kepada Yth. Bapak/Ibu/Sdr/i</p>
          <p><u>${yth}</u></p>
      `;
  } else {
      document.getElementById('yth').innerHTML = `
          <p>Kepada Yth. Bapak/Ibu/Sdr/i</p>
          <p>____________________</p>
      `;
  }

  if (m == '2') {
      document.getElementById('figure1').classList.remove('!-scale-x-100');
      document.getElementById('figure2').classList.remove('!-scale-x-100');

      document.getElementById('coupleName').classList.remove('flex-col', 'xs:flex-row');

      document.getElementById('brideName').classList.remove('slide-in-left');
      document.getElementById('brideName').classList.add('slide-in-right');
      
      document.getElementById('groomName').classList.remove('slide-in-right');
      document.getElementById('groomName').classList.add('slide-in-left');
      
      document.getElementById('coupleFigure').classList.remove('flex-col', 'md:flex-row');
      document.getElementById('coupleFigure').classList.add('flex-col-reverse');

      document.getElementById('brideSchedule').classList.add('hidden');

      document.getElementById('addCalendarGroom').setAttribute('location', `${lat2}, ${lng2}`);

      map.setView([lat2, lng2], 18);
      L.marker([lat2, lng2], { icon: house2 }).bindPopup(htmlPopup2, { closeOnClick: false, autoClose: false }).on("add", function (event) {
          event.target.openPopup();
      }).addTo(map);
  } else if (m == '1') {
      document.getElementById('coupleName').classList.remove('flex-col-reverse', 'xs:flex-row-reverse');
      document.getElementById('coupleFigure').classList.remove('md:flex-row-reverse');
      document.getElementById('groomSchedule').classList.add('hidden');

      document.getElementById('addCalendarBride').setAttribute('location', `${lat1}, ${lng1}`);

      map.setView([lat1, lng1], 18);
      L.marker([lat1, lng1], { icon: house1 }).bindPopup(htmlPopup1, { closeOnClick: false, autoClose: false }).on("add", function (event) {
          event.target.openPopup();
      }).addTo(map);
  } else {
      document.getElementById('coupleName').classList.remove('flex-col-reverse', 'xs:flex-row-reverse');
      document.getElementById('coupleFigure').classList.remove('md:flex-row-reverse');

      document.getElementById('addCalendarBride').setAttribute('location', `${lat1}, ${lng1}`);
      document.getElementById('addCalendarGroom').setAttribute('location', `${lat2}, ${lng2}`);

      L.marker([lat1, lng1], { icon: house1 }).bindPopup(htmlPopup1, { closeOnClick: false, autoClose: false }).on("add", function (event) {
          event.target.openPopup();
      }).addTo(map);
      L.marker([lat2, lng2], { icon: house2 }).bindPopup(htmlPopup2, { closeOnClick: false, autoClose: false }).on("add", function (event) {
          event.target.openPopup();
      }).addTo(map);
  }

  //Audio
  let audio = document.getElementById("backsound");
  document.getElementById("audioFab").addEventListener("click", function () {
      if (audio.paused) {
          audio.play();
          document.getElementById("audioFab").classList.add("heartbeat");
      } else {
          audio.pause();
          document.getElementById("audioFab").classList.remove("heartbeat");
      }
  });

  //Button Open
  const btnOpen = document.getElementById('btnOpen');
  btnOpen.addEventListener('click', () => {
      AOS.init({
          duration: 1000,
      });
      
      document.getElementById('mail-icon').classList.add('rotate-center');
      setTimeout(() => {
          audio.play();
          document.getElementById('audioFab').classList.remove('hidden');
          document.querySelector(':root').style.setProperty('overflow-y', 'scroll');
          document.getElementById('date').scrollIntoView();
          document.getElementById('nav').style.display = 'block';
          document.getElementById('btnOpen').style.display = 'none';
      }, 2000);
  });

  //Event Date
  let eventDateAkad = new Date(Date.parse("{{ $detailUndangan->date_akad }} {{ $detailUndangan->time_akad_start }}"));
  let eventDateResepsi = new Date(Date.parse("{{ $detailUndangan->date_resepsi }} {{ $detailUndangan->time_resepsi_start }}"));
  let eventDateUnduhmantu = new Date(Date.parse("{{ $detailUndangan->date_unduhmantu }} {{ $detailUndangan->time_unduhmantu_start }}"));

  const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  document.getElementsByClassName('eventDateAkad')[0].innerHTML = eventDateAkad.toLocaleDateString('id-ID', options);
  document.getElementsByClassName('eventDateResepsi')[0].innerHTML = eventDateResepsi.toLocaleDateString('id-ID', options);
  document.getElementsByClassName('eventDateUnduhmantu')[0].innerHTML = eventDateUnduhmantu.toLocaleDateString('id-ID', options);
  
  //Countdown Event
  const countDownDate = m == '2' ? eventDateUnduhmantu.getTime() : eventDateAkad.getTime();
  setInterval(() => {
      let now = new Date().getTime();
      let distance = countDownDate - now;
      let days = Math.floor(distance / (1000 * 60 * 60 * 24));
      let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((distance % (1000 * 60)) / 1000);
      document.getElementById("days").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;
  }, 1000);

  window.scrollToDiv = function (div) {
      document.getElementById(div).scrollIntoView()
  }
</script>