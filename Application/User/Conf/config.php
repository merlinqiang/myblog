<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | created by merlin
// +----------------------------------------------------------------------

/**
 * UCenter客户端配置文件
 * 注意：该配置文件请使用常量方式定义
 */

define('UC_APP_ID', 1); //应用ID
define('UC_API_TYPE', 'Model'); //可选值 Model / Service
define('UC_AUTH_KEY', '?vX:jN+t3`ZJOH<^61|kVY(*}oP0Ebe%#n7>wIi&'); //加密KEY
define('UC_DB_DSN', 'mysql://root:feng_miao@127.0.0.1:3306/myblog'); // 数据库连接，使用Model方式调用API必须配置此项
define('UC_TABLE_PREFIX', 'feng_'); // 数据表前缀，使用Model方式调用API必须配置此项
