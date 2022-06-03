<?php

namespace Ll\Menull;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class MenullServiceProvider extends ServiceProvider
{
    /**
     * 路由过滤
     */
    protected $exceptRoutes = [
        'auth' => 'lake-login/captcha',
        'permission' => 'lake-login/captcha',
    ];
	protected $js = [
//        'js/index.js',
    ];
	protected $css = [
//		'css/index.css',
	];
    protected $menu = [
        [
            'title' => '自定义菜单',
            'uri'   => 'menull',
        ],
    ];
	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
