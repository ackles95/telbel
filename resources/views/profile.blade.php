@extends('layouts.master')


@section('content')


  
<div>

    <h1>{{var_dump(Auth::user())}}</h1>
    <h1>{{Auth::user()->Name}}</h1>

</div>

@endsection
