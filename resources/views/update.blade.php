<!DOCTYPE html>
<html>
<body>
<h2>HTML Forms</h2>
<form action="{{route('update',[$data->id])}}" method="POST">
  
@csrf
{{-- @foreach ($data as $i)
<div>
    <tr>
        <td>{{$i->id}}</td>
        <td>{{$i->name}}</td>
        <td>{{$i->pass}}</td>
        <td><a href="delete/{{$i->id}}">delet</a></td>
        <td><a href="update/{{$i->id}}">delet</a></td>
    </tr>
</div>
@endforeach --}}
  <label for="fname">First name:</label><br>
  <input type="hidden" value="{{$data->id}}" >
  <input type="text" id="fname" name="fname" value="{{$data->name}}"><br>

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="{{$data->pass}}"><br><br>

<input type="submit" value="Submit">
</form> 
</body>
</html>