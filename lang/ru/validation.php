<?php

return [

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

    "accepted"=> "Вы должны принять :attribute.",
    "accepted_if"=> "Вы должны принять :attribute, когда :other соответствует :value.",
    "active_url"=> "Значение поля :attribute не является действительным URL.",
    "after"=> "Значение поля :attribute должно быть датой после :date.",
    "after_or_equal"=> "Значение поля :attribute должно быть датой после или равной :date.",
    "alpha"=> "Значение поля :attribute может содержать только буквы.",
    "alpha_dash"=> "Значение поля :attribute может содержать только буквы, цифры, дефис и нижнее подчеркивание.",
    "alpha_num"=> "Значение поля :attribute может содержать только буквы и цифры.",
    "array"=> "Значение поля :attribute должно быть массивом.",
    "attached"=> "Значение поля :attribute уже прикреплено.",
    "before"=> "Значение поля :attribute должно быть датой до :date.",
    "before_or_equal"=> "Значение поля :attribute должно быть датой до или равной :date.",
    "between.array"=> "Количество элементов в поле :attribute должно быть между :min и :max.",
    "between.file"=> "Размер файла в поле :attribute должен быть между :min и :max Килобайт(а).",
    "between.numeric"=> "Значение поля :attribute должно быть между :min и :max.",
    "between.string"=> "Количество символов в поле :attribute должно быть между :min и :max.",
    "boolean"=> "Значение поля :attribute должно быть логического типа.",
    "confirmed"=> "Значение поля :attribute не совпадает с подтверждаемым.",
    "current_password"=> "Неверный пароль.",
    "date"=> "Значение поля :attribute не является датой.",
    "date_equals"=> "Значение поля :attribute должно быть датой равной :date.",
    "date_format"=> "Значение поля :attribute не соответствует формату даты :format.",
    "declined"=> "Поле :attribute должно быть отклонено.",
    "declined_if"=> "Поле :attribute должно быть отклонено, когда :other равно :value.",
    "different"=> "Значения полей :attribute и :other должны различаться.",
    "digits"=> "Длина значения цифрового поля :attribute должна быть :digits.",
    "digits_between"=> "Длина значения цифрового поля :attribute должна быть между :min и :max.",
    "dimensions"=> "Изображение в поле :attribute имеет недопустимые размеры.",
    "distinct"=> "Значения поля :attribute не должны повторяться.",
    "doesnt_end_with"=> "Значение поля :attribute не может заканчиваться одним из следующих: :values.",
    "doesnt_start_with"=> "Значение поля :attribute не может начинаться с одного из следующих: :values.",
    "email"=> "Значение поля :attribute должно быть действительным электронным адресом.",
    "ends_with"=> "Поле :attribute должно заканчиваться одним из следующих значений: :values",
    "enum"=> "Выбранное значение для :attribute некорректно.",
    "exists"=> "Выбранное значение для :attribute некорректно.",
    "failed"=> "Неверное имя пользователя или пароль.",
    "file"=> "В поле :attribute должен быть указан файл.",
    "filled"=> "Поле :attribute обязательно для заполнения.",
    "gt.array"=> "Количество элементов в поле :attribute должно быть больше :value.",
    "gt.file"=> "Размер файла в поле :attribute должен быть больше :value Килобайт(а).",
    "gt.numeric"=> "Значение поля :attribute должно быть больше :value.",
    "gt.string"=> "Количество символов в поле :attribute должно быть больше :value.",
    "gte.array"=> "Количество элементов в поле :attribute должно быть :value или больше.",
    "gte.file"=> "Размер файла в поле :attribute должен быть :value Килобайт(а) или больше.",
    "gte.numeric"=> "Значение поля :attribute должно быть :value или больше.",
    "gte.string"=> "Количество символов в поле :attribute должно быть :value или больше.",
    "image"=> "Файл в поле :attribute должен быть изображением.",
    "in"=> "Выбранное значение для :attribute некорректно.",
    "in_array"=> "Значение поля :attribute не существует в :other.",
    "integer"=> "Значение поля :attribute должно быть целым числом.",
    "ip"=> "Значение поля :attribute должно быть действительным IP-адресом.",
    "ipv4"=> "Значение поля :attribute должно быть действительным IPv4-адресом.",
    "ipv6"=> "Значение поля :attribute должно быть действительным IPv6-адресом.",
    "json"=> "Значение поля :attribute должно быть JSON строкой.",
    "lt.array"=> "Количество элементов в поле :attribute должно быть меньше :value.",
    "lt.file"=> "Размер файла в поле :attribute должен быть меньше :value Килобайт(а).",
    "lt.numeric"=> "Значение поля :attribute должно быть меньше :value.",
    "lt.string"=> "Количество символов в поле :attribute должно быть меньше :value.",
    "lte.array"=> "Количество элементов в поле :attribute должно быть :value или меньше.",
    "lte.file"=> "Размер файла в поле :attribute должен быть :value Килобайт(а) или меньше.",
    "lte.numeric"=> "Значение поля :attribute должно быть :value или меньше.",
    "lte.string"=> "Количество символов в поле :attribute должно быть :value или меньше.",
    "mac_address"=> "Значение поля :attribute должно быть корректным MAC-адресом.",
    "max.array"=> "Количество элементов в поле :attribute не может превышать :max.",
    "max.file"=> "Размер файла в поле :attribute не может быть больше :max Килобайт(а).",
    "max.numeric"=> "Значение поля :attribute не может быть больше :max.",
    "max.string"=> "Количество символов в поле :attribute не может превышать :max.",
    "mimes"=> "Файл в поле :attribute должен быть одного из следующих типов: :values.",
    "mimetypes"=> "Файл в поле :attribute должен быть одного из следующих типов: :values.",
    "min.array"=> "Количество элементов в поле :attribute должно быть не меньше :min.",
    "min.file"=> "Размер файла в поле :attribute должен быть не меньше :min Килобайт(а).",
    "min.numeric"=> "Значение поля :attribute должно быть не меньше :min.",
    "min.string"=> "Количество символов в поле :attribute должно быть не меньше :min.",
    "multiple_of"=> "Значение поля :attribute должно быть кратным :value",
    "next"=> "Вперёд &raquo;",
    "not_in"=> "Выбранное значение для :attribute некорректно.",
    "not_regex"=> "Значение поля :attribute некорректно.",
    "numeric"=> "Значение поля :attribute должно быть числом.",
    "password"=> "Некорректный пароль.",
    "password.letters"=> "Значение поля :attribute должно содержать хотя бы одну букву.",
    "password.mixed"=> "Значение поля :attribute должно содержать хотя бы одну прописную и одну строчную буквы.",
    "password.numbers"=> "Значение поля :attribute должно содержать хотя бы одну цифру.",
    "password.symbols"=> "Значение поля :attribute должно содержать хотя бы один символ.",
    "password.uncompromised"=> "Значение поля :attribute обнаружено в утёкших данных. Пожалуйста, выберите другое значение для :attribute.",
    "present"=> "Значение поля :attribute должно присутствовать.",
    "previous"=> "&laquo; Назад",
    "prohibited"=> "Значение поля :attribute запрещено.",
    "prohibited_if"=> "Значение поля :attribute запрещено, когда :other равно :value.",
    "prohibited_unless"=> "Значение поля :attribute запрещено, если :other не состоит в :values.",
    "prohibits"=> "Значение поля :attribute запрещает присутствие :other.",
    "regex"=> "Значение поля :attribute некорректно.",
    "relatable"=> "Значение поля :attribute не может быть связано с этим ресурсом.",
    "required"=> "Поле :attribute обязательно для заполнения.",
    "required_array_keys"=> "Массив в поле :attribute обязательно должен иметь ключи: :values",
    "required_if"=> "Поле :attribute обязательно для заполнения, когда :other равно :value.",
    "required_unless"=> "Поле :attribute обязательно для заполнения, когда :other не равно :values.",
    "required_with"=> "Поле :attribute обязательно для заполнения, когда :values указано.",
    "required_with_all"=> "Поле :attribute обязательно для заполнения, когда :values указано.",
    "required_without"=> "Поле :attribute обязательно для заполнения, когда :values не указано.",
    "required_without_all"=> "Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.",
    "reset"=> "Ваш пароль был сброшен!",
    "same"=> "Значения полей :attribute и :other должны совпадать.",
    "sent"=> "Ссылка на сброс пароля была отправлена!",
    "size.array"=> "Количество элементов в поле :attribute должно быть равным :size.",
    "size.file"=> "Размер файла в поле :attribute должен быть равен :size Килобайт(а).",
    "size.numeric"=> "Значение поля :attribute должно быть равным :size.",
    "size.string"=> "Количество символов в поле :attribute должно быть равным :size.",
    "starts_with"=> "Поле :attribute должно начинаться с одного из следующих значений: :values",
    "string"=> "Значение поля :attribute должно быть строкой.",
    "throttle"=> "Слишком много попыток входа. Пожалуйста, попробуйте еще раз через :seconds секунд.",
    "throttled"=> "Пожалуйста, подождите перед повторной попыткой.",
    "timezone"=> "Значение поля :attribute должно быть действительным часовым поясом.",
    "token"=> "Ошибочный код сброса пароля.",
    "unique"=> "Такое значение поля :attribute уже существует.",
    "uploaded"=> "Загрузка поля :attribute не удалась.",
    "url"=> "Значение поля :attribute имеет ошибочный формат URL.",
    "user"=> "Не удалось найти пользователя с указанным электронным адресом.",
    "uuid"=> "Значение поля :attribute должно быть корректным UUID.",

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
