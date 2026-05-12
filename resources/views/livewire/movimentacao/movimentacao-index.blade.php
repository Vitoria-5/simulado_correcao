<div class="mt-5">
  @if (session()->has('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
  @endif
  @if (session()->has('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  <div class="mb-3">
    <input type="text" wire:model.live='search' placeholder="pesquisar..." class="form-control">
  </div>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Produto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Quantidade movimentada</th>
        <th scope="col">Data da movimentação</th>
         <th scope="col">Usuário</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($movimentacao as $m)
      <tr>
        <td scope="row">{{ $m->produto_id }} - {{$m->produto->nome}}</td>
        <td>@if( $m->tipo == 'entrada')
          <span class="badge bg-primary">Entrada</span>
          @else 
          <span class="badge bg-danger">Saída</span>
          @endif
        </td>
        <td>{{ $m->quantidade }}</td>
        <td>{{ \Carbon\Carbon::parse($m->data_movimentacao)->format('d/m/Y') }}</td>
        <td>{{ $m->user_id }} - {{$m->user->name}}</td>
        <td>
        
        <button wire:click='delete({{ $m->id }}) ' class="btn btn-sm btn-danger">Excluir</button>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>