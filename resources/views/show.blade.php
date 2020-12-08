<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="delet">
            @foreach ($data as $i)
            <div>
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->name}}</td>
                    <td>{{$i->pass}}</td>
                    <td><a href="delete/{{$i->id}}">Delet</a></td>
                    <td><a href="update/{{$i->id}}">Update</a></td>
                </tr>
            </div>
            @endforeach
    </div>
    </form>
</body>

</html>