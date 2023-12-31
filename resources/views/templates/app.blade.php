@php
    use App\Models\Nasabah;
    use Illuminate\Support\Facades\Auth;

    $norek = Nasabah::where('user_id', Auth::id())
        ->pluck('no_tabungan')
        ->first();
@endphp

<!doctype html>
<html lang="en">

<head>
    @include('templates.header')
</head>

<body class="@yield('bg')">

    <!-- loader -->
    <div id="loader">
        {{-- <img src="{{ asset('assets/img/logo-icon.png') }}" alt="icon" class="loading-icon"> --}}
        <button class="btn btn-primary" type="button">
            <span class="spinner-border spinner-border-sm me-05" role="status" aria-hidden="true"></span>
            Loading...
        </button>
    </div>
    <!-- * loader -->

    @yield('header')

    @yield('content')

    <x-bottom-menu></x-bottom-menu>

    <!-- Topup Action Sheet -->
    <div class="modal fade action-sheet" id="topupActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Topup Saldo</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="bank">Virtual Account</label>
                                    <select class="form-control custom-select" name="bank" id="bank">
                                        <option value="0">BANK BRI</option>
                                        <option value="2">BANK MANDIRI</option>
                                        <option value="1">BANK PERMATA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Nomor Rekening</label>
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" name="no_rekening" id="no_rekening"
                                        value="KODEBANK{{ $norek }}">
                                </div>
                            </div>


                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">Salin Nomor VA</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Topup Action Sheet -->

    @include('templates.footer')

    @stack('myscript')

</body>

</html>
