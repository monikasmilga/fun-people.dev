<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


</head>
<body>

@if(isset($name))
    <div style="background-color: #67b168">Įrašas sukurtas sėkmingai: {{$name . " id:" . $id }}</div>
    @endif

{!! Form::open(['url' => route('app.city.create')]) !!}

{{ Form::label('city', 'City')}}

{{ Form::text('name') }}

{{ Form::submit('Click Me!')}}

{!! Form::close() !!}

</body>
</html>