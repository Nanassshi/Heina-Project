@extends('template')
@section('title', 'Навигация по серверу')
@section('content')
    <h1 class="neonH text-center" style="margin-bottom: 50px">Навигация по серверу</h1>

    <div id="rules" class="element-animation mx-auto col-sm-12">
        <div id="okno" class="col-sm-12">
            <h3>Правила сервера Hiena</h3>
            <p>-Запрещено нарушать тематику каналов</p>
            <p>-Запрещён флуд, спам, также злоупотребление капсом.</p>
            <p>-Запрещены грубые разбирательства и оскорбления грубого характера. Также беспричинное упоминание.</p>
            <p>-Запрещены деструктивные действия по отношению к серверу.</p>
            <p>-Запрещается реклама дискорд серверов, разных проектов и т.д.</p>
            <p>-Запрещается распространение порнографии и шок-контента.</p>
            <p>-Мы оставляем за собой право блокировать проблемных пользователей на сервере.</p>
            <p>-Запрещена пропаганда наркотиков, терроризма, материалов, содержащих сцены сексуального характера и троянов, читов, винлокеров, краш-гифок и т.д.</p>
            <p>-Запрещено намеренное копирование профилей (никнейм + аватарка), а также оскорбительные и провокационные никнеймы.</p>
            <h5 class="text-center">Соблюдая эти правила к вам не возникнет ни одного вопроса</h5>
            <a href="#" class="close" style="margin-top: 45px">Закрыть</a>
        </div>
    </div>

    <div id="roles" class="element-animation mx-auto col-sm-12">
            <div id="okno" class="col-sm-12" style="font-weight: lighter; font-size: 17px">
                <h3>Роли стаффа:</h3>
                <p class="mt-4"><span style="color: #6a1b21; text-shadow: 0 0 3px #6a1b21">Administrator</span> - глава сервера</p>
                <p><span style="color: #8f1c2a; text-shadow: 0 0 3px #8f1c2a;">Moderator</span> - основная модерация</p>
                <p><span style="color: #b51b33; text-shadow: 0 0 3px #b51b33;">Eventmaker</span> - ведущий ивентов и зумер сервера</p>
                <p><span style="color: #0d6ff0; text-shadow: 0 0 3px #0d6ff0;">Ultimate</span> - наши любимые спонсоры</p>
                <p><span style="color: #dc143c; text-shadow: 0 0 3px #dc143c;">Control</span> - младшая модерация</p>

                <h3 class="mt-4">Доп. роли:</h3>
                <p><span style="color: #cd6adb; text-shadow: 0 0 3px #cd6adb">booster</span> - роль за буст сервера</p>
                <p><span style="color: #ffdd70; text-shadow: 0 0 3px #ffdd70">godlike</span> - дается за яркое представление себя на ивентах</p>
                <p><span style="color:#00cc8e; text-shadow: 0 0 3px #00cc8e">&#127797; я кактус</span> - продается в магазине бота</p>
                <p><span style="color: #dbdada; text-shadow: 0 0 3px #dbdada">&#128049; meeow</span> - продается в магазине бота</p>
                <p><span style="color: #ac71f5; text-shadow: 0 0 3px #ac71f5">я сломаю твои нервы</span> - продается в магазине бота</p>
                <p><span style="color: #00ffb4; text-shadow: 0 0 3px #00ffb4">&#128176;・NoDamg</span> - ветвь продажи товаров</p>
                <p><span style="color:#9500ff; text-shadow: 0 0 3px #9500ff">&#127744;・ForGetFul</span> - ветвь общения и ивентов</p>
                <p style="font-size: small">И это еще не все)</p>
                <a href="#" class="close" style="font-weight: lighter">Закрыть</a>
            </div>
    </div>

    <div id="channels" class="element-animation mx-auto col-sm-12">
        <div id="okno" class="col-sm-12" style="font-weight: lighter; font-size: 20px">
            <h3>В общем:</h3>
            <p>Каналы с новостями и ивентами находятся в категории <span style="color: #cd6adb; text-shadow: 0 0 3px #cd6adb">news</span></p>
            <p>Переписываясь, скидывая мемы и играя в ботов, вы можете халявненько получиться рольки <span style="color: #cd6adb; text-shadow: 0 0 3px #cd6adb">за актив</span></p>
            <p>В войс каналах логика такая же, но новые роли будут давать <span style="color: #cd6adb; text-shadow: 0 0 3px #cd6adb">привилегии</span> по типу кастом каналов, преимущественное звучание и тп. Так что и там активничать не забывайте</p>
            <p>Также можно случайно получить <span style="color: #cd6adb; text-shadow: 0 0 3px #cd6adb">секретную роль</span>, листая сайт и сам сервер, как, например, на этой страничке</p>
            <p><span style="color: #cd6adb; text-shadow: 0 0 3px #cd6adb">Музыку</span> можно слушать в спец каналах для этого и в первой руме войсов, если кто-то не может поделить бота</p>
            <h5 class="mt-5">В принципе, на этом все. Простенько, не так ли?) Давай скорее заходи в войсик</h5>
            <a href="#" class="close" style="font-weight: lighter; margin-top: 115px ">Закрыть</a>
        </div>
    </div>

    <div class="row element-animation mx-auto">
        <div class="col-sm-12 col-lg-4 mt-4 mx-3" style="width: 400px">
            <h3 class="neonStatic" style="font-weight: lighter">Правила</h3>
            <p class="def-text">В общем-то, правила такие же, как и на других серверах. Но для исключение казусов рекомендую быстренько по ним
                <a class="neonText" href="#rules" style="text-decoration: none; color: #ffffff">пробежаться
                    <i class="fa-solid fa-arrow-pointer fa-2xs"></i>
                </a>
            </p>
        </div>
        <div class="col-12-sm col-lg-4 mt-4 mx-3" style="width: 400px">
            <h3 class="neonStatic" style="font-weight: lighter">Роли</h3>
            <p class="def-text">В первую очередь, для желающих поучаствовать в развитии сервера есть <span class="neonText"><a href="/staff" style="text-decoration: none; color: #ffffff">страница</a></span> для подачи заявки. Список основных ролей доступен по
                <a class="neonText" href="#roles" style="text-decoration: none; color: #ffffff">клику
                    <i class="fa-solid fa-arrow-pointer fa-2xs"></i>
                </a>
            </p>
        </div>
        <div class="col-sm-12 col-lg-4 mt-4 mx-3" style="width: 400px">
            <h3 class="neonStatic" style="font-weight: lighter">Каналы</h3>
            <p class="def-text">Все каналы можно посмотреть на самом сервере. Главное,чтобы их тематика не нарушалась, иначе придется использовать наказания против нарушителей.
                <br><a class="neonText" href="#channels" style="text-decoration: none; color: #ffffff">Кратко о каналах
                    <i class="fa-solid fa-arrow-pointer fa-2xs"></i>
                </a>
            </p>
        </div>
        <div class="element-animation">
            <p class="def-text" style="font-size: small; margin-left: 1000px">-приятного времяпровождения</p>
        </div>
        <a class="def-text text-center" style="text-decoration: none; color: #ffffff; font-size: medium; margin-top: 100px">Напиши админу в лс "прочитано-запомнено", чтобы получить особую рольку</a>
    </div>

    <hr style="color: palegreen; box-shadow: 0 0 10px palegreen; margin-top: 120px">


@endsection
