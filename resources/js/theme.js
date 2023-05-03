import 'aos/dist/aos.css';
import AOS from 'aos';

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
const zoom = 15;
// co-ordinates
const latView = -7.6652218919653174;
const lngView = 111.52301138609954;
const lat1 = -7.661064859371261;
const lng1 = 111.52460379909975;
const lat2 = -7.670388;
const lng2 = 111.520695;

// calling map
const map = L.map("map", config).setView([latView, lngView], zoom);

// Used to load and display tile layers on the map
// Most tile servers require attribution, which you can set under `Layer`
L.tileLayer("http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}", {
subdomains:['mt0','mt1','mt2','mt3']
}).addTo(map);

// add marker
const house1 = L.icon({
    iconUrl: 'icons/house-1.svg',
    iconSize: [48, 48],
    iconAnchor: [30, 15],
});

const house2 = L.icon({
    iconUrl: 'icons/house-2.svg',
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

//Countdown Event
const event = new Date(Date.UTC(2023, 5, 26, 8, 0, 0));
const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };

for (let i = 0; i < document.getElementsByClassName('event').length; i++) {
    document.getElementsByClassName('event')[i].innerHTML = event.toLocaleDateString('id-ID', options);
}

const countDownDate = new Date("Jun 26, 2023 08:00:00").getTime();
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