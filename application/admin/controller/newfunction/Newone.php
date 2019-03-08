<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/6
 * Time: 11:40
 */

namespace app\admin\controller\newfunction;

use app\common\controller\Backend;

/**
 * 会员管理
 *
 * @icon fa fa-user
 */
class Newone extends Backend
{
    public function index()
    {
        $all = [
            'a' => 1,
            'b' => 2
        ];
        //return json($all);
        //return $all;
        return $this->view->fetch();
    }
}
