@extends ('layouts.main')

@section('title', 'FEPESE Inscrição')

@section('content')
    @foreach($events as $event)
        <p>{{ $event->title }} -- {{ $event->description }}</p>
    @endforeach

@endsection
