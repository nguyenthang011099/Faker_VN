<?php


namespace Faker\vi_VN;


class Address
{
    public $province = array(
        'Ha Noi','An Giang', 'Bà Rịa - Vũng Tàu',
        'Bắc Giang', 'Bắc Kạn', 'Bạc Liêu',
        'Bắc Ninh', 'Bến Tre', 'Bình Định',
        'Bình Dương', 'Bình Phước', 'Bình Thuận',
        'Cà Mau', 'Cao Bằng', 'Đắk Lắk',
        'Đắk Nông', 'Điện Biên', 'Đồng Nai',
        'Đồng Tháp', 'Gia Lai', 'Hà Giang',
        'Hà Nam', 'Hà Tĩnh', 'Hải Dương',
        'Hậu Giang', 'Hòa Bình', 'Hưng Yên',
        'Khánh Hòa', 'Kiên Giang', 'Kon Tum',
        'Lai Châu', 'Lâm Đồng', 'Lạng Sơn',
        'Lào Cai', 'Long An', 'Nam Định',
        'Nghệ An', 'Ninh Bình', 'Ninh Thuận',
        'Phú Thọ', 'Quảng Bình', 'Quảng Nam',
        'Quảng Ngãi', 'Quảng Ninh', 'Quảng Trị',
        'Sóc Trăng', 'Sơn La', 'Tây Ninh',
        'Thái Bình', 'Thái Nguyên', 'Thanh Hóa',
        'Thừa Thiên Huế', 'Tiền Giang', 'Trà Vinh',
        'Tuyên Quang', 'Vĩnh Long', 'Vĩnh Phúc',
        'Yên Bái', 'Phú Yên',
    );


    public function random()
    {
        return $this->province[array_rand($this->province)]."\n";
    }
}