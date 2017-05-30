<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listagem de Clientes</h1>
    <a href="{{ route('eloquent.client.create') }}">Criar novo Cliente</a>
    <br><br>
    <table border="1">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Address</th>
        </tr>
      </thead>
    </table>
    <tbody>
      @foreach ($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->address}}</td>
        </tr>
      @endforeach
    </tbody>
  </body>
</html>
