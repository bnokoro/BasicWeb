@extends('layouts.app')

@section('content')
<h1>Contact</h1>
<form action="contact/submit" method="POST">
@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" placeholder="Enter name">
   <br> <label for="email">E-mail Address</label>
    <input class="form-control" type="email" name="email" placeholder="Enter email">
    <br> <label for="message">Message</label>
    <textarea  class="form-control" type="text" name="message" rows="10" cols="30" placeholder="Enter message"></textarea>
    <br><button class="btn btn-primary">Submit</button>
</div>

</form>

@endsection

