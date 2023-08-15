<div><a href="/">home</a> </div>
<a href="{{route ('departments.create') }}">new departments</a>

@if(session('message'))
    <div style="color:green;">{{session('message') }}</div>
@endif

<table Cellpadding="10" Cellspacing="1" border="1">
    <thead>
    <tr>
        <td>no</td>
        <td>name</td>
        <td>timestamp</td>
        <td>action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($departments as $key => $department)
        <tr>
            <td>{{ $departments->firstItem() + $key }}.</td>
            <td>{{ $department->name }}</td>
            <td>{{ $department->created_at->format('F d, Y') }}</td>

            <td>
                <a href="{{ route('departments.edit', $department) }}">edit</a>

                <form action="{{route('departments.delete', $department) }}" method="post">
                    @csrf
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">no data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
