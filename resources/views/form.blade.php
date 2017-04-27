<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


</head>
<body>
<h3>Form</h3>
<form method="POST" action="{{route('app.city.create')}}">
    City name: <input type="text" name="name"><br/>
    <input type="submit">

    {{csrf_field() }}

</form>


</body>
</html>