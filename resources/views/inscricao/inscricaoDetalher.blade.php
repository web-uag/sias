@extends('layouts.base')

@section('Title')
    Inscricao - {{$inscricao->id}}
@endsection

@section('main')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-gray-400">
                    <h4 class="mb-0 text-gray-900">Edital</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label>Programa:</label>
                            <p>{{$inscricao->editais->programa->descricao}}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>Valor do benefício:</label>
                            <p>{{$inscricao->editais->programa->valor_beneficio}}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>Data do edital:</label>
                            <p>{{$inscricao->editais->data_edital}}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>Número:</label>
                            <p>{{$inscricao->editais->numero_edital}}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>Arquivo:</label>
                            <p><a href="{{ asset('storage/'.$inscricao->editais->arquivo_edital)}}">Documento</a></p>
                        </div>
                    </div>
                </div>
                <div class="card-header py-3 bg-gray-400">
                    <h4 class="mb-0 text-gray-900">Informações Pessoais</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label>Nome completo:</label>
                            <p>{{$user->nome_completo}}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>Email:</label>
                            <p>{{$user->email}}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>Email:</label>
                            <p>{{$user->email}}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>CPF:</label>
                            <p>{{$user->cpf}}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>Data de Nascimento:</label>
                            <p>{{$user->data_nascimento}}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>Endereço:</label>
                            <p>{{$user->endereco}}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>Relato Familiar:</label>
                            <p><a href="{{ asset('storage/'.$user->candidatos->relato_familiar)}}">Documento</a></p>
                        </div>
                        <div class="col-12 col-md-4">
                            <label>Declaracão de rendimentos:</label>
                            <p><a href="{{ asset('storage/'.$user->candidatos->declaracao_rendimento)}}">Documento</a></p>
                        </div>
                    </div>
                </div>
                <div class="card-header py-3 bg-gray-400">
                    <h4 class="mb-0 text-gray-900">Familiares</h4>
                </div>
                <div class="card-body">
                    @foreach($inscricao->familias as $f)
                        <hr>
                        <div class="row">
                            <div class="col-12 card-header py-3 bg-gray-400"><h5>Informações Gerais</h5></div>
                            <div class="col-12 col-md-4">
                                <label>Nome completo:</label>
                                <p>{{$f->nome}}</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <label>CPF:</label>
                                <p>{{$f->cpf}}</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <label>Data de nascimento:</label>
                                <p>{{$f->data_nascimento}}</p>
                            </div>

                            @if($f->declaracao_autonomo != null)
                                <div class="col-12 col-md-4">
                                    <label>Declaração de autônomo:</label>
                                    <p><a href="{{ asset('storage/'.$f->declaracao_autonomo)}}">Documento</a></p>
                                </div>
                            @endif

                            @if($f->declaracao_agricultor != null)
                                <div class="col-12 col-md-4">
                                    <label>Declaração de agricultor:</label>
                                    <p><a href="{{ asset('storage/'.$f->declaracao_agricultor)}}">Documento</a></p>
                                </div>
                            @endif

                            <div class="col-12 col-md-4">
                                <label>Escolaridade:</label>
                                <p>{{$f->escolaridade}}</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <label>Renda Mensal:</label>
                                <p>{{$f->renda_mensal}}</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <label>Profissão:</label>
                                <p>{{$f->profissao}}</p>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 card-header py-3 bg-gray-400"><h5>Saúde</h5></div>
                            <div class="col-12 col-md-4">
                                <label>Despesa mensal:</label>
                                <p>{{$f->saudes->despesa_mensal}}</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <label>Plano de saúde:</label>
                                <p>{{$f->saudes->flag_plano ? "Sim" : "Não"}}</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <label>Doença:</label>
                                <p>{{$f->saudes->flag_doenca ? "Sim" : "Não"}}</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <label>Dificuldade:</label>
                                <p>{{$f->saudes->flag_dificuldade ? "Sim" : "Não"}}</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <label>Deficiência:</label>
                                <p>{{$f->saudes->flag_deficiencia ? "Sim" : "Não"}}</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <label>Valor do plano:</label>
                                <p>{{$f->saudes->valor_plano}}</p>
                            </div>
                        </div>
                        @if($f->outrasinfos != null)
                            <div class="row">
                                <div class="col-12 card-header py-3 bg-gray-400"><h5>Outras Informações</h5></div>
                                @foreach($f->outrasinfos as $o)
                                    <div class="col-12 col-md-6">
                                        <label>Atividade:</label>
                                        <p>{{$o->atividade}}</p>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label>Renda:</label>
                                        <p>{{$o->renda}}</p>
                                    </div>

                                @endforeach

                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        @can('inscricao', App\Models\Candidato::class)
        <div class="card-footer">
            <button class="btn btn-primary">Voltar ao início</button>
        </div>
        @endcan

        @can('create', App\Models\Servidor::class)
        <div class="card-footer">
            <a class="btn btn-primary float-right" href="{{route('adicionarBeneficiario', ['id'=> $user->id, 'edital_user_id' => $inscricao->id])}}">Tornar beneficiario</a>
        </div>
        @endcan

    </div>
@endsection

@section('js')

@endsection
