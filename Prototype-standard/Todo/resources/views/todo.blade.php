<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
</head>
<body>

<table> 
<thead>
    <th>  todos</th>
</thead>
<br>
@foreach ($tasks as $value)
<tbody>
    <tr>
        <td> {{$value->name}}</td>
    </tr>
</tbody>
@endforeach
</table>
<br>
<form class="mx-auto flex justify-center bg-slate-400" action="add" method="POST">
@csrf
    Add Task : <input class="bg-indido-800" name="name" class="form-control lead" type="text">
    <br>
    <button class="btn btn-success">Add</button>
</form>
<br>



</body>
</html>