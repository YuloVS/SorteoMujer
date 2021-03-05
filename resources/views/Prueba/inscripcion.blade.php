Inscripcion a Sorteo

<form action="{{ url('formulario') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <label for="Dni">{{'Dni'}}</label>
    <input type="text" name="dni" id="dni" value="{{old('dni')}}">

    @error('dni')
        <div class="error">{{ $message }}</div>
    @enderror

    <br/>

    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="nombre" id="Nombre" value="{{old('nombre')}}">

    @error('nombre')
        <div class="error">{{ $message }}</div>
    @enderror

    <br/>

    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="apellido" id="Apellido" value="{{old('apellido')}}">

    @error('apellido')
    <div class="error">{{ $message }}</div>
    @enderror

    <br/>

    <label for="Telefono">{{'Telefono'}}</label>
    <input type="text" name="telefono" id="Telefono" value="{{old('telefono')}}">
    @error('telefono')
    <div class="error">{{ $message }}</div>
    @enderror

    <label for="email">{{'email'}}</label>
    <input type="email" name="email" id="email" value="{{old('email')}}">
    @error('email')
    <div class="error">{{ $message }}</div>
    @enderror
    <br/>

    <input type="submit" value="Agregar">

    {{-- <a href="{{ url('nueva-persona') }}" >Regresar</a> --}}


</form>
