<div style="margin-bottom: 1em;">
    <a href="{{ route ('employees.index') }}">employees list</a>
</div>

<h1>Edit employees</h1>

@if(session('message'))
    <div style="color:green;">{{session('message') }}</div>
@endif

<form action="{{ route('employees.edit', $employees) }}" method="post">
    @csrf
    <div style="margin-bottom:1em;">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="Enter name" value="{{ $department->name }}">
        @error('name')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="last_name">last name</label>
        <input type="text" name="last_name"placeholder="enter last_name" value="{{ $customer->last_name}}">
        @error('lastname')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="identification_card">identification card</label>
        <input type="text" name="identification card"placeholder="enter identification_card" value="{{ $customer->identification_card}}">
        @error('identification card')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="phone">phone</label>
        <input type="text" name="phone"placeholder="enter phone" value="{{ $customer->phone}}">
        @error('phone')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="city_id">City</label>
        <select name="city_id" id="city_id">
            <option value="">select</option>
            @foreach($cities as $city)
                <option
                    @if ($city->id === (int) $customer->city_id )
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

    <div>
        <button type="submit">submit</button>
    </div>
</form>
