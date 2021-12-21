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
            <button class="btn btn-success" id="submit">Добавить</button>
        </div>
    </form>
</div>
<?
/*
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

   <script>

    $('#newstaffForm').on('submit',function(event){
        event.preventDefault();

        let fio = $('#fio').val();
        let email = $('#email').val();
        let age = $('#age').val();
        let work_exp = $('#work_exp').val();
        let photo = $('#photo').val();
        let avg_salary = $('#avg_salary').val();

        $.ajax({
          url: "/newstaff",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            fio:fio,
            email:email,
            age:age,
            work_exp:work_exp,
            photo:photo,
            avg_salary:avg_salary,
          },
          success:function(response){
            console.log(response);
          },
          error:function(errors){
            console.log(errors);
          },
         });
        });
      </script>
*/
?>
 </body>
</html>
