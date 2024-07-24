<?php

declare(strict_types=1);

return [
    'attributes' => [
        'address'                  => 'адреса',
        'age'                      => 'вік',
        'amount'                   => 'сума',
        'area'                     => 'область',
        'available'                => 'доступно',
        'birthday'                 => 'день народження',
        'body'                     => 'тіло',
        'city'                     => 'місто',
        'content'                  => 'контент',
        'country'                  => 'країна',
        'created_at'               => 'створено при',
        'creator'                  => 'творець',
        'current_password'         => 'поточний пароль',
        'date'                     => 'дата',
        'date_of_birth'            => 'дата народження',
        'day'                      => 'день',
        'deleted_at'               => 'видалено о',
        'description'              => 'опис',
        'district'                 => 'район',
        'duration'                 => 'тривалість',
        'email'                    => 'e-mail адреса',
        'excerpt'                  => 'уривок',
        'filter'                   => 'фільтр',
        'first_name'               => "ім'я",
        'gender'                   => 'стать',
        'group'                    => 'група',
        'hour'                     => 'година',
        'image'                    => 'зображення',
        'last_name'                => 'прізвище',
        'lesson'                   => 'урок',
        'line_address_1'           => 'адреса рядка 1',
        'line_address_2'           => 'адреса рядка 2',
        'message'                  => 'повідомлення',
        'middle_name'              => 'по батькові',
        'minute'                   => 'хвилина',
        'mobile'                   => 'моб. номер',
        'month'                    => 'місяць',
        'name'                     => "ім'я",
        'national_code'            => 'національний код',
        'number'                   => 'номер',
        'password'                 => 'пароль',
        'password_confirmation'    => 'підтвердження пароля',
        'phone'                    => 'телефон',
        'photo'                    => 'фото',
        'postal_code'              => 'Поштовий індекс',
        'price'                    => 'ціна',
        'province'                 => 'провінція',
        'recaptcha_response_field' => 'поле відповіді recaptcha',
        'remember'                 => 'запам\'ятати',
        'restored_at'              => 'відновлено при',
        'result_text_under_image'  => 'текст результату під зображенням',
        'role'                     => 'роль',
        'second'                   => 'секунда',
        'sex'                      => 'стать',
        'short_text'               => 'короткий текст',
        'size'                     => 'розмір',
        'state'                    => 'стан',
        'street'                   => 'вулиця',
        'student'                  => 'студент',
        'subject'                  => 'тема',
        'teacher'                  => 'викладач',
        'terms'                    => 'умови',
        'test_description'         => 'опис тесту',
        'test_locale'              => 'тестова локаль',
        'test_name'                => 'назва тесту',
        'text'                     => 'текст',
        'time'                     => 'час',
        'title'                    => 'назва',
        'updated_at'               => 'оновлено о',
        'username'                 => 'нікнейм',
        'year'                     => 'рік',
    ],

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Поле :attribute має бути прийнято.',
    'active_url'           => 'Поле :attribute не є дійсною URL-адресою.',
    'after'                => 'Поле :attribute має бути дата після :date.',
    'after_or_equal'       => 'Поле :attribute має бути дата після або дата, що дорівнює :date',
    'alpha'                => 'Поле :attribute може містити лише літери.',
    'alpha_dash'           => 'Поле :attribute може містити лише літери, цифри, тире та підкреслення.',
    'alpha_num'            => 'Поле :attribute може містити лише букви та цифри.',
    'array'                => 'Поле :attribute має бути масивом.',
    'before'               => 'Поле :attribute має бути дата раніше :date.',
    'before_or_equal'      => 'Поле :attribute має бути дата раніше або дорівнює :date.',
    'between' => [
        'numeric' => '"Значення :attribute повинно бути між :min та :max.',
        'file'    => 'Файл :attribute повинен бути від :min до :max кілобайт.',
        'string'  => 'Рядок :attribute повинен бути між :min та :max символами.',
        'array'   => 'Вміст повинен містити між :min та :max елементів.',
    ],
    'boolean'              => 'Поле :attribute має бути істинним або хибним.',
    'confirmed'            => 'Підтвердження не збігається."',
    'date'                 => 'Не є допустимою датою.',
    'date_format'          => '"Не відповідає формату :format.',
    'different'            => 'Значення повинно відрізнятися від :other.',
    'digits'               => 'Повинно бути: :digits цифр.',
    'digits_between'       => '"Повинно бути між :min та :max цифр.',
    'dimensions'           => 'Зображення має недійсні розміри.',
    'distinct'             => 'Поле має повторюване значення.',
    'email'                => 'Має бути дійсною адресою електронної пошти.',
    'exists'               => 'Вибране значення недійсне.',
    'file'                 => 'Вміст повинен бути файлом.',
    'filled'               => "Поле обов'язкове для заповнення.",
    'image'                => 'Має бути зображення.',
    'in'                   => 'Вибране значення є недійсним.',
    'in_array'             => 'Значення не існує в :other.',
    'integer'              => 'Має бути цілим числом.',
    'ip'                   => 'Має бути дійсним IP-адресою.',
    'ipv4'                 => 'Має бути дійсним IPv4-адресою.',
    'ipv6'                 => 'Має бути дійсним IPv6-адресою.',
    'json'                 => 'Має бути дійсним JSON рядок.',
    'max'                  => [
        'numeric' => 'Значення повинно бути менше або рівне :value.',
        'file'    => 'Розмір файлу повинен бути меншим або рівним :value кілобайт.',
        'string'  => 'Рядок повинен бути більшим або рівним :value значення.',
        'array'   => 'Вміст повинен містити :value елементів або більше.',
    ],
    'mimes'                => 'Повинен бути файл типу: :values.',
    'mimetypes'            => 'Повинен бути файл типу: :values.',
    'min'                  => [
        'numeric' => 'Значення має бути, щонайменше :min.',
        'file'    => 'Розмір файлу повинен бути не менше :min кілобайт.',
        'string'  => 'У рядку має бути не менше :min символів.',
        'array'   => 'Значення повинно мати не менше :min елементів.'
    ],
    'not_in'               => 'Вибране значення недійсне.',
    'numeric'              => '"Повинно бути число.',
    'present'              => 'Поле повинне бути присутнім.',
    'regex'                => 'Формат недійсний.',
    'required'             => 'Поле є обовязковим.',
    'required_if'          => "Поле обов'язкове коли :other є :value.",
    'required_unless'      => "Поле обов'язковим, якщо :other інше не вказано у :values.",
    'required_with'        => "Поле обов'язкове коли :values є.",
    'required_with_all'    => "Поле обов'язкове коли :values присутні.",
    'required_without'     => "Поле обов'язкове, коли :values значень немає.",
    'required_without_all' => "Поле обов'язковим, коли немає жодного з :values присутні.",
    'same'                 => 'Значення цього поля має відповідати значенню від :other.',
    'size'                 => [
        'numeric' => 'Значення повинно бути :size.',
        'file'    => 'Розмір файлу повинен бути :size кілобайт.',
        'string'  => 'У рядку має бути :size символів.',
        'array'   => 'Вміст повинен містити :size елементів.'
    ],
    'string'               => 'Повинна бути рядком.',
    'timezone'             => 'Має бути дійсною зоною.',
    'unique'               => 'Поле :attribute вже було взято.',
    'uploaded'             => 'Не вдалося завантажити :attribute.',
    'url'                  => 'Цей формат недійсний.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

//    'attributes' => [],
];
