@extends('main')

@section('title', 'welcome!!!')

@section('content')

 <h1>Wirte a New Article</h1>

   @if (count($people))
          <h3>People I Like:</h3>
          <ul>
              @foreach ($people as $person)
                  <li>{{ $person }}</li>
              @endforeach
          </ul>
      @endif
@stop
@section('footer')
 <script> alert('Contact Form');</script>
 @stop