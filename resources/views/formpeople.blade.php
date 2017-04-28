<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


</head>
<body>

@if(isset($name))
    <div style="background-color: lightgreen">Įrašas sukurtas sėkmingai: {{$name . " amžius:" . $age  }}</div>
    @endif

{!! Form::open(['url' => route('app.people.create')]) !!}

{{ Form::label('people', 'Name')}}<br/>

{{ Form::text('name') }}<br/>

{{ Form::label('age', 'Age')}}<br/>

{{ Form::text('age') }}<br/>

{{ Form::label('city_id', 'City')}}<br/>

{{ Form::select('city_id', $city)}}<br/>

{{ Form::label('hobby_id', 'Hobbies')}}<br/>
@foreach ($hobbies as $key => $hobby)
{{ Form::checkbox ('hobbies[]', $key) }}
{{ $hobby }}
<br/>
@endforeach
<br/>
{{ Form::submit('Click Me!')}}

{!! Form::close() !!}

</body>
</html>