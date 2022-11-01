<?php

use Illuminate\Database\Migrations\Migration;

?>
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <form action="{{route('financeiro.update', ['id' => $pagamento->id])}}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="descricao" value="{{ $pagamento->descricao }}" placeholder="Digite uma descrição" name="descricao" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipo">Selecione o tipo</label>
                            <select class="form-select" id="tipo" name="tipo" required>
                                <option value="s" {{ $pagamento->tipo == 's' ? 'selected': ''}}>S</option>
                                <option value="e" <?= $pagamento->tipo == 'e' ? "selected" : '' ?>>E</option>


                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor</label>
                            <input type="number" class="form-control" id="valor" value="{{ $pagamento->valor }}" placeholder="1.000" name="valor" required>
                        </div>
                        <input type="submit" name="submit" class="btn btn-success" style="background-color: #198754;">
                    </form>



                </div>
            </div>
        </div>
    </div>

</x-app-layout>