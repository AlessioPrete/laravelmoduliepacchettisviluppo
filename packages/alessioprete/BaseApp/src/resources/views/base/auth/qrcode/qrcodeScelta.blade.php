@extends(alessioprete_view('layouts.coreui'))

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="form-check">
                <input class="form-check-input selezione" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    Default radio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input selezione" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Second default radio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input selezione" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                </label>
            </div>
            <button id="bottone" type="button" class="btn btn-primary" disabled><span class="cil-contrast btn-icon mr-2"></span> Primary</button>
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
    </script>
@endsection
