<div><a href="/">home</a> </div>
<a href="{{route ('employees.create') }}">new employees</a>

@if(session('message'))
    <div style="color:green;">{{session('message') }}</div>
@endif

<table Cellpadding="10" Cellspacing="1" border="1">
    <thead>
    <tr>
        <td>name</td>
        <td>last name</td>
        <td>identification card</td>
        <td>phone</td>
        <td> Action </td>
    </tr>
    </thead>
    <tbody>
    @forelse($employees as $key => $employee)
        <tr>
            <td>{{ $employees->firstItem() + $key }}.</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->identification_card }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->mail }}</td>
            <td>{{ $employee->city->name }}</td>

            <td>
                <a href="{{ route('employees.edit', $employee) }}">edit</a>

                <form action="{{route('$employees.delete', $employee) }}" method="post">
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
