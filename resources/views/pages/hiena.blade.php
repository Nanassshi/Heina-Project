@extends('template')
@section('title', 'Hiena server')
@section('content')

        <div class="row mb-3 mx-a element-animation">
            <div class="col-sm-12 col-lg-8 mt-5">
                <h1 class="neonH">Что ж это за сервер такой?</h1>
                <p class="def-text">Сервер Hiena был создан далекой зимой 2022 года. Хотя всем все равно на историю сервера, но мб кто-то прочитает. Так вот, изначально здесь болтало около 5 человек, и все это выглядело, как обычная беседка каких-то задротов. Но однажды адмэна осинила гениальная мысль попробовать создать полноценный сервер, хотя вскоре забил на идею. Но летом 2022 года все таки начинает зарождаться проект, так как мне (овнеру) нечего было делать. Тратились часы работы, зачастую глупой, так как для меня все это было впервые. И попотев, к концу лета получил сервачок с 800+ участниками, которые выдавали актив побольше, чем тысячники-сервера. Но началась осень и админчику бедному, как и большенству другому, пришлось начать учиться. И так проект был заброшен. Нооооо сейчас снова наступает лето и это значит, что снова будет что-то мутиться вокруг сервера. <span style="color: dimgrey; font-size: xx-small; margin-left: 100px">Пиши админу в лс, если кринжанул)</span></p>
            </div>
            <div class="col-sm-12 col-lg-4 mt-5">
                <img class="img-fluid img-border" style=" border: 1px solid #a553f6; box-shadow: 3px 1px 25px 3px #a553f6;" src="https://sun9-49.userapi.com/impg/8JT1TgbLpmwwYUNJXlckxWGh3RkDXFY4pieAdQ/E7Q6jjNCXC4.jpg?size=1080x949&quality=95&sign=929c374faa7289ba88d65e63cd3d02fa&type=album">
            </div>
        </div>

        <div class="row element-animation" style="margin-top: 100px">
            <div class="col-sm-12 col-lg-4">
                <img class="img-fluid img-border" style="box-shadow: 1px 1px 15px 8px #ffffff; border: 0px solid #ffffff" src="https://sun9-50.userapi.com/impg/iXYi5_aGsrIe_Dv6A2wJZ3d5oy5d9nX9UhGhng/laj2xZWpoFw.jpg?size=659x587&quality=95&sign=382d6b5778d09ed648281536e6cb4c77&type=album">
            </div>
            <div class="col-sm-12 col-lg-8">
                <h1 class="neonH">Для чего создан сайт Hiena?</h1>
                <p class="def-text">В общем, здесь ты можешь найти абсолютно всю <span class="neonText"><a href="/serverMap" style="text-decoration: none; color: #ffffff">информацию</a></span> о сервере и делишках, происходящих на нем. Также здесь размещен <span class="neonText"><a href="/stock" style="text-decoration: none; color: #ffffff">склад</a></span> товаров, где можешь найти и приобрести рольки, приват. каналы, nitro, chat gpt, vpn'ы и всякой другой всячины. Если у вас есть идеи или предложения, то вам <span class="neonText"><a href="/partnership" style="text-decoration: none; color: #ffffff">сюда</a></span>. Кроме этого, <span class="neonText"><a href="/serverMap" style="text-decoration: none; color: #ffffff">карту</a></span> сервера и <span class="neonText"><a href="/staff" style="text-decoration: none; color: #ffffff">заявки в стафф</a></span>(команду сервера) можно найти в боковом меню. Также есть ссылочка на <span class="neonText"><a href="https://boosty.to/naibu" style="text-decoration: none; color: #ffffff">boosty</a></span>, где ты можешь оставить свои кровные и получить интересные плюшки. Короч, ищи здесь секретки, получай за это рольки и просматривай весь новый контент (не просто так же я создавал этот сайт).<br><br><br> Приятнейшего времяпровождения и удачи!</p>
            </div>
        </div>

        <div class="col-sm-12 col-lg-6 mx-auto element-animation" style="margin-top: 130px">
            <h1 class="neonStatic text-center mb-5" style="font-weight: lighter">Отзывы о проекте</h1>
            @auth()
                <form action="/addReview" method="POST">
                    @csrf
                    <textarea name="review" class="form-control review-form" placeholder="Опишите свои впечатления..."></textarea>
                    <input type="submit" class="review-btn mt-3" style="width: 100%" value="Оставить отзыв">
                </form>
            @else
                <p class="text-muted text-center" style="font-weight: lighter; font-size: 20px">Для добавления отзыва необходимо
                    <a href="/register" class="text-muted" style="text-decoration: none;">авторизоваться </a><i class="fa-solid fa-arrow-pointer fa-2xs"></i></p>
            @endauth

            <div class="col-sm-12 col-lg-10 mx-auto" style="margin-top: 50px">
                @foreach($reviews as $review)
                    <div class="card review mt-4" style="background-color: rgba(11,14,27, .9)">
                        <div class="card-header" style="border-bottom: 1px solid #8446c2; box-shadow: 0 0 2px 1px #8446c2;">
                            <img style="border-radius: 10%; height: 70px; width: 70px" src="{{$review->avatar}}">
                            <a>{{$review->nickname}}</a>
                        </div>
                        <div class="card-body">
                            <p class="card-text m-0">{{$review->review}}</p>
                        </div>
                        <a class="text-muted text-end me-2 mb-2" style="text-decoration: none; font-size: x-small">{{$review->created_at}}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <hr style="color: #ba14b6; box-shadow: 0 0 10px #ab42d2; margin-top: 60px">
@endsection
