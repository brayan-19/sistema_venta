<div style="margin-bottom: 1em;">
    <a href="{{ route('bills.index') }}">bills list</a>
</div>

<h1>Create bills</h1>

@if(session('message'))
    <div style="color: green;">{{session('message') }}</div>
@endif
<form action="{{ route ('bills.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text"name="name" id="name" placeholder="Enter name" value="{{ old ('name') }}">
        @error('name')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="sub_total">sub_total</label>
        <input type="text" name="sub_total" id="sub_total" placeholder="Enter sub_total" value="{{ old ('sub_total') }}">
        @error('sub_total')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="total">total</label>
        <input type="text" name="total" id="total" placeholder="Enter total" value="{{ old ('total') }}">
        @error('total')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom:1em;">
        <label name="city_id">city</label>
        <select name="city_id" id="city_id">
            <option value="">select</option>
            @foreach($cities as $city)
                <option
                    @if ($city->id === (int)old('$city_id'))
                        selected
                    @endif
                    value="{{ $city->id }}">{{ $city->name }}
                </option>
            @endforeach
        </select>
        @error('city_id')
        <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom:1em;">
        <label name="customers_id">customer</label>
        <select name="customers_id" id="customers_id">
            <option value="">select</option>
            @foreach($customers as $customer)
                <option
                    @if ($customer->id === (int)old('customers_id'))
                        selected
                    @endif
                    value="{{ $customer->id }}">{{ $customer->name }}
                </option>
            @endforeach
        </select>
        @error('customers_id')
        <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom:1em;">
        <label name="employees_id">employees</label>
        <select name="employees_id" id="employees_id">
            <option value="">select</option>
            @foreach($employees as $employee)
                <option
                    @if ($employee->id === (int)old('employees_id'))
                        selected
                    @endif
                    value="{{ $employee->id }}">{{ $employee->name }}
                </option>
            @endforeach
        </select>
        @error('employees_id')
        <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom:1em;">
        <label name="products_id">products</label>
        <select name="products_id" id="products_id">
            <option value="">select</option>
            @foreach($products as $product)
                <option
                    @if ($product->id === (int)old('products_id'))
                        selected
                    @endif
                    value="{{ $product->id }}">{{ $product->name }}
                </option>
            @endforeach
        </select>
        @error('products_id')
        <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
