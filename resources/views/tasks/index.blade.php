@extends('layouts.app')

@section('content')
    <!-- 建立任務表單... -->
        <div class="panel-body">
        <!-- 顯示驗證錯誤 -->
        @include('common.errors')

        <!-- 新任務的表單 -->
        <form action="{{ action('TaskController@store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- 任務名稱 -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">任務</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- 增加任務按鈕-->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 增加任務
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- 目前任務 -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
               目前任務
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- 表頭 -->
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- 表身 -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- 任務名稱 -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>
                                user_id={{ $task->user_id }}
                                <td>
                                   <tr>
                                        <!-- 任務名稱 -->
                                        <td class="table-text">
                                            <div>{{ $task->name }}</div>
                                        </td>

                                        <!-- 刪除按鈕 -->
                                        <td>
                                            <form action="{{url('task/' . $task->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
