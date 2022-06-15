<div>
    <a wire:click="export" class="btn btn-outline-primary">Exportar</a>

    @if($exporting && !$exportFinished)
    <div class="d-inline" wire:poll="updateExportProgress">Exportação iniciada... aguarde</div>
    @endif

    @if($exportFinished)
    Download <a class="stretched-link" wire:click="downloadExport">aqui</a>
    @endif
</div>