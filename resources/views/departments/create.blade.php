<div style="margin-bottom: 1em;">
    <a href="{{ route('departments.index') }}">department list</a>
</div>

<h1>Create department</h1>

@if (session('message'))
    <div style="color:green;">{{ session('message') }}</div>
@endif
<form action="{{ route('departments.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="enter department">
        @error('name')
        <div style="color:red;">{{$message}}</div>
        @enderror
    </div>
    <div>
        <button type="submit">submit</button>
    </div>
</form>
