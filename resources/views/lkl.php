{{--            <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('/logo.png')))}}" width="100">--}}
{{--            <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/images/logo.jpeg'))); ?>" width="120">--}}
////////
<img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('images/logo.png')))}}" width="100" alt="laravel dailyfd 2">
<img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/images/logo.jpg'))); ?>" width="120" alt="laravel dailyfd 3">
<img src="{{storage_path('app/public/images/logo.jpg')}}" style="width: 20%" alt="laravel dailyfd 4">
