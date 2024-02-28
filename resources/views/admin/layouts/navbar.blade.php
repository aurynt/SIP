<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">SIP Kota Tegal</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $title }}</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">{{ $title }}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <div class="nav-link font-weight-bold px-0">
                        <span class="d-sm-inline d-none btn btn-link text-secondary" id="btn-logout">
                            Sign Out
                            <i class="fa fa-sign-out me-sm-1 ms-1"></i>
                        </span>
                    </div>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $('#btn-logout').click(function() {
        window.csrfToken = "{{ csrf_token() }}";
        const token = localStorage.getItem('apiToken');
        $.ajax({
            type: 'POST',
            url: "{{ route('logout-web') }}",
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            success: function(response) {
                localStorage.removeItem('apiToken');
                window.location.href = '/';
            },
            error: function(error) {
                console.log(error);
            },
        });
    });
</script>
