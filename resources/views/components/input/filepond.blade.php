<div
    wire:ignore
    x-data
    x-init="
        FilePond.create($refs.{{ $attributes['x-ref']  }}, {
             server: {
                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
                },
                revert: (filename, load) => {
                    @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
                },
            },

            labelIdle: 'Déposez un fichier ou <span class=\'filepond--label-action\'> Choisissez </span>'
        });
    "
>
    <input type="file" x-ref="{{ $attributes['x-ref']  }}">
</div>
