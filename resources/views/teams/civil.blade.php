
@extends('index')

@section('content')

    @include('header')

    <div class="wrapper style1">
        <div id="titulo">
            <h2>{{Lang::get('equipo_civil.equipo')}}</h2>
        </div>
        <section class="carousel">
            <div class="reel">

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>

                <article>
                    <img src="images/gestion02.JPG" alt="" />
                </article>
            </div>
        </section>
        <div class="container">
            <div id="">
                <p>{{Lang::get('equipo_civil.motivacion')}}</p>
            </div>

            <div id="titulo">
                <h2>{{Lang::get('miscellaneous.miembros_equipo')}}</h2>
            </div>

            <div id="integrantes">
                <ul>
                    @for($i = 1; $i < Lang::get('equipo_civil.nintegrantes') + 1; $i++)
                        <li>{{Lang::get('equipo_civil.deca_'.$i.'.nombre')}} -
                            {{Lang::get('equipo_civil.deca_'.$i.'.cargo')}}</li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
    @endsection('content')