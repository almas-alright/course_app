@extends('front.open')

@section('content')
 				<ul>
                @foreach ($posts as $post)
                    <li>
                    	<h4>{{ $post->title }}</h4>
                    	<p>{{ $post->content }}</p>
                    </li>
                @endforeach
                </ul>
@endsection