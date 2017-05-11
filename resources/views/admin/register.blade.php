@extends('layouts.app')

@section('content')

<div id="signup" class="tab-pane active">

            <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <input id="name" type="text" placeholder="Name" class="form-control top {{ $errors->has('name') ? ' has-error' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                <input id="email" type="email" placeholder="mail@domain.com" class="form-control middle" name="email" value="{{ old('email') }}" required>                
                <input id="password" placeholder="password" type="password" class="form-control middle" name="password" required>
                <input id="password-confirm" placeholder="re-password" type="password" class="form-control bottom" name="password_confirmation" required>
                <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
            </form>

            @if($errors->any())
        <div class="alert alert-danger">
            <ul style="list-style:square; margin-left:1.7rem">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

</div>             
@endsection
