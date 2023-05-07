<div class="d-flex align-items-stretch" id="kt_header_nav">
    <div class="header-menu align-items-stretch" data-kt-drawer="true"
         data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}"
         data-kt-drawer-overlay="true"
         data-kt-drawer-width="{default:'200px', '300px': '250px'}"
         data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
         data-kt-swapper="true" data-kt-swapper-mode="prepend"
         data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
        <div
            class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
            id="#kt_header_menu" data-kt-menu="true">
            <div class="menu-item me-lg-1">
                <a class="menu-link {{ $activeMenu == 1 ? 'active' : '' }} py-3"
                   href="/">
                    <span class="menu-title">Dashboard</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
            </div>
            <div class="menu-item me-lg-1">
                <a href="#"
                   class="menu-link py-3 {{ $activeMenu == 2 ? 'active' : '' }}">
                    <span class="menu-title">WachLists</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
            </div>
            <div class="menu-item me-lg-1">
                <a href="#" class="menu-link py-3 {{ $activeMenu == 3 ? 'active' : '' }}">
                    <span class="menu-title">Alarms</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
            </div>
            <div class="menu-item me-lg-1">
                <a href="{{ route('wallet.index') }}"
                   class="menu-link py-3 {{ $activeMenu == 6 ? 'active' : '' }}">
                    <span class="menu-title">Wallet</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
            </div>
            <div class="menu-item me-lg-1">
                <a href="{{ route('tickets.index') }}"
                   class="menu-link py-3 {{ $activeMenu == 4 ? 'active' : '' }}">
                    <span class="menu-title">Support</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
            </div>
            <div class="menu-item me-lg-1">
                <a href="{{ route('settings') }}"
                   class="menu-link py-3 {{ $activeMenu == 5 ? 'active' : '' }}">
                    <span class="menu-title">Settings</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
            </div>
        </div>
    </div>
</div>
