<div><a href="/">home</a> </div>
<a href="{{route ('cities.create') }}">new city</a>

@if(session('message'))
    <div style="color:green;">{{session('message') }}</div>
@endif

<table Cellpadding="10" Cellspacing="1" border="1">
    <thead>
    <tr>
        <td>no</td>
        <td>name</td>
        <td>department</td>
        <td>action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($cities as $key => $city)
        <tr>
            <td>{{ $cities->firstItem() + $key }}.</td>
            <td>{{ $city->name }}</td>
            <td>{{ $city->department->name }}</td>

            <td>
                <a href="{{ route('cities.edit', $city) }}">edit</a>

                <form action="{{route('cities.delete', $city) }}" method="post">
                    @csrf
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6">no data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
