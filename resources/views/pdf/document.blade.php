<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9/10 Add Image To PDF File - Websolutionstuff</title>
</head>
<body>
<h2>{{ $title }}</h2>
{{--<img src="{{ $imagePath }}" alt="Image"  width="200"> bon--}}
<img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('/logo.png')))}}" width="100">
<br><br/>
{{--<strong>Public Folder:</strong>
<img src="{{ public_path('laravel_10.jpg') }}" style="width: 100%;">
<br/>
<strong>Storage Folder:</strong>
<img src="{{ storage_path('app/public/laravel.png') }}" style="width: 100%;">--}}
</body>
</html>
