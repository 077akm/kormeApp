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

    'accepted' => 'Атрибут : должен быть принят.',
    'accepted_if' => 'Атрибут :должен быть принят, когда :other равно :value.',
    'active_url' => 'Атрибут : не является допустимым URL.',
    'after' => 'Атрибут : должен быть датой после :date.',
    'after_or_equal' => 'Атрибут : должен быть датой после или равной :date.',
    'alpha' => 'Атрибут : должен содержать только буквы.',
    'alpha_dash' => 'Атрибут : должен содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => 'Атрибут : должен содержать только буквы и цифры.',
    'array' => 'Атрибут : должен быть массивом.',
    'before' => 'Атрибут : должен быть датой до :date.',
    'before_or_equal' => 'Атрибут : должен быть датой до или равной :date.',
    'between' => [
        'array' => 'Атрибут : должен содержать элементы от :min до :max.',
        'file' => 'Атрибут : должен находиться в диапазоне от :min до :max килобайт.',
        'numeric' => 'Атрибут : должен находиться между :min и :max.',
        'string' => 'Атрибут : должен находиться между :min и :max символами.',
    ],
    'boolean' => 'Поле :attribute должно быть true или false.',
    'confirmed' => 'Подтверждение атрибута : не соответствует.',
    'current_password' => 'Пароль неверен.',
    'date' => 'Атрибут : не является допустимой датой.',
    'date_equals' => 'Атрибут : должен быть датой, равной to :date.',
    'date_format' => 'Атрибут : не соответствует формату :format.',
    'declined' => 'Атрибут : должен быть отклонен.',
    'declined_if' => 'Атрибут : должен быть отклонен, когда :другое равно :value.',
    'different' => 'Атрибут : и :other должны отличаться.',
    'digits' => 'Атрибут : должен быть :digits цифрами.',
    'digits_between' => 'Атрибут : должен находиться между :минимальными и :максимальными цифрами.',
    'dimensions' => 'Атрибут : имеет недопустимые размеры изображения.',
    'distinct' => 'Поле атрибута : имеет повторяющееся значение.',
    'doesnt_end_with' => 'Атрибут : может не заканчиваться одним из следующих значений: :.',
    'doesnt_start_with' => 'Атрибут : может не начинаться с одного из следующих значений: :.',
    'email' => 'Атрибут : должен быть действительным адресом электронной почты.',
    'ends_with' => 'Атрибут : должен заканчиваться одним из следующих значений: :.',
    'enum' => 'Выбранный :атрибут недействителен.',
    'exists' => 'Выбранный :атрибут недействителен.',
    'file' => 'Атрибут должен быть файлом.',
    'filled' => 'Поле :атрибут должно иметь значение.',
    'gt' => [
        'array' => 'Атрибут : должен содержать больше элементов :value, чем :value.',
        'file' => 'Атрибут : должен быть больше значения : килобайт.',
        'numeric' => 'Атрибут : должен быть больше, чем :значение.',
        'string' => 'Атрибут : должен быть больше, чем :символы значения.',
    ],
    'gte' => [
        'array' => 'Атрибут : должен содержать :элементы значения или более.',
        'file' => 'Атрибут : должен быть больше или равен :значение килобайт.',
        'numeric' => 'Атрибут : должен быть больше или равен :значению.',
        'string' => 'Атрибут : должен быть больше или равен :символам значения.',
    ],
    'image' => 'Атрибут : должен быть изображением.',
    'in' => 'Выбранный атрибут : недействителен.',
    'in_array' => 'Поле :атрибут не существует в :other.',
    'integer' => 'Атрибут : должен быть целым числом.',
    'ip' => 'Атрибут : должен быть действительным IP-адресом.',
    'ipv4' => 'Атрибут : должен быть действительным адресом IPv4.',
    'ipv6' => 'Атрибут : должен быть действительным IPv6-адресом.',
    'json' => 'Атрибут : должен быть допустимой строкой JSON.',
    'lt' => [
        'array' => 'Атрибут : должен содержать меньше элементов :value.',
        'file' => 'Атрибут : должен быть меньше значения : килобайт.',
        'numeric' => 'Атрибут : должен быть меньше, чем :значение.',
        'string' => 'Атрибут : должен быть меньше, чем :символы значения.',
    ],
    'lte' => [
        'array' => 'Атрибут : не должен содержать более элементов :value.',
        'file' => 'Атрибут : должен быть меньше или равен значению : килобайт.',
        'numeric' => 'Атрибут : должен быть меньше или равен :значению.',
        'string' => 'Атрибут : должен быть меньше или равен :символам значения.',
    ],
    'mac_address' => 'Атрибут : должен быть допустимым MAC-адресом.',
    'max' => [
        'array' => 'Атрибут : не должен содержать более :max элементов.',
        'file' => 'Атрибут : не должен превышать :max килобайт.',
        'numeric' => 'Атрибут : не должен превышать :max.',
        'string' => 'Атрибут : не должен превышать :max символов.',
    ],
    'max_digits' => 'Атрибут : не должен содержать более :max цифр.',
    'mimes' => 'Атрибут : должен быть файлом типа: :values.',
    'mimetypes' => 'Атрибут : должен быть файлом типа: :values.',
    'min' => [
        'array' => 'Атрибут : должен содержать не менее :минимальных элементов.',
        'file' => 'Атрибут : должен быть не менее :min килобайт.',
        'numeric' => 'Атрибут : должен быть не менее :min.',
        'string' => 'Атрибут : должен содержать не менее :минимальных символов.',
    ],
    'min_digits' => 'Атрибут : должен содержать не менее :минимальных цифр.',
    'multiple_of' => 'Атрибут : должен быть кратен :значению.',
    'not_in' => 'Выбранный атрибут : недопустим.',
    'not_regex' => 'Формат атрибута : недопустим.',
    'numeric' => 'Атрибут : должен быть число.',
    'password' => [
        'letters' => 'Атрибут : должен содержать хотя бы одну букву.',
        'mixed' => 'Атрибут : должен содержать по крайней мере одну заглавную и одну строчную букву.',
        'numbers' => 'Атрибут : должен содержать хотя бы одно число.',
        'symbols' => 'Атрибут : должен содержать хотя бы один символ.',
        'uncompromised' => 'Данный атрибут : появился в результате утечки данных. Пожалуйста, выберите другой :атрибут.',
    ],
    'present' => 'Поле :атрибут должно присутствовать.',
    'prohibited' => 'Поле :атрибут запрещено.',
    'prohibited_if' => 'Поле :атрибут запрещено, когда :другое равно :значение.',
    'prohibited_unless' => 'Поле :attribute запрещено, если :other не находится в :values.',
    'prohibits' => 'Поле :attribute запрещает присутствие :other.',
    'regex' => 'Формат :attribute недопустим.',
    'required' => 'Поле :attribute обязательно.',
    'required_array_keys' => 'Поле :attribute должно содержат записи для: :значений.',
    'required_if' => 'Поле :attribute обязательно, когда :other равно :value.',
    'required_unless' => 'Поле :attribute обязательно, если :other не находится в :values.',
    'required_with' => 'Поле :attribute обязательно при наличии :values.',
    'required_with_all' => 'Поле :attribute требуется, когда присутствуют :значения.',
    'required_without' => 'Поле :attribute требуется, когда отсутствуют :значения.',
    'required_without_all' => 'Поле :attribute требуется, когда нет ни одного из :значений.',
    'same' => 'Атрибут : и :другое должны совпадать.',
    'size' => [
        'array' => 'Атрибут : должен содержать элементы :size.',
        'file' => 'Атрибут : должен быть :размером в килобайты.',
        'numeric' => 'Атрибут : должен быть :size.',
        'string' => 'Атрибут : должен содержать :символы размера.',
    ],
    'starts_with' => 'Атрибут : должен начинаться с одного из следующих: :значений.',
    'string' => 'Атрибут : должен быть строкой.',
    'timezone' => 'Атрибут : должен быть допустимым часовым поясом.',
    'unique' => 'Атрибут : уже был использован.',
    'uploaded' => 'Не удалось загрузить атрибут :.',
    'url' => 'Атрибут : должен быть допустимым URL.',
    'uuid' => 'Атрибут : должен быть допустимым UUID.',

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
