<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <!--Carules-->

</head>
<title>Форма обратного звонка</title>
<body class="text-center">
<section class="container" style="max-width: 700px; min-width: 50%">
    <main class="form-signin form-main">
        <form id="form" method="POST" class="validateform"
              action="{{route("contact_form_process")}}">
            @csrf
            <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="">
            <h1 class="h3 mb-3 fw-normal">Форма обратного звонка</h1>
            <p>SMTP отправка на майл и сохранение в базу</p>

            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="Имя">
                <label for="floatingInput">Имя</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                <label for="floatingInput">Адрес эл. почты</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" name="text" id="text" placeholder="Сообщение">
                <label for="floatingInput">Сообщение</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" id="contact_form_submit" name="contact_submit">Отправить</button>
        </form>
    </main>
</section>
</body>
</html>
