<?php


date_default_timezone_set('Asia/Yekaterinburg'); // уральский часовой пояс


$hour = (int) date('H'); // текущий час (число от 0 до 23)


$isNight = ($hour >=10 || $hour < 8); // 3. Ночь — если уже 20:00 и позже ИЛИ ещё нет 08:00
