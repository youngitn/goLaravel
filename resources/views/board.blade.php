@extends('layouts.master')

@section('title','排行榜')

@section('content')
	<div class="page-header">
		<h1>排名</h1>
	</div>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>名次</th>
					<th>學號</th>
					<th>姓名</th>
					<th>國文</th>
					<th>英文</th>
					<th>數學</th>
					<th>總分</th>
					<th>動作</th>
				</tr>
			</thead>
			<tbody>
				@forelse($scores as $index => $score)
				    <tr>
				    	<td>{{ $index+=1 }}</td>
						<td>{{ $score->student->no }}</td>
						<td>{{ $score->student->user->name }}</td>
						<td>{{ $score->chinese }}</td>
						<td>{{ $score->english }}</td>
						<td>{{ $score->math }}</td>
						<td>{{ $score->total }}</td>
						<td>
							<a class="btn btn-default btn-sm" href="{{ route('student',['student_no'=>$score->student->no ]) }}">查看學生資料</a>
							<a class="btn btn-default btn-sm" href="{{ action('SchoolController@getEdit',['student_no'=>$score->student->no ]) }}">編輯學生資料</a>
						</td>
					</tr>
				@empty
				    <tr>
				    	<td colspan="6">
					    	無資料
					    </td>
				    </tr>
				@endforelse
			</tbody>
		</table>
	</div>
@stop