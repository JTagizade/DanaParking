@extends ('layout')

@section ('content')

{!! Form::open(array('url' => ['update', $edit->id])) !!}


{!! Form::text('name', $edit->name, ['placeholder'=>'Your Name']) !!}
{!! Form::text('surname',$edit->surname, ['placeholder'=>'Your Surname']) !!}
{!! Form::text('username',$edit->username, ['placeholder'=>'Your Username']) !!}

{!! Form::submit('Done') !!}
    
{!! Form::close() !!}




@stop