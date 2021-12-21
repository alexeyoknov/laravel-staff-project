<ul>
@foreach($staffs as $staff)

<li>
    {{ $staff->fio }}: {{ $staff->email }}
</li>

@endforeach
</ul>
