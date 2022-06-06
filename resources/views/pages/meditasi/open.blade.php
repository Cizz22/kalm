{{-- Hajdah Aleyda --}}

@extends('layouts.layout')

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" type="image/png"
        href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
    <meta name="apple-mobile-web-app-title" content="CodePen">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg"
        color="#111">
    <title>CodePen - Music Player</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<div class="player">
    <a href="{{route('meditasi.home')}}"><button type="button" class="btn-close" aria-label="Close"></button></a>
    <div class="cover">
        <img src="https://hosseinghanbari.ir/other/music-player/autumn.jpg" alt="">
    </div>
    <div class="info">
        <div class="title">Autumn</div>
        <div class="singer">Instrumental Music</div>
    </div>
    <div class="volume-box">
        <span class="volume-down"><i class="material-icons">remove</i></span>
        <input type="range" class="volume-range" step="1" value="80" min="0" max="100"
            oninput="music.volume = this.value/100">
        <span class="volume-up"><i class="material-icons">add</i></span>
    </div>
    <div class="btn-box">
        <i class="material-icons repeat" onclick="handleRepeat()">repeat</i>
        <i class="material-icons favorite active" onclick="handleFavorite()">favorite</i>
        <i class="material-icons volume" onclick="handleVolume()">volume_up</i>
    </div>
    <div class="music-box">
        <input type="range" step="1" class="seekbar" value="0" min="0" max="100" oninput="handleSeekBar()">

        <audio class="music-element">
            <source src="https://hosseinghanbari.ir/other/music-player/autumn.mp3" type="audio/mp3">
        </audio>
        <span class="current-time">0:00</span><span class="duration">1:20</span>
        <div class ="d-flex justify-content-evenly" style="margin-top: 20px">
            <span class="previous">
                <i class="material-icons">skip_previous</i>
            </span>
            <span class="play" onclick="handlePlay()">
                <i class="material-icons" >play_arrow</i>
            </span>
            <span class="next">
                <i class="material-icons">skip_next</i>
            </span>
        </div>
    </div>
</div>
<script>
    // player
    var music = document.querySelector('.music-element')
    var playBtn = document.querySelector('.play')
    var seekbar = document.querySelector('.seekbar')
    var currentTime = document.querySelector('.current-time')
    var duration = document.querySelector('.duration')

    function handlePlay() {
        if (music.paused) {
            music.play();
            playBtn.className = 'pause'
            playBtn.innerHTML = '<i class="material-icons">pause</i>'
        } else {
            music.pause();
            playBtn.className = 'play'
            playBtn.innerHTML = '<i class="material-icons">play_arrow</i>'
        }
        music.addEventListener('ended', function() {
            playBtn.className = 'play'
            playBtn.innerHTML = '<i class="material-icons">play_arrow</i>'
            music.currentTime = 0
        });
    }

    music.onloadeddata = function() {
        seekbar.max = music.duration
        var ds = parseInt(music.duration % 60)
        var dm = parseInt((music.duration / 60) % 60)
        duration.innerHTML = dm + ':' + ds
    }
    music.ontimeupdate = function() {
        seekbar.value = music.currentTime
    }
    handleSeekBar = function() {
        music.currentTime = seekbar.value
    }
    music.addEventListener('timeupdate', function() {
        var cs = parseInt(music.currentTime % 60)
        var cm = parseInt((music.currentTime / 60) % 60)
        currentTime.innerHTML = cm + ':' + cs
    }, false)


    // like
    var favIcon = document.querySelector('.favorite')

    function handleFavorite() {
        favIcon.classList.toggle('active');
    }


    // repeat
    var repIcon = document.querySelector('.repeat')

    function handleRepeat() {
        if (music.loop == true) {
            music.loop = false
            repIcon.classList.toggle('active')
        } else {
            music.loop = true
            repIcon.classList.toggle('active')
        }
    }

    // volume
    var volIcon = document.querySelector('.volume')
    var volBox = document.querySelector('.volume-box')
    var volumeRange = document.querySelector('.volume-range')
    var volumeDown = document.querySelector('.volume-down')
    var volumeUp = document.querySelector('.volume-up')

    function handleVolume() {
        volIcon.classList.toggle('active')
        volBox.classList.toggle('active')
    }

    volumeDown.addEventListener('click', handleVolumeDown);
    volumeUp.addEventListener('click', handleVolumeUp);

    function handleVolumeDown() {
        volumeRange.value = Number(volumeRange.value) - 20
        music.volume = volumeRange.value / 100
    }

    function handleVolumeUp() {
        volumeRange.value = Number(volumeRange.value) + 20
        music.volume = volumeRange.value / 100
    }
</script>
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/layouts/open.css') }}">
@endsection
