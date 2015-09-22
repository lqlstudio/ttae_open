<?php
if(!defined('IN_TTAE')) exit('Access Denied'); 
$menu = array();
$menu['admin'] = array(	
		'type'=>1,
		'name'=>'站点配置',
		'nav'=>array(
			array('name'=>'站点配置',		'a'=>'setting'		,'type'=>	1),
			array('name'=>'全局配置',		'a'=>'config'		,'type'=>	1),
			array('name'=>'标签分类',		'a'=>'tag'			,'type'=>	1),
			array('name'=>'采集配置',		'a'=>'caiji'		,'type'=>	2),
			array('name'=>'SEO配置',		'a'=>'seo'			,'type'=>	1),
			array('name'=>'签到设置',		'a'=>'sign'			,'type'=>	3),		
			array('name'=>'积分设置',		'a'=>'share'		,'type'=>	3),		
			array('name'=>'邮件设置',		'a'=>'email'		,'type'=>	3,),
			array('name'=>'登录组件',		'a'=>'login_setting','type'=>	3),
			array('name'=>'手机版',			'a'=>'mobile'		,'type'=>	3),
			array('name'=>'注册登录',		'a'=>'reg'			,'type'=>	3),
		)
);


$menu['channel'] = array(
		'type'=>1,
		'name'=>'栏目管理',
		'nav'=>array(
			array('name'=>'栏目管理',		'a'=>'main'	,'type'=>	1),
			array('name'=>'添加栏目',		'a'=>'post'		,'type'=>	1),
			array('name'=>'批量添加栏目',	'a'=>'batpost'	,'type'=>	4),
		)
);


$menu['goods'] = array(
		'type'=>1,
		'name'=>'商品管理',
		'nav'=>array(		
			array('name'=>'商品管理',		'a'=>'main'	,'type'=>	1),
			array('name'=>'添加商品',		'a'=>'post'		,'type'=>	1),
			array('name'=>'分类管理',				'a'=>'cate'),
			array('name'=>'添加分类',				'a'=>'cate_post'),
			array('name'=>'商品搜索',		'a'=>'search'	,'type'=>	1),
		)
);
$menu['apply'] = array(
		'type'=>2,
		'name'=>'商品审核',
		'nav'=>array(			
			array('name'=>'投稿管理',		'a'=>'main'	,'type'=>	1),
			array('name'=>'投稿设置',		'a'=>'setting'	,'type'=>	1),
		)
);
$menu['fetch'] = array(
		'type'=>2,
		'name'=>'商品采集',
		'nav'=>array(			
			array('name'=>'规则列表',		'a'=>'main'	,'type'=>	1),
			array('name'=>'添加规则',		'a'=>'post'	,'type'=>	1),
		
		)
);
$menu['img'] = array(
	'type'=>2,
	'name'=>'值得买',
	'nav'=>array(
		array('name'=>'值得买',			'a'=>'main'),
		array('name'=>'添加值得买',		'a'=>'post'),
		array('name'=>'搜索',			'a'=>'search'),
	)
);


$menu['shop'] = array(
	'type'=>2,
	'name'=>'店铺管理',
	'nav'=>array(
		array('name'=>'店铺管理',		'a'=>'main'),
		array('name'=>'添加店铺',		'a'=>'post'),
		array('name'=>'分类管理',		'a'=>'cate'),
		array('name'=>'添加分类',		'a'=>'cate_post'),

	)
);

$menu['duihuan'] = array(
		'type'=>2,
		'name'=>'积分兑换',
		'nav'=>array(
			array('name'=>'积分兑换',		'a'=>'main'),
			array('name'=>'兑换商品发布',	'a'=>'post'),
			array('name'=>'申请记录',		'a'=>'apply'),
			array('name'=>'分类管理',				'a'=>'cate'),
			array('name'=>'添加分类',				'a'=>'cate_post'),
		)
);

$menu['member'] = array(
	'type'=>2,
	'name'=>'会员管理',
	'nav'=>array(
		array('name'=>'会员管理',				'a'=>'main'),
		array('name'=>'添加会员',				'a'=>'post'),
		array('name'=>'会员搜索',				'a'=>'search'),
		array('name'=>'用户组',					'a'=>'group'),
		array('name'=>'添加用户组',				'a'=>'group_post'),
		array('name'=>'推广用户组',				'a'=>'rank','type'=>5),
		array('name'=>'添加推广组',				'a'=>'rank_post','type'=>5),

	)
);


$menu['sign'] = array(
	'type'=>2,
	'name'=>'积分管理',
	'nav'=>array(	
		array('name'=>'积分管理',				'a'=>'main'),
		array('name'=>'搜索',					'a'=>'search'),
	)
);



$menu['pics'] = array(
	'type'=>2,
	'name'=>'幻灯片',
	'nav'=>array(
		array('name'=>'幻灯片',				'a'=>'main'),
		array('name'=>'添加幻灯片',			'a'=>'post'),
		array('name'=>'幻灯片分类',			'a'=>'type'),
		array('name'=>'添加幻灯片分类',		'a'=>'type_post'),
	)
);
$menu['ad'] = array(
	'type'=>2,
	'name'=>'广告管理',
	'nav'=>array(
		array('name'=>'广告管理',				'a'=>'main'),
		array('name'=>'添加广告',				'a'=>'post'),
	)	
);
$menu['article'] = array(
	'type'=>1,
	'name'=>'文章管理',
	'nav'=>array(
		array('name'=>'文章管理',				'a'=>'main'),
		array('name'=>'添加文章',				'a'=>'post'),
		array('name'=>'分类管理',				'a'=>'cate'),
		array('name'=>'添加分类',				'a'=>'cate_post'),
		array('name'=>'文章搜索',				'a'=>'search'),
	)
);

$menu['module'] = array(
	'type'=>1,
	'name'=>'友情链接',
	'nav'=>array(
		array('name'=>'友情链接',				'a'=>'friend_link'),
		array('name'=>'添加友情链接',			'a'=>'friend_link_add')
	)
);
$menu['tools'] = array(
	'type'=>1,
	'name'=>'更新缓存',
	'nav'=>array(	
			array('name'=>'更新缓存',				'a'=>'cache'),
		
			array('name'=>'工具集合',				'a'=>'main','type'=>2),
			array('name'=>'更新站内商品',			'a'=>'update_goods','type'=>9),
	)
);





?>