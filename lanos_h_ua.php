<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("lanos_h_ua_php.php");
    $indexpage->Display(); 
		$indexpage->delete;
?>