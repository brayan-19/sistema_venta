<div><a href="/">home</a> </div>
<a href="{{route ('customers.create') }}">new customer</a>

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
        <td>mail</td>
        <td> Action </td>
    </tr>
    </thead>
    <tbody>
    @forelse($customers as $key => $customer)
        <tr>
            <td>{{ $customers->firstItem() + $key }}.</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->lastname }}</td>
            <td>{{ $customer->identification_card }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->mail }}</td>
            <td>{{ $customer->city->name }}</td>


            <td>
                <a href="{{ route('customers.edit', $customer) }}">edit</a>

                <form action="{{route('$customers.delete', $customer) }}" method="post">
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
