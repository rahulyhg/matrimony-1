<?php include("memprotect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?Php include("include/innerheadersection.php"); ?>
<script language="javascript">

function validate()

  {

 if (form.txtppwd.value == "" )

		 {

			alert( "Password Required." );

			form.txtppwd.focus( );

			return false;

		}

		

		if ( form.txtppwd.value.length < 4 )

		{

			alert( "Password must be atleast 4 characters." );	

			form.txtppwd.focus( );

			return false;

		}

		

		if ( form.txtppwd.value.length > 20 )

		{

			alert( "Password must be maximum 20 characters." );	

			form.txtppwd.focus( );

			return false;

		}

		

		

	}



</script>
</head>

<body>
<?php include("config.php"); 
$strmatriid = $_GET['MatriID'];
?>
<!-- BUSINESS PAGE CONTENT STARTS HERE ############################################ -->
<div class="profile_block">
  <div class="header">
    <h3 class="float_left title">View Protected photo</h3>
  </div>
  <div class="body" align="left">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_profiledetails">
      <tr>
        <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="content">
            <tr>
              <td align="left">The Photo has been protected by the owner of this profile. Members are given the feature to protect their Photo from viewing by anyone. If the Photo is protected, then you need a Photo Password to view it. <br>
                <br>
                Contact the profile and make a request for the Photo Password.<br>
                <br>
                <strong>If you have already obtained the Photo Password then enter the Password below and click on the 'View' button.</strong></td>
            </tr>
            <tr>
              <td><div align="center"><br>
                  <? $straction = $_GET['action'];

				  if ($straction == "wrong")  { ?>
                  You have entered Wrong Photo Password
                  <? } ?>
                  </strong></span><br>
                  <br>
                  <br>
                </div></td>
            </tr>
            <tr>
              <td><div align="center">
                  <form action="viewprotectphotoform_submit.php" method="post">
                    <table width="374" border="0" cellpadding="2" cellspacing="2" class="tbl_profiledetails" align="center">
                      <tr>
                        <td height="19" colspan="2"><strong>View photo <em>
                          <input name="txthidid" type="hidden" id="txthidid" value="<? echo $strmatriid ?>" />
                          </em></strong></td>
                      </tr>
                      <tr>
                        <td width="121">Enter Password : </td>
                        <td width="237"><input name="txtppwd" type="text" class="textbox1" id="txtppwd" maxlength="50"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input name="Submit" type="image" value="Submit" src="pics/viewphoto.gif"></td>
                      </tr>
                    </table>
                  </form>
                </div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="center">Note : <strong class="Alert">If you have not password <a href="photopasswordrequest.php?MatriID=<? echo $strmatriid; ?>">click here</a> to Request Photo Password.</strong></div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="center"><a href="javascript:window.close()">X Close Window</a></div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table></td>
      </tr>
    </table>
  </div>
</div>
<!-- BUSINESS PAGE CONTENT ends HERE ############################################ -->
</body>
</html>