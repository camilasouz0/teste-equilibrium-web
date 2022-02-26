<div class="mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 xl:grid-cols-5">
        <div class="p-6">
            <table class="rwd-table">
            <tr>
                <th><span class="text-white">Nome</span></th>
                <th><span class="text-white">CPF</span></th>
                <th><span class="text-white">Carteira de Trabalho</span></th>
                <th><span class="text-white">Setor</span></th>
                <th><span class="text-white">Telefones</span></th>
                <th><span class="text-white">Opções</span></th>
            </tr>
        
            @if (count($funcionarios))
                @foreach($funcionarios as $funcionario)
                    <tr class="w-full">
                        <td data-th="Nome">
                            <span class="text-white-50">{{ $funcionario->nome }}</span>
                        </td>
                        <td data-th="cpf">
                            <span class="text-white-50">{{$funcionario->cpf}}</span>
                        </td>
                        <td data-th="Carteira">
                            <span class="text-white-50">{{$funcionario->carteira_trabalho}}</span>
                        </td>
                        <td data-th="Setor">
                            <span class="text-white-50">{{$funcionario->setor->nome}}</span>
                        </td>
                        <td data-th="Telefones">
                            <ul>
                            @foreach ($funcionario->telefones as $contato)
                                <li> <span class="text-white-50">{{$contato['telefone']}}</span> </li>
                            @endforeach
                            </ul>
                        </td>
                        <td data-th="Opções">
                            <a href="{{ route('site.pages.funcionarios', $funcionario->id) }}" class="btn btn-info text-white">
                                <i class="far fa-edit me-2"></i>
                                <span class="d-none d-md-block">Editar</span>
                                </a>
                
                                <a data-url="{{ route('site.pages.funcionarios.destroy', $funcionario->id) }}" href="javascript:void(0)" class="btn btn-outline-danger atencao">
                                <i class="fas fa-ban me-2"></i>
                                <span class="d-none d-md-block">Excluir</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                @endif
            </table>
        </div>
    </div>
</div>