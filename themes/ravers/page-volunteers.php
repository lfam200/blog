<?php
/*
Template Name: Página Volunteers
*/
?>
<?php get_header(); ?>
<div class="bg_volunteer"></div>
<div class="white">
  <div class="container">
    <h2 class="text-center margin-top margin-bottom visible-lg">Is it <strong>time</strong> for you to become an <br> <strong>international</strong> raver <strong>volunteer?</strong></h2>
    <h3 class="text-center margin-top margin-bottom visible-sm visible-md">Is it <strong>time</strong> for you to become an <br> <strong>international</strong> raver <strong>volunteer?</strong></h3>
    <h3 class="text-center margin-top margin-bottom visible-xs bg-imagen">Is it <strong>time</strong> for you to become an <br> <strong>international</strong> raver <strong>volunteer?</strong></h3>
    
    <div class="row margin-bottom-lg">
        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
          <p class="text-center text-estandar">Just in 27 countries we are an average 40 million ravers between 20 and 34 years old, and in our vast majority  we cross our countries to attend more than one of these festivals or clubs that we love so much annually. Would you like to complement your trip by volunteering for a positive purpose?</p>
        </div>
    </div>
    <div class="row margin-bottom-lg">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <img src="<?php bloginfo('template_directory'); ?>/img/office.jpg" class="img-circle center-block img-shadow margin-bottom" width="70%" alt="Office Volunteers">
        <h3 class="text-center">Office volunteers</h3>
        <p class="text-justify margin-center hidden-xs hidden-sm">We always welcome to people who want to come and help out in our office. We work mostly with internet so it doesn't matter where you are, if you have internet you can work with us.</p>
        <p class="text-justify visible-xs visible-sm">We always welcome to people who want to come and help out in our office. We work mostly with internet so it doesn't matter where you are, if you have internet you can work with us.</p>
        
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <img src="<?php bloginfo('template_directory'); ?>/img/edm.jpg" class="img-circle center-block img-shadow margin-bottom" width="70%" alt="EDM Volunteers">
        <h3 class="text-center">EDM events volunteers</h3>
        <p class="text-justify margin-center hidden-xs hidden-sm">We know you love rave but suddenly you don't know how much an EDM festival pollutes the planet. Become an International Raver Volunteer and help us generate less environmental impact after every festival.</p>
        <p class="text-justify visible-xs visible-sm">We know you love rave but suddenly you don't know how much an EDM festival pollutes the planet. Become an International Raver Volunteer and help us generate less environmental impact after every festival.</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <img src="<?php bloginfo('template_directory'); ?>/img/fieldtrip.jpg" class="img-circle center-block img-shadow margin-bottom" width="70%" alt="Go on to a field trip">
        <h3 class="text-center">Go on to a field trip</h3>
        <p class="text-justify margin-center hidden-xs hidden-sm">Want to change the world, learn about new cultures, build relationship with incredible people, save lives and transform communities?</p>
        <p class="text-justify visible-xs visible-sm">Want to change the world, learn about new cultures, build relationship with incredible people, save lives and transform communities?</p>
      </div>
      
    </div>
    <div class="row">
      <h2 class="text-center margin-top margin-bottom visible-lg">SIGN UP TO <strong>VOLUNTEER</strong></h2>
      <h3 class="text-center margin-top margin-bottom visible-sm visible-md">SIGN UP TO <strong>VOLUNTEER</strong></h3>
      <h3 class="text-center margin-top margin-bottom visible-xs bg-imagen">SIGN UP TO <strong>VOLUNTEER</strong></h3>
      <p class="text-center text-estandar margin-center-lg margin-top margin-bottom">sign up with</p>
      <div class="col-xs-12 text-center margin-bottom-lg">
        
        <a href="{{ route('facebook')}}" class="social-icon">
          <img src="<?php bloginfo('template_directory'); ?>/img/fb.png" width="80" alt="">
        </a>
        <a href="{{ route('twitter')}}" class="social-icon">
          <img src="<?php bloginfo('template_directory'); ?>/img/tw.png" width="80" alt="">
        </a>
        
      </div>
      <p class="text-center text-estandar">or</p>
      <p class="text-center text-estandar margin-center-lg margin-top margin-bottom visible-md visible-lg">Fill your data and according to these, organizations with <br>causes of your interest will contact you</p>
      <p class="text-justify text-estandar margin-top margin-bottom visible-xs visible-sm">Fill your data and according to these, organizations with causes of your interest will contact you</p>
      
    </div>

    <div class="row margin-top-lg">
      <div class="panel panel-default col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
         <div class="post">
          <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
          <div class="entrytext">
           <?php the_content(); ?>
          </div>
         </div>
         <?php endwhile; endif; ?>
         
       <!--  <form action="/volunt" method="POST" class="form-horizontal margin-top-lg">
            <div class="div-border col-xs-12">
              <div class="form-group">
                <label for="inputName" class="col-sm-4 control-label">name</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Full Name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputBirthday" class="col-sm-4 control-label">birthday</label>
                <div class="col-sm-6">
                  <input type="date" class="form-control" name="inputBirthday" id="inputBirthday" placeholder="DD/MM/AAAA" required>
                </div>
              </div>
              <div class="form-group">
                <label for="pEmail" class="col-sm-4 control-label">primary email</label>
                <div class="col-sm-6">
                  <input type="email" class="form-control" name="pEmail" id="pEmail" required>
                </div>
              </div>
              <div class="form-group">
                <label for="sEmail" class="col-sm-4 control-label">secundary email</label>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="sEmail" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputTwitter" class="col-sm-4 control-label">twitter</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputTwitter" placeholder="@">
                </div>
              </div>
              <div class="form-group">
                <label for="inputWeb" class="col-sm-4 control-label">web profile</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputWeb" placeholder="http://">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPhone" class="col-sm-4 control-label">primary phone</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputPhone" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress" class="col-sm-4 control-label">address</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputAddress" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputCity" class="col-sm-4 control-label">city</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputCity" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputCountry" class="col-sm-4 control-label">country</label>
                <div class="col-sm-6">
                  <select class="form-control">
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Åland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia, Plurinational State of</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, the Democratic Republic of the</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Côte d'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curaçao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and McDonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Réunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthélemy</option>
                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin (French part)</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten (Dutch part)</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US" selected>United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.S.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>

                </div>
              </div>
              <div class="form-group">
                <label for="inputState" class="col-sm-4 control-label">state/region</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="inputState" placeholder="">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="inputZip" placeholder="Zip Code">
                </div>
              </div>
            </div>
            <div class="div-border col-xs-12 margin-bottom-lg padding-bottom">
              <span><small>*FEEL FREE TO CHOOSE MORE THAN ONE OPTION</small></span>
              <h2 class="text-center margin-bottom">Type of volunteering</h2>
              <div class="checkbox col-xs-4">
                <label>
                  <input type="checkbox"> office 
                </label>
              </div>
              <div class="checkbox col-xs-4">
                <label>
                  <input type="checkbox"> edm
                </label>
              </div>
              <div class="checkbox col-xs-4">
                <label>
                  <input type="checkbox"> field trip
                </label>
              </div>
            </div>
            <div class="div-border col-xs-12 margin-bottom-lg padding-bottom">
              <h2 class="text-center margin-bottom">Wich continent you prefer <br> to volunteer</h2>
              <div class="checkbox col-xs-4">
                <label>
                  <input type="checkbox"> America 
                </label>
              </div>
              <div class="checkbox col-xs-4">
                <label>
                  <input type="checkbox"> Asia / Middle East
                </label>
              </div>
              <div class="checkbox col-xs-4">
                <label>
                  <input type="checkbox"> Africa
                </label>
              </div>
            </div>
            <div class="div-border col-xs-12 margin-bottom-lg padding-bottom">
              <h2 class="text-center margin-bottom">Causes or projects</h2>
              <div class="checkbox col-xs-6 col-sm-4">
                <label>
                  <input type="checkbox"> education 
                </label>
              </div>
              <div class="checkbox col-xs-6 col-sm-4">
                <label>
                  <input type="checkbox"> water access
                </label>
              </div>
              <div class="checkbox col-xs-6 col-sm-4">
                <label>
                  <input type="checkbox"> sanitation
                </label>
              </div>
              <div class="checkbox col-xs-6 col-sm-4">
                <label>
                  <input type="checkbox"> pooverty reduction
                </label>
              </div>
              <div class="checkbox col-xs-6 col-sm-4">
                <label>
                  <input type="checkbox"> others
                </label>
              </div>
              <div class="checkbox col-xs-6 col-sm-4">
                
              </div>
            </div>
            <div class="div-border col-xs-12 margin-bottom-lg padding-bottom">
              <h2 class="text-center margin-bottom">When are you free?</h2>
              
              <div class="col-xs-2"></div>
              <div class="col-xs-2 visible-md visible-lg">MORNING</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>morn</small></div>
              <div class="col-xs-2 visible-md visible-lg">AFTERNOON</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>afft</small></div>
              <div class="col-xs-2 visible-md visible-lg">EVENING</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>eve</small></div>
              <div class="col-xs-2 visible-md visible-lg">ANY</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>any</small></div>
              <div class="col-xs-2 visible-md visible-lg">NONE</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>none</small></div>
              <div class="col-xs-2 visible-md visible-lg">MONDAY</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>Mon</small></div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="col-xs-2 visible-md visible-lg">TUESDAY</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>Tue</small></div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              
              <div class="col-xs-2 visible-md visible-lg">WEDNESDAY</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>Wed</small></div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              
              <div class="col-xs-2 visible-md visible-lg">THURSDAY</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>Thur</small></div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              
              <div class="col-xs-2 visible-md visible-lg">FRIDAY</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>Fri</small></div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="col-xs-2 visible-md visible-lg">SATURDAY</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>Sat</small></div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="col-xs-2 visible-md visible-lg">SUNDAY</div>
              <div class="col-xs-2 visible-xs visible-sm text-uppercase"><small>Sun</small></div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
              <div class="checkbox col-xs-2">
                <label>
                  <input type="checkbox"> 
                </label>
              </div>
            </div>
            <div class="div-border col-xs-12 margin-bottom-lg padding-bottom">
              <h2 class="text-center margin-bottom">Your contribution</h2>
              <h3 class="text-center margin-bottom">We know you're  talented. Feel free to select more than one!</h3>
              <div class="checkbox col-sm-10">
                <label>
                  <input type="checkbox"> I can help with heavy lifting and setting up for events. 
                </label>
              </div>
              <div class="checkbox col-sm-10">
                <label>
                  <input type="checkbox"> I'm a photographer/videographer who would like to shoot events for ravers.
                </label>
              </div>
              <div class="checkbox col-sm-10">
                <label>
                  <input type="checkbox"> I'm detail-oriented and love research projects.
                </label>
              </div>
              <div class="checkbox col-sm-10">
                <label>
                  <input type="checkbox"> Customer service is my middle name.
                </label>
              </div>
              <div class="checkbox col-sm-10">
                <label>
                  <input type="checkbox"> I can help share digital content and assist with social media.
                </label>
              </div>
              <div class="checkbox col-sm-10">
                 <label>
                  <input type="checkbox"> I'm good with numers, spreadsheet and data analysis.
                </label>
              </div>
              <div class="checkbox col-sm-10">
                 <label>
                  <input type="checkbox"> Contact me for last minute events.
                </label>
              </div>
            </div>
            <div class="div-border col-xs-12 margin-bottom-lg padding-bottom">
              <h2 class="text-center margin-bottom">Anything else you want us <br> to know?</h2>
              <textarea class="form-control" rows="5" placeholder="Begin typing here"></textarea>
            </div>
            <div class="form-group">
              <div class="col-xs-12 text-center">
                <button type="submit" class="btn btn-success btn-lg">Submit</button>
              </div>
            </div>
        </form> -->
      </div>  
    </div>
    <div class="row margin-top-lg margin-bottom-lg">
      <p class="text-center">Questions? Give us a shot: <a href="mailto:volunteer@internationalravers.org">VOLUNTEER@INTERNATIONALRAVERS.ORG</a></p>
    </div>
  </div>
</div>
<?php get_footer(); ?>
</body>
</html>