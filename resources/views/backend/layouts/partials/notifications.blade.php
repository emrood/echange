@if(session()->has('message'))
    <div class="alert alert-success alert-rounded mb-0">
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger alert-rounded mb-0">
        {{session('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
@endif