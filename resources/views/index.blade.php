<html lang="en">
<head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>


<div class="container panel panel-default ">
    <h2 class="panel-heading">{{ $title }}</h2>
    <div class="form-group">
        <button class="btn btn-default" id="showStaff" type="button"
            onclick="document.location.href='/staff'">Показать всех сотрудников</button>

        <button class="btn btn-default" id="newStaff" type="button"
            onclick="document.location.href='/newstaff'">Добавить сотрудника</button>
    </div>
</div>
</body>
</html>
