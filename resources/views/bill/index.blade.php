<div><a href="/">home</a> </div>
<a href="{{route ('bills.create') }}">new bill</a>

@if(session('message'))
    <div style="color:green;">{{session('message') }}</div>
@endif

<table Cellpadding="10" Cellspacing="1" border="1">
    <thead>
    <tr>
        <td>name</td>
        <td>sub_total</td>
        <td>total</td>
        <td>city</td>
        <td>customer</td>
        <td>employee</td>
        <td>products</td>
        <td> Action </td>
    </tr>
    </thead>
    <tbody>
    @forelse($bills as $key => $bill)
        <tr>
            <td>{{ $bills->firstItem() + $key }}.</td>
            <td>{{ $bill->name }}</td>
            <td>{{ $bill->sub_total }}</td>
            <td>{{ $bill->total }}</td>
            <td>{{ $bill->city->name }}</td>
            <td>{{ $bill->cutomer->name }}</td>
            <td>{{ $bill->employee->name }}</td>
            <td>{{ $bill->product->name }}</td>


            <td>
                <a href="{{ route('bills.edit', $bill) }}">edit</a>

                <form action="{{route('$bills.delete', $bill) }}" method="post">
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
