#!/usr/bin/php
<?

foreach($mirror_list as $sync_name => $remote_path_list)
{
	$local_tmp_path = $temp_local_repo_dir.'/'. md5(implode('>',$remote_path_list)) ;

	echo "\r\n\r\n----------------------------------------------------------\r\n" ;
	echo "Sync ", $sync_name, "\r\n" ;
	echo "repositories:\r\n" ;
	echo implode("\r\n",$remote_path_list), "\r\n" ;
	echo "local temp repository: ", $local_tmp_path, "\r\n" ;
        
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
