@extends('layouts.plantilla')

@section('contenido')
<div class="presentacion">  <!--Div Contenedor General-->
    <div class="producto-info">
        <div class="producto-texto">
            <h1> Verbos  Zoque  </h1>
            <br><br><br><br><br><br>
            <P> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolore voluptatibus,
            quae ea eaque nulla placeat excepturi rem ducimus nisi necessitatibus commodi reprehenderit ab mollitia modi explicabo cumque! Aspernatur, voluptatem!</P>
        </div>
        <div class="img">
            <img src="../img/Saludos/mapa_saludos.jpg"/>
        </div>
        
     </div>

        <div id="player">
            <img src="" class="cover" id="art" />
            <div class="trackinfo">
                <p id="title"></p>
                <p id="artist"></p>
            </div>
            <div id="track">
                <div id="progress"></div>
                <div id="handler"></div>
            </div>
            <div class="container">
                <div class="info">
                    <div class="cont">
                        <button id="prev" class="nav">
                            <img src="../img/prev1.jpg" />
                        </button>
                        <button id="play" class="nav">
                            <img class="pad" src="../img/play1.png" />
                        </button>
                        <button id="next" class="nav">
                            <img src="../img/next1.png" />
                        </button>
                    </div>
                </div>
            </div>
         </div>
         


    </div>

   
     <script  src="../js/saludos.js"></script>
@endsection