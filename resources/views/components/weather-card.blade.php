<div class="weather-wrapper">
    <div class="weather-card madrid">
        @if($data->current->temp_c < 50)
            <div class="weather-icon sun"></div>
            <h1>{{$data->current->temp_c}}ºC</h1>
            <p>Indonesia, {{$data->location->localtime}}</p>
        @else
            <div class="weather-icon cloud"></div>
            <h1>{{$data->current->temp_c}}ºC</h1>
            <p>Indonesia, {{$data->location->localtime}}</p>
        @endif
    </div>
<div>