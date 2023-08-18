<div><a href="/">home</a> </div>
<a href="{{route ('providers.create') }}">new providers</a>

@if(session('message'))
    <div style="color:green;">{{session('message') }}</div>
@endif

<table Cellpadding="10" Cellspacing="1" border="1">
    <thead>
    <tr>
        <td>name</td>
        <td>last_name</td>
        <td>phone</td>
        <td> Action </td>
    </tr>
    </thead>
    <tbody>
    @forelse($providers as $key => $provider)
        <tr>
            <td>{{ $providers->firstItem() + $key }}.</td>
            <td>{{ $provider->name }}</td>
            <td>{{ $provider->last_name }}</td>
            <td>{{ $provider->phone }}</td>
            <td>{{ $provider->city->name }}</td>


            <td>
                <a href="{{ route('providers.edit', $provider) }}">edit</a>

                <form action="{{route('providers.delete', $provider) }}" method="post">
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
