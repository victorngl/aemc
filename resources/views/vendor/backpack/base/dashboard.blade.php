@extends(backpack_view('blank'))

@php
/*
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => trans('backpack::base.welcome'),
        'content'     => trans('backpack::base.use_sidebar'),
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
    ];
*/
@endphp

@section('content')
    <div class="row">
    <div class="card col-md-4">
    <div id="chart" style="height: 300px; width: auto;"></div>
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->
    <script>
        const chart = new Chartisan({
            el: '#chart',
            url: "@chart('user_chart')",
        });
    </script>
    </div>
    </div>
@endsection
