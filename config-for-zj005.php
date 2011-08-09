#!/usr/bin/php
<?
// example :
// local_tmp_path => array(
//							'remote1_path',
//							'remote2_path'
//					)
$mirror_list=array(


		// jecat 
		// ----------------------------------
		'jecat.framework' => array (
		        '/var/jecat.cn/git/framework/framework.git',
		        'https://jecatsync:jecat20sync11@github.com/JeCat/framework.git' ,
		) ,
		'jecat.doc' => array (
		        '/var/jecat.cn/git/framework/doc.git',
		        'https://jecatsync:jecat20sync11@github.com/JeCat/framework-doc.git' ,
		) ,
		'jecat.test' => array (
		        '/var/jecat.cn/git/framework/test.git',
		        'https://jecatsync:jecat20sync11@github.com/JeCat/framework-test.git' ,
		) ,
		'jecat.pear' => array (
		        '/var/jecat.cn/git/framework/pear.git',
		        'https://jecatsync:jecat20sync11@github.com/JeCat/framework-pear.git' ,
		) ,
		'jecat.all-in-one' => array (
		        '/var/jecat.cn/git/framework/all-in-one.git',
		        'https://jecatsync:jecat20sync11@github.com/JeCat/framework-all-in-one.git' ,
		) ,



		// opencomb
		// ----------------------------------
		'opencomb' => array (
				'/var/opencomb.com/git/oc/oc.release.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/oc.release.git' ,
		) ,

		// core
		'oc.core.coreuser' => array (
				'/var/opencomb.com/git/oc/extensions/core/coreuser.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-core-coreuser.git' ,
		) ,

		// develop
		'oc.develop.developtoolbox' => array (
				'/var/opencomb.com/git/oc/extensions/develop/developtoolbox.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-develop-developtoolbox.git' ,
		) ,
		'oc.develop.tester' => array (
				'/var/opencomb.com/git/oc/extensions/develop/tester.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-develop-tester.git' ,
		) ,

		// sns
		'oc.sns.album' => array (
				'/var/opencomb.com/git/oc/extensions/sns/album.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-album.git' ,
		) ,
		'oc.sns.blog' => array (
				'/var/opencomb.com/git/oc/extensions/sns/blog.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-blog.git' ,
		) ,
		'oc.sns.feed' => array (
				'/var/opencomb.com/git/oc/extensions/sns/feed.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-feed.git' ,
		) ,
		'oc.sns.groups' => array (
				'/var/opencomb.com/git/oc/extensions/sns/groups.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-groups.git' ,
		) ,
		'oc.sns.instantmessaging' => array (
				'/var/opencomb.com/git/oc/extensions/sns/instantmessaging.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-instantmessaging.git' ,
		) ,
		'oc.sns.message' => array (
				'/var/opencomb.com/git/oc/extensions/sns/message.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-message.git' ,
		) ,
		'oc.sns.microblog' => array (
				'/var/opencomb.com/git/oc/extensions/sns/microblog.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-microblog.git' ,
		) ,
		'oc.sns.notice' => array (
				'/var/opencomb.com/git/oc/extensions/sns/notice.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-notice.git' ,
		) ,
		'oc.sns.sns' => array (
				'/var/opencomb.com/git/oc/extensions/sns/sns.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-sns.git' ,
		) ,

		// pear
		'oc.pear.pearcommon' => array (
				'/var/opencomb.com/git/oc/extensions/pear/pearcommon.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-pear-pearcommon.git' ,
		) ,
		'oc.pear.pearphp' => array (
				'/var/opencomb.com/git/oc/extensions/pear/pearphp.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-pear-pearphp.git' ,
		) ,
		'oc.pear.pearphpunit' => array (
				'/var/opencomb.com/git/oc/extensions/pear/pearphpunit.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-pear-pearphpunit.git' ,
		) ,

);

$temp_local_repo_dir = '/tmp/git-mirror' ;

include __DIR__.'/inc.git-mirror.php' ;

?>

