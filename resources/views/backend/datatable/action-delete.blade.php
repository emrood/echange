@if(auth()->user()->can('delete-'.$label) || auth()->user()->isAdmin())

    <a class="btn btn-sm btn-danger delete text-white mb-1" style="cursor:pointer;">
    <i class="fa fa-trash"></i>
    <form action="{{$route}}"
          method="POST" name="delete_item" style="display:none">
        @csrf
        {{method_field('DELETE')}}

    </form>
</a>
@endif

