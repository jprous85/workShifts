<div class="sidebar">
    <div class="sidebar-title p-3">
        <a id="title-sidebar" href="{{ url('/') }}">
            {{ 'WorkShifts' }}
        </a>
    </div>
    <a href="{{ route('company') }}" class="link-sidebar">
        <div class="sidebar-item p-3">
            <i class="fas fa-building"></i>
            <span class="text-sidebar-item ml-2">{{ trans('company') }}</span>
        </div>
    </a>
    <a href="{{ route('service') }}" class="link-sidebar">
        <div class="sidebar-item p-3">
            <i class="fas fa-clinic-medical"></i>
            <span class="text-sidebar-item ml-2">{{ trans('service') }}</span>
        </div>
    </a>
    <a href="" class="link-sidebar">
        <div class="sidebar-item p-3">
            <i class="fas fa-clock"></i>
            <span class="text-sidebar-item ml-2">{{ trans('shedules') }}</span>
        </div>
    </a>
    <a href="" class="link-sidebar">
        <div class="sidebar-item p-3">
            <i class="fas fa-map-marked-alt"></i>
            <span class="text-sidebar-item ml-2">{{ trans('workplace') }}</span>
        </div>
    </a>
    <a href="" class="link-sidebar">
        <div class="sidebar-item separator p-3">
            <i class="fas fa-user-friends"></i>
            <span class="text-sidebar-item ml-2">{{ trans('workers') }}</span>
        </div>
    </a>
</div>
