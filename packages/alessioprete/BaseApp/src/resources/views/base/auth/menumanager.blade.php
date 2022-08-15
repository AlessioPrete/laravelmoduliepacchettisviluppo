@extends(alessioprete_view('layouts.coreui'))
@section('content')
    {!! APMenu::render() !!}
@endsection
@push('scripts')
    {!! APMenu::scripts() !!}
@endpush
