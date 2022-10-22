<?php

/**
 * 配置文件
 * 请将数据库账号密码填写完整
 */

$config = [
    'mysql' => [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '123456', // 数据库密码
        'db' => 'ponconsoft' // 数据库名称
    ],
    'table' => [
        'user' => 'yzetmy_student_user', // 用户表
        'course' => 'yzetmy_teacher_course', // 课程信息表
        'user_teacher' => 'yzetmy_teacher_user', // 课程信息表
        'baoming' => 'yzetmy_student_baoming' // 报名表
    ]
];
