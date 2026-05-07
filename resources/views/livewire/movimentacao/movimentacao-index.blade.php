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

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Produto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Quantidade movimentada</th>
        <th scope="col">Data da movimentação</th>
         <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($movimentacao as $m)
      <tr>
        <td scope="row">{{ $m->produto_id }}</td>
        <td>{{ $m->tipo }}</td>
        <td>{{ $m->quantidade }}</td>
        <td>{{ $m->data_movimentacao }}</td>
        <td>
        
        <button wire:click='delete({{ $m->id }}) ' class="btn btn-sm btn-danger">Excluir</button>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>