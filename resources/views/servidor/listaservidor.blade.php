<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <ul>
        	@foreach($datas as $data)
        		<li>{{$data->nome_completo}}</li>
        	@endforeach
        </ul>
    </body>
</html>
