@extends('backend.layouts.app')
@section('title') {{ 'Edit Role | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Edit Role'])
@endsection

@push('before-css')

@endpush


@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-12 align-self-center">
                                <form class="form-horizontal" method="post" action="{{url('role/'.$role->id.'/edit')}}">
                                    {{csrf_field()}}
                                    <div class="form-group text-center">
                                        <label for="name" class="col-lg-3 col-12 control-label">Nom du role</label>
                                        <div class="col-12 col-lg-7 mx-auto">
                                            <input type="text"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   name="name" value="{{ $role->name }}" autofocus>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif </div>
                                    </div>

                                    <table class="table table-striped table-responsive">
                                        <tr>
                                            <th colspan="6" class="text-center">Accorder des autorisations</th>
                                        </tr>
                                        <tr>
                                            <th>No.</th>
                                            <th>Menu</th>
                                            <th class="text-center">Voir</th>
                                            <th class="text-center">Ajouter</th>
                                            <th class="text-center">Editer</th>
                                            <th class="text-center">Supprimer</th>
                                        </tr>
                                        @foreach($laravelAdminMenus->menus as $section)
                                            @if(count(collect($section->items)) > 0)
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                        <input type="checkbox" value="" name="all_view" id="all_view">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" value="" name="all_add" id="all_add">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" value="" name="all_edit" id="all_edit">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" value="" name="all_delete"
                                                               id="all_delete">
                                                    </td>
                                                </tr>
                                                @foreach($section->items as $key=>$menu)
                                                    @php @endphp
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{ $menu->title }}</td>
                                                        @php $permissions = \App\Permission::permissionList($menu->title);
                                                        @endphp

                                                        <td class="text-center">

                                                            <input @if(in_array($permissions['view'],$role_permissions)) checked
                                                                   @endif type="checkbox" class="view"
                                                                   name="permissions[]"
                                                                   value="{{$permissions['view']}}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input @if(in_array($permissions['add'],$role_permissions)) checked
                                                                   @endif type="checkbox" class="add"
                                                                   name="permissions[]"
                                                                   value="{{$permissions['add']}}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input @if(in_array($permissions['edit'],$role_permissions)) checked
                                                                   @endif type="checkbox" class="edit"
                                                                   name="permissions[]"
                                                                   value="{{$permissions['edit']}}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input @if(in_array($permissions['delete'],$role_permissions)) checked
                                                                   @endif type="checkbox" class="delete"
                                                                   name="permissions[]"
                                                                   value="{{$permissions['delete']}}">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </table>

                                    <div class="form-group m-b-0">
                                        <div class="col-md-12 text-center">
                                            <a class="btn btn-danger m-t-10 mr-5"
                                               href="{{url('role-management')}}">Retour</a>
                                            <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">
                                                Mettre à jour
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

    <script>

        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function () {
            new Switchery($(this)[0], $(this).data());
        });

        $(document).ready(function () {
            //Select all View check boxes
            $('#all_view').click(function () {
                if ($(this).attr("checked")) {
                    $('.view').click();
                } else {
                    $('.view').click();
                }
            });

            //Select all Add check boxes
            $('#all_add').click(function () {
                if ($(this).attr("checked")) {
                    $('.add').click();
                } else {
                    $('.add').click();
                }
            });

            //Select all Edit check boxes
            $('#all_edit').click(function () {
                if ($(this).attr("checked")) {
                    $('.edit').click();
                } else {
                    $('.edit').click();
                }
            });

            //Select all Delete check boxes
            $('#all_delete').click(function () {
                if ($(this).attr("checked")) {
                    $('.delete').click();
                } else {
                    $('.delete').click();
                }
            });
        });
    </script>
@endpush