<?Php
session_start();

$Language =array('-Select-','Arunachali','Assamese','Awadhi','Bengali','Bhojpuri','Brij','Bihari','Badaga','Chatisgarhi','Dogri','English','French','Garhwali','Garo','Gujarati','Haryanvi','Himachali/Pahari','Hindi','Kanauji','Kannada','Kashmiri','Khandesi','Khasi','Konkani','Koshali','Kumoani','Kutchi','Lepcha','Ladacki','Magahi','Maithili','Malayalam','Manipuri','Marathi','Marwari','Miji','Mizo','Monpa','Nicobarese','Nepali','Oriya','Punjabi','Rajasthani','Sanskrit','Santhali','Sindhi','Sourashtra','Tamil','Telugu','Tripuri','Tulu','Urdu');
				
$caste =array('-Select-','Hindu','Muslim - Shia','Muslim - Sunni','Muslim - Others','Christian - Catholic','Christian - Orthodox','Christian - Protestant','Christian - Others','Sikh','Jain - Digambar','Jain - Shwetambar','Jain - Others','Parsi','Buddhist','Inter-Religion','No Religious Belief');		

$religion_list = array("1"=>"Hindu","10"=>"Muslim - Shia","11"=>"Muslim - Sunni","2"=>"Muslim - Others","12"=>"Christian - Catholic","13"=>"Christian - Orthodox","14"=>"Christian - Protestant","3"=>"Christian - Others","4"=>"Sikh","15"=>"Jain - Digambar","16"=>"Jain - Shwetambar","5"=>"Jain - Others","6"=>"Parsi","7"=>"Buddhist","8"=>"Inter-Religion","9"=>"No Religious Belief");

$religion_list = array("1"=>"Hindu","2"=>"Muslim - Shia","3"=>"Muslim - Sunni","4"=>"Muslim - Others", "5"=>"Christian - Catholic","6"=>"Christian - Orthodox","7"=>"Christian - Protestant","8"=>"Christian - Others","9"=>"Sikh","10"=>"Jain - Digambar","11"=>"Jain - Shwetambar","12"=>"Jain - Others","13"=>"Parsi","14"=>"Buddhist","15"=>"Inter-Religion","16"=>"No Religious Belief");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("include/innerheadersection.php"); ?>
<script language="javascript" src="js/searchresult.js"></script>
<script language="javascript" type="text/javascript">
function changepagenumber(pageno,linktext)
{
	window.location.href = 'searchresult.php?page='+pageno+linktext;
}
function openverifywindow()
{
	var l = (screen.availWidth-350) / 2 ;
	var t = (screen.availHeight-250) / 2 ;
	window.open("verifypopup.php","What is this?","resizable=no,scrollbars=no,status=yes,width=350,height=250,menubar=0,toolbar=0,left="+l+",top="+t+"");
	return false;
}
</script>
<!-- FOR TOOL TIP START -->
<script type="text/javascript" src="js/jquery-1.2.2.pack.js"></script>
<script type="text/javascript" src="js/htmltooltip.js"></script>
<!-- FOR TOOL TIP END -->

<script>
function do_request(lang,religion,caste,divid)
{ 
// alert('generateCaste3.php?lang='+lang+'&rel='+religion+'&cast='+caste);
 $.post('generateCaste3.php?lang='+lang+'&rel='+religion+'&cast='+caste, function(data) {
 
// alert("shi" );
	if(data!=''){
	//alert(data);
	document.getElementById(divid).innerHTML = data;
	}});

}
</script>

</head>

<body>
<?Php
$lookingfor = $_REQUEST["lookingfor"];
$selectagefrom = $_REQUEST["selectagefrom"];
$selectageto = $_REQUEST["selectageto"];
$religion = $_REQUEST["religion"];
$mothertongue = $_REQUEST["mothertongue"];
$caste = $_REQUEST["caste"];
$country = $_REQUEST["country"];
if(isset($_REQUEST["photo"]))
	$photo = $_REQUEST["photo"];
else
	$photo = "";

//FOR PAGING
if(!isset($_GET['page'])){ 

    $page = 1; 

} else { 

    $page = $_GET['page']; 

} 
// Define the number of results per page 

$max_results = 15; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results);  
//END PAGING

$searchcondition = "";
$searchquery = "SELECT * FROM register WHERE Status <> 'InActive' AND Status <> ''";
if($lookingfor != "")
$searchquery .= " AND Gender = '".$lookingfor."'";

/*echo "<pre>";
print_r($religion_list);
echo $religion;
echo $religion_list[$religion];
exit;*/

if($religion != "" && $religion != "0")
{
	$searchquery .= " AND Religion = '".$religion."'";
	$searchcondition .= ", Religion:".$religion_list[$religion];
}
if($caste != "")
{
	$searchquery .= " AND Caste = '".$caste."'";
	$searchcondition .= ", Caste:".$caste;
}
if($mothertongue != "" && $mothertongue != "0")
{
	$searchquery .= " AND Language = '".$mothertongue."'";
	$searchcondition .= ", Mother Tongue:".$mothertongue;
}
if($photo != "")
$searchquery .= " AND Photo1 <> 'nophoto.gif'";
$searchquery .= " AND Age Between '".$selectagefrom."' AND '".$selectageto."'";

/*if(isset($_SESSION['username']))
{ 
	$count_blocklist_sql = "SELECT COUNT(*) AS blockmemberlist FROM blockmember WHERE memberid = '".$_SESSION['username']."'";
	$count_blocklist_exec = mysql_query($count_blocklist_sql);
	$count_blocklist_fetch = mysql_fetch_array($count_blocklist_exec);
	if($count_blocklist_fetch["blockmemberlist"] != 0)
	{
		$searchquery .= " AND MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."')";
	}
}*/


if(isset($_SESSION['username']))
{ 
	$count_blocklist_sql = "SELECT COUNT(*) AS blockmemberlist FROM blockmember WHERE memberid = '".$_SESSION['username']."' or blockmemberid = '".$_SESSION['username']."'";
	$count_blocklist_exec = mysql_query($count_blocklist_sql);
	$count_blocklist_fetch = mysql_fetch_array($count_blocklist_exec);
	if($count_blocklist_fetch["blockmemberlist"] != 0)
	{
		$searchquery .= " AND r.MatriID NOT IN (SELECT blockmemberid FROM blockmember WHERE memberid = '".$_SESSION['username']."' or blockmemberid = '".$_SESSION['username']."')";
		
		$searchquery .= " AND r.MatriID NOT IN (SELECT memberid FROM blockmember WHERE memberid = '".$_SESSION['username']."' or blockmemberid = '".$_SESSION['username']."')";
	}
}


$count_record_exec = mysql_query($searchquery);
$searchresultcount = mysql_num_rows($count_record_exec);
$total_pages = ceil($searchresultcount / $max_results);

$searchquery .= " order by featured desc LIMIT $from, $max_results ";

echo $searchquery; exit;
$searchresultsql =  mysql_query($searchquery);	

?>

<div id="wrapper">


<!-- HEADER STARTS HERE ###################################################  -->
  <?Php include("include/menu.php"); ?>
<!-- HEADER ENDS HERE ###################################################  -->

<!-- CONTENT AREA STARTS HERE ###################################################  -->

 <!-- BREADCRUMBS STARTS HERE #####################################  -->
<div id="breadcrumb"> 
<ul class="breadcrumbs">
		<li class="left"></li>
        
      <li class="center">
        <div id="breadcrumb_text">You are Here:
<span class="pathway"><?Php echo $breadcrumbspage;?>
</span></div>
        <div id="breadcrumb_modifysearch"><a href="search_page.php" title="Modify Search" class="link" style="background-image:none">Modify Search >></a>				        </div>
        </li>
        
        <li class="right"></li>
</ul>
</div>
<!-- BREADCRUMBS ENDS HERE ########################################  -->

  <div id="content_area">
  
 
    <?php include("include/searchleftside.php"); ?>

<form action="" method="post" name="searchrsforms" id="searchrsforms">
    <div id="inner_right">
 <!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->   
    
 <a name="top" id="top"></a>
      <h1>Search Results</h1>
      <br />
    <strong> You have searched for:</strong> <?php echo $lookingfor; ?>, <?php echo $selectagefrom; ?> yrs to <?php echo $selectageto; ?> yrs <?php echo $searchcondition;?>. 
    <br />
    This results are based on your search criteria. If you are looking for better results,please try again, this time expanding your search criteria. After all, love is often  found where you least expect it.
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
  <tbody><tr>
    <td class="pg_left"></td>
    <td align="center" valign="middle" class="pg_center">
    <?php

//$link = "&lookingfor=".$_REQUEST["lookingfor"]."&selectagefrom=".$_REQUEST["selectagefrom"]."&selectageto=".$_REQUEST["selectageto"]."&religion=".$_REQUEST["religion"]."&mothertongue=".$_REQUEST["mothertongue"]."&caste=".$_REQUEST["caste"]."&country=".$_REQUEST["country"]."&photo=".$_REQUEST["photo"];
?>
  <?php

if($_REQUEST['religion'] != "")
	$link = "&religion=".$_REQUEST["religion"];
if($_REQUEST['education'] != "")
	$link = "&education=".$_REQUEST["education"];
if($_REQUEST['photo'] != "")
	$link = "&photo=".$_REQUEST["photo"];
if($_REQUEST['online'] != "")
	$link = "&online=".$_REQUEST['online'];
if($_REQUEST['week'] != "")
	$link = "&week=".$_REQUEST['week'];
if($_REQUEST['month'] != "")
	$link = "&month=".$_REQUEST['month'];
if($_REQUEST['morethanmonth'] != "")
	$link = "&morethanmonth=".$_REQUEST['morethanmonth'];
?>
    <table width="100%" align="center">
    <tbody><tr>
    <td><strong>Total Number of Matches Found : <?php echo $searchresultcount;?></strong></td>
    <td width="188"><strong>Showing Page <?php echo $page; ?> of <?php echo $total_pages; ?></strong>
    
    <select name="select" id="select" onchange="return changepagenumber(this.value,'<?php echo $link; ?>');" >
    <?php for($selectpage = 1 ; $selectpage <= $total_pages; $selectpage++) { ?>
        <option value="<?php echo $selectpage; ?>" <?Php if($selectpage == $page) echo "selected='selected'"; ?>><?php echo $selectpage; ?></option>
    <?php } ?>    
      </select></td>
    <td width="179">
    
    <?php
// Build Next Link 

if($page < $total_pages){ 

    $next = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next".$link."\" class='pageNum'>&gt;&gt;</a>"; 

} 

for($i = $total_pages; $i >= 1; $i--) {
if(($page) == $i)
    echo "<span class='pageNum'>$i</span>"; 
else
	if((($page <= $i) && ($i <= ($page+2))) || (($i < $page) && ($i >= $page-2)))
	{
	    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i".$link."\" class='pageNum'>$i</a>"; 
	}
}
// Build Previous Link 

if($page > 1){ 

    $prev = ($page - 1); 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev".$link."\" class='pageNum'>&lt;&lt;</a> &nbsp;";

} 

?>
    </td>
    </tr>
    </tbody></table>
    
    </td>
    <td class="pg_right"></td>
  </tr>
</tbody></table>    
<label class="size10 block" style="float:left; font-weight:bold; clear:left; margin-top:8px;"><input name="selectallcheckbox" type="checkbox" value="1" style="font-size:8px; margin-top:8px;" onClick="selectallprofile();" id="selectallcheckbox"> Select All</label>
<a href="javascript:clickforward()" class="button-small square-orange uppercase float_right" style="float:right; clear:right; margin:5px 0px;"><span></span> Forward </a><hr style="background-color:#f9d6a5; height:2px; clear:both; margin:0px; padding:0px;"   /><br />

<?php 
$currentpage = 1; // For view profile

while($searchresultfetch =  mysql_fetch_array($searchresultsql)) {	
$specificpage = (($page-1)*$max_results) + $currentpage; // For view profile
?>
<label class="size10"><input name="<?php echo $searchresultfetch["MatriID"];?>" type="checkbox" value="<?php echo $searchresultfetch["MatriID"];?>" style="font-size:8px;"> Select this Profile</label>

      <?php  $religion = array("1"=>"Hindu","10"=>"Muslim - Shia","11"=>"Muslim - Sunni","2"=>"Muslim - Others","12"=>"Christian - Catholic","13"=>"Christian - Orthodox","14"=>"Christian - Protestant","3"=>"Christian - Others","4"=>"Sikh","15"=>"Jain - Digambar","16"=>"Jain - Shwetambar","5"=>"Jain - Others","6"=>"Parsi","7"=>"Buddhist","8"=>"Inter-Religion","9"=>"No Religious Belief");
	  
	  $language =$searchresultfetch['Language'];
	  $religion = $searchresultfetch['Religion'];
	  
	  include("values.php");
	  foreach($json as $key=>$value) {
	  
	  if($value->value == $searchresultfetch['Caste']){
	  $caste = $value->caption;
	  }
	  }
	  
if($searchresultfetch['Height'] =="1") { $similarheight = "Below 4ft"; }
else if($searchresultfetch['Height'] =="2") { $similarheight = "4ft 6in"; }
else if($searchresultfetch['Height'] =="3") { $similarheight = "4ft 7in"; }
else if($searchresultfetch['Height'] =="4") { $similarheight = "4ft 8in"; }
else if($searchresultfetch['Height'] =="5") { $similarheight = "4ft 9in"; }
else if($searchresultfetch['Height'] =="6") { $similarheight = "4ft 10in"; }
else if($searchresultfetch['Height'] =="7") { $similarheight = "4ft 11in"; }
else if($searchresultfetch['Height'] =="8") { $similarheight = "5ft"; }
else if($searchresultfetch['Height'] =="9") { $similarheight = "5ft 1in"; }
else if($searchresultfetch['Height'] =="10") { $similarheight = "5ft 2in"; }
else if($searchresultfetch['Height'] =="11") { $similarheight = "5ft 3in"; }
else if($searchresultfetch['Height'] =="12") { $similarheight = "5ft 4in"; }
else if($searchresultfetch['Height'] =="13") { $similarheight = "5ft 5in"; }
else if($searchresultfetch['Height'] =="14") { $similarheight = "5ft 6in"; }
else if($searchresultfetch['Height'] =="15") { $similarheight = "5ft 7in"; }
else if($searchresultfetch['Height'] =="16") { $similarheight = "5ft 8in"; }
else if($searchresultfetch['Height'] =="17") { $similarheight = "5ft 9in"; }
else if($searchresultfetch['Height'] =="18") { $similarheight = "5ft 10in"; }
else if($searchresultfetch['Height'] =="19") { $similarheight = "5ft 11in"; }
else if($searchresultfetch['Height'] =="20") { $similarheight = "6ft"; }
else if($searchresultfetch['Height'] =="21") { $similarheight = "6ft 1in"; }
else if($searchresultfetch['Height'] =="22") { $similarheight = "6ft 2in"; }
else if($searchresultfetch['Height'] =="23") { $similarheight = "6ft 3in"; }
else if($searchresultfetch['Height'] =="24") { $similarheight = "6ft 4in"; }
else if($searchresultfetch['Height'] =="25") { $similarheight = "6ft 5in"; }
else if($searchresultfetch['Height'] =="26") { $similarheight = "6ft 6in"; }
else if($searchresultfetch['Height'] =="27") { $similarheight = "6ft 7in"; }
else if($searchresultfetch['Height'] =="28") { $similarheight = "6ft 8in"; }
else if($searchresultfetch['Height'] =="29") { $similarheight = "6ft 9in"; }
else if($searchresultfetch['Height'] =="30") { $similarheight = "6ft 10in"; }
else if($searchresultfetch['Height'] =="31") { $similarheight = "6ft 11in"; }
else if($searchresultfetch['Height'] =="32") { $similarheight = "7ft"; }
else if($searchresultfetch['Height'] =="33") { $similarheight = "Above 7ft"; }
?>
<a href="viewsimilarprofile.php?gender=<?php echo $searchresultfetch['Gender']; ?>&age=<?php echo $searchresultfetch['Age']; ?>&religion=<?php echo $searchresultfetch['Religion']; ?>&caste=<?php echo $searchresultfetch['Caste']; ?>&education=<?php echo $searchresultfetch['Education']; ?>&height=<?php echo $similarheight; ?>" class="float_right">View Similar Profile</a>

<style> 
.profile_block_featured .header {
    background-color: #F9FFDF;
    background-image: url("images/profile_fetured_bg_green.png");
    background-position: center bottom;
    background-repeat: repeat-x;
}
</style>

<?

 $sel = "SELECT count(*) from payment_details where matriid ="."'".$searchresultfetch['MatriID']."' and spot_light = 1";
$qry = mysql_query($sel );

$fetch = mysql_fetch_array($qry );
if($fetch[0] > 0) {
$css = 'profile_block profile_block_featured';
} else {
$css = 'profile_block ';
}



$sel = "SELECT plan from payment_details where matriid ="."'".$searchresultfetch['MatriID']."' ";
$qry = mysql_query($sel );

$fetch = mysql_fetch_array($qry );
if(count($fetch) >1) {
$plan = $fetch['plan'];
} else{
$plan = 'Basic';
}

if(isset($searchresultfetch['Status']) and $searchresultfetch['Status'] != 'Active')
 {
   $plan = $searchresultfetch['Status'];
} else{
  $plan = 'Basic';
}

?>

<div class="<?=$css?>">

  
  <div class="header"><a class="title" href="viewfullprofile.php"><?php echo $searchresultfetch["Name"];?> (<?php echo $searchresultfetch["MatriID"];?>)</a><a title="<?php echo $sitename; ?> <?=$plan?> Account Holder" class="icon_acc_type" href="#"><?php echo $sitename; ?> <?=$plan?></a>
<a title="<?php echo $sitename; ?> Diamond Account Holder" class="icon_acc_type acc_diamond" href="#"></a>
<span class="icon status stat_online"><strong><?php include("include/chat.php"); ?>
<span class="icon status stat_online">
	<?php 
	if(in_array($searchresultfetch['MatriID'],$explodeonlinemember)) {
		echo $onlinechatmsg;
	}
	else {
		echo $offlinechatmsg;
	}
	?>
</span>
</strong></span>
</div>

        <?

$sel = "select count(*) as cnt from verify_profile where matriid ="."'".$matriid."' and approved  = 1" ;
$qry = mysql_query($sel);
$fetch  = mysql_fetch_array($qry );
if($fetch['cnt']>0 ) {
$css = 'icon btn_services';
//$title= 'Profile Verified'; 
$title= ''; 
$vdivtitle = "Verified : <font class='redcolottooltip'>What is this?</font>";
$verifytext  = "Verified Profile";
} else{
$css = "icon_disable btn_services_disable";
//$title= 'Profile Varification not Available';
$title= ''; 
$vdivtitle = "Unverified : <font class='redcolottooltip'>What is this?</font>";
$verifytext  = "Verify Profile";
}
?>
  
<?Php if(isset($_SESSION['username'])) { ?>
  <div style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #f9d6a5;" class="footer"> 
           <a style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;" class="btn_services btn_favorite float_right" href="add_to_favorite.php?id=<?php echo $searchresultfetch['MatriID']; ?>">Add to Favorite</a>

             <a style="border-left-width: 1px; border-left-style: solid; border-left-color: #f9d6a5;" class="<?=$css?> btn_varify float_right" href="#" title="<?=$title?>" rel="htmltooltip" onclick="return openverifywindow();"><?php echo $verifytext; ?></a>
	<div class="htmltooltip"><?php echo $vdivtitle; ?></div>
        </div>
<?Php } ?>          
  <div class="body">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="130">
<?php if($searchresultfetch['Photo1']== "nophoto.gif" or $searchresultfetch['Photo1Approve'] == 'No' ) 
{
	if($searchresultfetch['Gender'] == 'Male') {
?>
<img src="images/icons/noimage_man.jpg" width="100" height="100" class="img_profile" />
<?php } elseif($searchresultfetch['Gender'] == 'Female') { ?>
<img src="images/icons/noimage_girl.jpg" width="100" height="100" class="img_profile" />
<?php } else { ?>
<img src="images/icons/photo_upload_lady.jpg" width="100" height="100" class="img_profile" />
<? } } 
else if($searchresultfetch['PhotoProtect']== "Yes") { 
	if($searchresultfetch['Gender'] == 'Male') {
?>
		<img src="images/icons/photo_askme_man.jpg" width="100" height="100" class="img_profile" />
<?Php		
	} else {
?>		
	<img src="images/icons/photo_askme_lady.jpg" width="100" height="100" class="img_profile" />
<?Php
	} 

 }
else  {  ?>					
  <img width="110" height="110" src="memphoto1/<?php echo $searchresultfetch['Photo1']?>" />
<? } ?>
<!--          <div class="thumb_slider"> <a href="#">1</a> <a href="#" class="active">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> </div>--></td>
        <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="profile">
          <tr>
            <th width="90">Age</th>
            <td width="230">:&nbsp;<?php echo $searchresultfetch["Age"];?>  yrs</td>
            <th width="85">Height</th>
            <td>: <?php  

$strheight = $searchresultfetch['Height'];

if($strheight =="1") { echo "4ft - 121 cm"; }

else if($strheight =="2") { echo "4ft 1in - 124cm"; }

else if($strheight =="3") { echo "4ft 2in - 127cm"; }

else if($strheight =="4") { echo "4ft 3in - 129cm"; }

else if($strheight =="5") { echo "4ft 4in - 132cm"; }

else if($strheight =="6") { echo "4ft 5in - 134cm"; }

else if($strheight =="7") { echo "4ft 6in - 137cm"; }

else if($strheight =="8") { echo "4ft 7in - 139cm"; }

else if($strheight =="9") { echo "4ft 8in - 142cm"; }

else if($strheight =="10") { echo "4ft 9in - 144cm"; }

else if($strheight =="11") { echo "4ft 10in - 147cm"; }

else if($strheight =="12") { echo "4ft 11in - 149cm"; }

else if($strheight =="13") { echo "5ft - 152cm"; }

else if($strheight =="14") { echo "5ft 1in - 154cm"; }

else if($strheight =="15") { echo "5ft 2in - 157cm"; }

else if($strheight =="16") { echo "5ft 3in - 160cm"; }

else if($strheight =="17") { echo "5ft 4in - 162cm"; }

else if($strheight =="18") { echo "5ft 5in - 165cm"; }

else if($strheight =="19") { echo "5ft 6in - 167cm"; }

else if($strheight =="20") { echo "5ft 7in - 170cm"; }

else if($strheight =="21") { echo "5ft 8in - 172cm"; }

else if($strheight =="22") { echo "5ft 9in - 175cm"; }

else if($strheight =="23") { echo "5ft 10in - 177cm"; }

else if($strheight =="24") { echo "5ft 11in - 180cm"; }

else if($strheight =="25") { echo "6ft - 182cm"; }

else if($strheight =="26") { echo "6ft 1in - 185cm"; }

else if($strheight =="27") { echo "6ft 2in - 187cm"; }

else if($strheight =="28") { echo "6ft 3in - 190cm"; }

else if($strheight =="29") { echo "6ft 4in - 193cm"; }

else if($strheight =="30") { echo "6ft 5in - 195cm"; }

else if($strheight =="31") { echo "6ft 6in - 198cm"; }

else if($strheight =="32") { echo "6ft 7in - 200cm"; }

else if($strheight =="33") { echo "6ft 8in - 203cm"; }
else if($strheight =="34") { echo "6ft 9in - 205cm"; }
else if($strheight =="35") { echo "6ft 10in - 208cm"; }
else if($strheight =="36") { echo "6ft 11in - 210cm"; }
else if($strheight =="37") { echo "7ft - 213cm"; }

?></td>
          </tr>
          <tr>
            <th>Religion</th>
            <td>:&nbsp;<?php
			
			 $religion = array("1"=>"Hindu","2"=>"Muslim - Shia","3"=>"Muslim - Sunni","4"=>"Muslim - Others", "5"=>"Christian - Catholic","6"=>"Christian - Orthodox","7"=>"Christian - Protestant","8"=>"Christian - Others","9"=>"Sikh","10"=>"Jain - Digambar","11"=>"Jain - Shwetambar","12"=>"Jain - Others","13"=>"Parsi","14"=>"Buddhist","15"=>"Inter-Religion","16"=>"No Religious Belief");
			 echo $religion[$searchresultfetch['Religion']]; ?></td>
            <th>Caste</th>
            <td><script>
			do_request(<?php echo $searchresultfetch['Language'] ?>,<?php echo $searchresultfetch['Religion'] ?>, <?php echo $searchresultfetch['Caste'] ?>,'<?php echo $searchresultfetch['MatriID'] ?>');
			</script> 
			<div id="<?php echo $searchresultfetch['MatriID'] ?>">
			
			</div></td>
          </tr>
          <tr>
            <th>Education</th>
            <td><div style="float:left;">:&nbsp;</div><div style="float:left; width:220px;"><?php echo $searchresultfetch['Education']; ?></div></td>
            <th>&nbsp;</th>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th>Occupation</th>
            <td>:&nbsp;<?php echo $searchresultfetch['Occupation']; ?></td>
               
			    <td align="center" rowspan="2" colspan="2">
				<? if($fetch[0] > 0) { ?>
				<a title="Click here to Become a Featured Memener" href="membershipform.php"><img height="26" width="120" alt="Click here to Become a Featured Memener" src="images/featured_profile.png"></a><br>
Like this? then subscribe <strong><a href="membershipform.php">Profile Spotlight</a>
          </strong>
		  <?  } ?>
		  </td>
		    <th>&nbsp;</th>
       
          </tr>
          <?php 
		  
		  
		  //if(isset($_SESSION['matriid']) && $_SESSION['payment_status'] == 'Payment') { ?>
          <tr>
            <th>City</th>
            <td>: <?php echo $searchresultfetch['City']; ?>
           
        
            </td>
          
          </tr>
            <tr>
          
            <th>Country</th>
            <td>: <?php if($searchresultfetch['Country'] != "") echo $searchresultfetch['Country']; ?></td>
          </tr>
          <? //} ?>
        </table></td>
      </tr>
    </table>
  </div>
  
  <?php include('common_tooltip.php'); ?>
   
   
</div>
<?php } ?>


<table width="100%" border="0" cellspacing="0" cellpadding="0" class="pagination">
  <tr>
    <td class="pg_left"></td>
    <td align="center" valign="middle" class="pg_center">
    <table width="100%" align="center">
    <tr>
    <td><strong>Total Number of Matches Found : <?php echo $searchresultcount;?></strong></td>
    <td width="188"><strong>Showing Page <?php echo $page; ?> of <?php echo $total_pages; ?></strong>
    
    <select name="select" id="select" onchange="return changepagenumber(this.value,'<?php echo $link; ?>');" >
    <?php for($selectpage = 1 ; $selectpage <= $total_pages; $selectpage++) { ?>
        <option value="<?php echo $selectpage; ?>" <?Php if($selectpage == $page) echo "selected='selected'"; ?>><?php echo $selectpage; ?></option>
    <?php } ?>    
      </select></td>
    <td width="179">
                    <?php
// Build Next Link 

if($page < $total_pages){ 

    $next = ($page + 1); 

    echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next".$link."\" class='pageNum'>&gt;&gt;</a>"; 

} 

for($i = $total_pages; $i >= 1; $i--) {
if(($page) == $i)
    echo "<span class='pageNum'>$i</span>"; 
else
	if((($page <= $i) && ($i <= ($page+2))) || (($i < $page) && ($i >= $page-2)))
	{
	    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i".$link."\" class='pageNum'>$i</a>"; 
	}
}
// Build Previous Link 

if($page > 1){ 

    $prev = ($page - 1); 

    //echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 

	echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev".$link."\" class='pageNum'>&lt;&lt;</a> &nbsp;";

} 

?>
    </td>
    </tr>
    </table>
    
    </td>
    <td class="pg_right"></td>
  </tr>
</table>
<br />
<!-- BUSINESS PAGE CONTENT ends HERE ############################################ -->    
    </div>
</form>

  </div>
<!-- CONTENT AREA ENDS HERE ###################################################  -->  

<!-- FOOTER STARTS HERE ###################################################  -->
  <?php include("include/footermenu.php") ?>
<!-- FOOTER ENDS HERE ###################################################  -->    



</div>
</body>
</html>