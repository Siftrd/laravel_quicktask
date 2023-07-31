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

    "accepted"=> "Trường này phải được chấp nhận.",
    "accepted_if"=> "Trường này phải được chấp nhận khi :other là :value.",
    "active_url"=> "Trường này không phải là một URL hợp lệ.",
    "after"=> "Trường này phải là một ngày sau ngày :date.",
    "after_or_equal"=> "Trường này phải là thời gian bắt đầu sau hoặc đúng bằng :date.",
    "alpha"=> "Trường này chỉ có thể chứa các chữ cái.",
    "alpha_dash"=> "Trường này chỉ có thể chứa chữ cái, số và dấu gạch ngang.",
    "alpha_num"=> "Trường này chỉ có thể chứa chữ cái và số.",
    "array"=> "Trường này phải là dạng mảng.",
    "ascii"=>"Trường này chỉ được chứa các ký tự chữ số và ký hiệu một byte.",
    "attached"=> "Trường này đã được đính kèm.",
    "before"=> "Trường này phải là một ngày trước ngày :date.",
    "before_or_equal"=> "Trường này phải là thời gian bắt đầu trước hoặc đúng bằng :date.",
    "between.array"=> "Trường này phải có từ :min - :max phần tử.",
    "between.file"=> "Dung lượng tập tin trong trường này phải từ :min - :max kB.",
    "between.numeric"=> "Trường này phải nằm trong khoảng :min - :max.",
    "between.string"=> "Trường này phải từ :min - :max kí tự.",
    "boolean"=> "Trường này phải là true hoặc false.",
    "can"=> "Trường này chứa một giá trị trái phép.",
    "confirmed"=> "Giá trị xác nhận trong trường này không khớp.",
    "country"=> "Trường này không phải là một quốc gia hợp lệ.",
    "date"=> "Trường này không phải là định dạng của ngày-tháng.",
    "date_equals"=>"Trường này phải là một ngày bằng với :date.",
    "date_format"=> "Trường này không giống với định dạng :format.",
    "decimal"=> "Trường này phải có :decimal chữ số thập phân.",
    "declined"=> "Giá trị này phải bị từ chối.",
    "declined_if"=> "Giá trị này phải bị từ chối khi :other là :value.",
    "different"=> "Trường này và :other phải khác nhau.",
    "digits"=> "Độ dài của trường này phải gồm :digits chữ số.",
    "digits_between"=> "Độ dài của trường này phải nằm trong khoảng :min - :max chữ số.",
    "dimensions"=> "Trường này có kích thước không hợp lệ.",
    "distinct"=> "Trường này có giá trị trùng lặp.",
    "doesnt_end_with"=> "Trường này không được kết thúc bằng một trong những điều sau: :values.",
    "doesnt_start_with"=> "Trường này không được bắt đầu bằng một trong những điều sau: :values.",
    "email"=> "Trường này phải là một địa chỉ email hợp lệ.",
    "ends_with"=> "Trường này phải kết thúc bằng một trong những giá trị sau: :values",
    "enum"=> "Giá trị đã chọn trong trường này không hợp lệ.",
    "exists"=> "Giá trị đã chọn trong trường này không hợp lệ.",
    "file"=> "Trường này phải là một tệp tin.",
    "filled"=> "Trường này không được bỏ trống.",
    "gt.array"=>"Mảng này phải có nhiều hơn :value phần tử.",
    "gt.file"=> "Dung lượng trường này phải lớn hơn :value kilobytes.",
    "gt.numeric"=> "Giá trị trường này phải lớn hơn :value.",
    "gt.string"=> "Độ dài trường này phải nhiều hơn :value kí tự.",
    "gte.array"=> "Mảng này phải có ít nhất :value phần tử.",
    "gte.file"=> "Dung lượng trường này phải lớn hơn hoặc bằng :value kilobytes.",
    "gte.numeric"=> "Giá trị trường này phải lớn hơn hoặc bằng :value.",
    "gte.string"=> "Độ dài trường này phải lớn hơn hoặc bằng :value kí tự.",
    "image"=> "Trường này phải là định dạng hình ảnh.",
    "in"=> "Giá trị đã chọn trong trường này không hợp lệ.",
    "in_array"=>"Trường này phải thuộc tập cho phép: :other.",
    "integer"=> "Trường này phải là một số nguyên.",
    "ip"=> "Trường này phải là một địa chỉ IP.",
    "ipv4"=> "Trường này phải là một địa chỉ IPv4.",
    "ipv6"=> "Trường này phải là một địa chỉ IPv6.",
    "json"=> "Trường này phải là một chuỗi JSON.",
    "lowercase"=> "Trường này phải là chữ thường.",
    "lt.array"=> "Mảng này phải có ít hơn :value phần tử.",
    "lt.file"=> "Dung lượng trường này phải nhỏ hơn :value kilobytes.",
    "lt.numeric"=>"Giá trị trường này phải nhỏ hơn :value.",
    "lt.string"=> "Độ dài trường này phải nhỏ hơn :value kí tự.",
    "lte.array"=> "Mảng này không được có nhiều hơn :value phần tử.",
    "lte.file"=> "Dung lượng trường này phải nhỏ hơn hoặc bằng :value kilobytes.",
    "lte.numeric"=> "Giá trị trường này phải nhỏ hơn hoặc bằng :value.",
    "lte.string"=> "Độ dài trường này phải nhỏ hơn hoặc bằng :value kí tự.",
    "mac_address"=> "Giá trị này phải là một địa chỉ MAC hợp lệ.",
    "max.array"=> "Trường này không được lớn hơn :max phần tử.",
    "max.file"=> "Dung lượng tập tin trong trường này không được lớn hơn :max kB.",
    "max.numeric"=> "Trường này không được lớn hơn :max.",
    "max.string"=> "Trường này không được lớn hơn :max kí tự.",
    "max_digits"=> "Trường này không được có nhiều hơn :max chữ số.",
    "mimes"=> "Trường này phải là một tập tin có định dạng: :values.",
    "mimetypes"=> "Trường này phải là một tập tin có định dạng: :values.",
    "min.array"=> "Trường này phải có tối thiểu :min phần tử.",
    "min.file"=> "Dung lượng tập tin trong trường này phải tối thiểu :min kB.",
    "min.numeric"=> "Trường này phải tối thiểu là :min.",
    "min.string"=> "Trường này phải có tối thiểu :min kí tự.",
    "min_digits"=> "Trường này phải có tối thiểu :min chữ số.",
    "missing"=> "Trường này phải bị thiếu.",
    "missing_if"=> "Trường này phải bị thiếu khi :other là :value.",
    "missing_unless"=> "Trường này phải bị thiếu trừ khi :other là :value.",
    "missing_with"=> "Trường này phải bị thiếu khi có :values.",
    "missing_with_all"=> "Trường này phải bị thiếu khi có :values trường.",
    "multiple_of"=> "Trường này phải là bội số của :value",
    "not_in"=> "Giá trị đã chọn trong trường này không hợp lệ.",
    "not_regex"=> "Trường này có định dạng không hợp lệ.",
    "numeric"=>"Trường này phải là một số.",
    "password.letters"=> "Trường này phải chứa ít nhất một chữ cái.",
    "password.mixed"=> "Trường này phải chứa ít nhất một chữ cái in hoa và một chữ cái thường.",
    "password.numbers"=> "Trường này phải chứa ít nhất một số.",
    "password.symbols"=> "Trường này phải chứa ít nhất một ký tự đặc biệt.",
    "password.uncompromised"=> "Trường được nhận này đã xuất hiện trong một vụ rò rỉ dữ liệu. Vui lòng chọn một cái khác.",
    "present"=> "Trường này phải được cung cấp.",
    "prohibited"=>"Trường này bị cấm.",
    "prohibited_if"=> "Trường này bị cấm khi :other là :value.",
    "prohibited_unless"=> "Trường này bị cấm trừ khi :other là một trong :values.",
    "prohibits"=> "Trường này cấm :other từ thời điểm hiện tại.",
    "regex"=> "Trường này có định dạng không hợp lệ.",
    "relatable"=> "Trường này không thể liên kết với tài nguyên này.",
    "required"=> "Trường này không được bỏ trống.",
    "required_array_keys"=> "Trường này phải bao gồm các mục nhập cho: :values.",
    "required_if"=> "Trường này không được bỏ trống khi trường :other là :value.",
    "required_if_accepted"=> "Trường này không được bỏ trống khi :other được chấp nhận.",
    "required_unless"=> "Trường này không được bỏ trống trừ khi :other là :values.",
    "required_with"=> "Trường này không được bỏ trống khi một trong :values có giá trị.",
    "required_with_all"=> "Trường này không được bỏ trống khi tất cả :values có giá trị.",
    "required_without"=> "Trường này không được bỏ trống khi một trong :values không có giá trị.",
    "required_without_all"=> "Trường này không được bỏ trống khi tất cả :values không có giá trị.",
    "same"=> "Trường này và :other phải giống nhau.",
    "size.array"=> "Trường này phải chứa :size phần tử.",
    "size.file"=> "Dung lượng tập tin trong trường này phải bằng :size kB.",
    "size.numeric"=> "Trường này phải bằng :size.",
    "size.string"=> "Trường này phải chứa :size kí tự.",
    "starts_with"=> "Trường này phải được bắt đầu bằng một trong những giá trị sau: :values",
    "string"=> "Trường này phải là một chuỗi kí tự.",
    "timezone"=> "Trường này phải là một múi giờ hợp lệ.",
    "ulid"=> "Trường này phải là một ULID hợp lệ.",
    "unique"=> "Trường này đã có trong cơ sở dữ liệu.",
    "uploaded"=> "Trường này tải lên thất bại.",
    "uppercase"=> "Trường này phải là chữ in hoa.",
    "url"=> "Trường này không giống với định dạng một URL.",
    "uuid"=> "Trường này phải là một chuỗi UUID hợp lệ.",

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
