<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Animals</title>
    <style>
        .block_1 {
            overflow: hidden;
            position: relative;
        }

        .block_2 {
            position: absolute;
            visibility: hidden;
            white-space: nowrap;
            padding: 5px
        }

        .block_1:hover .block_2 {
            visibility: visible;
        }
    </style>

</head>
<body>
<div class="col-5" style="padding-left: 10px">
    <div>
        <h3>Карточка животного</h3>
        <form class="row g-3" method="post" action="{{ route('homelessAnimal.store') }}">
            @csrf

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Имя животного(если известно)</label>
                <input type="text" class="form-control" placeholder="Введите имя" name="name">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Тип животного</label>
                <input type="text" placeholder="Введите тип" class="form-control" name="type">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Вес на текущий момент</label>
                <input type="number" placeholder="Введите вес" class="form-control" name="weight">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Выберите пол</label>
                <select name="sex" class="form-select">
                    <option selected>Мужской</option>
                    <option value="1">Женский</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>

    <table class="table mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Тип</th>
            <th scope="col">Пол</th>
            <th scope="col">Вес</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($animals as $animal)
            <tr>
                <th scope="row">{{ $animal->id }}</th>
                <td>{{ $animal->name }}</td>
                <td>{{ $animal->type }}</td>
                <td>{{ $animal->sex }}</td>
                <td>{{ $animal->weight }}</td>
                <td><a href="{{ route('homelessAnimal.edit', $animal) }}" class="btn btn-warning">Изменить</a>
                    <span class="block_1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                               fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path
                        d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                 </svg>
                    <span class="block_2">
                        <h6>{{ $animal }}</h6>
                    </span>
                </span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
