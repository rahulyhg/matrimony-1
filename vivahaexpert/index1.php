<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?Php include("include/headersection.php"); ?>

<script language="javascript" src="js/search.js"></script>

<script language="javascript">

function validateloginform()

{

	if(document.form1.txtusername.value== "Username")

	{
		alert("Kindly enter username.");

		document.form1.txtusername.focus();

		return false;

	}		

	if(document.form1.txtpassword.value== "Password")

	{

		alert("Kindly enter password.");

		document.form1.txtpassword..focus();

		return false;

	}

	return true;	

}

function checkusername()

{

	if(document.form1.txtusername.value== "")

	{

		document.form1.txtusername.value = "Username";

		return false;

	}

	return true;	

}

function checkpassword()

{

	if(document.form1.txtpassword.value== "")

	{

		document.form1.txtpassword.value = "Password";

		return false;

	}	

	return true;	

}

function rusername()

{

	if(document.form1.txtusername.value== "Username")

	{

		document.form1.txtusername.value = "";

		return false;

	}

	return true;	

}

function rpassword()

{

	if(document.form1.txtpassword.value== "Password")

	{

		document.form1.txtpassword.value = "";

		return false;

	}	

	return true;	

}

</script>

</head>



<body>

<div id="wrapper"> 

  

  <!-- HEADER STARTS HERE ###################################################  -->

  <?Php include("include/menu.php"); ?>

  <!-- HEADER ENDS HERE ###################################################  --> 

  

  <!-- CONTENT AREA STARTS HERE ###################################################  -->

  <div id="content_area"> 

    

    <!-- SHOWCASE AND QUICK SEARCH SECTIONS STARTS HERE ######################################## -->

    <<div id="showcase">

      <ul id="wrap">

        <li class="top"></li>

        <li class="middle">

          <div id="left" style="overflow:hidden;">

            <h2 class="caption">

              <div id="ticker-wrapper" class="no-js">

                <ul id="js-news" class="js-hidden">

                  <li class="news-item"><a href="#">The Joys of Marriage begin here - Be with us to find Partner </a></li>

                  <li class="news-item"><a href="#">The Perfect Bureau  for Online Marriage</a></li>

                  <li class="news-item"><a href="#">The Secure and Safe way to find Partner</a></li>

                  <li class="news-item"><a href="#"><?php echo $sitename;  ?> - Your Perfect Life Guider</a></li>

                </ul>

              </div>

            </h2>

            <div class="banner"> 

              <!-- HOMEPAGE MAIN BANNER MODULE WILL COME HERE ######################## --> 

              <a href="registration1.php"><img src="images/banner1.jpg" width="637" height="274" border="0" usemap="#Map" /></a>

              <map name="Map" id="Map">

                <area shape="rect" coords="431,151,569,198" href="registration1.php" />

              </map>

            </div>

          </div>

          <div id="right">

            <table class="wrapper1" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td class="td11"></td>

                <td class="td12"></td>

                <td class="td13"></td>

              </tr>

              <tr>

                <td class="td21"></td>

                <td height="290" valign="top"><h2 style="height:24px; display:block; line-height:24px;"> <img src="images/icons/search_16.png" width="24" height="24" style="float:left; margin-right:5px;" />Quick Search</h2>

                  <form id="searchform" name="searchform" method="post" action="searchresult.php">

                    <table  width="95%" border="0" align="center" cellpadding="5" cellspacing="0" class="padding_5p" style="margin-top:5px;">

                      <tr>

                        <td width="40%">Looking for</td>

                        <td width="30%"><label>

                            <input name="lookingfor" type="radio" id="lookingfor" value="Female" checked="checked" />

                            Bride</label></td>

                        <td align="right"><label>

                            <input type="radio" name="lookingfor" id="lookingfor" value="Male" />

                            Groom</label></td>

                      </tr>

                      <tr>

                        <td>Age</td>

                        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tr>

                              <td><label>

                                  <select name="selectagefrom" id="selectagefrom">

                                    <option value="18">18</option>

                                    <option value="19">19</option>

                                    <option value="20">20</option>

                                    <option value="21">21</option>

                                    <option value="22">22</option>

                                    <option value="23">23</option>

                                    <option value="24">24</option>

                                    <option value="25">25</option>

                                    <option value="26">26</option>

                                    <option value="27">27</option>

                                    <option value="28">28</option>

                                    <option value="29">29</option>

                                    <option value="30">30</option>

                                    <option value="31">31</option>

                                    <option value="32">32</option>

                                    <option value="33">33</option>

                                    <option value="34">34</option>

                                    <option value="35">35</option>

                                    <option value="36">36</option>

                                    <option value="37">37</option>

                                    <option value="38">38</option>

                                    <option value="39">39</option>

                                    <option value="40">40</option>

                                    <option value="41">41</option>

                                    <option value="42">42</option>

                                    <option value="43">43</option>

                                    <option value="44">44</option>

                                    <option value="45">45</option>

                                    <option value="46">46</option>

                                    <option value="47">47</option>

                                    <option value="48">48</option>

                                    <option value="49">49</option>

                                    <option value="50">50</option>

                                    <option value="51">51</option>

                                    <option value="52">52</option>

                                    <option value="53">53</option>

                                    <option value="54">54</option>

                                    <option value="55">55</option>

                                    <option value="56">56</option>

                                    <option value="57">57</option>

                                    <option value="58">58</option>

                                    <option value="59">59</option>

                                    <option value="60">60</option>

                                  </select>

                                </label></td>

                              <td width="30" align="center">To</td>

                              <td align="right"><select name="selectageto" id="selectageto">

                                  <option value="18">18</option>

                                  <option value="19">19</option>

                                  <option value="20">20</option>

                                  <option value="21">21</option>

                                  <option value="22">22</option>

                                  <option value="23">23</option>

                                  <option value="24">24</option>

                                  <option value="25">25</option>

                                  <option value="26">26</option>

                                  <option value="27">27</option>

                                  <option value="28">28</option>

                                  <option value="29">29</option>

                                  <option value="30">30</option>

                                  <option value="31">31</option>

                                  <option value="32">32</option>

                                  <option value="33">33</option>

                                  <option value="34">34</option>

                                  <option value="35">35</option>

                                  <option value="36">36</option>

                                  <option value="37">37</option>

                                  <option value="38" selected="selected">38</option>

                                    <option value="39">39</option>

                                    <option value="40">40</option>

                                    <option value="41">41</option>

                                    <option value="42">42</option>

                                    <option value="43">43</option>

                                    <option value="44">44</option>

                                    <option value="45">45</option>

                                    <option value="46">46</option>

                                    <option value="47">47</option>

                                    <option value="48">48</option>

                                    <option value="49">49</option>

                                    <option value="50">50</option>

                                    <option value="51">51</option>

                                    <option value="52">52</option>

                                    <option value="53">53</option>

                                    <option value="54">54</option>

                                    <option value="55">55</option>

                                    <option value="56">56</option>

                                    <option value="57">57</option>

                                    <option value="58">58</option>

                                    <option value="59">59</option>

                                    <option value="60">60</option>

                                </select></td>

                            </tr>

                          </table></td>

                      </tr>

                      <tr>

                        <td>Religion</td>



                        <td colspan="2"><select onchange="caste_resetRF(this.value)" class="width_100" size="1" id="religion" name="religion">
						
                        <option selected="" value="0">-Select-</option>
                        <option value="1" <?php if($_SESSION['Religion'] == 1) { ?> selected="selected" <? } ?>>Hindu</option>
                        <option value="2" <?php if($_SESSION['Religion'] == 2) { ?> selected="selected" <? } ?>>Muslim - Shia</option>
                        <option value="3" <?php if($_SESSION['Religion'] == 3) { ?> selected="selected" <? } ?>>Muslim - Sunni</option>
                        <option value="4" <?php if($_SESSION['Religion'] == 4) { ?> selected="selected" <? } ?>>Muslim - Others</option>
                        <option value="5" <?php if($_SESSION['Religion'] == 5) { ?> selected="selected" <? } ?>>Christian - Catholic</option>
                        <option value="6" <?php if($_SESSION['Religion'] == 6) { ?> selected="selected" <? } ?>>Christian - Orthodox</option>
                        <option value="7" <?php if($_SESSION['Religion'] == 7) { ?> selected="selected" <? } ?>>Christian - Protestant</option>
                        <option value="8" <?php if($_SESSION['Religion'] == 8) { ?> selected="selected" <? } ?>>Christian - Others</option>
                        <option value="9" <?php if($_SESSION['Religion'] == 9) { ?> selected="selected" <? } ?>>Sikh</option>
                        <option value="10" <?php if($_SESSION['Religion'] == 10) { ?> selected="selected" <? } ?>>Jain - Digambar</option>
                        <option value="11" <?php if($_SESSION['Religion'] == 11) { ?> selected="selected" <? } ?>>Jain - Shwetambar</option>
                        <option value="12" <?php if($_SESSION['Religion'] == 12) { ?> selected="selected" <? } ?>>Jain - Others</option>
                        <option value="13" <?php if($_SESSION['Religion'] == 13) { ?> selected="selected" <? } ?>>Parsi</option>
                        <option value="14" <?php if($_SESSION['Religion'] == 14) { ?> selected="selected" <? } ?>>Buddhist</option>
                        <option value="15" <?php if($_SESSION['Religion'] == 15) { ?> selected="selected" <? } ?>>Inter-Religion</option>
                        <option value="16" <?php if($_SESSION['Religion'] == 16) { ?> selected="selected" <? } ?>>No Religious Belief</option>
                      </select></td>

                      </tr>

                      <tr>

                        <td>Mother Tongue</td>

                        <td colspan="2"><div align="left">

<select onchange="do_request(this.value);" class="width_100"  size="1" id="Language" name="Language"><option selected="" value="0">-Select-</option><option value="1">Arunachali</option><option value="2">Assamese</option><option value="3">Awadhi</option><option value="4">Bengali</option><option value="5">Bhojpuri</option><option value="6">Brij</option><option value="7">Bihari</option><option value="53">Badaga</option><option value="8">Chatisgarhi</option><option value="9">Dogri</option><option value="10">English</option><option value="11">French</option><option value="12">Garhwali</option><option value="13">Garo</option><option value="14">Gujarati</option><option value="15">Haryanvi</option><option value="16">Himachali/Pahari</option><option value="17">Hindi</option><option value="18">Kanauji</option><option value="19">Kannada</option><option value="20">Kashmiri</option><option value="21">Khandesi</option><option value="22">Khasi</option><option value="23">Konkani</option><option value="24">Koshali</option><option value="25">Kumoani</option><option value="26">Kutchi</option><option value="27">Lepcha</option><option value="28">Ladacki</option><option value="29">Magahi</option><option value="30">Maithili</option><option value="31">Malayalam</option><option value="32">Manipuri</option><option value="33">Marathi</option><option value="34">Marwari</option><option value="35">Miji</option><option value="36">Mizo</option><option value="37">Monpa</option><option value="38">Nicobarese</option><option value="39">Nepali</option><option value="40">Oriya</option><option value="41">Punjabi</option><option value="42">Rajasthani</option><option value="43">Sanskrit</option><option value="44">Santhali</option><option value="45">Sindhi</option><option value="46">Sourashtra</option><option value="47">Tamil</option><option value="48">Telugu</option><option value="49">Tripuri</option><option value="50">Tulu</option><option value="51">Urdu</option></select>

                    </div></td>

                      </tr>

                      <tr>

                        <td><div align="left" id="caste">Caste/Division </div></td>

                        <td colspan="2"  id="caste_rel">     <select name="caste" class="width_100" id="caste"  disabled="true" >

                        <option>Others</option>
                      </select></td>

                      </tr>

                      <tr>

                        <td>Country</td>

                        <td colspan="2"><select name="country" class="width_100" id="country">

                            <option value="">Select</option>

                            <option value="albania">Albania</option>

                            <option value="algeria">Algeria</option>

                            <option value="american samoa">American samoa</option>

                            <option value="andoria">Andoria</option>

                            <option value="andorra">Andorra</option>

                            <option value="angola">Angola</option>

                            <option value="anguilla">Anguilla</option>

                            <option value="anitgua">Anitgua</option>

                            <option value="antigua">Antigua</option>

                            <option value="argentina">Argentina</option>

                            <option value="armenia">Armenia</option>

                            <option value="aruba">Aruba</option>

                            <option value="australia">Australia</option>

                            <option value="austria">Austria</option>

                            <option value="azerbaijan">Azerbaijan</option>

                            <option value="azerbiajan">Azerbiajan</option>

                            <option value="bahamas">Bahamas</option>

                            <option value="bahrain">Bahrain</option>

                            <option value="bangladesh">Bangladesh</option>

                            <option value="barbados">Barbados</option>

                            <option value="belarus">Belarus</option>

                            <option value="belgium">Belgium</option>

                            <option value="belize">Belize</option>

                            <option value="benin">Benin</option>

                            <option value="bermuda">Bermuda</option>

                            <option value="bhutan">Bhutan</option>

                            <option value="boliva">Boliva</option>

                            <option value="bolivia">Bolivia</option>

                            <option value="bonaire">Bonaire</option>

                            <option value="bosnia &amp; herzegovina">Bosnia &amp; herzegovina</option>

                            <option value="botswana">Botswana</option>

                            <option value="brazil">Brazil</option>

                            <option value="brunei">Brunei</option>

                            <option value="bulgaria">Bulgaria</option>

                            <option value="burkina faso">Burkina faso</option>

                            <option value="burundi">Burundi</option>

                            <option value="cambodia">Cambodia</option>

                            <option value="cameroon">Cameroon</option>

                            <option value="canada">Canada</option>

                            <option value="canary islands the">Canary islands the</option>

                            <option value="cape varde">Cape varde</option>

                            <option value="cape verde">Cape verde</option>

                            <option value="cayman islands">Cayman islands</option>

                            <option value="central african republic">Central african republic</option>

                            <option value="chad">Chad</option>

                            <option value="chile">Chile</option>

                            <option value="china">China</option>

                            <option value="china, peoples rep">China, peoples rep</option>

                            <option value="colombia">Colombia</option>

                            <option value="columbia">Columbia</option>

                            <option value="comoros">Comoros</option>

                            <option value="congo">Congo</option>

                            <option value="congo, the democratic rep of">Congo, the democratic rep of</option>

                            <option value="cook islands">Cook islands</option>

                            <option value="costa rica">Costa rica</option>

                            <option value="croatia">Croatia</option>

                            <option value="cuba">Cuba</option>

                            <option value="curacao">Curacao</option>

                            <option value="cyprus">Cyprus</option>

                            <option value="czech republic">Czech republic</option>

                            <option value="czech republic the">Czech republic the</option>

                            <option value="denmark">Denmark</option>

                            <option value="djibouti">Djibouti</option>

                            <option value="dominica">Dominica</option>

                            <option value="dominican republic">Dominican republic</option>

                            <option value="ecuador">Ecuador</option>

                            <option value="egypt">Egypt</option>

                            <option value="el salvador">El salvador</option>

                            <option value="equatorial guinea">Equatorial guinea</option>

                            <option value="eritrea">Eritrea</option>

                            <option value="estonia">Estonia</option>

                            <option value="ethiopia">Ethiopia</option>

                            <option value="falkland islands">Falkland islands</option>

                            <option value="faroe islands">Faroe islands</option>

                            <option value="faroer islands">Faroer islands</option>

                            <option value="fiji">Fiji</option>

                            <option value="finland">Finland</option>

                            <option value="france">France</option>

                            <option value="french guana">French guana</option>

                            <option value="french guyana">French guyana</option>

                            <option value="french polynesia">French polynesia</option>

                            <option value="gabon">Gabon</option>

                            <option value="gambia">Gambia</option>

                            <option value="georgia">Georgia</option>

                            <option value="germany">Germany</option>

                            <option value="ghana">Ghana</option>

                            <option value="gibraltar">Gibraltar</option>

                            <option value="greece">Greece</option>

                            <option value="greenland">Greenland</option>

                            <option value="grenada">Grenada</option>

                            <option value="guadeloupe">Guadeloupe</option>

                            <option value="guadeluoupe">Guadeluoupe</option>

                            <option value="guam">Guam</option>

                            <option value="guatemala">Guatemala</option>

                            <option value="guernsey">Guernsey</option>

                            <option value="guinea">Guinea</option>

                            <option value="guinea republic">Guinea republic</option>

                            <option value="guinea-bissau">Guinea-bissau</option>

                            <option value="guyana">Guyana</option>

                            <option value="guyana (british)">Guyana (british)</option>

                            <option value="haiti">Haiti</option>

                            <option value="honduras">Honduras</option>

                            <option value="hong kong">Hong kong</option>

                            <option value="hungary">Hungary</option>

                            <option value="iceland">Iceland</option>

                            <option value="india">India</option>

                            <option value="indonesia">Indonesia</option>

                            <option value="iran">Iran</option>

                            <option value="ireland">Ireland</option>

                            <option value="ireland republic of">Ireland republic of</option>

                            <option value="israel">Israel</option>

                            <option value="italy">Italy</option>

                            <option value="italy">Italy</option>

                            <option value="ivory coast">Ivory coast</option>

                            <option value="jamaica">Jamaica</option>

                            <option value="japan">Japan</option>

                            <option value="jersey">Jersey</option>

                            <option value="jordan">Jordan</option>

                            <option value="kazakhstan">Kazakhstan</option>

                            <option value="kenya">Kenya</option>

                            <option value="kiribati">Kiribati</option>

                            <option value="korea, republic of">Korea, republic of</option>

                            <option value="korea, south">Korea, south</option>

                            <option value="korea,d.pr of">Korea,d.pr of</option>

                            <option value="kuwait">Kuwait</option>

                            <option value="kyrgyzstan">Kyrgyzstan</option>

                            <option value="lao peoples democratic republic">Lao peoples democratic republic</option>

                            <option value="laos">Laos</option>

                            <option value="latvia">Latvia</option>

                            <option value="lebanon">Lebanon</option>

                            <option value="lesotho">Lesotho</option>

                            <option value="liberia">Liberia</option>

                            <option value="libya">Libya</option>

                            <option value="liechtenstein">Liechtenstein</option>

                            <option value="lithuania">Lithuania</option>

                            <option value="luxembourg">Luxembourg</option>

                            <option value="macao">Macao</option>

                            <option value="macau">Macau</option>

                            <option value="macedonia">Macedonia</option>

                            <option value="macedonia republic of (fyrom)">Macedonia republic of (fyrom)</option>

                            <option value="madagascar">Madagascar</option>

                            <option value="malawi">Malawi</option>

                            <option value="malaysia">Malaysia</option>

                            <option value="maldives">Maldives</option>

                            <option value="mali">Mali</option>

                            <option value="malta">Malta</option>

                            <option value="marinique">Marinique</option>

                            <option value="marshall islands">Marshall islands</option>

                            <option value="martinique">Martinique</option>

                            <option value="mauritania">Mauritania</option>

                            <option value="mauritiania">Mauritiania</option>

                            <option value="mauritius">Mauritius</option>

                            <option value="mexico">Mexico</option>

                            <option value="micronesia">Micronesia</option>

                            <option value="moldova">Moldova</option>

                            <option value="moldova republic of">Moldova republic of</option>

                            <option value="monaco">Monaco</option>

                            <option value="mongolia">Mongolia</option>

                            <option value="montserrat">Montserrat</option>

                            <option value="morocco">Morocco</option>

                            <option value="mozambique">Mozambique</option>

                            <option value="myanmar">Myanmar</option>

                            <option value="myanmar (burma)">Myanmar (burma)</option>

                            <option value="namibia">Namibia</option>

                            <option value="nauru republic of">Nauru republic of</option>

                            <option value="nepal">Nepal</option>

                            <option value="netherland antilles">Netherland antilles</option>

                            <option value="netherlands">Netherlands</option>

                            <option value="netherlands the">Netherlands the</option>

                            <option value="nevis">Nevis</option>

                            <option value="new caledonia">New caledonia</option>

                            <option value="new zealand">New zealand</option>

                            <option value="nicaragua">Nicaragua</option>

                            <option value="niger">Niger</option>

                            <option value="nigeria">Nigeria</option>

                            <option value="niue">Niue</option>

                            <option value="norway">Norway</option>

                            <option value="oman">Oman</option>

                            <option value="pakistan">Pakistan</option>

                            <option value="palau">Palau</option>

                            <option value="palestine authority">Palestine authority</option>

                            <option value="panama">Panama</option>

                            <option value="papua new guinea">Papua new guinea</option>

                            <option value="paraguay">Paraguay</option>

                            <option value="peru">Peru</option>

                            <option value="peru">Peru</option>

                            <option value="philippines">Philippines</option>

                            <option value="poland">Poland</option>

                            <option value="portugal">Portugal</option>

                            <option value="puerto rico">Puerto rico</option>

                            <option value="qatar">Qatar</option>

                            <option value="reunion">Reunion</option>

                            <option value="reunion island">Reunion island</option>

                            <option value="romania">Romania</option>

                            <option value="russia">Russia</option>

                            <option value="russian federation">Russian federation</option>

                            <option value="rwanda">Rwanda</option>

                            <option value="saint lucia">Saint lucia</option>

                            <option value="saint vincent">Saint vincent</option>

                            <option value="saipan">Saipan</option>

                            <option value="samoa">Samoa</option>

                            <option value="sao tome &amp; principe">Sao tome &amp; principe</option>

                            <option value="saudi arabia">Saudi arabia</option>

                            <option value="saudia arabia">Saudia arabia</option>

                            <option value="senegal">Senegal</option>

                            <option value="seychelles">Seychelles</option>

                            <option value="sierra leone">Sierra leone</option>

                            <option value="singapore">Singapore</option>

                            <option value="slovak republic">Slovak republic</option>

                            <option value="slovakia">Slovakia</option>

                            <option value="slovenia">Slovenia</option>

                            <option value="solomon islands">Solomon islands</option>

                            <option value="somalia">Somalia</option>

                            <option value="south africa">South africa</option>

                            <option value="spain">Spain</option>

                            <option value="sri lanka">Sri lanka</option>

                            <option value="st kitts and nevis">St kitts and nevis</option>

                            <option value="st lucia">St lucia</option>

                            <option value="st vincent">St vincent</option>

                            <option value="st. barthelemy">St. barthelemy</option>

                            <option value="st. eustatius">St. eustatius</option>

                            <option value="st. kitts">St. kitts</option>

                            <option value="st. maarten">St. maarten</option>

                            <option value="sudan">Sudan</option>

                            <option value="suriname">Suriname</option>

                            <option value="swaziland">Swaziland</option>

                            <option value="sweden">Sweden</option>

                            <option value="switzerland">Switzerland</option>

                            <option value="syria">Syria</option>

                            <option value="tahiti">Tahiti</option>

                            <option value="taiwan">Taiwan</option>

                            <option value="tajikistan">Tajikistan</option>

                            <option value="tanzania">Tanzania</option>

                            <option value="thailand">Thailand</option>

                            <option value="togo">Togo</option>

                            <option value="tonga">Tonga</option>

                            <option value="trinidad &amp; tobago">Trinidad &amp; tobago</option>

                            <option value="trinidad and tobago">Trinidad and tobago</option>

                            <option value="tunisia">Tunisia</option>

                            <option value="turkey">Turkey</option>

                            <option value="turkmenistan">Turkmenistan</option>

                            <option value="turks &amp; caicos islands">Turks &amp; caicos islands</option>

                            <option value="turks and caicos islands">Turks and caicos islands</option>

                            <option value="tuvalu">Tuvalu</option>

                            <option value="uganda">Uganda</option>

                            <option value="ukraine">Ukraine</option>

                            <option value="united arab emirates">United arab emirates</option>

                            <option value="united kingdom">United kingdom</option>

                            <option value="united states of america">United states of america</option>

                            <option value="uruguay">Uruguay</option>

                            <option value="uzbekistan">Uzbekistan</option>

                            <option value="vanuatu">Vanuatu</option>

                            <option value="vatican city">Vatican city</option>

                            <option value="venezuela">Venezuela</option>

                            <option value="vietnam">Vietnam</option>

                            <option value="virgin island (gb)">Virgin island (gb)</option>

                            <option value="virgin islands  british">Virgin islands british</option>

                            <option value="virgin islands  us">Virgin islands us</option>

                            <option value="virgin islands (usa)">Virgin islands (usa)</option>

                            <option value="wallis &amp; futuna">Wallis &amp; futuna</option>

                            <option value="yemen arab republic">Yemen arab republic</option>

                            <option value="yugloslavia">Yugloslavia</option>

                            <option value="zaire (dem rep of congo)">Zaire (dem rep of congo)</option>

                            <option value="zambia">Zambia</option>

                            <option value="zimbabwe">Zimbabwe</option>

                            <option value="Others">Other</option>

                          </select></td>

                      </tr>

                      <tr>

                        <td colspan="2" align="right"><label>

                            <input type="checkbox" name="photo" id="photo" />

                            Only with photo</label></td>

                        <td align="right" style="padding-left:5px;"><a href="javascript:document.searchform.submit();" class="button-small square-orange uppercase float_right"><span></span> Search </a></td>

                      </tr>

                      <tr>

                        <td colspan="3" style="border-top:dotted 1px #e9c491"><table width="100%" border="0" cellspacing="0" cellpadding="0" >

                            <tr>

                              <td align="left"><a href="id_search.php" class="link">Profile ID Search</a></td>

                              <td align="right"><a href="search_page.php" class="link">More Search Options</a></td>

                            </tr>

                          </table></td>

                      </tr>

                    </table>

                  </form></td>

                <td class="td23"></td>

              </tr>

              <tr>

                <td class="td31"></td>

                <td class="td32"></td>

                <td class="td33"></td>

              </tr>

            </table>

          </div>

        </li>

        <li class="bottom"></li>

      </ul>

    </div>

    <!-- SHOWCASE AND QUICK SEARCH SECTIONS ENDS HERE ######################################## --> 

    

    <!--CONTENT AREA SECTION ONE STARTS HERE ############################################# -->

    <div id="Content_section1"  style="width:970px;  height:179px;  clear:both;">

      <div style="width:408px; height:159px; float:left;">

        <table class="wrapper2" border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td class="td11"></td>

            <td class="td12"></td>

            <td class="td13"></td>

          </tr>

          <tr>

            <td class="td21"></td>

            <td class="td22" style="height:146px; padding:6px; vertical-align:top; background-image:url(images/pm_bg.jpg); background-position:left bottom; background-repeat:no-repeat;"

                

                ><h2>Privilege Match</h2>

              <br />

              <table width="100%" border="0" cellspacing="10" cellpadding="5" class="clear">

                <tr>

                  <td width="110" align="center" valign="top"><img src="images/bussyman.png" width="100" height="100" /></td>

                  <td valign="top" class="size11">

                  <?Php

	  $primatchsql = "SELECT * FROM pages WHERE pId = 58";

	  $primatchexec = mysql_query($primatchsql);

	  $primatchfetch = mysql_fetch_array($primatchexec);

	  echo stripslashes(substr($primatchfetch["content"],0,181));

	  ?><!--Marriage  Bureau Service for bussy professionals and parents abroad who need a guide to find out a partner for their kid. Click the below link to know more about Privilage Match--><br />

                    <a href="privilegematch.php">Read More&gt;&gt;</a></td>

                </tr>

              </table></td>

            <td class="td23"></td>

          </tr>

          <tr>

            <td class="td31"></td>

            <td class="td32"></td>

            <td class="td33"></td>

          </tr>

        </table>

      </div>

      <div style="width:234px; height:157px; float:left; margin-left:10px;" >

        <table class="wrapper2" border="0" cellspacing="0" cellpadding="0" style="width:234px;">

          <tr>

            <td class="td11"></td>

            <td class="td12"></td>

            <td class="td13"></td>

          </tr>

          <tr>

            <td class="td21"></td>

            <td class="td22" style="height:146px; padding:6px; vertical-align:top; overflow:hidden;"><h2>Login </h2>

              <FORM action="memlogin_submit.php" method="post" name="form1" id="form1">	

<table width="100%" class="padding_5p" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:5px;">

                <tr>

                  <td colspan="2"><label class="rounded-textbox1" style="width:200px">

                      <input type="text" class="rounded-textbox1" placeholder="User name" name="txtusername" id="txtusername" style="width:194px" onblur="checkusername();" onfocus="rusername();" />

                    </label></td>

                </tr>

                <tr>

                  <td colspan="2"><label class="rounded-textbox1" style="width:200px">

                      <input type="password" class="rounded-textbox1" placeholder="Password" name="txtpassword" id="txtpassword" style="width:194px" onblur="checkpassword();" onfocus="rpassword();" />

                    </label></td>

                </tr>

                <tr>

                  <td width="80%"  style="padding:0px; padding-top:5px; "  ><a href="forgotpassword.php" class="link">Forgot Password?</a></td>

                  <td align="right" style="padding:0px; padding-top:5px;" ><!--<a href="#" class="button-small square-orange uppercase"><span></span> Login</a>-->

				  <input class="button-small square-orange uppercase" style="clear:both; border:0px; font-size:10px; font:bold; text-align:center;"name="Login" id="Login" type="image" value="Login" onclick="return validateloginform();">

				  <!--<input type="submit" name="Login" id="Login" value="Login" onclick="return validateloginform();" />-->

				  </td>

                </tr>

              </table>

              </FORM></td>

            <td class="td23"></td>

          </tr>

          <tr>

            <td class="td31"></td>

            <td class="td32"></td>

            <td class="td33"></td>

          </tr>

        </table>

      </div>

      <div style="width:306px; height:157px; margin-left:10px; float:right; margin-left:10px;" > <a href="#"><img src="images/banner2.jpg" width="300" height="151" /></a><span class="clear float_right gray">Advertisement</span></div>

    </div>

    <!--CONTENT AREA SECTION ONE ENDS HERE ############################################# --> 

    

    <!--CONTENT AREA SECTION TWO STARTS HERE ############################################# -->

    <div id="Content_section2"  style="width:970px;  height:150px;  clear:both;">

    

      <div style="width:406px; height:150px; float:left;">

       <!--<a href="#"><img src="images/banner3.jpg" width="406" height="136" /></a>-->

       <!-- PROFESSIONAL SEARCH SLIDE STARTS HERE ########################## -->        

        <div id="container">

		<div id="example">



        <img src="images/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon">

        

        <div id="slides">

				<div class="slides_container">

					<a href="edu_search.php" title="Professional Search" target="_self"><img src="images/prof_banner/1.png" width="406" height="136" alt="Slide 1"></a>

					<a href="edu_search.php" title="Professional Search" target="_self"><img src="images/prof_banner/2.png" width="406" height="136" alt="Slide 2"></a>

					<a href="edu_search.php" title="Professional Search" target="_self"><img src="images/prof_banner/3.png" width="406" height="136" alt="Slide 3"></a>

					<a href="edu_search.php" title="Professional Search" target="_self"><img src="images/prof_banner/4.png" width="406" height="136" alt="Slide 4"></a>

						<a href="edu_search.php" title="Professional Search" target="_self"><img src="images/prof_banner/5.png" width="406" height="136" alt="Slide 5"></a>

				</div>

				<a href="#" class="prev"></a>

				<a href="#" class="next"></a>

			</div>

        



		</div>



	</div>       

        

<!-- PROFESSIONAL SEARCH SLIDE ENDS HERE ########################## -->                



       </div>

      <div style="width:545px; height:150px; float:right; margin-left:10px;" >

        <h2>Why <?php echo $sitename;?> Match?</h2>

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">

          <tr>

            <td width="150" align="center"><img src="images/logo_icon.png" width="71" height="61" /></td>

            <td class="size11">                     <?Php

	  $nmatchsql = "SELECT * FROM pages WHERE pId = 43";

	  $nmatchexec = mysql_query($nmatchsql);

	  $nmatchfetch = mysql_fetch_array($nmatchexec);

	  echo stripslashes(substr($nmatchfetch["content"],0,316));

	  ?>



              <a href="why_numinous_match.php" class="link">Read More</a></td>

          </tr>

        </table>

        

		<?php 

		$registerd_so_for_query = "SELECT COUNT(ID) FROM register"; 

	 	$registerd_so_for_result = mysql_query($registerd_so_for_query) or die(mysql_error());

		$registerd_so_for_row = mysql_fetch_array($registerd_so_for_result);

		?>

		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="clear:both;">

          <!--<tr>

            <td width="150" align="center"></td>

            <td class="size11"><p class="resgist_so_for" style="margin-top:7px;">Registrations Made So far : <?php echo $registerd_so_for_row['COUNT(ID)']; ?></p></td>

          </tr>-->

        </table>

      </div>

    </div>

    <!--CONTENT AREA SECTION TWO ENDS HERE ############################################# --> 

    

  </div>

  <!-- CONTENT AREA ENDS HERE ###################################################  --> 

  

  <!-- FOOTER STARTS HERE ###################################################  -->

  <?php include("include/footermenu.php") ?>

  <!-- FOOTER ENDS HERE ###################################################  --> 

  

</div>
<script>
function do_request(val) {

document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
 $.post('generateCasteIndex.php?lang='+val+'&rel='+document.getElementById('religion').selectedIndex,'', function(data) {
	document.getElementById('caste_rel').innerHTML = "<img src='loading.gif'>";
	if(data!=''){
	
	document.getElementById('caste_rel').innerHTML = data;
	}});
	//return true;
	


}
</script>

<script>
function caste_resetRF(val){ 
alertdo(val);
document.getElementById('Language').selectedIndex = 0;
}

function alertdo(flag)  { 
if(flag == 1) {
document.getElementById("caste").innerHTML = 'Caste/Division ';
} else if(flag == 2  || flag == 10 || flag == 11) {
document.getElementById("caste").innerHTML = 'Sect/Division';
} else if(flag == 12 || flag == 13  || flag == 14 || flag == 3) {
document.getElementById("caste").innerHTML = 'Denomination/Division';
} else {
document.getElementById("caste").innerHTML = 'Caste/Division ';
}


}

</script>
</body>

</html>
