<html lang="en">
<head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>


<div class="container panel panel-default ">
<h2 class="panel-heading">{{ $title }}</h2>
<ul>
@foreach($staffs as $staff)

<li>
   <a href="/staff/{{ $staff->id }}"> {{ $staff->fio }}: {{ $staff->id }} {{ $staff->email }}

   </a>
</li>

@endforeach
</ul>
<div class="form-group">
        <button class="btn btn-default" id="newStaff" type="button"
        onclick="document.location.href='/newstaff'">Добавить сотрудника</button>
        @if ($id !== 'none' )
        <button class="btn btn-default" id="showStaff" type="button"
                onclick="document.location.href='/staff'">Показать всех сотрудников</button>
        @endif
    </div>
</div>
</body>
</html>
