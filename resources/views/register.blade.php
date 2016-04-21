
@extends ('layout')


@section ('content')



{!! Form::open(array('url' => 'store')) !!}
  	{!! Form::text('name','', ['placeholder'=>'Your Name']) !!}
   	{!! Form::text('surname','', ['placeholder'=>'SurName']) !!}
   	{!! Form::text('username','', ['placeholder'=>'Login']) !!}
    {!! Form::email('email','', ['placeholder'=>'email']) !!}
    {!! Form::password('password') !!}
    
    {!! Form::submit('Register') !!}


{!! Form::close() !!}



@stop
