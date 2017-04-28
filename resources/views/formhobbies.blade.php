<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


</head>
<body>

@if(isset($name))
    <div style="background-color: lightgreen">Įrašas sukurtas sėkmingai: {{$name . " description:" . $description }}</div>
    @endif

{!! Form::open(['url' => route('app.hobbies.create')]) !!}

{{ Form::label('hobbies', 'Hobbies')}}

{{ Form::text('name') }}

{{ Form::label('description', 'Description')}}

{{ Form::textarea('description') }}

{{ Form::submit('Click Me!')}}

{!! Form::close() !!}

</body>
</html>