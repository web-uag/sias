    @extends('.layouts.base')

    @section('Title', "Programa")
    @section('main')
    <form method="post" action="{{route('createPrograma')}}">
        @csrf

        Descrição: <input type="text" name="descricao" @error('descricao') is-invalid @enderror" value ="{{ old('descricao')}}" required autofocus><br>
        @error('descricao')
        <span class="invalid-feedback" role="alert">
        		<strong>{{$message}}</strong><br>
        	</span>
        @enderror

        Valor do Benefício: <input type="text" name="valor_beneficio" @error('valor_beneficio') is-invalid @enderror" value ="{{ old('valor_beneficio')}}" required autofocus><br>
        @error('valor_beneficio')
        <span class="invalid-feedback" role="alert">
        		<strong>{{$message}}</strong><br>
        	</span>
        @enderror
        <input type="submit" value="Cadastrar">
    </form>

    <h1>Lista Programas</h1>
    <table>
        <thead>
            <tr>
               <th>Descrição</th>
               <th>Valor do Benefício</th>
                <th></th>
               <th></th>
               <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($programas as $p)
                <tr >
                    <td>{{$p->descricao}}</td>
                    <td>{{$p->valor_beneficio}}</td>
                    <td> <a href="{{route('listAnexos', ['id' => $p->id])}}">Anexos</a></td>
                    <td><a>Atualizar</a></td>
                    <td><a href="{{route('deletePrograma', ['id' =>$p->id])}}">Deletar</a></td>
                    <td><a href="{{route('listBolsaPrograma', ['idPrograma' =>$p->id])}}">Bolsas</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
    @endsection
