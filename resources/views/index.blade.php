@extends('layouts.layout')
@section('content')
<div class="title m-b-md">
    Live Duck
</div>
<div style="margin-bottom: 10px;">
    <a href="duck/create" class="btn btn-primary btn-small" id="hatch">Hatch Duck</a>
</div>
<ul class="list-group">
    @if($ducks)
        @foreach($ducks as $duck)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-12" style="padding-bottom:10px;">
                        <div>{{$duck->duck_name}}</div>
                        <div>Hunger: {{$duck->hunger >= 1 ? 'Hungry' : 'Not hungry'}}</div>
                        <div>Dirty: {{$duck->dirtyness >= 1 ? 'Dirty' : 'Clean!'}}</div>
                        <div>Happyness: {{$duck->sadness >= 1 ? 'Sad' : 'Happy'}}</div>
                    </div>
                </div>
            <a href="{{url('duck/feed/'.$duck->id)}}" class="btn btn-success">Feed</a>
                <a href="{{url('duck/play/'.$duck->id)}}" class="btn btn-warning" name="sadness" value="0">Play</a>
                <a href="{{url('duck/clean/'.$duck->id)}}" class="btn btn-danger" name="dirtyness" value="0">Clean</a>
            </li>
        @endforeach
    @endif
</ul>
@endsection