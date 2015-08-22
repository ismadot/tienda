@extends('admin.template')

@section('content')

    <div class="container text-center">
        
        <div class="page-header">
            <h1>
                <i class="fa fa-user"></i> USUARIOS <small>[ Agregar usuario ]</small>
            </h1>
        </div>
        
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">
                    
                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    
                    {!! Form::open(['route'=>'admin.user.store']) !!}
        
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            
                            {!! 
                                Form::text(
                                    'name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre...',
                                        'autofocus' => 'autofocus',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="last_name">Apellidos:</label>
                            
                            {!! 
                                Form::text(
                                    'last_name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa los apellidos...',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            
                            {!! 
                                Form::text(
                                    'email', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el correo...',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="user">Usuario:</label>
                            
                            {!! 
                                Form::text(
                                    'user', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre de usuario...',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password:</label>
                            
                            {!! 
                                Form::password(
                                    'password', 
                                    array(
                                        'class'=>'form-control',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="confirm_password">Confirmar Password:</label>
                            
                            {!! 
                                Form::password(
                                    'password_confirmation',
                                    array(
                                        'class'=>'form-control',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="type">Tipo:</label>
                            
                            {!! Form::radio('type', 'user', true) !!} User
                            {!! Form::radio('type', 'admin') !!} Admin
                        </div>
                        
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            
                            {!! 
                                Form::textarea(
                                    'address', 
                                    null, 
                                    array(
                                        'class'=>'form-control'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="active">Active:</label>
                            
                            {!! Form::checkbox('active', null, true) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ route('admin.user.index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        
    </div>

@stop
