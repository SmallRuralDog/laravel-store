<?php
/**
 * Created by PhpStorm.
 * User: ZhangWei
 * Date: 2018/5/16
 * Time: 15:52
 */

namespace SmallRuralDog\LaravelStore\Controllers;


class HomeController extends BaseController
{
    public function index()
    {
        return view('store::index');
    }

}