<html>
  <body>
    <form method="post" action="{{route('admin.client.store')}}">
      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
      <input type="text" name="value" />
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>
