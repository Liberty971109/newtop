<?php

remove_action( 'welcome_panel', 'wp_welcome_panel' );

function wpex_wp_welcome_panel() { 

	$ele_pre_url = '/wp-admin/admin.php?page=elementor-app&ver=1.0#/site-editor/templates/';

	$col = array(
		array( //第一列
			'title' => '建站前筹备',
			'items' => array(
				'安装必备插件'		=>	'/wp-admin/plugin-install.php',
				'配置SEO'		=>	'/wp-admin/admin.php?page=seopress-import-export',
				'整站样式'		=>	'/wp-admin/edit.php?post_type=elementor_library',
				'绑定整站样式'		=>	'/wp-admin/admin.php?page=ang-settings',
				'验证样式生效'		=>	'/?elementor_library=整站样式一览',
				'页眉'			=>	$ele_pre_url . 'header',
				'页脚'			=>	$ele_pre_url . 'footer',
				'网站架子'			=>	'/wp-admin/customize.php',
				'设产品页'		=>	'/wp-admin/admin.php?page=wc-settings&tab=products',
			)
		),
		array( //第二列
			'title'	=> '传内容',
			'items' => array(
				'配置站长信息'		=>	'/wp-admin/profile.php',
				'建页面'			=>	'/wp-admin/post-new.php?post_type=page',
				'建文章分类'		=>	'/wp-admin/edit-tags.php?taxonomy=category',
				'写文章'			=>	'/wp-admin/post-new.php',
				'建产品分类'		=>	'/wp-admin/edit-tags.php?taxonomy=product_cat&post_type=product',
				'建产品属性'		=>	'/wp-admin/edit.php?post_type=product&page=product_attributes',
				'传产品'			=>	'/wp-admin/post-new.php?post_type=product',
				'设计单页'		=>	'/wp-admin/edit.php?post_type=page',
			)
		),
		array( //第三列
			'title' => '设计通用模板',
			'items' => array(
				'设计博客汇总页'	=>	$ele_pre_url . 'archive',
				'设计产品汇总页'	=>	$ele_pre_url . 'product-archive',
				'设计博客单页'		=>	$ele_pre_url . 'single-post',
				'设计产品单页'		=>	$ele_pre_url . 'product',
				'设计弹窗'		=>	'edit.php?post_type=elementor_library&tabs_group&elementor_library_type=popup',
			)
		),
		array( //第四列
			'title' => '建站后续',
			'items' => array(
				'改颜色'			=>	'https://coolors.co/app',
				'改字体'			=>	'https://fontjoy.com/',
				'装杀毒'			=>	'/wp-admin/admin.php?page=aiowpsec_settings&tab=tab5',
				'速度优化'		=>	'https://nitropack.io/#KCEYBP',
				'开放收录'		=>	'/wp-admin/options-reading.php',
				'改后台语言'		=>	'/wp-admin/options-general.php',
			)
		),
		array( //第五列
			'title' => 'B2B建站必备',
			'items' => array(
				'买域名'			=>	'https://www.namesilo.com/register.php?rid=8c41255pm',
				'买网站空间'		=>	'https://hostinger.com/imiker',
				'查看建站清单'		=>	'https://share.mubu.com/doc/5b_q7cZbcFb',
			)
		),
	);

	$plugins = array(
		array(
			'title' => '商城系统',
			'plugin'=> array(
				'WooCommerece'						=> 'https://wordpress.org/plugins/woocommerce/',
				'WooCommerce for B2B'				=> '/wp-admin/admin.php?page=woo_for_b2b',
			)
		),
		array(
			'title' => '建站工具',
			'plugin'=> array(
				'Elementor'							=> 'https://wordpress.org/plugins/woocommerce/',
				'Elementor Pro'						=> 'https://elementor.com/?ref=8220',
				'Style Kits for Elementor'			=> 'https://wordpress.org/plugins/analogwp-templates/',
			)
		),
		array(
			'title' => '网页设计',
			'plugin'=> array(
				'Premium Starter Templates'			=> 'https://ultimateelementor.com/elementor-templates/?bsf=3515',
				'Ultimate Addons for Elementor'		=> 'https://ultimateelementor.com/?bsf=3515',
			)
		),
		array(
			'title' => 'SEO推广',
			'plugin'=> array(
				'SEOPress'							=> 'https://wordpress.org/plugins/woocommerce/',
				'SEOPress Pro'						=> 'https://www.seopress.org/pricing/ref/665/?campaign=yansir',
			)
		),
		array(
			'title' => '安全工具',
			'plugin'=> array(
				'All In One WP Security'			=> 'https://wordpress.org/plugins/all-in-one-wp-security-and-firewall/',
				'UpdraftPlus'						=> 'https://wordpress.org/plugins/updraftplus/',
			)
		),
		array(
			'title' => '其他工具',
			'plugin'=> array(
				'WP User Avatar'				=> 'https://wordpress.org/plugins/wp-user-avatars/',
			)
		),
	);

	?>
<div class="containner">
	<style type="text/css">
		.containner{
			margin: 30px auto 70px;
			align-items: center;
			width: 1000px;
		}
		.wel-title{
			margin-bottom: 10px !important;
			padding-bottom: 10px;
			display: inline-block;
			border-bottom: solid 1px #DDD;
		}
		.wel-table{
			display: flex;
			flex-wrap: wrap;
		}
		.wel-col{
			flex-basis: 20%;
		}
		.wel-list{
			margin-left: 1.5em;
		}
		li{
			margin-bottom: 15px;
		}
		i{
			margin-right: 10px;
		}
		.plugin-containner{
			margin-top: 50px;
		}
		.plug-items{
			counter-reset: LIST-ITEMS;
			display: inline;
			margin-left: 0;
		}
		.plug-item{
			display: inline;
			margin: 0 5px;
		}
		.plug-item:before{
			  content: counter( LIST-ITEMS ) ".";
			  counter-increment: LIST-ITEMS;
			  padding-right: 0.25em;
		}
	</style>

	<h2 class="wel-title">B2B建站任务</h2>
	<div class="wel-table">
		<?php
		foreach ($col as $column ): ;?>
		<div class="wel-col">
			<h3 class="col-title"><?php echo $column['title'] ;?></h3>
			<ol class='wel-list'>
				<?php
				foreach( $column['items'] as $key => $value ){
					echo '<li><a href="'. $value .'"><span><i class="far fa-arrow-alt-circle-left"></i></span><span>'. $key .'</span></a></li>';
				};?>
			</ol>
		</div>
	<?php endforeach; ?>

	</div>

	<div class="plugin-containner">
		<h2 class="wel-title">B2B推荐插件</h2>
		<ul>
			<?php foreach( $plugins as $plugin ): ;?>
			<li>
				<span class='plug-title'><?php echo $plugin['title'] . count($plugin['plugin']) . '件套：' ;?></span>
				<ol class="plug-items">
					<?php foreach( $plugin['plugin'] as $name => $link ): ?>
					<li class="plug-item"><a href="<?php echo $link ;?>" target="_blank"><?php echo $name ;?></a></li>
					<?php endforeach ;?>
				</ol>
			</li>
			<?php endforeach ;?>
		</ul>
	</div>
</div>
<?php }
add_action( 'welcome_panel', 'wpex_wp_welcome_panel' );