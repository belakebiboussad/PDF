<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9/10 Add Image To PDF File - Websolutionstuff</title>
{{--    <link rel="stylesheet" href="{{ asset('pdf.css') }}" type="text/css">--}}
    <link href="{{ public_path('pdf.css') }}" rel="stylesheet">
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
<div class="margin-top">
    <table class="w-full">
        <tr>
            <td class="w-half">
                <div><h4>To:</h4></div>
                <div>John Doe</div>
                <div>123 Acme Str.</div>
            </td>
            <td class="w-half">
                <div><h4>From:</h4></div>
                <div>Laravel Daily</div>
                <div>London</div>
            </td>
        </tr>
    </table>
</div>
<div class="margin-top">
    <table class="products">
        <tr>
            <th>Qty</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <tr class="items">
            @foreach($data as $item)
                <td>
                    {{ $item['quantity'] }}
                </td>
                <td>
                    {{ $item['description'] }}
                </td>
                <td>
                    {{ $item['price'] }}
                </td>
            @endforeach
        </tr>
    </table>
</div>
</body>
</html>
