<html lang="en">
<head>
    <title>Добавление нового сотрудника</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

@if (count($errors)>0)
    <div class='alert alert-danger'>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container panel panel-default ">
        <h2 class="panel-heading">Добавление нового сотрудника</h2>
    <form id="newstaffForm" method=POST action="{{route('staffStore')}}">
        <div class="form-group">
            <input type="text" name="fio" class="form-control" placeholder="ФИО" id="fio">
        </div>

        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="email" id="email">
        </div>

        <div class="form-group">
            <input type="text" name="age" class="form-control" placeholder="Возраст" id="age">
        </div>

        <div class="form-group">
            <input type="text" name="work_exp" class="form-control" placeholder="Стаж работы" id="work_exp">
        </div>

        <div class="form-group">
            <input type="text" name="photo" class="form-control" placeholder="Ссылка на фотографию" id="photo">
        </div>

        <div class="form-group">
            <input type="text" name="avg_salary" class="form-control" placeholder="Средняя зарплата" id="avg_salary">
        </div>

        <div class="form-group">
            <button class="btn btn-default" id="submit" type=submit>Добавить</button>

            <button class="btn btn-default" id="showStaff" type="button"
                onclick="document.location.href='/staff'">Показать всех сотрудников</button>
        </div>
        {{ csrf_field() }}
    </form>
</div>

 </body>
</html>
