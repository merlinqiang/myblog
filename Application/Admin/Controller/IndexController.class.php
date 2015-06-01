<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | created by merlin
// +----------------------------------------------------------------------

namespace Admin\Controller;
use User\Api\UserApi as UserApi;

/**
 * 后台首页控制器
 *
 */
class IndexController extends AdminController {

    /**
     * 后台首页
     *
     */
    public function index(){
        $this->meta_title = '管理首页';
        $this->display();
    }

}
