<div><a href="/">home</a> </div>
<a href="{{route ('categories.create') }}">new category</a>

@if(session('message'))
    <div style="color:green;">{{session('message') }}</div>
@endif

<table eellpadding="10" eellspacing="1" border="1">
    <thead>
    <tr>
        <td>no</td>
        <td>name</td>
        <td>description</td>
        <td>timestamp</td>
        <td>action</td>
    </tr>
    </thead>
    <tbody>

    </tbody>



</table>
