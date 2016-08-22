@if(! $errors->isEmpty())
    <div class="alert alert-danger">
        <p><strong>Oops!</strong> Hay errores, solucionalos</p>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif