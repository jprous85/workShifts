<div class="sidebar">
    <div class="sidebar-title p-3">
        <a class="" href="{{ url('/') }}">
            {{ 'WorkShifts' }}
        </a>
    </div>

    <a href="" class="link-sidebar">
        <div class="sidebar-item p-3">
            <i class="fas fa-clinic-medical"></i>
            &nbsp;
            {{ trans('service') }}
        </div>
    </a>
    <a href="" class="link-sidebar">
        <div class="sidebar-item p-3">
            <i class="fas fa-clock"></i>
            &nbsp;
            {{ trans('shedules') }}
        </div>
    </a>
    <a href="" class="link-sidebar">
        <div class="sidebar-item p-3">
            <i class="fas fa-map-marked-alt"></i>
            &nbsp;
            {{ trans('workplace') }}
        </div>
    </a>
    <a href="" class="link-sidebar">
        <div class="sidebar-item separator p-3">
            <i class="fas fa-user-friends"></i>
            &nbsp;
            {{ trans('workers') }}
        </div>
    </a>
</div>
