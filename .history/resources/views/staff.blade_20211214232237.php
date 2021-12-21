@foreach($staffs as $staff)

<div class='alert alert-danger'>
    {{ $staff->fio }}: {{ $staff->email }}
</div>

@endforeach
