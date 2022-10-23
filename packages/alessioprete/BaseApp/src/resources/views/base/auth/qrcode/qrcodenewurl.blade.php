@extends(alessioprete_view('layouts.coreui'))

@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('storepage')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <x-input id="bimbo" label="Nome Qr Code" field="title" ph="Titolo"></x-input>
                        </div>
                    </div>
                    <x-input id="url" label="Pagina web - url" field="url" ph="url"></x-input>
                    <div id="qrcode">

                        <input type="file" name="qr" style="display: none;">
                    </div>
                    <button id="genera" type="submit" class="btn btn-primary float-end mx-2" disabled>Genera</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $("#url").on("change paste keyup", function() {

            if ($('#url').val() != '') {
                $('#genera').prop('disabled', false);
            }
        });
    </script>
@endsection
