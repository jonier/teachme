@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Uups!</strong> Hay un problema con su Ingreso, por favor corrige los siguientes puntos:<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif