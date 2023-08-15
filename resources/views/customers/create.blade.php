<div style="margin-bottom: 1em;">
    <a href="{{ route('customers.index') }}">customers list</a>
</div>

<h1>Create customers</h1>

@if(session('message'))
    <div style="color: green;">{{session('message') }}</div>
@endif
<form action="{{ route ('customers.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text"name="name" id="name" placeholder="Enter name" value="{{ old ('name') }}">
        @error('name')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="last_name">last name</label>
        <input type="text"name="last_name" id="last_name" placeholder="Enter last_name" value="{{ old ('last_name') }}">
        @error('last_name')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="identification_card">identification card</label>
        <input type="text" name="identification_card" id="identification_card" placeholder="Enter identification_card" value="{{ old ('identification_card') }}">
        @error('identification_card')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em">
        <label for="phone">phone</label>
        <input type="text" name="phone" id="phone" placeholder="enter phone" value="{{ old('phone') }}">
        @error('phone')
        <div style="color: red">{{ $message }}</div>
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
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
