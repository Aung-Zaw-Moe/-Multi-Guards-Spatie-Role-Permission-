@extends('admin.main')
@section('content')

    {{-- <div class="container mt-5">
        <a href="{{ url('roles') }}" class="btn btn-primary mx-1">Roles</a>
        <a href="{{ url('permissions') }}" class="btn btn-info mx-1">Permissions</a>
        <a href="{{ url('users') }}" class="btn btn-warning mx-1">Users</a>
    </div> --}}

   <div class="col-12 mt-3">
        <div class="card">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card mt-3">
                <div class="card-header">
                    <h4>Permissions
                        @can('create permission')
                        <a href="{{ url('permissions/create') }}" class="btn btn-outline-primary float-right"><i class="fa fa-plus text-inverse m-r-10"></i> Add Permission</a>
                        @endcan
                    </h4>
                </div>
                <div class="card-body">                        
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th width="40%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->id }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        @can('update permission')
                                          <a href="{{ url('permissions/'.$permission->id.'/edit') }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        @endcan

                                        @can('delete permission')
                                        <a href="{{ url('permissions/'.$permission->id.'/delete') }}" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    



   

