<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute必须被接受',
    'active_url' => ':attribute不是有效的链接',
    'after' => ':attribute必须在:date之后',
    'after_or_equal' => ':attribute必须为:date当天或之后',
    'alpha' => ':attribute只能包含字母',
    'alpha_dash' => ':attribute只能包含字母、数字、破折号、下划线',
    'alpha_num' => ':attribute只能包含字母和数字',
    'array' => ':attribute必须是数组',
    'before' => ':attribute必须在:date之前',
    'before_or_equal' => ':attribute必须为:date当天或之前',
    'between' => [
        'numeric' => ':attribute必须在:min到:max之间',
        'file' => ':attribute的大小必须在:min到:maxkb之间',
        'string' => ':attribute的长度必须在:min到:max个字符之间',
        'array' => ':attribute的个数必须在:min到:max之间',
    ],
    'boolean' => ':attribute必须是true或者false',
    'confirmed' => ':attribute与确认:attribute不相符',
    'date' => ':attribute不是有效的日期',
    'date_equals' => ':attribute必须为:date当天',
    'date_format' => ':attribute不符合:format的格式',
    'different' => ':attribute和:other必须是不同的',
    'digits' => ':attribute必须是数字，并且长度为:digits',
    'digits_between' => ':attribute必须是数字，并且介于:min和:max之间',
    'dimensions' => ':attribute图片尺寸不符合要求',
    'distinct' => ':attribute字段必须都是唯一值',
    'email' => ':attribute必须是有效的邮箱地址',
    'ends_with' => ':attribute必须以:values其中一项为结尾',
    'exists' => ':attribute字段不存在',
    'file' => ':attribute必须是文件',
    'filled' => ':attribute字段必须有值',
    'gt' => [
        'numeric' => ':attribute必须大于:value',
        'file' => ':attribute的大小必须大于:valuekb',
        'string' => ':attribute的长度必须大于:value个字符',
        'array' => ':attribute的个数必须大于:value个',
    ],
    'gte' => [
        'numeric' => ':attribute必须大于或等于:value',
        'file' => ':attribute的大小必须大于或等于:valuekb',
        'string' => ':attribute的长度必须大于或等于:value个字符',
        'array' => ':attribute的个数必须大于或等于:value个',
    ],
    'image' => ':attribute必须是图片',
    'in' => ':attribute无效',
    'in_array' => ':attribute不存在:other中',
    'integer' => ':attribute必须是整型',
    'ip' => ':attribute必须是有效的ip地址',
    'ipv4' => ':attribute必须是有效的ipv4地址',
    'ipv6' => ':attribute必须是有效的ipv6地址',
    'json' => ':attribute必须是有效的json字符串',
    'lt' => [
        'numeric' => ':attribute必须小于:value',
        'file' => ':attribute的大小必须小于:valuekb',
        'string' => ':attribute的长度必须小于:value个字符',
        'array' => ':attribute的个数必须小于:value个',
    ],
    'lte' => [
        'numeric' => ':attribute必须小于或等于:value',
        'file' => ':attribute的大小必须小于或等于:valuekb',
        'string' => ':attribute的长度必须小于或等于:value个字符',
        'array' => ':attribute的个数必须小于或等于:value个',
    ],
    'max' => [
        'numeric' => ':attribute必须小于:max',
        'file' => ':attribute不能超过:valuekb',
        'string' => ':attribute不能超过:value个字符',
        'array' => ':attribute不能超过:value个',
    ],
    'mimes' => ':attribute的文件类型必须是:values其中之一',
    'mimetypes' => ':attribute文件的扩展名必须是:values其中之一',
    'min' => [
        'numeric' => ':attribute必须大于:min',
        'file' => ':attribute必须至少:valuekb',
        'string' => ':attribute必须至少:min个字符',
        'array' => ':attribute必须至少:min个',
    ],
    'not_in' => ':attribute无效',
    'not_regex' => ':attribute格式不正确',
    'numeric' => ':attribute必须是数字',
    'present' => ':attribute必须出现在输入数据中',
    'regex' => ':attribute格式不正确',
    'required' => ':attribute必须输入',
    'required_if' => '当:other为:value时，:attribute必须输入',
    'required_unless' => ':attribute必须输入，除非:other为:values',
    'required_with' => '当:values其中之一存在时，:attribute必须输入',
    'required_with_all' => '当:values都存在时，:attribute必须输入',
    'required_without' => '当:values其中之一不存在时，:attribute必须输入',
    'required_without_all' => '当:values都不存在时，:attribute必须输入',
    'same' => ':attribute和:other必须一致',
    'size' => [
        'numeric' => ':attribute必须为:size',
        'file' => ':attribute必须为:sizekb',
        'string' => ':attribute必须为:size个字符',
        'array' => ':attribute必须包含:size个',
    ],
    'starts_with' => ':attribute必须以:values其中一项为开头',
    'string' => ':attribute必须是字符串',
    'timezone' => ':attribute必须是有效的时区',
    'unique' => ':attribute已经被使用',
    'uploaded' => ':attribute上传失败',
    'url' => ':attribute格式不正确',
    'uuid' => ':attribute必须是有效的UUID',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
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
    | following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => '用户名',
        'password' => '密码',
        'file' => '文件'
    ],

];
