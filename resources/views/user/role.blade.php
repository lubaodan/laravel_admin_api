@extends('layout.main')
@section('content')
        <!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-10">
            <div class="box">

                <div class="box-header with-border">
                    <h3 class="box-title">角色列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{route('users.role', ['user'=>$user->id])}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            @foreach($roles as $role)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="roles[]"
                                               @if($myRoles->contains($role))
                                               checked
                                               @endif
                                               value="{{$role->id}}">
                                        {{$role->name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">提交</button>
                        </div>
                    </form>
                    @include('layout.error')

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
