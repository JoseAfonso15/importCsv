<div>
    <form wire:submit.prevent="import" enctype="multipart/form-data">
        @csrf
        <input type="file" wire:model="importFile" class="@error('import_file') is-invalid @enderror">
        <button class="btn btn-outline-secondary">Importar</button>
        @error('import_file')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </form>

    @if($importing && !$importFinished)
    <div wire:poll="updateImportProgress">Importação iniciada... aguarde</div>
    @endif

    @if($importFinished)
    Finished importing.
    @endif
</div>