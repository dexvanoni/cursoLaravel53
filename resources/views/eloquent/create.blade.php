<html>
<body>
  <h1>Site Client</h1>
  <form method="post" action="{{route('eloquent.client.store')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <label for="name">Name:</label>
    <input type="text" name="name" />
    <label for="address">Address:</label>
    <input type="text" name="address" />
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
