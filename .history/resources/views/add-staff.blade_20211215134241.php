<html lang="en">
<head>
    <title>Добавление нового сотрудника</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

<div class="container panel panel-default ">
        <h2 class="panel-heading">Добавление нового сотрудника</h2>
    <form id="newstaffForm">
        <div class="form-group">
            <input type="text" name="fio" class="form-control" placeholder="Enter Name" id="fio">
        </div>

        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Enter Email" id="email">
        </div>

        <div class="form-group">
            <input type="text" name="age" class="form-control" placeholder="Enter Age" id="age">
        </div>

        <div class="form-group">
            <input type="text" name="work_exp" class="form-control" placeholder="Enter Work Exp" id="work_exp">
        </div>

        <div class="form-group">
            <input type="text" name="photo" class="form-control" placeholder="Enter Link To Photo" id="photo">
        </div>

        <div class="form-group">
            <input type="text" name="avg_salary" class="form-control" placeholder="Enter Average Salary" id="avg_salary">
        </div>

        <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div>
    </form>
</div>
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
         });
        });
      </script>
 </body>
</html>