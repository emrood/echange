<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="sidebar-item">
                    <a href="{{asset('change')}}" class="sidebar-link">
                        <i data-feather="shuffle" class="mr-2"></i>
                        <span class="hide-menu">Transactions</span>
                    </a>
                </li>

                @if(auth()->check() && auth()->user()->isAdmin() == true)
                    <li class="sidebar-item">
                        <a href="{{asset('index')}}" class="sidebar-link">
                            <i data-feather="home" class="mr-2"></i>
                            <span class="hide-menu"> Tableau de bord </span>
                        </a>
                    </li>

                @endif


                @if(auth()->check() && (auth()->user()->isAdmin() || auth()->user()->isSupervisor() ))
                    <li class="sidebar-item">
                        <a href="{{asset('cash-fund')}}" class="sidebar-link">
                            <i data-feather="trello" class="mr-2"></i>
                            <span class="hide-menu"> Gestion de caisse </span>
                        </a>
                    </li>
                @endif

                @if(auth()->check() && auth()->user()->isAdmin() == true)

                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                           aria-expanded="false">
                            <i data-feather="book-open" class="mr-2"></i>
                            <span class="hide-menu">Rapports</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{url('change/list')}}" class="sidebar-link">
                                    <i data-feather="droplet" class="mr-2"></i>
                                    <span class="hide-menu">Liste des transactions</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{url('#')}}" class="sidebar-link">
                                    <i data-feather="droplet" class="mr-2"></i>
                                    <span class="hide-menu">Chiffre d'affaire</span>
                                </a>
                            </li>
                            {{--<li class="sidebar-item">--}}
                            {{--<a href="{{url('user/deleted')}}" class="sidebar-link">--}}
                            {{--<i data-feather="droplet" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Autre</span>--}}
                            {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{asset('currency')}}" class="sidebar-link">
                            <i data-feather="dollar-sign" class="mr-2"></i>
                            <span class="hide-menu">Devises</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{asset('history')}}" class="sidebar-link">
                            <i data-feather="rotate-ccw" class="mr-2"></i>
                            <span class="hide-menu">Historique</span>
                        </a>
                    </li>

                    {{--@foreach($laravelAdminMenus->menus as $section)--}}
                    {{--@if(count(collect($section->items)) > 0)--}}
                    {{--@foreach($section->items as $menu)--}}
                    {{--@can('view-'.Str::slug($menu->title))--}}
                    {{--<li class="sidebar-item">--}}
                    {{--<a class="sidebar-link" href="{{ url($menu->url) }}">--}}
                    {{--<i class="{{$menu->icon}} mr-2"></i>--}}
                    {{--<span class="hide-menu">{{ $menu->title }}</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--@endcan--}}
                    {{--@endforeach--}}
                    {{--@endif--}}
                    {{--@endforeach--}}


                    <li class="sidebar-item">
                        <a href="{{asset('role-management')}}" class="sidebar-link">
                            <i data-feather="briefcase" class="mr-2"></i>
                            <span class="hide-menu"> Roles </span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                           aria-expanded="false">
                            <i data-feather="users" class="mr-2"></i>
                            <span class="hide-menu">Utilisateurs</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{url('users')}}" class="sidebar-link">
                                    <i data-feather="droplet" class="mr-2"></i>
                                    <span class="hide-menu"> Gérer les utilisateurs </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{url('user/create')}}" class="sidebar-link">
                                    <i data-feather="droplet" class="mr-2"></i>
                                    <span class="hide-menu">Ajouter un nouvel utilisateur</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{url('user/deleted')}}" class="sidebar-link">
                                    <i data-feather="droplet" class="mr-2"></i>
                                    <span class="hide-menu">Utilisateurs supprimés</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('activity-log')}}">
                            <i data-feather="alert-triangle" class="mr-2"></i>
                            <span class="hide-menu">Journal d'activité</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('account-settings')}}">
                            <i data-feather="settings" class="mr-2"></i>
                            <span class="hide-menu">Paramètres du compte</span>
                        </a>
                    </li>


                    {{--<li class="sidebar-item">--}}
                    {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                    {{--aria-expanded="false">--}}
                    {{--<i data-feather="alert-triangle" class="mr-2"></i>--}}
                    {{--<span class="hide-menu">Logs</span>--}}
                    {{--</a>--}}
                    {{--<ul aria-expanded="false" class="collapse  first-level">--}}
                    {{--<li class="sidebar-item">--}}
                    {{--<a href="{{url('log-viewer')}}" class="sidebar-link">--}}
                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                    {{--<span class="hide-menu"> Laravel Logs </span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                    {{--<a href="{{url('activity-log')}}" class="sidebar-link">--}}
                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                    {{--<span class="hide-menu"> Activity Logs </span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}

                @endif


                <li>
                    <hr style="background: #fff;opacity: 0.5">
                </li>
                {{--@if(auth()->check() && auth()->user()->isAdmin() == true)--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="mail" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Apps</span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse  first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('email-index')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Email </span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('email-detail')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Email Detail </span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('email-compose')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Email Compose </span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('calender')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Calendar </span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="sun" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Ui Elements </span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-buttons')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Buttons</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-modals')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Modals</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-tabs')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Tab</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-cards')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Card</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-tooltip-popover')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Tooltip &amp; Popover</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-notification')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Notification</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-progressbar')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Progressbar</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-typography')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Typography</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-bootstrap')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Bootstrap Ui</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-breadcrumb')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Breadcrumb</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-list-media')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> List Media</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-grid')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Grid</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-carousel')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Carousel</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-scrollspy')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Scrollspy</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-spinner')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Spinner</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('ui-toasts')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Toasts</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="clipboard" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Forms</span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('form-basic')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Basic Forms</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('form-horizontal')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Form Horizontal</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('form-bootstrap-touchspin')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Bootstrap Touchspin</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('form-select2')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Select2</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('form-img-cropper')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Image Cropper</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('form-dropzone')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Dropzone</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('form-radio-checkbox')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Radio & Checkbox</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('form-colorpicker')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Form Colorpicker</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('form-bootstrap-rangepicker')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Form Bootstrap Rangepicker</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('form-bootstrap-datepicker')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Form Bootstrap Datepicker</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="layout" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Tables</span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('table-bootstrap')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Bootstrap Table </span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('table-basic')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Basic Table </span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('table-layout-coloured')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Coloured Table Layout</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('table-datatable-basic')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Data Table</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a class="sidebar-link waves-effect waves-dark sidebar-link"--}}
                                   {{--href="{{asset('table-responsive')}}"--}}
                                   {{--aria-expanded="false">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Table Responsive</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="pie-chart" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Charts</span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('chart-c3')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">C3 Charts</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a class="sidebar-link waves-effect waves-dark sidebar-link"--}}
                                   {{--href="{{asset('chart-js')}}"--}}
                                   {{--aria-expanded="false">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Chart.js Charts</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a class="sidebar-link waves-effect waves-dark sidebar-link"--}}
                                   {{--href="{{asset('chart-sparkline')}}"--}}
                                   {{--aria-expanded="false">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Sparkline Charts</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a class="sidebar-link waves-effect waves-dark sidebar-link"--}}
                                   {{--href="{{asset('chart-chartist')}}"--}}
                                   {{--aria-expanded="false">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Chartist Charts</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="shopping-bag" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Ecommerce Pages</span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('products')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Products</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('cart')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Products Cart</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('products-edit')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Products Edit</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('products-detail')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Product Details</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('orders')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Product Orders</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('checkout')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Products Checkout</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="file" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Sample Pages </span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('starter-kit')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Starterkit</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('profile')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Profile</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('animation')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Animation</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('search-result')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Search Result</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('gallery')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Gallery</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('treeview')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Treeview</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('block-ui')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Block UI</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('session-timeout')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Session Timeout</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('session-idle-timeout')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Session Idle Timeout</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('utility-classes')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Helper Classes</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('maintenance')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Maintenance Page</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="lock" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Authentication</span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('auth-login')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Login </span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('auth-register')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Register</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('lockscreen')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Lockscreen</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('auth-recover-password')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Recover password</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="map-pin" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Maps</span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('google-map')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Google Map </span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('vector-map')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Vector Map</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="feather" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Icons</span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('fontawesome-icons')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Fontawesome Icons</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('weather-icons')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Weather Icons</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('feather-icons')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Feather Icons</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="alert-triangle" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Error Pages</span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('error-400')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Error 400 </span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('error-403')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Error 403</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('error-404')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Error 404</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('error-500')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Error 500</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="{{asset('error-503')}}" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu"> Error 503</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item">--}}
                        {{--<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                           {{--aria-expanded="false">--}}
                            {{--<i data-feather="layers" class="mr-2"></i>--}}
                            {{--<span class="hide-menu">Multi Level DD</span>--}}
                        {{--</a>--}}
                        {{--<ul aria-expanded="false" class="collapse first-level">--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="javascript:void(0)" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Link 1</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Link 2</span>--}}
                                {{--</a>--}}
                                {{--<ul aria-expanded="false" class="collapse second-level">--}}
                                    {{--<li class="sidebar-item">--}}
                                        {{--<a href="javascript:void(0)" class="sidebar-link">--}}
                                            {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                            {{--<span class="hide-menu">Link 2 Sub</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="sidebar-item">--}}
                                {{--<a href="javascript:void(0)" class="sidebar-link">--}}
                                    {{--<i data-feather="droplet" class="mr-2"></i>--}}
                                    {{--<span class="hide-menu">Link 3</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--@endif--}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>