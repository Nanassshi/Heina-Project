@extends('template')
@section('title', 'Подать заявку в стафф')
@section('content')
    <h1 class="neonH text-center element-animation">Подать заявку в стафф</h1>
    <div class="row mt-5 element-animation">
        <div class="col-sm-12 col-lg-4" style="font-weight: lighter; font-size: 30px">
            <h3 class="neonH mb-4">Рольки стаффа(команды сервера):</h3>
            <a href="#developer" style="text-decoration: none"><span style="color:#00cc8e; text-shadow: 0 0 15px #00cc8e;">Developer</span></a><br>
            <a href="#moderator" style="text-decoration: none"><span style="color: #8f1c2a; text-shadow: 0 0 15px #8f1c2a;">Moderator</span></a><br>
            <a href="#eventmaker" style="text-decoration: none"><span style="color: #b51b33; text-shadow: 0 0 15px #b51b33">Eventmaker</span></a><br>
            <a href="#ultimate" style="text-decoration: none"><span style="color: #0d6ff0; text-shadow: 0 0 15px #0d6ff0;">Ultimate</span></a><br>
            <a href="#control" style="text-decoration: none"><span style="color: #dc143c; text-shadow: 0 0 15px #dc143c;">Control</span></a><br>
        </div>

        <div class="col-sm-12 col-lg-4">
            <div id="developer" class="element-animation mx-auto mt-5">
                <div id="info">
                    <p class="def-text">
                        Единсвтенный и самый главный за заднюю часть сервера - разработчик. Ему поручается настраивать ботов, фиксить их и возможно разрабатывать новых
                    </p><hr style="box-shadow: white 0 0 5px; color: white">
                </div>
            </div>

            <div id="moderator" class="element-animation mx-auto mt-5">
                <div id="info">
                    <p class="def-text">
                        Как ясно из название - модерирует каналы. Должен знать правила на зубок и быть добродушным человеком с ответственностью. Условие взятие на роль - быть участником больше 3 недель и иметь немаленький актив
                    </p><hr style="box-shadow: white 0 0 5px; color: white">

                </div>
            </div>

            <div id="eventmaker" class="element-animation mx-auto mt-5">
                <div id="info">
                    <p class="def-text">
                        Веселый и интересный чувачок, любящий общение и игры. Проводит различные мини-игры и ивенты. Таким не стать, таким надо быть. Ну либо сами напрашивайтесь, либо вас все равно найдут
                    </p><hr style="box-shadow: white 0 0 5px; color: white">
                </div>
            </div>

            <div id="ultimate" class="element-animation mx-auto mt-5">
                <div id="info">
                    <p class="def-text">
                        Ох уж эти алигархи... Ну плохого не скажешь про спонсоров сервера( да-да, это роль спонсора). Чтобы быть на этой роли нужно либо иметь много бумажных, либо вкладывать контент на сервер
                    </p><hr style="box-shadow: white 0 0 5px; color: white">
                </div>
            </div>

            <div id="control" class="element-animation mx-auto mt-5">
                <div id="info">
                    <p class="def-text">
                        Самая тяжкая работа для модератора - быть контролом xd. На самом деле, вы просто должны контролировать чат и войс каналы и решать проблемы мирным путем(в крайнем случае тайм-аутом). Нужно лишь немного поактивить, чтобы стать контролом с возможностью повышения
                    </p><hr style="box-shadow: white 0 0 5px; color: white">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <p class="def-text mt-5 text-center" style="color: dimgrey; font-weight: lighter">
                Нажми на интересующую тебя роль, чтобы узнать про нее
            </p>
            <p class="def-text" style="color: dimgrey; font-weight: lighter">
                В заявке необходимо указать:
                <ul class="def-text" style="color:dimgrey; font-weight: lighter">
                    <li>Никнейм на сервере</li>
                    <li>Роль/должность, на которую подаете заявку</li>
                    <li>Возраст</li>
                    <li>Свои лучшие качества (почему мы должны вас взять?)</li>
                </ul>
            </p>
        </div>
    </div>
    <h3 class="neonText text-center mt-2 element-animation" style="font-weight: lighter">
        <a href="https://t.me/nanassshii" style="text-decoration: none; color: white">
            Подать заявку
            <i class="fa-solid fa-arrow-pointer fa-2xs"></i>
        </a>
    </h3>

    <hr style="color: hotpink; box-shadow: 0 0 10px hotpink; margin-top: 100px">

@endsection
