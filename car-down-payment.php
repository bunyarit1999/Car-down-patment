<?php
	$down_percent ="" ;
  $price_remain ="" ;
  $pay_month ="" ;

    if (isset($_GET["price"]))
		{
			$price=$_GET["price"]; 
			$down_baht=$_GET["down_baht"]; 
			$pernum=$_GET["pernum"]; 
			$interest=$_GET["interest"];

			$down_percent = $down_baht / $price * 100;
			$price_remain = $price - $down_baht;
			$Total_interest = $price_remain * $interest / 100 * $pernum / 12;
			$price_total = $price_remain + $Total_interest;
			$pay_month = $price_total / $pernum;
		}

    if (isset($_GET["delect"])) 
        {	
            $price = " " ;
            $down_baht = " ";
            $pernum = " ";
            $interest = " ";
            $down_percent = " ";
            $price_remain = " ";
            $pay_month = " ";
        }

?>