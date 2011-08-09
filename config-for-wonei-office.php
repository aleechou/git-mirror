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
				'/home/gituser/repo/jecat.cn/framework.git',
				'https://jecatsync:jecat20sync11@github.com/JeCat/framework.git' ,
		) ,
		'jecat.doc' => array (
				'/home/gituser/repo/jecat.cn/doc.git',
				'https://jecatsync:jecat20sync11@github.com/JeCat/framework-doc.git' ,
		) ,
		'jecat.test' => array (
				'/home/gituser/repo/jecat.cn/test.git',
				'https://jecatsync:jecat20sync11@github.com/JeCat/framework-test.git' ,
		) ,
		'jecat.pear' => array (
				'/home/gituser/repo/jecat.cn/pear.git',
				'https://jecatsync:jecat20sync11@github.com/JeCat/framework-pear.git' ,
		) ,
		'jecat.all-in-one' => array (
				'/home/gituser/repo/jecat.cn/all-in-one.git',
				'https://jecatsync:jecat20sync11@github.com/JeCat/framework-all-in-one.git' ,
		) ,


		// opencomb
		// ----------------------------------
		'opencomb' => array (
				'/home/gituser/repo/opencomb.com/oc.release.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/oc.release.git' ,
		) ,

		// core
		'oc.core.coreuser' => array (
				'/home/gituser/repo/opencomb.com/extensions/core/coreuser.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-core-coreuser.git' ,
		) ,

		// develop
		'oc.develop.developtoolbox' => array (
				'/home/gituser/repo/opencomb.com/extensions/develop/developtoolbox.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-develop-developtoolbox.git' ,
		) ,
		'oc.develop.tester' => array (
				'/home/gituser/repo/opencomb.com/extensions/develop/tester.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-develop-tester.git' ,
		) ,

		// sns
		'oc.sns.album' => array (
				'/home/gituser/repo/opencomb.com/extensions/sns/album.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-album.git' ,
		) ,
		'oc.sns.blog' => array (
				'/home/gituser/repo/opencomb.com/extensions/sns/blog.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-blog.git' ,
		) ,
		'oc.sns.feed' => array (
				'/home/gituser/repo/opencomb.com/extensions/sns/feed.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-feed.git' ,
		) ,
		'oc.sns.groups' => array (
				'/home/gituser/repo/opencomb.com/extensions/sns/groups.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-groups.git' ,
		) ,
		'oc.sns.instantmessaging' => array (
				'/home/gituser/repo/opencomb.com/extensions/sns/instantmessaging.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-instantmessaging.git' ,
		) ,
		'oc.sns.message' => array (
				'/home/gituser/repo/opencomb.com/extensions/sns/message.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-message.git' ,
		) ,
		'oc.sns.microblog' => array (
				'/home/gituser/repo/opencomb.com/extensions/sns/microblog.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-microblog.git' ,
		) ,
		'oc.sns.notice' => array (
				'/home/gituser/repo/opencomb.com/extensions/sns/notice.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-notice.git' ,
		) ,
		'oc.sns.sns' => array (
				'/home/gituser/repo/opencomb.com/extensions/sns/sns.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-sns-sns.git' ,
		) ,

		// pear
		'oc.pear.pearcommon' => array (
				'/home/gituser/repo/opencomb.com/extensions/pear/pearcommon.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-pear-pearcommon.git' ,
		) ,
		'oc.pear.pearphp' => array (
				'/home/gituser/repo/opencomb.com/extensions/pear/pearphp.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-pear-pearphp.git' ,
		) ,
		'oc.pear.pearphpunit' => array (
				'/home/gituser/repo/opencomb.com/extensions/pear/pearphpunit.git',
				'https://jecatsync:jecat20sync11@github.com/OpenComb/extensions-pear-pearphpunit.git' ,
		) ,

);

$temp_local_repo_dir = '/tmp/git-mirror' ;

include __DIR__.'/inc.git-mirror.php' ;

?>

