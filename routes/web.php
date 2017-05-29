<?php
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('minharota.me', function () {
    return "Hello World";
});

  Route::get('minharota/rota1', function () {
      return "Hello World - Rota 1";
  });
    Route::get('client/{id}', function ($id) {
        return "Client $id";
    });

Route::get('client', function()
{
  $csrfToken = csrf_token();
  $action = route('client.store');
  $html = <<<HTML
    <html>
      <body>
        <form method="post" action="$action">
          <input type="hidden" name="_token" value="$csrfToken"/>
          <input type="text" name="value" />
          <button type="submit">Enviar</button>
        </form>
      </body>
    </html>
HTML;
    return $html;
});
Route::post('client', function(Request $request)
{
  return $request->get('value');
})->name('client.store');*/
