<a data-method="restore" data-trans-button-cancel="Cancel"
   data-trans-button-confirm="Restore" data-trans-title="Are you sure?"
   class="btn btn-sm mb-1 btn-success text-white" style="cursor:pointer;"
   onclick="$(this).find('form').submit();">
   Restore
    <form action="{{asset($label.'/restore/'.$value)}}"
          method="POST" name="restore_item" style="display:none">
        @csrf
    </form>
</a>

<a data-method="delete" data-trans-button-cancel="Cancel"
   data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
   class="btn btn-sm mb-1 btn-danger delete text-white" style="cursor:pointer;"
   onclick="$(this).find('form').submit();">
    Permanently Delete
    <form action="{{asset($label.'/destroy/'.$value)}}"
          method="POST" name="delete_item" style="display:none">
        @csrf
    </form>
</a>
