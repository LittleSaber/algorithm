<?php
	//二分查找
	function binarySearch(Array $arr,$target) {
		$low = 0;
		$high =count($arr)-1;
		while($low<=$high) {
			$mid = floor(($low+$high)/2);
			if($arr[$mid] == $target) {
				return $mid;
			}
			if($arr[$mid] > $target) {
				$high = $mid-1;
			}
			if($arr[$mid] < $target) {
				$low = $mid+1;
			}
		}
		return false;
	}
	$arr = array(1,3,5,7,9,11);
	$inx = binarySearch($arr,5);
	var_dump($inx);
?>