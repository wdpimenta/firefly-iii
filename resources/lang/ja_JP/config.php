<?php

/**
 * config.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'html_language'            => 'ja',
    'locale'                   => 'ja, Japanese, ja_JP.utf8, ja_JP.UTF-8',
    //'month'                   => '%B %Y',
    'month_js'                 => 'YYYY年MM月',

    //'month_and_day'           => '%B %e, %Y',
    'month_and_day_moment_js'  => 'YYYY年MM月D日',
    'month_and_day_fns'        => 'y年 MMMM d日',
    'month_and_day_js'         => 'YYYY年MM月DD日',

    //'month_and_date_day'      => '%A %B %e, %Y',
    'month_and_date_day_js'    => 'YYYY年M月D日 ddd',

    //'month_and_day_no_year'   => '%B %e',
    'month_and_day_no_year_js' => 'M月D日',

    //'date_time'               => '%B %e, %Y, @ %T',
    'date_time_js'             => 'YYYY年MM月DD日 HH:mm:ss',
    'date_time_fns'            => 'MMMM do, yyyy @ HH:mm:ss',

    //'specific_day'            => '%e %B %Y',
    'specific_day_js'          => 'YYYY年MM月D日',

    //'week_in_year'            => 'Week %V, %G',
    'week_in_year_js'          => 'YYYY年w[週目]',
    'week_in_year_fns'         => "yyyy年w[週目]",

    //'year'                    => '%Y',
    'year_js'                  => 'YYYY年',

    //'half_year'               => '%B %Y',
    'half_year_js'             => '\QQ YYYY',

    'quarter_fns'   => "yyyy年第Q四半期",
    'half_year_fns' => "yyyy年H[半期]",
    'dow_1'         => '月曜日',
    'dow_2'         => '火曜日',
    'dow_3'         => '水曜日',
    'dow_4'         => '木曜日',
    'dow_5'         => '金曜日',
    'dow_6'         => '土曜日',
    'dow_7'         => '日曜日',
];
