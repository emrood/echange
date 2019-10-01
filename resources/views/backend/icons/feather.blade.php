@extends('backend.layouts.app')
@section('title') {{ 'Feather Icons | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Feather Icons'])
@endsection

@push('before-css')
@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Feather Icons</h4>
                        <div class="icon-list-demo row mt-3">
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="activity"></i>activity
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="airplay"></i>
                                airplay </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="alert-circle"></i>alert-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="alert-octagon"></i>alert-octagon
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="alert-triangle"></i>alert-triangle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="align-center"></i>align-center
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="align-justify"></i>align-justify
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="align-left"></i>align-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="align-right"></i>align-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="anchor"></i>anchor
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="aperture"></i>aperture
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="archive"></i>archive
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-down-circle"></i>arrow-down-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-down-left"></i>arrow-down-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-down-right"></i>arrow-down-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-down"></i>arrow-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-left-circle"></i>arrow-left-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-left"></i>arrow-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-right-circle"></i>arrow-right-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-right"></i>arrow-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-up-circle"></i>arrow-up-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-up-left"></i>arrow-up-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-up-right"></i>arrow-up-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="arrow-up"></i>arrow-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="at-sign"></i>at-sign
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="award"></i>award
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="bar-chart-2"></i>bar-chart-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="bar-chart"></i>bar-chart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="battery-charging"></i>battery-charging
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="battery"></i>battery
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="bell-off"></i>bell-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="bell"></i>bell
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="bluetooth"></i>bluetooth
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="bold"></i>bold
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="book-open"></i>book-open
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="book"></i>book
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="bookmark"></i>bookmark
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="box"></i>box
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="briefcase"></i>briefcase
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="calendar"></i>calendar
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="camera-off"></i>camera-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="camera"></i>camera
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="cast"></i>cast
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="check-circle"></i>check-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="check-square"></i>check-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="check"></i>
                                check
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="chevron-down"></i>chevron-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="chevron-left"></i>chevron-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="chevron-right"></i>chevron-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="chevron-up"></i>chevron-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="chevrons-down"></i>chevrons-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="chevrons-left"></i>chevrons-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="chevrons-right"></i>chevrons-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="chevrons-up"></i>chevrons-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="chrome"></i>chrome
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="circle"></i>circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="clipboard"></i>clipboard
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="clock"></i>clock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="cloud-drizzle"></i>cloud-drizzle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="cloud-lightning"></i>cloud-lightning
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="cloud-off"></i>cloud-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="cloud-rain"></i>cloud-rain
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="cloud-snow"></i>cloud-snow
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="cloud"></i>cloud
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="code"></i>code
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="codepen"></i>codepen
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="coffee"></i>coffee
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="command"></i>command
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="compass"></i>compass
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="copy"></i>copy
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="corner-down-left"></i>corner-down-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="corner-down-right"></i>corner-down-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="corner-left-down"></i>corner-left-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="corner-left-up"></i>corner-left-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="corner-right-down"></i>corner-right-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="corner-right-up"></i>corner-right-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="corner-up-left"></i>corner-up-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="corner-up-right"></i>corner-up-right
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="cpu"></i>cpu
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="credit-card"></i>credit-card
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="crop"></i>crop
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="crosshair"></i>crosshair
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="database"></i>database
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="delete"></i>delete
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="disc"></i>disc
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="dollar-sign"></i>dollar-sign
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="download-cloud"></i>download-cloud
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="download"></i>download
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="droplet"></i>droplet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="edit-2"></i>edit-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="edit-3"></i>edit-3
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="edit"></i>edit
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="external-link"></i>external-link
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="eye-off"></i>eye-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="eye"></i>eye
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="facebook"></i>facebook
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="fast-forward"></i>fast-forward
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="feather"></i>feather
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="figma"></i>figma
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="file-minus"></i>file-minus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="file-plus"></i>file-plus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="file-text"></i>file-text
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="file"></i>file
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="film"></i>film
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="filter"></i>filter
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="flag"></i>flag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="folder-minus"></i>folder-minus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="folder-plus"></i>folder-plus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="folder"></i>folder
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="frown"></i>frown
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="gift"></i>gift
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="git-branch"></i>git-branch
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="git-commit"></i>git-commit
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="git-merge"></i>git-merge
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="git-pull-request"></i>git-pull-request
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="github"></i>github
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="gitlab"></i>gitlab
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="globe"></i>globe
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="grid"></i>grid
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="hard-drive"></i>hard-drive
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="hash"></i>hash
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="headphones"></i>headphones
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="heart"></i>heart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="help-circle"></i>help-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="home"></i>home
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="image"></i>image
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="inbox"></i>inbox
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="info"></i>info
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="instagram"></i>instagram
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="italic"></i>italic
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="key"></i>key
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="layers"></i>layers
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="layout"></i>layout
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="life-buoy"></i>life-buoy
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="link-2"></i>link-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="link"></i>link
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="linkedin"></i>linkedin
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="list"></i>list
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="loader"></i>loader
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="lock"></i>lock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="log-in"></i>log-in
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="log-out"></i>log-out
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="mail"></i>mail
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="map-pin"></i>map-pin
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="map"></i>map
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="maximize-2"></i>maximize-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="maximize"></i>maximize
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="meh"></i>meh
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="menu"></i>menu
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="message-circle"></i>message-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="message-square"></i>message-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="mic-off"></i>mic-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="mic"></i>mic
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="minimize-2"></i>minimize-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="minimize"></i>minimize
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="minus-circle"></i>minus-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="minus-square"></i>minus-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="minus"></i>minus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="monitor"></i>monitor
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="moon"></i>moon
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="more-horizontal"></i>more-horizontal
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="more-vertical"></i>more-vertical
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="mouse-pointer"></i>mouse-pointer
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="move"></i>move
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="music"></i>music
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="navigation-2"></i>navigation-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="navigation"></i>navigation
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="octagon"></i>octagon
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="package"></i>package
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="paperclip"></i>paperclip
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="pause-circle"></i>pause-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="pause"></i>pause
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="pen-tool"></i>pen-tool
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="percent"></i>percent
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="phone-call"></i>phone-call
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="phone-forwarded"></i>phone-forwarded
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="phone-incoming"></i>phone-incoming
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="phone-missed"></i>phone-missed
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="phone-off"></i>phone-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="phone-outgoing"></i>phone-outgoing
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="phone"></i>phone
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="pie-chart"></i>pie-chart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="play-circle"></i>play-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="play"></i>play
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="plus-circle"></i>plus-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="plus-square"></i>plus-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="plus"></i>plus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="pocket"></i>pocket
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="power"></i>power
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="printer"></i>printer
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="radio"></i>radio
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="refresh-ccw"></i>refresh-ccw
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="refresh-cw"></i>refresh-cw
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="repeat"></i>repeat
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="rewind"></i>rewind
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="rotate-ccw"></i>rotate-ccw
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="rotate-cw"></i>rotate-cw
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="rss"></i>rss
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="save"></i>save
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="scissors"></i>scissors
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="search"></i>search
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="send"></i>send
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="server"></i>server
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="settings"></i>settings
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="share-2"></i>share-2
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="share"></i>share
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="shield-off"></i>shield-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="shield"></i>shield
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="shopping-bag"></i>shopping-bag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="shopping-cart"></i>shopping-cart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="shuffle"></i>shuffle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="sidebar"></i>sidebar
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="skip-back"></i>skip-back
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="skip-forward"></i>skip-forward
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="slack"></i>slack
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="slash"></i>slash
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="sliders"></i>sliders
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="smartphone"></i>smartphone
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="smile"></i>smile
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="speaker"></i>speaker
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="square"></i>square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="star"></i>star
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="stop-circle"></i>stop-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="sun"></i>sun
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="sunrise"></i>sunrise
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="sunset"></i>sunset
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="tablet"></i>tablet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="tag"></i>tag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="target"></i>target
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="terminal"></i>terminal
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="thermometer"></i>thermometer
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="thumbs-down"></i>thumbs-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="thumbs-up"></i>thumbs-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="toggle-left"></i>toggle-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="toggle-right"></i>toggle-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="trash-2"></i>trash-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="trash"></i>trash
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="trello"></i>trello
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="trending-down"></i>trending-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="trending-up"></i>trending-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="triangle"></i>triangle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="truck"></i>truck
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="tv"></i>tv
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="twitter"></i>twitter
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="type"></i>type
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="umbrella"></i>umbrella
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="underline"></i>underline
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="unlock"></i>unlock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="upload-cloud"></i>upload-cloud
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="upload"></i>upload
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="user-check"></i>user-check
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="user-minus"></i>user-minus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="user-plus"></i>user-plus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="user-x"></i>user-x
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="user"></i>user
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="users"></i>users
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="video-off"></i>video-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="video"></i>video
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="voicemail"></i>voicemail
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="volume-1"></i>volume-1
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="volume-2"></i>volume-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="volume-x"></i>volume-x
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="volume"></i>volume
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="watch"></i>watch
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="wifi-off"></i>wifi-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="wifi"></i>wifi
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="wind"></i>wind
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="x-circle"></i>x-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="x-octagon"></i>x-octagon
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="x-square"></i>x-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="x"></i>x
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="youtube"></i>youtube
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="zap-off"></i>zap-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="zap"></i>zap
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="zoom-in"></i>zoom-in
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 w-icon"> <i class="mr-2" data-feather="zoom-out"></i>zoom-out
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
@push('js')
    <!-- This Page JS -->

@endpush
