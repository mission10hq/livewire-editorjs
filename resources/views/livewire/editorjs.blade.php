<div
    x-data="editorInstance('data', '{{ $editorId }}', {{ $readOnly ? 'true' : 'false' }}, '{{ $placeholder }}', '{{ $logLevel }}')"
   
    class="{{ $class }}"
    style="{{ $style }}"
    wire:ignore
>
    <div id="{{ $editorId }}"></div>
</div>
