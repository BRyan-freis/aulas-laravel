@extends ('index')
 
@section ('content')
 
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Adicionar Usuários</h1>
</div>
<form class="form" method="POST" acion="{{ route('usuarios.create.post') }}">
@csrf  

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
            @if ($errors->has('name'))
            <div class="invalid-feedback">O campo nome é obrigatório</div>
            @endif
    </div>
 
    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email">
           @if ($errors->has('email'))
            <div class="invalid-feedback">O campo E-mail é obrigatório. Exemplo: teste@teste.co(com)</div>
           @endif
    </div>

    <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="text" class="form-control  @error('password') is-invalid @enderror" name="password">
           @if ($errors->has('password'))
            <div class="invalid-feedback">O campo Senha é obrigatório.</div>
           @endif
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>
@endsection
 