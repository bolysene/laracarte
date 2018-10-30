@extends('layouts.default',['title'=>'Contact',])

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<h2>Get in touch</h2>
			<p class="text-muted">If you having trouble with this service, please <a href="mailto:{{config('laracarte.admin@laracarte.com')}}"> ask for help</a>.</p>
			<form method="post" action="{{route('contact.store')}}">
				@csrf
				
				<div class="form-group {{ $errors->has('name' ? 'has-error' : '')}}">
					<label for="name" class="control-label">Name</label>
					<input type="text" name="name" class="form-control" id="name" required="required" value="{{old('name')}}">
					{!!$errors->first('name', '<span class="help-block">:message</span>')!!}
				</div>
				<div class="form-group {{ $errors->has('email' ? 'has-error' : '')}}">
					<label for="email" class="control-label">Email</label>
					<input type="" name="email" class="form-control" id="email" required="required" value="{{old('email')}}">
					{!!$errors->first('email', '<span class="help-block">:message</span>')!!}
				</div>
				<div class="form-group {{ $errors->has('message' ? 'has-error' : '')}}">
					<label for="message" class="control-label sr-only">Message</label>
					<textarea rows="10" cols="10" name="message" id="message" class="form-control" required="required" >{{old('message')}}</textarea>
					{!!$errors->first('message', '<span class="help-block">:message</span>')!!}
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-dark btn-block" >Submit Enquiry &raquo;</button>
				</div>
			</form>
		</div>
		
	</div>
</div>
@stop