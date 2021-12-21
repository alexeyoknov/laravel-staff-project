<html lang="en">
<head>
    <title>Добавление нового сотрудника</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

<ul>
@foreach($staffs as $staff)

<li>
    {{ $staff->fio }}: {{ $staff->email }}
</li>

@endforeach
</ul>
</body>
</html>
