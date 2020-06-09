@extends('layouts.app')

@section('content')
<h1> this is home </h1>
@endsection

@section('sidebar')
@parent 
<p> this appended sidebar </p> 
@endsection