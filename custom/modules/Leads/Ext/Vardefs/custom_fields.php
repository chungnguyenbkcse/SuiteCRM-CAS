<?php
$dictionary['Lead']['fields']['bank'] = array(
    'required' => false, // Set trường này là bắt buộc nhập hay không?
    'name' => 'bank', // Tên trường
    'vname' => 'LBL_BANK', // Label hiển thị
    'options' => 'bank_dom',
    'type' => 'enum', // Kiểu dữ liệu, ở đây là kiểu dữ liệu chuỗi
    'default' => '', // Giá trị mặc định
    'len' => '255', // Độ dài tối đa của trường
    'comment' => 'Mô tả trường', // Mô tả trường
    'merge_filter' => 'disabled', // Set trường này làm không thể lọc
    'duplicate_merge' => 'disabled', // Set trường này làm không thể ghép bản ghi
    'importable' => 'true', // Cho phép nhập liệu từ file CSV
    'audited' => false, // Có lưu thông tin thay đổi vào bảng audit hay không?
    'massupdate' => true, // Có cho phép cập nhật nhiều bản ghi cùng một lúc không?
    'reportable' => true, // Cho phép hiển thị trường trong báo cáo
);