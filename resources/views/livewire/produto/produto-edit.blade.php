<div class="mt-5">
    <form class="row g-3" wire:submit.prevent='update'>
        <div class="col-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="EX: Joana Pereira..." wire:model='nome'>
        </div>
        <div class="col-12">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control" id="valor" placeholder="EX: R$74,90..." wire:model='valor'>
        </div>
        <div class="col-md-12">
            <label for="qtd_estoque" class="form-label">Quantidade no estoque</label>
            <input type="text" class="form-control" id="qtd_estoque" placeholder="EX: 100 unidades..."
                wire:model='qtd_estoque'>
        </div>
        <div class="col-md-12">
            <label for="qtd_minima" class="form-label">Quantidade mínima</label>
            <input type="text" class="form-control" id="qtd_minima" placeholder="EX: 30 unidades..."
                wire:model='qtd_minima'>
        </div>
        <div class="col-12">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
