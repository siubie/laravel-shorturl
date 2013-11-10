@extends('shorturl.template')

@section('content')
<div class="container-narrow">
	<div class="masthead">
		<ul class="nav nav-pills pull-right">
			<li class="active"><a href="">Home</a></li>
			<li><a href="">About</a></li>
		</ul>
		<h3 class="muted">Laravel Shorturl</h3>
	</div>
	<hr>

	<div class="row">
		<div class="shortit"> 
			{{Form::open(array('url' => 'shorten', 'method' => 'post', 'class' => 'form-search'))}}
			<fieldset>
				{{Form::text('url',null, array('placeholder' => 'Paste a link', 'class' => 'input-large search-query'))}}
				{{Form::submit('Shorten', array('class' => 'btn'))}}
			</fieldset>
			{{Form::close()}}
		</div>
	</div>

	<hr>

    <div class="footer">
    	<p>Created by <a href="http://twitter.com/justmyfreak">justmyfreak</a></p>
    </div>
</div>

@stop