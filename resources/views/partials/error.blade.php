@if (count($errors) > 0)
<div class="alert alert-danger">
        <strong>oooh!</strong> Por favor Corregir Errores.<br><br>
        <ul>
                @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                @endforeach
        </ul>
</div>
@endif