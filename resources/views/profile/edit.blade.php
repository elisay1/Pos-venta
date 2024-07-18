@extends('template')

@section('title', 'Editar Perfil de Usuario')

@push('css')
@endpush

@section('content')

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Editar Perfil</h4>
            <h6>Perfil de Usuario</h6>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="profile-set">
                    <div class="profile-head"></div>
                    <div class="profile-top">
                        <div class="profile-content">
                            <div class="profile-contentimg">
                                <img src="{{ $user->imagen ? Storage::url('public/user/' . $user->imagen) : 'assets/img/customer/customer5.jpg' }}" alt="img" id="blah">
                                <div class="profileupload">
                                    <input type="file" id="imgInp" name="imagen">
                                    <a href="javascript:void(0);">
                                        <i class="fas fa-pencil-alt"></i>
                                      </a>
                                </div>
                            </div>
                            <div class="profile-contentname">
                                <h2>{{ $user->name }}</h2>
                                <h4>Actualiza tu foto y detalles personales.</h4>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="input-blocks">
                                <label class="form-label">Nombre</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="input-blocks">
                                <label class="form-label">Apellido</label>
                                <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido', $user->apellido) }}">
                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="input-blocks">
                                <label class="form-label">Correo Electrónico</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="input-blocks">
                                <label class="form-label">Teléfono</label>
                                <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $user->telefono) }}">
                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="input-blocks">
                                <label class="form-label">Contraseña (Dejar en blanco para no cambiar)</label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="pass-input form-control @error('password') is-invalid @enderror">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-submit me-2">Guardar</button>
                            <a href="{{ route('profile.index') }}" class="btn btn-cancel">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    document.getElementById('imgInp').onchange = function (evt) {
        const [file] = evt.target.files;
        if (file) {
            document.getElementById('blah').src = URL.createObjectURL(file);
        }
    };
</script>
@endpush
