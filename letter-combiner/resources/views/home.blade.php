@extends('layout.base')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="{{ route('string.calculatorCombiner') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Por favor ingrese las 12 letras</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ejemplo: MFJNERJNRFKV" name="letters">
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInputGroup">Ingrese el numero de campos de la palabra</label>
                        <div class="input-group mb-2">
                            <input type="number" class="form-control" id="inlineFormInputGroup" name="lengthWord">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Calcular combinaciones</button>
                </div>
            </form>

            <!-- Hide Table -->
            @isset($arrPassResult)
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Palabras sugeridas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($arrPassResult as $value)
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $value }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endisset
        </div>
    </div>
</div>
@endsection