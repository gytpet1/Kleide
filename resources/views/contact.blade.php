@extends ('layouts.app')


@section('content')
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', 'Enter name')}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', 'example@gmail.com')}}
    </div>
    {!! Form::close() !!}
@endsection