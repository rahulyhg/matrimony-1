<?php session_start(); ?>



<title><?php echo $info['Title']; ?></title>

<div id="header">

<div  class="container">
	<div id="top-header">
<a href="login.php"><input class="uppercase btn btn-default" style="clear:both; background-color: #A50007; font-weight: bold; border:0px; font-size:10px;  height: 27px; text-align:center; width:80px; color:#FFFFFF;" name="Login" id="Login" type="button" value="Login"></a>
		<a href="registration1.php"><input class="uppercase btn btn-default" style="clear:both; background-color: #A50007; font-weight: bold; border:0px; font-size:10px; height: 27px; text-align:center;width:80px; color:#FFFFFF;" name="Login" id="Register" type="button" value="Register"></a>
	</div>
    <div id="title">
      <center><a href="index.php" title="phpmatrimonial" target="_self" class="logo"><img src="<?php echo $sitelogo; ?>" alt="phpmatrimonial" width="350" /></a></center>
      <!--<div class="live_support brown">
	   <img src="images/support.png" width="205" height="" border="0" />
	   
	    <span class="support"></span> 
         Help On Whatsapp <br /> 
        <?php echo $site_number; ?>
		</div>-->
		
		<div style="text-align: center; display: none;" id="medium_box">











		</div>



     </div>
</div>


    <div class="menu" >
    <div class="container">
    <nav class="navbar" role="navigation">
     <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top_menu" >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
               </div>
               <div class="collapse navbar-collapse" id="top_menu">
    	 



            <ul class="menubar nav  nav-justified">



<!--         <li class="left"></li> -->

        

        <li class="center">



<?Php if(isset($_SESSION['username']))
 { 
 
$breadcrumbspage = '<a href="mymatri.php">My Home</a>';

$getpagename = explode("/",$_SERVER['PHP_SELF']);


$breadcrumb_exactpagename = $getpagename[count($getpagename)-1];

if($breadcrumb_exactpagename == "searchresult.php")
	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png">Quick Search';







if($breadcrumb_exactpagename == "search_page.php")	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png">My Search';


if(($breadcrumb_exactpagename == "simplesearch.php") || ($breadcrumb_exactpagename == "simplesearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">My Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Simple Search';



if(($breadcrumb_exactpagename == "adv_search.php") || ($breadcrumb_exactpagename == "advsearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">My Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Advanced Search';


if(($breadcrumb_exactpagename == "keyword_search.php") || ($breadcrumb_exactpagename == "kwsearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">My Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Keyword Search';







if(($breadcrumb_exactpagename == "edu_search.php") || ($breadcrumb_exactpagename == "edusearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">My Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Education Search';







if(($breadcrumb_exactpagename == "occu_search.php") || ($breadcrumb_exactpagename == "occusearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">My Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Occupational Search';







if(($breadcrumb_exactpagename == "id_search.php") || ($breadcrumb_exactpagename == "id_search_submit.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">My Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">ID Search';







if(($breadcrumb_exactpagename == "location_search.php") || ($breadcrumb_exactpagename == "locsearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">My Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Location Search';


if($breadcrumb_exactpagename == "refinesearch.php")

	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png">My Search';

?>

        <ul id="sample-menu-1" class="menu sf-menu sf-js-enabled sf-shadow">
		

    <?php



		if(($breadcrumb_exactpagename == "mymatri.php") || ($breadcrumb_exactpagename == "myadditionaldetail.php") || ($breadcrumb_exactpagename == "edit_emailsetting.php"))



			$myhome = "active";



		else	



			$myhome = "";



		?>



            <li><a href="mymatri.php" class="<?php echo $myhome;?>">My Home</a>



                        <ul>



           	        <li><a href="edit_emailsetting.php">Edit Email Settings</a></li>



			           <li><a href="myadditionaldetail.php">My Additional Details</a></li>



            			<li><a href="match.php" >View Partner Matches </a></li>
						<li><a href="logout.php" >Logout</a></li>











                    </ul>



</li>



      <?php



		if(($breadcrumb_exactpagename == "myprofile.php") || ($breadcrumb_exactpagename == "modifyprofile.php") || ($breadcrumb_exactpagename == "changepassword.php") || ($breadcrumb_exactpagename == "delmyprofile.php") || ($breadcrumb_exactpagename == "managephotoalbum.php") || ($breadcrumb_exactpagename == "managevideo.php") || ($breadcrumb_exactpagename == "addhoros.php") || ($breadcrumb_exactpagename == "addphoto.php") || ($breadcrumb_exactpagename == "manage_horoscope.php") || ($breadcrumb_exactpagename == "optins.php"))



			$myaccount = "active";



		else	



			$myaccount = "";



		?>



           <li><a href="myprofile.php" class="<?php echo $myaccount;?>">My Profile </a>



        			<ul>



           	        <li><a href="modifyprofile.php">Update Profile</a></li>
					<li><a href="protect_phone.php">Protect Phone</a></li>



           	        <li><a href="optins.php">Options </a></li>



                    <li><a href="changepassword.php">Change Password</a></li>



			           <li><a href="managephotoalbum.php">My Photo Album</a></li>



                       <li><a href="managevideo.php">My Video Album</a></li>



                       <li><a href="addhoros.php">My Horoscope</a></li>



                       <li><a href="manage_horoscope.php">Manage Horoscope</a></li>

                     

       	               <li><a href="addphoto.php">Manage My photo</a></li>



                     	<li><a href="modify_par.php">Update Partner Preference</a></li>



			           <li><a href="modify_hob.php">Update My Interests</a></li>



                        <li><a href="delmyprofile.php">Delete Profile</a></li>



                    </ul>



           </li>



    <?php



		if(($breadcrumb_exactpagename == "search_page.php") || ($breadcrumb_exactpagename == "simplesearch.php") || ($breadcrumb_exactpagename == "simplesearch_results.php") || ($breadcrumb_exactpagename == "adv_search.php") || ($breadcrumb_exactpagename == "advsearch_results.php") || ($breadcrumb_exactpagename == "keyword_search.php") || ($breadcrumb_exactpagename == "kwsearch_results.php") || ($breadcrumb_exactpagename == "edu_search.php") || ($breadcrumb_exactpagename == "edusearch_results.php") || ($breadcrumb_exactpagename == "occu_search.php") || ($breadcrumb_exactpagename == "occusearch_results.php") || ($breadcrumb_exactpagename == "id_search.php") || ($breadcrumb_exactpagename == "id_search_submit.php") || ($breadcrumb_exactpagename == "location_search.php") || ($breadcrumb_exactpagename == "locsearch_results.php"))



			$mysearch = "active";



		else	



			$mysearch = "";



		?>



            <li><a href="search_page.php" class="<?php echo $mysearch;?>">My Search</a>



            <ul>



       	           <li><a href="simplesearch.php">Simple Search</a></li>



			       <li><a href="adv_search.php">Advanced Search</a></li>



            		<li><a href="keyword_search.php">Keyword Search</a></li>



                 	 <li><a href="edu_search.php">Educational Search</a></li>



			         <li><a href="occu_search.php">Occupational Search</a></li>



                     <li><a href="id_search.php">Matrimony ID Search</a></li>



                     <li><a href="location_search.php">Location Search</a></li>



             </ul> 



          </li>



    <?php



		if(($breadcrumb_exactpagename == "myint.php") || ($breadcrumb_exactpagename == "mymessage.php"))



			$mymessages = "active";



		else	



			$mymessages = "";



		?>



            <li><a href="#" class="<?php echo $mymessages;?>">My Messages</a>



            <ul>



       	           <li><a href="myint.php">Interests Received</a></li>



               	   <li><a href="mymessage.php">Message Received</a></li>



             </ul> 



          </li>



		<?php 



			if($breadcrumb_exactpagename == "contactus.php")



				$mymembership = "active";



			else	



				$mymembership = "";



		?>



					<li><a href="my_favourites.php" class="<?php echo $mymembership;?>">My Favourites</a>
				
					  <ul>
           	           <?php /*?><li><a href="my_favourites.php">My Favourites</a></li><?php */?>
			           <li><a href="my_blocked_members.php">My Blocked Members</a></li>
                      </ul>
					</li>  

    <?php



		if(($breadcrumb_exactpagename == "mymembership.php") || ($breadcrumb_exactpagename == "myorders.php") || ($breadcrumb_exactpagename == "membershipform.php"))



			$mymembership = "active";



		else	



			$mymembership = "";



		?>



            <li><a href="membershipform.php" class="<?php echo $mymembership;?>">Upgrade</a>



        			<ul>



           	        <li><a href="mymembership.php">My membership</a></li>



			           <li><a href="#">Free membership</a></li>



            			<li><a href="membershipform.php">Premium Membership</a></li>



                     	<li><a href="myorders.php">My Orders</a></li>



	          </ul>



           </li>



        <?php 



			if($_SERVER['QUERY_STRING'] == "id=18")



				$mymembership = "active";



			else	



				$mymembership = "";



		?>



            <li><a href="faq.php" class="<?Php echo $mymembership;?>">Help</a> </li>  



		<?php 



			if($breadcrumb_exactpagename == "contactus.php")



				$mymembership = "active";



			else	



				$mymembership = "";



		?>



        <li><a href="contactus.php" class="<?Php echo $mymembership;?>">Contact Us</a></li>

        <?Php if(isset($_SESSION['username'])) { ?> <li><a href="logout.php" class="<?Php echo $mymembership;?>">Logout</a></li> <?php } ?>

          </ul>



<?Php } else { 



$breadcrumbspage = '<a href=".">Home</a>';



$breadcrumb_getpagename = explode("/",$_SERVER['PHP_SELF']);



$breadcrumb_exactpagename = $breadcrumb_getpagename[count($breadcrumb_getpagename)-1];



if($breadcrumb_exactpagename == "searchresult.php")

	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png">Quick Search';

if($breadcrumb_exactpagename == "search_page.php")	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png">Search';



if(($breadcrumb_exactpagename == "simplesearch.php") || ($breadcrumb_exactpagename == "simplesearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Simple Search';



if(($breadcrumb_exactpagename == "adv_search.php") || ($breadcrumb_exactpagename == "advsearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Advanced Search';



if(($breadcrumb_exactpagename == "keyword_search.php") || ($breadcrumb_exactpagename == "kwsearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Keyword Search';



if(($breadcrumb_exactpagename == "edu_search.php") || ($breadcrumb_exactpagename == "edusearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Education Search';



if(($breadcrumb_exactpagename == "occu_search.php") || ($breadcrumb_exactpagename == "occusearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Occupational Search';



if(($breadcrumb_exactpagename == "id_search.php") || ($breadcrumb_exactpagename == "id_search_submit.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">ID Search';



if(($breadcrumb_exactpagename == "location_search.php") || ($breadcrumb_exactpagename == "locsearch_results.php"))	



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png"><a href="search_page.php">Search</a> <img alt="" src="images/icons/arrow_breadcrumbs.png">Location Search';



if($breadcrumb_exactpagename == "refinesearch.php")



	$breadcrumbspage .= '<img alt="" src="images/icons/arrow_breadcrumbs.png">Search';



?>



	<ul id="sample-menu-1" class="menu sf-menu sf-js-enabled sf-shadow">

    <!--<li><a href="index.php" class="active">Home</a></li>-->

<!--            <li><a href="#" class="active"> Home</a></li>



           <li><a href="#">Register Free</a></li>



           <li><a href="#">Login</a>Â </li>



           <li><a href="#">How it Works</a></li>



            <li><a href="#">Site Guide</a></li>



             <li><a href="#">Matchmaking Tips</a></li>



            <li><a href="#">About Us</a>



            <ul>



       	           <li><a href="#">Corporate Info</a>Â </li>



			       <li><a href="#">Contact Us</a></li>



            		<li><a href="#">Quick Facts</a></li>



                 	 <li><a href="#">Social and Cultural Support Activities</a>Â </li>



			         <li><a href="#">News and Events</a></li>



                     <li><a href="#">Solutions</a></li>



             </ul>--> 



<?Php



$parentmenu = "SELECT * FROM pages WHERE parent = 0 AND menucategory='1' AND status = 'Active'";



$parentmenu_exec = mysql_query($parentmenu);



//PARENT MENU



while($parentmenu_fetch = mysql_fetch_array($parentmenu_exec))



{



	$getpagename = explode("/",$_SERVER['PHP_SELF']);



	$exactpagename = $getpagename[count($getpagename)-1];



	if($exactpagename == $parentmenu_fetch["pLink"])



	{



		$selectmenu = 'active';



	}



	elseif(($exactpagename == "registration1.php") || ($exactpagename == "registration2.php") || ($exactpagename == "registration3.php"))



	{



		if($parentmenu_fetch["pLink"] == "registration1.php")



			$selectmenu = 'active';



		else



			$selectmenu = '';



	}



	elseif(($exactpagename == "index.php") && ($parentmenu_fetch["pLink"] == "."))



	{



		$selectmenu = 'active';



	}



	elseif((strstr($_SERVER['REQUEST_URI'],$parentmenu_fetch["pLink"])) && ($parentmenu_fetch["pLink"] != "."))



	{



		$selectmenu = 'active';



	}



	elseif($parentmenu_fetch["pLink"] == "about_us.php")



	{



		if(($_SERVER['QUERY_STRING'] == "id=8") || ($_SERVER['QUERY_STRING'] =="id=10") || ($_SERVER['QUERY_STRING'] =="id=11") || ($_SERVER['QUERY_STRING'] =="id=42") || ($_SERVER['QUERY_STRING'] =="id=13") || ($exactpagename == "contactus.php"))



		{



			$selectmenu = 'active';



		}



	}



	else



	{



		$selectmenu = '';



	}



?>



<li><a href="<?php echo $parentmenu_fetch["pLink"]; ?>" class="<?php echo $selectmenu;?>"><?php echo $parentmenu_fetch["pName"]; ?></a>



<?Php

//CHILD MENU
$childmenu = "SELECT * FROM pages WHERE parent = ".$parentmenu_fetch["pId"]." AND status = 'Active'";



$childmenu_exec = mysql_query($childmenu);



$childmenu_count = mysql_num_rows($childmenu_exec);



if($childmenu_count != 0) {	



?>



<ul>



<?Php while($childmenu_fetch = mysql_fetch_array($childmenu_exec)) { ?>



<li><a href="<?php echo $childmenu_fetch["pLink"]; ?>"><?php echo $childmenu_fetch["pName"]; ?></a></li>



<?Php } ?>



</ul>



<?Php } ?>



</li>



<?Php } ?>



          </ul>



<?php } ?> 



        



        </li>



		



<!--         <li class="right"></li> -->



		



      </ul>



    </div>
    </nav>
    </div>

</div>

</div>