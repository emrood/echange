@extends('backend.layouts.app')
@section('title') {{ 'Edit Blog Category | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Edit Blog Category'])
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
                            <div class="col-lg-8 col-12 align-content-center">
                                @can('edit-blog-category')
                                    <form  method="post"
                                           action="{{url('blog-category/edit/'.$category->id)}}">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 control-label">Blog Category Title</label>
                                            <div class="col-sm-9">
                                                <input type="text"
                                                       class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                                       name="title" value="{{ $category->title }}" autofocus>
                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                                @endif </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <div class="col-12 text-center">
                                                @can('view-blog-category')
                                                <a class="btn btn-danger m-t-10 mr-5"
                                                   href="{{url('role-management')}}">Back</a>
                                                @endcan
                                                <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                @endcan
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
 </div>
@endsection

@push('js')
@endpush