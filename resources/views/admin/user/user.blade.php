@extends('admin.layout')
@section('content')
<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    所有用户
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>用户ID</th>
                                <th>昵称</th>
                                <th>头像</th>
                                <th>注册类型</th>
                                <th>积分</th>
                                <th>电话</th>
                                <th>注册时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($users as $user)
                            <tr class="odd gradeX">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->nickname }}</td>
                                <td>{{ $user->profile_img }}</td>
                                <td>{{ $user->login_type }}</td>
                                <td>{{ $user->score }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <a href="{{ url('admin/user/edit',['userId'=>$user->id]) }}" class="btn btn-default btn-xs">修改</a>
                                	<a href="{{ url('admin/user/attention',['userId'=>$user->id]) }}" class="btn btn-info btn-xs">关注</a>
                                	<a href="{{ url('admin/user/follow',['userId'=>$user->id]) }}" class="btn btn-warning btn-xs">粉丝</a>
                                	<a href="{{ url('admin/user/collect',['userId'=>$user->id]) }}" class="btn btn-success btn-xs">收藏</a>
                                    <a href="{{ url('admin/user/article',['userId'=>$user->id]) }}" class="btn btn-primary btn-xs">帖子</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render() }}
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

    
</div>
<!-- /#page-wrapper -->

@stop