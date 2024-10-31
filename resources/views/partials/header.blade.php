<header>
    {{-- utilizzo un flag per permettermi di nascondere l'header nelle pages --}}
    @if (!isset($hideHeader) || !$hideHeader)
        <header>
            <div class="container d-flex align-items-center justify-content-center my-2">
                <nav class="col-12 d-flex align-items-center justify-content-between">
                    <div class="w-100 justify-content-center d-flex">
                        <ul class="nav-menu list-unstyled gap-3 d-flex ">
                            <li class="fw-bold fs-4 text-center"><a href="{{ route('pages.index') }}">HOME</a></li>
                        </ul>
                    </div>

        </header>
    @endif

</header>
