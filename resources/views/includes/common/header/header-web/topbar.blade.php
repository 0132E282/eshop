@php
$menuLeft = [
[
'title' => '+060 (800) 801-582',
'icon' => 'ti-headphone-alt'
],
[
'title' => 'support@shophub.com',
'icon' => 'ti-email'
]
];
$menuRight = [
[
'title' => 'vị trí của hàng ',
'icon' => 'ti-location-pin'
],
[
'title' => 'lịch hẹn',
'icon' => 'ti-alarm-clock'
]
];
@endphp

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
            <!-- Top Left -->
            <div class="top-left">
                <ul class="list-main">
                    @foreach($menuLeft as $item)
                    <li><i class="{{$item['icon']  ?? ''}}"></i> {{$item['title'] ?? ''}}</li>
                    @endforeach
                </ul>
            </div>
            <!--/ End Top Left -->
        </div>
        <div class="col-lg-8 col-md-12 col-12">
            <!-- Top Right -->
            <div class="right-content">
                <ul class="list-main">
                    @foreach($menuRight as $item)
                    <li><i class="{{$item['icon']  ?? ''}}"></i> {{$item['title'] ?? ''}}</li>
                    @endforeach
                </ul>
            </div>
            <!-- End Top Right -->
        </div>
    </div>
</div>