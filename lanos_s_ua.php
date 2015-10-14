<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("lanos_s_ua_php.php");
    $indexpage->Display(); 
		$indexpage->delete;
?>