<?php

use Illuminate\Database\Migrations\Migration;

?>
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <form action="{{route('financeiro.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <!-- <input type="text" class="form-control" id="descricao" placeholder="Digite uma descrição" name="descricao" required> -->
                        </div>
                        <div class="mb-3">
                            <label for="tipo">Selecione o tipo</label>
                            <select class="form-select" id="tipo" name="tipo" required>
                                <option value="E">E</option>
                                <option value="S">S</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <!-- <label for="valor" class="form-label">Valor</label> -->
                            <!-- <input type="number" class="form-control" id="valor" placeholder="1.000" name="valor" required> -->

                            @if($errors->any())
                            {{ $errors[1] }}
                            
                            @endif
                        </div>
                        <input type="submit" name="submit" class="btn btn-success" style="background-color: #198754;">
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>