<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}" /> {{-- Encrypted CSRF token for Laravel, in order for Ajax requests to work --}}
<title>{{ isset($title) ? $title.' :: '.config('alessioprete.base.project_name') : config('alessioprete.base.project_name') }}</title>
@yield('before_styles')
@stack('before_styles')
@if (config('alessioprete.base.styles') && count(config('alessioprete.base.styles')))
    @foreach (config('alessioprete.base.styles') as $path)
        <link rel="stylesheet" type="text/css" href="{{ asset($path).'?v='.config('alessioprete.base.version') }}">
    @endforeach
@endif
@if (config('alessioprete.base.mix_styles') && count(config('alessioprete.base.mix_styles')))
    @foreach (config('alessioprete.base.mix_styles') as $path => $manifest)
        <link rel="stylesheet" type="text/css" href="{{ mix($path, $manifest) }}">
    @endforeach
@endif
