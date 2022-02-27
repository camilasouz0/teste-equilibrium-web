@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="w-50 sm:px-6 lg:px-8">
        <div class="flex justify-center mt-5">
            <div class="card-body">
                <h5 class="card-title text-gray-900 dark:text-white">{{ isset($funcionario->id) ? 'Editar funcionário' : 'Cadastro de funcionário'}}</h5>
                @if (!empty($funcionario->id))
                {!! Form::model($funcionario, ['route' => ['site.pages.funcionarios.update', $funcionario->id], 'method' => 'POST']) !!}
                @else
                {!! Form::model(null, ['route' => 'site.pages.funcionarios.post', 'method' => 'POST']) !!}
                @endif
                    @csrf
                  
                    <div class="panel-body align-items-center">
                        <div class="form-group">
                            <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="nome">Nome</label>
                            {!! Form::text('nome', null, ['class' => 'form-control form-control-lg'. ($errors->has('nome') ? 'is-invalid' : ''), 'placeholder' => 'Nome']) !!}
                            <div class="invalid-feedback fs-4">
                                @error('nome')
                                {{$errors->first('nome')}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="cpf">CPF</label>
                            {!! Form::text('cpf', null, ['class' => 'form-control form-control-lg w-100'. ($errors->has('cpf') ? 'is-invalid' : ''), 'placeholder' => 'CPF', 'id' => 'cpf']) !!}
                            <div class="invalid-feedback fs-4">
                                @error('cpf')
                                {{$errors->first('cpf')}}
                                @enderror
                            </div>
                        </div>
                  
                        <div class="form-group">
                            <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="carteira">Carteira de trabalho</label>
                            {!! Form::text('carteira_trabalho', null, ['class' => 'form-control form-control-lg w-100'. ($errors->has('carteira_trabalho') ? 'is-invalid' : ''), 'placeholder' => 'Carteira de trabalho']) !!}
                            <div class="invalid-feedback fs-4">
                                @error('carteira_trabalho')
                                {{$errors->first('carteira_trabalho')}}
                                @enderror
                            </div>
                        </div>
                  
                        <div class="form-group">
                            <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="setor">Setor</label>
                            {!! Form::select('setor_id', ['' => 'Selecione o setor'] + $setor, null,['class' => 'form-select form-select-lg w-100']) !!}
                
                            <div class="invalid-feedback fs-4">
                                @error('setor_id')
                                {{$errors->first('setor_id')}}
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex mt-2 mb-0">
                            <div class="input-group">
                                <button type="button" class="btn btn-primary btn-md add">+</button>
                                <button type="button" class="btn btn-danger btn-md remove">-</button>
                            </div>
                        </div>

                        @if(isset($funcionario->telefones))
                            @foreach ($funcionario->telefones as $telefone)
                            <div class="input-group divclone mb-2">
                                <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="telefone">Telefone</label>
                                {!! Form::text('telefone[]', $telefone, ['class' => 'form-control form-control-lg w-100 telefone'. ($errors->has('telefone') ? 'is-invalid' : ''), 'placeholder' => 'Telefone']) !!}
                                <div class="invalid-feedback fs-4">
                                    @error('telefone')
                                    {{$errors->first('telefone')}}
                                    @enderror
                                </div>
                            </div>
                            @endforeach
                        @else
                        <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="telefone">Telefone</label>   
                            <div class="input-group divclone mb-2">
                                {!! Form::text('telefone[]', null, ['class' => 'form-control form-control-lg w-100 telefone'. ($errors->has('telefone') ? 'is-invalid' : ''), 'placeholder' => 'Telefone']) !!}
                                <div class="invalid-feedback fs-4">
                                    @error('telefone')
                                    {{$errors->first('telefone')}}
                                    @enderror
                                </div>
                            </div>
                        @endif

                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button type="submit" href="#" class="btn-theme">
                                    Salvar
                                </button>
                            </div>

                            <div class="btn-group">
                                <a href="{{ route('site.index') }}" class="btn-theme-dark">Voltar</a>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection