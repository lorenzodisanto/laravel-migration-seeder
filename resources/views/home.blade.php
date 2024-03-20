@extends('layouts.app')

@section('title', 'Homepage')
    

@section('main-content')
    <div class="container py-4">
      <h1>Laravel Migration-Seeder</h1>
      <div class="row mt-4">
        @forelse ($trains as $train)
         <div class="col-4">
           <ul class="list-group">
             <li class="list-group-item active" aria-current="true">{{$train->company}} - {{$train->train_code}}</li>
             <li class="list-group-item"><b>Partenza:</b> {{$train->station_start}}</li>
             <li class="list-group-item"><b>Arrivo:</b> {{$train->station_arrive}}</li>
             <li class="list-group-item"><b>Data partenza:</b> {{$train->departure_date}}</li>   
             <li class="list-group-item"><b>Orario partenza:</b> {{$train->time_start_at}}</li>   
             <li class="list-group-item"><b>Orario Arrivo:</b> {{$train->time_arrive_at}}</li>   
           </ul>
         </div>
            
        @empty
            <h3>Non Ci sono treni disponibili</h3>

        @endforelse
      </div>
    </div>
@endsection
