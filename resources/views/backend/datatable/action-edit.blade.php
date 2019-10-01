@if(auth()->user()->can('edit-'.$label) || auth()->user()->isAdmin())
    <a href="{{$route }}"
   class="btn btn-sm btn-info mb-1"><i class="icon-pencil"></i></a>
@endif