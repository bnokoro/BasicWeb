@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium quas cupiditate fugiat provident laborum tempora numquam recusandae consequuntur voluptates! Officiis inventore, impedit exercitationem rem omnis earum aut ex ipsum suscipit?</p>
@endsection

@section('sidebar')
@parent
<p>this is appended to the sidebar</p>
@endsection