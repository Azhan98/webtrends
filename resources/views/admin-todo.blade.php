<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    th, td{
        text-align: center;
    }
</style>
<body>
    <div class="alert alert-danger mt-4" role="alert">
        <h1 class="text-center"> wrong section Admin only</h1>
      </div>
    
    <table class="table mt-5" align="center">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Message</th>
            <th scope="col">Created at</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
            
          
          @if ($data)
          @foreach ($data as $datas)
          <tr>
            <th scope="row">{{ $datas->id }}</th>
            <td>{{ $datas->name }}</td>
            <td>{{ $datas->email }}</td>
            <td>{{ $datas->question }}</td>
            <td>{{ $datas->created_at }}</td>
            <td><a href="{{ url('destroy', $datas->id) }}"><button class="btn btn-danger">DELETE</button></a></td>
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>
</body>
</html>

