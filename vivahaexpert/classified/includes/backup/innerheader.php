<?php 
session_start();
ob_start();
include("config/error.php");

$id=$_SESSION['userid'];
//echo "select * from lak_register where `reg_id`='$id'";
$regsql=mysql_query("select * from `class_register` where `reg_id`='$id'");
$View_fetch=mysql_fetch_array($regsql);
$view_name=$View_fetch['reg_name'];


if(isset($_REQUEST['indexbutton_x']))
{
$login_userid=$_REQUEST['emailid'];
$login_pass=$_REQUEST['userpassword'];
//echo "select * from `lak_register` where `reg_email`='$login_userid' AND `reg_password`='$login_pass' AND `reg_status`='1'";
$login_select=mysql_query("select * from `class_register` where `reg_email`='$login_userid' AND `reg_password`='$login_pass' AND `reg_status`='0'" );

$login_count=mysql_num_rows($login_select);

if($login_count > 0)
{

$login_fetch=mysql_fetch_array($login_select);
$user_id=$login_fetch['reg_id'];
$_SESSION['userid']=$user_id;
 $_SESSION['username']=$login_fetch['reg_name'];
header("location:home.php");
}
else
{
header("location:login.php?loginerror=2");
}
}


?>
<script language="javascript">
function CheckFirstChar(key, txt)
{
    if(key == 32 && txt.value.length<=0)
    {
        return false;
    }
    else if(txt.value.length>0)
    {
        if(txt.value.charCodeAt(0) == 32)
        {
            txt.value=txt.value.substring(1,txt.value.length);
            return true;
        }
    }
    return true;
}

function echeck(str) 
{

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid Email ID");
		   return false;
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid Email ID");
		   return false;
		}
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid Email ID");
		    return false;
		}
		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid Email ID");
		    return false;
		 }
		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid Email ID");
		    return false;
		 }
		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid Email ID");
		    return false;
		 }		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid Email ID");
		    return false;
		 }
 		 return true;					
	}

function logincheck1()
{

var emailid=document.loginForm1.emailid.value;
			if(emailid=="")
			{
					alert("Please Enter Your Email ID");
					document.loginForm1.emailid.focus();
					return false;
			}
			else
				{
					var as=echeck(emailid);
					if(as==false)
					{
						return false;
					}
				}	
			
var userpassword=document.loginForm1.userpassword.value;
			if(userpassword=="")
			{
					alert("Please Enter Your Possword");
					document.loginForm1.userpassword.focus();
					return false;
			}
			if(userpassword.length < 6)
				{
					alert("Your Password Sould Be Minimum 6 Char");
					document.loginForm1.userpassword.focus();
					return false;
				}	
				
		
					
}

function go_valid(){
var searchkey=document.searchclass.searchkey.value;
 
   if(searchkey=="")
   {
    alert("Plese Enter Keyword for Search");
	document.searchclass.searchkey.value="";
	document.searchclass.searchkey.focus();
	return false;
   }
 
}

</script>

<table  style="width:925px;" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top" style="height:54px;"><table style="width:925px; height:38px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="18" align="center" valign="top" class="top_link" style="width:338px;"><div id="top_link_table" align="center"><span class="top_link" style="width:338px;"><strong class="sub_title">Welcome </strong>
				  <strong class="bold1"><?php if(isset($_SESSION['userid']))
				  {?>
				  <?php echo $view_name;?>
                  <?php }else{ ?>
                  <?php 
				  
				    echo "Guest";
				  
				  }?>
                  
                  
                  </strong>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <?php if(isset($_SESSION['userid']))
				  {?>
                  <a href="logout.php">Sign Out </a>-  <a href="welcome.php">My Account</a>
                  <?php }else{ ?>
                  
                  <a href="login.php">Sign In</a> - <a href="registration.php">Join Free</a>
                  <?php } ?>
                  </span></div></td>
                  <td style="width:587px;" align="right" valign="top"><table border="0" cellpadding="0" cellspacing="0" style="width:587px; height:38px; background-image:url(images/top_menu_center.jpg); background-repeat:repeat-x;">
                      <tr>
                        <td width="25" align="left" valign="top"><img src="images/top_menu_left.jpg" width="25" height="38"></td>
                        <td width="484" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                            
                            <?php $categorysql12=mysql_query("select * from class_category  limit 0,6");
							$i=0;
							?>
                            <?php 
							while($rowcategory=mysql_fetch_array($categorysql12))
							{
							?>
                              <td  height="38" align="center" valign="middle" class="top_big_link" ><a href="headersearch.php?sid=<?php echo $rowcategory['c_id']; ?>"><?php echo $rowcategory['c_name']; ?></a></td>
                              <?php if($i!=6)
							  {?>
                              <td width="10" align="left" valign="top" style="width:1px;"><img src="images/top_menu_divider.jpg" width="1" height="38"></td>
                              
                             <?php $i++;} }?> 
                          </tr>
                        </table></td>
                        <!--<td width="54"  align="left" valign="middle" class="top_big_link"><a href="contact.php">Contact</a></td>-->	
                        <td width="54" align="center" class="top_big_link">
                        <link rel="stylesheet" type="text/css" href="javascript/chromestyle.css" />
						<script type="text/javascript" src="javascript/chrome.js"></script>
                        <div class="chromestyle" id="chromemenu" style="padding-bottom:20px;" >
                        <ul>
                        <li><a href="#" rel="dropmenu1">More</a></li>
                        </ul>
                        </div>
                       
</td>

 <div id="dropmenu1" class="dropmenudiv">
<?php $categorysql12=mysql_query("select * from class_category  limit 6,10");
							$i=0;
							?>
                            <?php 
							while($rowcategory=mysql_fetch_array($categorysql12))
							{
							?>
<a href="headersearch.php?sid=<?php echo $rowcategory['c_id']; ?>"><?php echo $rowcategory['c_name']; ?> </a>

<?php } ?>

</div>
<script type="text/javascript">

cssdropdown.startchrome("chromemenu")

</script>
                        <td width="24" align="right" valign="top"><img src="images/top_menu_right.jpg" width="24" height="38"></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="18" align="center" valign="top" class="top_link" style="width:338px;">&nbsp;</td>
                  <td style="width:587px;" align="right" valign="top">&nbsp;</td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td align="left" valign="top" style="height:116px;"><table style="width:925px;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" style="width:322px;"><a href="home.php"><img src="images/click_one_logo.jpg" width="322" height="116" border="0"></a></td>
                  <td align="left" valign="top" style="width:603px;"><table width="499" height="38" border="0" cellpadding="0" cellspacing="0" style="width:604px;">
                      <tr>
                        <td style="height:61px;" align="left" valign="top"><img src="images/ad.jpg" width="603" height="61"></td>
                      </tr>
                      <tr>
                        <td style="height:55px; background-image: url(images/search_bg.jpg); background-repeat:repeat-x;" align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <form name="searchclass" action="search.php" method="post" onsubmit="return go_valid()">
                          <tr>
                            <td width="91%" align="center" valign="middle"><table width="100%" style="background-image: url(images/search_center.jpg); background-repeat:repeat-x;" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="2%" align="left" valign="top"><img src="images/search_left.jpg" width="25" height="32"></td>
                                  <td width="98%" align="left" valign="top"><input name="searchkey" type="text" class="input_search" onkeyup="CheckFirstChar(event.keyCode, this)" onkeydown="return CheckFirstChar(event.keyCode, this)" align="middle" value="">                                  </td>
                                </tr>
                            </table></td>
                            <td width="9%" align="right" valign="top"><input type="image" src="images/go.jpg" name="search"  value="Submit"></td>
                          </tr>
                          </form>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="29" colspan="2" align="left" valign="top" bgcolor="#FFFFFF" style=" width:612px; background-image:url(images/login_bg.jpg); background-repeat:repeat-x;">
                  
                  <?php if(isset($_SESSION['userid']))
				  {?>
                  
                  <table width="50%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>&nbsp;</td>
                      <td align="right"><img src="images/sub_head_left.jpg" /></td>
                      <td align="center" background="images/sub_head_center.jpg"><a href="home.php" class="related_text">Home</a></td>
                      <td><img src="images/sub_head_right.jpg" /></td>
                      <td align="right"><img src="images/sub_head_left.jpg" /></td>
                      <td align="center" background="images/sub_head_center.jpg"><a href="postclassified.php" class="related_text">Post Ads</a></td>
                      <td><img src="images/sub_head_right.jpg" /></td>
                      <td align="right"><img src="images/sub_head_left.jpg" /></td>
                      <td align="center" background="images/sub_head_center.jpg"><a href="advance_search.php" class="related_text">Search </a></td>
                      <td><img src="images/sub_head_right.jpg" /></td>
                      <td align="right"><img src="images/sub_head_left.jpg" /></td>
                      <td align="center" background="images/sub_head_center.jpg"><a href="edit_class.php" class="related_text">My Ads</a></td>
                      <td><img src="images/sub_head_right.jpg" /></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  <?php }else{ ?>
                  
                  <table style="width:926px; " border="0" cellspacing="0" cellpadding="0">
              <tr><form action="" method="post" name="loginForm1" onsubmit="return logincheck1();">
                <td height="19" align="left" valign="bottom" style=" width:612px; background-image:url(images/login_bg.jpg); background-repeat:repeat-x;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="2%" height="29" align="left" valign="top"><img src="images/spacer.gif" width="12" height="8"></td>
                    <td width="9%" align="left" valign="middle" class="login_text">e-mail id</td>
                    <td width="23%" align="left" valign="middle"><table style="width:130px; height:23px; background-image:url(images/input_center.jpg); background-repeat:repeat-x;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="14" align="left" valign="top"><img src="images/input_left.jpg" width="14" height="23"></td>
                          <td width="112" align="left" valign="top"><label>
                            <!-- <input name="emailid" type="text" class="input_login" id="emailid" onclick="window.open('http://2daybiz.com/products/2daybizusers/add.php?pro=classified', 'windowname1', 'scrollbars,resizable,width=480, height=270'); return false;">-->
							<input name="emailid" type="text" class="input_login" id="emailid">
                          </label></td>
                          <td width="10" align="right" valign="top"><img src="images/input_right.jpg" width="14" height="23"></td>
                        </tr>
                    </table></td>
                    <td width="12%" align="center" valign="middle"><span class="login_text">password</span></td>
                    <td width="23%" align="left" valign="middle"><table style="width:130px; height:23px; background-image:url(images/input_center.jpg); background-repeat:repeat-x;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="14" align="left" valign="top"><img src="images/input_left.jpg" width="14" height="23"></td>
                          <td width="112" align="left" valign="top"><label>
                            <!-- <input name="userpassword" type="password" class="input_login" id="textfield3" onclick="window.open('http://2daybiz.com/products/2daybizusers/add.php?pro=classified', 'windowname1', 'scrollbars,resizable,width=480, height=270'); return false;"> -->
							<input name="userpassword" type="password" class="input_login" id="textfield3">
                          </label></td>
                          <td width="10" align="right" valign="top"><img src="images/input_right.jpg" width="14" height="23"></td>
                        </tr>
                    </table></td>
                    <td width="13%" align="left" valign="top"><input type="image" src="images/signin.jpg" name="indexbutton" id="indexbutton" value="Submit"></td>
                    <td width="18%" align="center" valign="middle" class="text"><u><a href="forgotpassword.php" class="text">Forgot Password?</a></u></td>
                  </tr>
                </table></td>
                <td align="center" valign="middle" style=" width:314px; background-image:url(images/advanced_search_bg.jpg); background-repeat:no-repeat;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="51%" align="right" valign="middle"><table width="88%" border="0" cellspacing="0" cellpadding="0">
                         <!--  <tr>
                            <td width="80%" align="center" valign="middle" class="advance_search"><a href="advance_search.php">categories search</a></td>
                          </tr>  -->
                      </table></td>
                      <td width="49%" align="center" valign="middle"><table width="87%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="80%" align="center" valign="middle" class="advance_search"><a href="advance_search.php" class="advance_search">advanced search</a></td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
            </form>  </tr>
            </table>
            
                 <?php } ?>
                  
                  </td>
                </tr>
            </table></td>
          </tr>
          
        </table>