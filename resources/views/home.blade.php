@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <ol>
        @foreach ($data as $item)
            <li>{{ 'Treno:'.' '. $item['train_code'] . ' '.'Partenza:' .' '. $item['departure_time']}}</li>
        @endforeach
    </ol>

</main>

@endsection
