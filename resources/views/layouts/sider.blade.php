<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        {{-- <h3><i class="fa fa-user" aria-hidden="true"></i>{{auth()->user()->name}}</h3> --}}
        <ul class="nav side-menu">
            @if (auth()->user()->role == 'user')
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/dashboard">Log Indikator</a></li>
                        {{-- <li><a href="{{ route('pages.datadevice.device') }}">Data Device</a></li> --}}

                    </ul>
                </li>
            @else
                <li>
                    <a href="/dashboard"><i class="fa fa-bug" aria-hidden="true"></i> Log Indikator</a>
                </li>
            @endif

        </ul>

    </div>

</div>
