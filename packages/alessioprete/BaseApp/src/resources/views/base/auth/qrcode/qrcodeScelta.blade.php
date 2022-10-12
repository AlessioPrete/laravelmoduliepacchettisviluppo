@extends(alessioprete_view('layouts.coreui'))

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="form-check">
                <input class="form-check-input selezione" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    Url - Pagina web
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input selezione" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Biglietto da visita con Vcard
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input selezione" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios3">
                    Vcard
                </label>
            </div>
        </div>
        <div class="row bg-secondary bg-opacity-25 p-2">
            <div class="col text-center">
                <button id="bottone" type="button" class="btn btn-primary" disabled onclick="avanti()">Avanti</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.selezione').change(
            function () {
                $('#bottone').prop('disabled', false);
            }
        );
        function avanti() {
                    QrCode = $('input:checked').val();
                    switch (QrCode) {
                        case 'option1':
                            window.location = '{{route('qrcodeurl')}}';
                            console.log('opzione 1');
                        break;
                        case 'option2':
                        case 'option3':
                            console.log('mannaggia');
                        break;
                        default:
                            console.log('spiacente nessuna selezione');
                    }
        }
    </script>
@endsection
