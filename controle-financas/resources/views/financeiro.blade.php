<?php

use Illuminate\Database\Migrations\Migration;

?>
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pagamentos as $pagamento)
                            <tr>
                                <td>{{$pagamento->id}}</td>
                                <td>{{$pagamento->descricao}}</td>
                                <td>{{$pagamento->tipo}}</td>
                                <td>{{$pagamento->valor}}</td>
                                <td style="display:flex; gap:5px;">
                                    <a class="btn btn-primary" href="{{route('financeiro.edit',['id'=>$pagamento->id])}}">Editar</a>
                                    <form id="delete" method="POST" action="{{route('financeiro.destroy',['id'=>$pagamento->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <div class="btn btn-danger">
                                            <button type="submit" id="liveToastBtn">Deletar</button>
                                            <div class="total">
                                                <span>Total:</span>
                                                <span>{{}}</span>
                                            </div>
                                        </div>

                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{route('financeiro.create')}}">Adicionar</a>


                </div>
            </div>
        </div>
    </div>
    

</x-app-layout>