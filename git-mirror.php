#!/usr/bin/php
<?
// example :
// local_tmp_path => array(
//							'remote1_path',
//							'remote2_path'
//					)
$mirror_list=array(
		''=>array (
				'https://github.com/lexdene/Dlut-Game-Platform.git',
				'elephant@lxj.local.com:~/Dlut-Game-Platform.git'
			) ,
);
foreach($mirror_list as $local_tmp_path => $remote_path_list)
{
	echo "$local_tmp_path\n";
	if( is_int($local_tmp_path) || empty($local_tmp_path))
	{
		$local_tmp_path="/tmp/git-mirror/$local_tmp_path";
	}
	foreach($remote_path_list as $remote_path)
	{
		$remote_branch_list=`git ls-remote -h $remote_path | sed -n 's#^.*refs/heads/##p'`;
		echo "remote_branch_list=$remote_branch_list over\n";
		foreach(explode("\n",$remote_branch_list) as $branch)
		{
			if(empty($branch)) continue;
			`if [ ! -d "$local_tmp_path/$branch/.git" ]; then mkdir -p "$local_tmp_path/$branch/"; cd "$local_tmp_path/$branch/"; git init; fi`;
			`cd $local_tmp_path/$branch/;git pull $remote_path $branch`;
		}
	}
	$local_branch_list=explode("\n",`ls $local_tmp_path`);
	foreach($remote_path_list as $remote_path)
	{
		foreach($local_branch_list as $branch)
		{
			if(empty($branch)) continue;
			echo "local_tmp_path=$local_tmp_path,branch=$branch\n";
			`cd $local_tmp_path/$branch/;git push $remote_path master:$branch`;
		}
	}
}
?>
