@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-user"></i> USUARIOS
                <a href="{{ route('admin.user.create') }}" class="btn btn-warning">
                    <i class="fa fa-plus-circle"></i> Usuario
                </a>
            </h1>
        </div>
        
        <div class="page">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Tipo</th>
                            <th>Activo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['admin.user.destroy', $user]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
        							{!! Form::close() !!}
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->user }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ $user->active == 1 ? "Si" : "No" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <hr>
            
            <?php echo $users->render(); ?>
            
        </div>
    </div>
@stop


