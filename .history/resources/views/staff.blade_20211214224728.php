@foreach($staffs as $staff)

<div>
    {{ $staff->fio }}: {{ $staff->email }}
</div>

@endforeach
