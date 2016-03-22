<?php


Admin::menu()->label('Пользователи')->icon('fa-users')->items(function ()
{
    Admin::menu(App\Permit::class)->label('Права')->icon('fa-key');
    Admin::menu(App\Role::class)->label('Роли')->icon('fa-graduation-cap');
    Admin::menu(App\User::class)->label('Юзеры')->icon('fa-user');
});
Admin::menu(SoundWorker\Productso\Models\PrsoCategory::class)->label('Категории')->icon('fa-cubes');

Admin::menu(SoundWorker\Productso\Models\PrsoProduct::class)->label('Продукты')->icon('fa-cubes');
Admin::menu(App\Option::class)->label('Настройки')->icon('fa-tasks');