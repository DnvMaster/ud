<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Навигационное меню</li>
                <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Настройки</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.profile') }}">Профиль</a></li>
                        <li><a href="{{ route('admin.edit') }}">Редактирование</a></li>
                        <li><a href="{{ route('change.password') }}">Смена пароля</a></li>
                    </ul>
                </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Слайдер</span>
                    </a>
                     <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('slider') }}">Слайдер</a></li>  
                    </ul>
                 </li>
            </ul>
        </div>
    </div>
</div>