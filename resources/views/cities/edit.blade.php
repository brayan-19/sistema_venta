<div style="margin-bottom: 1em;">
    <a href="{{ route ('cities.index') }}">City list</a>
</div>

<h1>Edit Category</h1>

@if(session('message'))
    <div style="color:green;">{{session('message') }}</div>
@endif

<form action="{{ route('cities.edit', $city) }}" method="post">
    @csrf
    <div style="margin-bottom:1em;">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="Enter city" value="{{ $city->name }}">
        @error('name')
        <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">submit</button>
    </div>
</form>
