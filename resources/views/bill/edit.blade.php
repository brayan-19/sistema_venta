<div style="margin-bottom: 1em;">
    <a href="{{ route('bills.index') }}">bill list</a>
</div>
<h1> Edit bill</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif
<form action="{{ route('bills.edit',$bills) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="Enter customer" value="{{ $bill->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="sub_total">sub_total</label>
        <input type="text" name="sub_total"placeholder="enter sub_total" value="{{ $bill->sub_total}}">
        @error('sub_total')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="total">total</label>
        <input type="text" name="total "placeholder="enter total" value="{{ $bill->total}}">
        @error('total')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="city_id">City</label>
        <select name="city_id" id="city_id">
            <option value="">select</option>
            @foreach($cities as $city)
                <option
                    @if ($city->id === (int) $bill->city_id )
                        selected
                    @endif
                    value="{{ $city->id }}">{{ $city->name }}
                </option>
            @endforeach
        </select>
        @error('$city_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="customers_id">Customer</label>
        <select name="customers_id" id="customers_id">
            <option value="">select</option>
            @foreach($customers as $customer)
                <option
                    @if ($customer->id === (int) $bill->$customer_id )
                        selected
                    @endif
                    value="{{ $customer->id }}">{{ $customer->name }}
                </option>
            @endforeach
        </select>
        @error('$customers_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="employees_id">Employees</label>
        <select name="employees_id" id="employees_id">
            <option value="">select</option>
            @foreach($employees as $employee)
                <option
                    @if ($employee->id === (int) $bill->employees_id )
                        selected
                    @endif
                    value="{{ $employee->id }}">{{ $employee->name }}
                </option>
            @endforeach
        </select>
        @error('employees_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="products_id">Products</label>
        <select name="products_id" id="products_id">
            <option value="">select</option>
            @foreach($products as $product)
                <option
                    @if ($product->id === (int) $bill->products_id )
                        selected
                    @endif
                    value="{{ $product->id }}">{{ $product->name }}
                </option>
            @endforeach
        </select>
        @error('products_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">submit</button>
    </div>
</form>

