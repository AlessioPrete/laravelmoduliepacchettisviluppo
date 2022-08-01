@if (config('alessioprete.base.show_powered_by') || config('alessioprete.base.developer_link'))
    <div class="text-muted ml-auto mr-auto">
      @if (config('alessioprete.base.developer_link') && config('alessioprete.base.developer_name'))
      Realizzato da: <a target="_blank" rel="noopener" href="{{ config('alessioprete.base.developer_link') }}">{{ config('alessioprete.base.developer_name') }}</a>.
      @endif
    </div>
@endif
