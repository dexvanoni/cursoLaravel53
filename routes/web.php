<?php
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'eloquent', 'as' => 'eloquent.'], function(){
  Route::get('clients', 'EloquentClientsController@index')->name('client.list');
  Route::get('clients/create', 'EloquentClientsController@create')->name('client.create');
  Route::post('clients/store', 'EloquentClientsController@store')->name('client.store');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
  Route::get('client', 'ClientsController@create');
  Route::post('client','ClientsController@store')->name('client.store');
});

Route::group(['prefix' => '', 'as' => 'site.'], function(){
  Route::get('client', 'SiteClientsController@create');
  Route::post('client','SiteClientsController@store')->name('client.store');
});



/*
Route::get('minharota.me/rota1', function () {
    return view('helloworld1');
});

Route::get('client', function()
{
  return view('client');
});
Route::post('client', function(Request $request)
{
  return $request->get('value');
})->name('client.store');

Route::get('client/{id}/{name?}', function ($id, $name = 'Denis Vanoni'){
    return view('client-name', [
      'id' => $id,
      'name' => $name
    ]);
});
*/
/*Route::get('if-for', function()
{
  return view('if-for');
});*/

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
