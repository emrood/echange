@if(auth()->user()->can('view-'.$label) || auth()->user()->isAdmin())
<a href="{{ $route }}"
   class="btn btn-sm btn-primary mb-1"><i class="icon-eye"></i></a>
@endif