@extends('layouts.master')

@section('title','編輯資料')

@section('content')
	<div class="page-header">
		<h1>個人資料編輯</h1>
	</div>
	@if(isset($msg))
		<div class="alert alert-success" role="alert">
			{{{ $msg or '' }}}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form method="POST" action="{{ action('SchoolController@postEdit',['student_no'=>$student->no]) }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label>
						信箱：{{ $student->user->email }}
					</label>
				</div>
				<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
					<label class="control-label" for="name">姓名</label>
					<input type="text" class="form-control" name="name" value="{{ $student->user->name }}" />
					@if ($errors->has('name'))
						<span class="help-block">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
					 @endif
				</div>
				<div class="form-group {{ $errors->has('tel') ? 'has-error' : '' }}">
					<label class="control-label" for="tel">電話</label>
					<input type="text" class="form-control" name="tel" value="{{ $student->tel }}" />
					@if ($errors->has('tel'))
						<span class="help-block">
							<strong>{{ $errors->first('tel') }}</strong>
						</span>
					 @endif
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-primary">修改</button>
				</div>
			</form>
		</div>
	</div>
@stop