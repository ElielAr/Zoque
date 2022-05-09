var holding = false;
var track = document.getElementById('track');
var progress = document.getElementById('progress');
var play = document.getElementById('play');
var next = document.getElementById('next');
var prev = document.getElementById('prev');
var title = document.getElementById('title');
var artist = document.getElementById('artist');
var art = document.getElementById('art');
var current_track = 0;
var song, audio, duration;
var playing = false;
// SE CREA EL ARREGLO DE AUDIOS Y IMG
var songs = [{
    title: 'Uno/Tumo',
    artist: ' ',
    url: '../audio/numeros/1.mp3',
    art: '../img/Numeros/1.png'
},
    
{
    title: 'Dos/Metza',
    artist: '',
    url: '../audio/numeros/2.mp3',
    art: '../img/Numeros/2.png'
},

{
    title: 'Tres/Tukay',
    artist: '',
    url: '../audio/numeros/3.mp3',
    art: '../img/Numeros/3.png'
},
{
    title: 'Cuatro/Majksykuy',
    artist: '',
    url: '../audio/numeros/4.mp3',
    art: '../img/Numeros/4.png'
},
{
    title: 'Cuatro/Mojsay',
    artist: '',
    url: '../audio/numeros/5.mp3',
    art: '../img/Numeros/5.png'
},
{
    title: 'Cuatro/Tujtay',
    artist: '',
    url: '../audio/numeros/6.mp3',
    art: '../img/Numeros/6.png'
},
{
    title: 'Cuatro/Kuyay',
    artist: '',
    url: '../audio/numeros/7.mp3',
    art: '../img/Numeros/7.png'
},
{
    title: 'Ocho/Tukurujtay',
    artist: '',
    url: '../audio/numeros/8.mp3',
    art: '../img/Numeros/8.png'
},
{
    title: 'Nueve/Majkstujtay',
    artist: '',
    url: '../audio/numeros/9.mp3',
    art: '../img/Numeros/9.png'
},
{
    title: 'Diez/Majkay',
    artist: '',
    url: '../audio/numeros/10.mp3',
    art: '../img/Numeros/10.png'
},
{
    title: 'Veinte/I psanh',
    artist: '',
    url: '../audio/numeros/11.mp3',
    art: '../img/Numeros/20.png'
},
{
    title: 'Treinta/I ps ko majk',
    artist: '',
    url: '../audio/numeros/12.mp3',
    art: '../img/Numeros/30.png'
},
{
    title: 'Cuarenta/Wastaki s',
    artist: '',
    url: '../audio/numeros/13.mp3',
    art: '../img/Numeros/40.png'
},
{
    title: 'Cincuenta/Wastajkiskomajk',
    artist: '',
    url: '../audio/numeros/14.mp3',
    art: '../img/Numeros/50.png'
},
{
    title: 'Sesenta/Tukis',
    artist: '',
    url: '../audio/numeros/15.mp3',
    art: '../img/Numeros/60.png'
},
{
    title: 'Setenta/Tukiskomajk',
    artist: '',
    url: '../audio/numeros/16.mp3',
    art: '../img/Numeros/70.png'
},
{
    title: 'Ochenta/Majtasis',
    artist: '',
    url: '../audio/numeros/17.mp3',
    art: '../img/Numeros/80.png'
},
{
    title: 'Noventa/Majtajsis ko majk',
    artist: '',
    url: '../audio/numeros/18.mp3',
    art: '../img/Numeros/90.png'
},
{
    title: 'Cien/Mojsis',
    artist: '',
    url: '../audio/numeros/19.mp3',
    art: '../img/Numeros/100.png'
}
];

window.addEventListener('load', init(), false);

function init() {
    song = songs[current_track];
    audio = new Audio();
    audio.src = song.url;
    title.textContent = song.title;
    artist.textContent = song.artist;
    art.src = song.art;
}


audio.addEventListener('timeupdate', updateTrack, false);
audio.addEventListener('loadedmetadata', function () {
    duration = this.duration;
}, false);
window.onmousemove = function (e) {
    e.preventDefault();
    if (holding) seekTrack(e);
}
window.onmouseup = function (e) {
    holding = false;
    console.log(holding);
}
track.onmousedown = function (e) {
    holding = true;
    seekTrack(e);
    console.log(holding);
}
play.onclick = function () {
    playing ? audio.pause() : audio.play();
}
audio.addEventListener("pause", function () {
    play.innerHTML = '<img class="pad" src="../img/play1.png" />';
    playing = false;
}, false);

audio.addEventListener("playing", function () {
    play.innerHTML = '<img src="../img/pause1.png" />';
    playing = true;
}, false);
next.addEventListener("click", nextTrack, false);
prev.addEventListener("click", prevTrack, false);


function updateTrack() {
    curtime = audio.currentTime;
    percent = Math.round((curtime * 100) / duration);
    progress.style.width = percent + '%';
    handler.style.left = percent + '%';
}

function seekTrack(e) {
    event = e || window.event;
    var x = e.pageX - player.offsetLeft - track.offsetLeft;
    percent = Math.round((x * 100) / track.offsetWidth);
    if (percent > 100) percent = 100;
    if (percent < 0) percent = 0;
    progress.style.width = percent + '%';
    handler.style.left = percent + '%';
    audio.play();
    audio.currentTime = (percent * duration) / 100
}
function nextTrack() {
    current_track++;
    current_track = current_track % (songs.length);
    song = songs[current_track];
    audio.src = song.url;
    audio.onloadeddata = function() {
      updateInfo();
    }
}

function prevTrack() {
    current_track--;
    current_track = (current_track == -1 ? (songs.length - 1) : current_track);
    song = songs[current_track];
    audio.src = song.url;
    audio.onloadeddata = function() {
      updateInfo();
    }
}

function updateInfo() {
    title.textContent = song.title;
    artist.textContent = song.artist;
    art.src = song.art;
    art.onload = function() {
        audio.play();
    }
}