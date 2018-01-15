<?php

/**
 * 认证配置信息
 */
return [

    /**
     * 权限开关
     */
    'auth_on'           => 1,
    /**
     * 认证方式，1为实时认证；2为登录认证。
     */
    'auth_type'         => 1,
    /**
     * 用户组数据表名
     */
    'auth_group'        => 'auth_group',
    /**
     * 用户-用户组关系表
     */
    'auth_group_access' => 'auth_group_access',
    /**
     * 权限规则表
     */
    'auth_rule'         => 'auth_rule',
    /**
     * 用户信息表
     */
    'auth_user'         => 'admin_user',
];