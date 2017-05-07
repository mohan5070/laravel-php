@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Control structures</h1>
        @if(true)
            <p>This is true</p>
        @else
            <p>This is not true</p>
        @endif
        <hr>
        @for($i=0;$i <5; $i++)
            <p>{{$i}}. iteration</p>
        @endfor
    </div>
</div>
@endsection