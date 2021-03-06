<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>

    <title>Animals</title>

</head>
<body>
<div class="col-5" style="padding-left: 10px">
    <div>
        <h3>Изменение данных</h3>
        <p>Сейчас {{ $homelessAnimal }}</p>
        <form class="row g-3" method="post" action="{{ route('homelessAnimal.update', $homelessAnimal) }}">
            @csrf
            @method('put')

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Имя животного(если известно)</label>
                <input type="text" value="{{ $homelessAnimal->name }}" class="form-control" placeholder="Введите имя"
                       name="name">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Вес на текущий момент</label>
                <input type="number" value="{{ $homelessAnimal->weight }}" placeholder="Введите вес"
                       class="form-control" name="weight">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>

</div>
</body>
</html>
