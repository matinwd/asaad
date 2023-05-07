<div class="card card-flush h-md-100">
    <div class="card-header border-0 pt-6">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-gray-900">New Users</span>
        </h3>
        <div class="card-toolbar">
            <a href="{{ route('admin.users.index') }}"
               class="btn btn-sm btn-light">
                <i class="bi bi-list"></i>
                Show All
            </a>
        </div>
    </div>
    <div class="card-body py-4">
        @includeIf('admin.pages.user.partials.table')
    </div>
</div>
