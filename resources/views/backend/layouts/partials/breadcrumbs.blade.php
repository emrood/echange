<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{asset('/')}}" class="link">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('page-title',isset($current) ? $current : '')</li>
                    </ol>
                </nav>
            </div>
            <h4 class="page-title">@yield('page-title',isset($current) ? $current : '')</h4>
        </div>

    </div>
</div>