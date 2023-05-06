@extends('template')
@section('title', 'Профиль')
@section('content')
    <style>
        #nameChangeBtn, #aboutMeChangeBtn, #nameSaveBtn, #aboutMeChangeBtn{
            color: dimgrey;
            cursor: pointer;
        }
        #nameChangeBtn:hover, #aboutMeChangeBtn:hover, #nameSaveBtn:hover, #aboutMeSaveBtn:hover{
            color: grey;
            cursor: pointer;
        }
    </style>
    <h1 class="text-center neonH my-5">Личный кабинет</h1>
    <div class="container px-5 element-animation">
        <div class="row px-5 form" style="border-radius: 5%; padding: 40px">
                <div class="col-sm-12 col-lg-4 px-5">
                    <h1 class="neonH" style="font-size: 30px">Аватарка</h1>
                    <img width="90%" src="{{auth()->user()->img}}" alt="" class="mb-4 img-border" style="box-shadow: 3px 1px 25px 3px #ffe6ff; border: #ffe6ff 0px solid">
                    <form action="/changeAvatar" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control avatar-file" name="userAvatar">
                        <input type="submit" class="avatar-btn mt-2" value="Изменить">
                    </form>
                </div>
                <div class="col-sm-12 col-lg-3 px-5">
                    <h3 class="neonH mb-5">Информация</h3>
                    <p style="font-size: larger" class="mt-3">
                        <span class="neonStatic">Имя: </span>
                        <span id="nameSpan" class="def-text">{{auth()->user()->name}}</span>
                        <span id="nameChangeBtn" class="def-text avatar-btn" style="height: 30px; font-size: 15px; padding: 5px 5px" onclick="renderInput('nameSpan')">изменить</span>
                        <span id="nameSaveBtn" class="def-text avatar-btn" style="height: 30px; font-size: 15px; padding: 5px 5px" hidden onclick="saveData('nameSpan')">сохранить</span>
                    </p>
                    <p style="font-size: larger">
                        <span class="neonStatic">E-mail: </span>
                        <span class="def-text">{{auth()->user()->email}}</span></p>
                    <p>
                        <a href="/addArticle"></a>
                    </p>
                    <p style="font-size: larger">
                        <span class="neonStatic">Уникальный id: </span>
                        <span class="def-text">{{auth()->user()->id}}</span>
                    </p>
                </div>
            <div class="col-sm-12 col-lg-5" style="border-left: 2px solid #ffffff">
                <h3 class="neonH text-center">О себе</h3>
                <p class="ms-5">
                    <span id="aboutMeSpan" class="def-text">{{auth()->user()->about}}</span>
                    <span id="aboutMeChangeBtn" class="def-text avatar-btn" style="height: 30px; font-size: 15px; padding: 5px 5px" onclick="renderInput('aboutMeSpan')">изменить</span>
                    <span id="aboutMeSaveBtn" class="def-text avatar-btn" style="height: 30px; font-size: 15px; padding: 5px 5px" hidden onclick="saveData('aboutMeSpan')">сохранить</span>
                </p>
            </div>
        </div>
    </div>

    <hr style="color: #faf9f9; box-shadow: 0 0 10px #f6f6f6; margin-top: 120px">

    <script>
        // renderInput - это придуманная нами функция
        function renderInput(elementId){

            let span = document.getElementById(elementId);
            let value = span.innerText;
            span.innerHTML = `<input type='text' value="${value}">`;
            if(elementId === "nameSpan"){
                let saveBtn = document.getElementById('nameSaveBtn');
                let nameChangeBtn = document.getElementById('nameChangeBtn');
                saveBtn.hidden = false;
                nameChangeBtn.hidden = true;
            }else{
                let saveBtn = document.getElementById("aboutMeSaveBtn");
                let lastNameChangeBtn = document.getElementById("aboutMeChangeBtn");
                saveBtn.hidden = false;
                lastNameChangeBtn.hidden = true;
            }
        }
        function saveData(elementId){
            let span = document.getElementById(elementId);
            let input = span.firstChild;
            let token = document.querySelector('[name="_token"]').value;
            let formData = new FormData();
            formData.append('_token', token);
            if(elementId === "nameSpan"){
                formData.append('name', input.value);
            }else{
                formData.append('about', input.value);
            }
            fetch('/changeUserData', {
                method: "POST",
                body: formData
            }).then(response=>response.json())
                .then(result=>{
                    if(result.result === 'success'){
                        location.reload();
                    }
                });
        }
    </script>
@endsection
