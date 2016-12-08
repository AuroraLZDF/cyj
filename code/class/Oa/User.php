<?php

class Oa_User
{
    const ADMIN_TYPE = 1;
    const ADMIN_TYPE2 = 2;

    const ADMIN_STATUS = 1;
    const ADMIN_STATUS2 = 2;


    static $admin_type = [
        self::ADMIN_TYPE => '超级管理员',
        self::ADMIN_TYPE2 => '普通管理员',
    ];

    static $admin_status = [
        self::ADMIN_STATUS => '正常',
        self::ADMIN_STATUS2 => '关闭',
    ];
}