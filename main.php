<html lang="en">
   <head>
      <style data-styles="">ion-icon{visibility:hidden}.hydrated{visibility:inherit}</style>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
      <meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
      <meta name="author" content="Spruko Technologies Private Limited">
      <meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
      <!-- Favicon --> 
      <link rel="icon" href="assets/img/brand/favicon.ico" type="image/x-icon">
      <!-- Title --> 
      <title>სატესტო ობიექტი - Iten.ge CONTROL PANEL</title>
      <!---Fontawesome css--> 
      <?php include('includes/functions.php'); ?>
      <meta http-equiv="imagetoolbar" content="no">
      <style type="text/css">
         <!-- input,textarea{-webkit-touch-callout:default;-webkit-user-select:auto;-khtml-user-select:auto;-moz-user-select:text;-ms-user-select:text;user-select:text} *{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:-moz-none;-ms-user-select:none;user-select:none} -->
      </style>
      <style type="text/css" media="print">
         <!-- body{display:none} -->
      </style>
      <!--[if gte IE 5]>
      <frame>
      </frame><![endif]--><script src="https://www.spruko.com/demo/dashlead/assets/plugins/ionicons/ionicons/ionicons.suuqn5vt.js" type="module" crossorigin="true" data-resources-url="https://www.spruko.com/demo/dashlead/assets/plugins/ionicons/ionicons/" data-namespace="ionicons"></script>
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>
   </head>
   <body>
      
      <?php include('includes/switcher.php'); ?>
      <!-- End Switcher --> <!-- Loader --> 
      <div id="global-loader" style="display: none;"> <img src="assets/img/loader.svg" class="loader-img" alt="Loader"> </div>
      <!-- End Loader --> <!-- Page --> 
      <div class="page">
         <!-- Sidemenu --> 
         <?php include('includes/menu.php'); ?>
         <!-- End Sidemenu --> <!-- Main Content--> 
         <div class="main-content side-content pt-0">
            <!-- Main Header--> 
            <?php include('includes/header.php'); ?>
            <!-- End Main Header--> 
            <div class="container-fluid">
               <!-- Page Header --> 
               <div class="page-header">
                  <div>
                     <h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sales Dashboard</li>
                     </ol>
                  </div>
                  <div class="d-flex">
                     <div class="mr-2">
                        <a class="btn ripple btn-outline-primary dropdown-toggle mb-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-external-link"></i> Export <i class="fas fa-caret-down ml-1"></i> </a> 
                        <div class="dropdown-menu tx-13"> <a class="dropdown-item" href="#"><i class="far fa-file-pdf mr-2"></i>Export as Pdf</a> <a class="dropdown-item" href="#"><i class="far fa-image mr-2"></i>Export as Image</a> <a class="dropdown-item" href="#"><i class="far fa-file-excel mr-2"></i>Export as Excel</a> </div>
                     </div>
                     <div class=""> <a href="#" class="btn ripple btn-secondary navresponsive-toggler mb-0" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fe fe-filter mr-1"></i> Filter <i class="fas fa-caret-down ml-1"></i> </a> </div>
                  </div>
               </div>
               <!-- End Page Header --> <!--Navbar--> 
               <div class="responsive-background">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <div class="advanced-search">
                        <div class="row align-items-center">
                           <div class="col-md-4">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group mb-lg-0">
                                       <label class="">From :</label> 
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"> <i class="fe fe-calendar lh--9 op-6"></i> </div>
                                          </div>
                                          <input class="form-control fc-datepicker hasDatepicker" placeholder="11/01/2019" type="text" id="dp1612271925264"> 
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-lg-0">
                                       <label class="">To :</label> 
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"> <i class="fe fe-calendar lh--9 op-6"></i> </div>
                                          </div>
                                          <input class="form-control fc-datepicker hasDatepicker" placeholder="11/08/2019" type="text" id="dp1612271925265"> 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group mb-lg-0">
                                 <label class="">Sales By Country :</label> 
                                 <select class="form-control select2-flag-search select2-hidden-accessible" data-placeholder="Select Contry" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="AF" data-select2-id="3">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AU">Australia</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AO">Angola</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BY">Belarus</option>
                                    <option value="CD">Congo</option>
                                    <option value="CA">Canada</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="CI">Cote d'Ivoire</option>
                                    <option value="CL">Chile</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CN">China</option>
                                    <option value="CO">Colombia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CV">Cabo Verde</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FI">Finland</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FR">France</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GE">Georgia</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GH">Ghana</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HU">Hungary</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IL">Israel</option>
                                    <option value="IN">India</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IR">Iran</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JO">Jordan</option>
                                    <option value="JP">Japan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LB">Lebanons</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LY">Libya</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MD">Moldova</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MK">Macedonia (FYROM)</option>
                                    <option value="ML">Mali</option>
                                    <option value="MM">Myanmar (formerly Burma)</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MT">Malta</option>
                                    <option value="MV">Maldives</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MX">Mexico</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NO">Norway</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="OM">Oman</option>
                                    <option value="PA">Panama</option>
                                    <option value="PF">Paraguay</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PL">Poland</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SE">Sweden</option>
                                    <option value="SG">Singapore</option>
                                    <option value="TG">Togo</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UM">United States of America</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VA">Vatican City (Holy See)</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                 </select>
                                 <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-kr70-container"><span class="select2-selection__rendered" id="select2-kr70-container" role="textbox" aria-readonly="true" title="Afghanistan"><span><img src="assets/plugins/flag-icon-css/flags/4x3/af.svg" class="img-flag"> Afghanistan</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group mb-lg-0">
                                 <label class="">Products :</label> 
                                 <select multiple="multiple" class="group-filter ms-offscreen" style="">
                                    <optgroup label="Mens">
                                       <option value="1">Foot wear</option>
                                       <option value="2">Top wear</option>
                                       <option value="3">Bootom wear</option>
                                       <option value="4">Men's Groming</option>
                                       <option value="5">Accessories</option>
                                    </optgroup>
                                    <optgroup label="Women">
                                       <option value="1">Western wear</option>
                                       <option value="2">Foot wear</option>
                                       <option value="3">Top wear</option>
                                       <option value="4">Bootom wear</option>
                                       <option value="5">Beuty Groming</option>
                                       <option value="6">Accessories</option>
                                       <option value="7">Jewellery</option>
                                    </optgroup>
                                    <optgroup label="Baby &amp; Kids">
                                       <option value="1">Boys clothing</option>
                                       <option value="2">Girls Clothing</option>
                                       <option value="3">Toys</option>
                                       <option value="4">Baby Care</option>
                                       <option value="5">Kids footwear</option>
                                    </optgroup>
                                 </select>
                                 <div class="ms-parent group-filter" title="" style="width: 100%;">
                                    <button type="button" class="ms-choice">
                                       <span class="placeholder">Select here</span>
                                       <div class="icon-caret"></div>
                                    </button>
                                    <div class="ms-drop bottom" style="">
                                       <div class="ms-search">
                                          <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="">
                                       </div>
                                       <ul>
                                          <li class="ms-select-all">
                                             <label>
                                             <input type="checkbox" data-name="selectAll">
                                             <span>[Select all]</span>
                                             </label>
                                          </li>
                                          <li class="group ">
                                             <label class="optgroup">
                                             <input type="checkbox" data-name="selectGroup" data-key="group_0">Mens
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="1" data-key="option_0_0" data-name="selectItem">
                                             <span>Foot wear</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="2" data-key="option_0_1" data-name="selectItem">
                                             <span>Top wear</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="3" data-key="option_0_2" data-name="selectItem">
                                             <span>Bootom wear</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="4" data-key="option_0_3" data-name="selectItem">
                                             <span>Men's Groming</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="5" data-key="option_0_4" data-name="selectItem">
                                             <span>Accessories</span>
                                             </label>
                                          </li>
                                          <li class="group ">
                                             <label class="optgroup">
                                             <input type="checkbox" data-name="selectGroup" data-key="group_1">Women
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="1" data-key="option_1_0" data-name="selectItem">
                                             <span>Western wear</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="2" data-key="option_1_1" data-name="selectItem">
                                             <span>Foot wear</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="3" data-key="option_1_2" data-name="selectItem">
                                             <span>Top wear</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="4" data-key="option_1_3" data-name="selectItem">
                                             <span>Bootom wear</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="5" data-key="option_1_4" data-name="selectItem">
                                             <span>Beuty Groming</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="6" data-key="option_1_5" data-name="selectItem">
                                             <span>Accessories</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="7" data-key="option_1_6" data-name="selectItem">
                                             <span>Jewellery</span>
                                             </label>
                                          </li>
                                          <li class="group ">
                                             <label class="optgroup">
                                             <input type="checkbox" data-name="selectGroup" data-key="group_2">Baby &amp; Kids
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="1" data-key="option_2_0" data-name="selectItem">
                                             <span>Boys clothing</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="2" data-key="option_2_1" data-name="selectItem">
                                             <span>Girls Clothing</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="3" data-key="option_2_2" data-name="selectItem">
                                             <span>Toys</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="4" data-key="option_2_3" data-name="selectItem">
                                             <span>Baby Care</span>
                                             </label>
                                          </li>
                                          <li class="multiple ">
                                             <label class="">
                                             <input type="checkbox" value="5" data-key="option_2_4" data-name="selectItem">
                                             <span>Kids footwear</span>
                                             </label>
                                          </li>
                                          <li class="ms-no-results">No matches found</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group mb-lg-0">
                                 <label class="">Sales Type :</label> 
                                 <select multiple="multiple" class="multi-select ms-offscreen" style="">
                                    <option value="1">Online</option>
                                    <option value="2">Offline</option>
                                    <option value="3">Reseller</option>
                                 </select>
                                 <div class="ms-parent multi-select" title="" style="width: 100%;">
                                    <button type="button" class="ms-choice">
                                       <span class="placeholder">Select here</span>
                                       <div class="icon-caret"></div>
                                    </button>
                                    <div class="ms-drop bottom" style="">
                                       <ul>
                                          <li class="ms-select-all">
                                             <label>
                                             <input type="checkbox" data-name="selectAll">
                                             <span>[Select all]</span>
                                             </label>
                                          </li>
                                          <li class=" ">
                                             <label class="">
                                             <input type="checkbox" value="1" data-key="option_0" data-name="selectItem">
                                             <span>Online</span>
                                             </label>
                                          </li>
                                          <li class=" ">
                                             <label class="">
                                             <input type="checkbox" value="2" data-key="option_1" data-name="selectItem">
                                             <span>Offline</span>
                                             </label>
                                          </li>
                                          <li class=" ">
                                             <label class="">
                                             <input type="checkbox" value="3" data-key="option_2" data-name="selectItem">
                                             <span>Reseller</span>
                                             </label>
                                          </li>
                                          <li class="ms-no-results">No matches found</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="text-right"> <a href="#" class="btn btn-primary" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Apply</a> <a href="#" class="btn btn-secondary" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Reset</a> </div>
                     </div>
                  </div>
               </div>
               <!--End Navbar --> <!-- Row --> 
               <div class="row row-sm">
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                     <div class="card custom-card">
                        <div class="card-body dash1">
                           <div class="d-flex">
                              <p class="mb-1 tx-inverse">Number Of Sales</p>
                              <div class="ml-auto"> <i class="fas fa-chart-line fs-20 text-primary"></i> </div>
                           </div>
                           <div>
                              <h3 class="dash-25">568</h3>
                           </div>
                           <div class="progress mb-1">
                              <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-70p" role="progressbar"></div>
                           </div>
                           <div class="expansion-label d-flex"> <span class="text-muted">Last Month</span> <span class="ml-auto"><i class="fas fa-caret-up mr-1 text-success"></i>0.7%</span> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                     <div class="card custom-card">
                        <div class="card-body dash1">
                           <div class="d-flex">
                              <p class="mb-1 tx-inverse">New Revenue</p>
                              <div class="ml-auto"> <i class="fab fa-rev fs-20 text-secondary"></i> </div>
                           </div>
                           <div>
                              <h3 class="dash-25">$12,897</h3>
                           </div>
                           <div class="progress mb-1">
                              <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-60p bg-secondary" role="progressbar"></div>
                           </div>
                           <div class="expansion-label d-flex"> <span class="text-muted">Last Month</span> <span class="ml-auto"><i class="fas fa-caret-down mr-1 text-danger"></i>0.43%</span> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                     <div class="card custom-card">
                        <div class="card-body dash1">
                           <div class="d-flex">
                              <p class="mb-1 tx-inverse">Total Cost</p>
                              <div class="ml-auto"> <i class="fas fa-dollar-sign fs-20 text-success"></i> </div>
                           </div>
                           <div>
                              <h3 class="dash-25">$11,234</h3>
                           </div>
                           <div class="progress mb-1">
                              <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-50p bg-success" role="progressbar"></div>
                           </div>
                           <div class="expansion-label d-flex text-muted"> <span class="text-muted">Last Month</span> <span class="ml-auto"><i class="fas fa-caret-down mr-1 text-danger"></i>1.44%</span> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                     <div class="card custom-card">
                        <div class="card-body dash1">
                           <div class="d-flex">
                              <p class="mb-1 tx-inverse">Profit By Sale</p>
                              <div class="ml-auto"> <i class="fas fa-signal fs-20 text-info"></i> </div>
                           </div>
                           <div>
                              <h3 class="dash-25">$789</h3>
                           </div>
                           <div class="progress mb-1">
                              <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-40p bg-info" role="progressbar"></div>
                           </div>
                           <div class="expansion-label d-flex text-muted"> <span class="text-muted">Last Month</span> <span class="ml-auto"><i class="fas fa-caret-up mr-1 text-success"></i>0.9%</span> </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End  Row --> <!-- Row --> 
               <div class="row row-sm">
                  <div class="col-sm-12 col-xl-8 col-lg-8">
                     <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                           <div class="card-option d-flex">
                              <div>
                                 <h6 class="card-title mb-1">Overview of Sales Win/Lost</h6>
                                 <p class="text-muted card-sub-title">Comapred to last month sales.</p>
                              </div>
                              <div class="card-option-title ml-auto">
                                 <div class="btn-group p-0"> <button class="btn btn-light btn-sm" type="button">Month</button> <button class="btn btn-outline-light btn-sm" type="button">Year</button> </div>
                              </div>
                           </div>
                           <div>
                              <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                 <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                 </div>
                                 <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                 </div>
                              </div>
                              <canvas id="sales" height="350" width="1044" class="chartjs-render-monitor" style="display: block; width: 1044px; height: 350px;"></canvas>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-xl-4 col-lg-4">
                     <div class="card custom-card">
                        <div class="card-body">
                           <div>
                              <h6 class="card-title mb-1">Cost BreakDown</h6>
                              <p class="text-muted card-sub-title">Excepteur sint occaecat cupidatat non proident.</p>
                           </div>
                           <div class="row">
                              <div class="col-6 col-md-6 text-center">
                                 <div class="mb-2">
                                    <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#eb6f33&quot;, &quot;#77778e33&quot;], &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }" style="display: none;">4/7</span>
                                    <svg class="peity" height="40" width="40">
                                       <path d="M 20 0 A 20 20 0 1 1 11.322325217648839 38.01937735804839 L 13.925627652354187 32.61356415063387 A 14 14 0 1 0 20 6" data-value="4" fill="#eb6f33"></path>
                                       <path d="M 11.322325217648839 38.01937735804839 A 20 20 0 0 1 19.999999999999996 0 L 19.999999999999996 6 A 14 14 0 0 0 13.925627652354187 32.61356415063387" data-value="3" fill="#77778e33"></path>
                                    </svg>
                                 </div>
                                 <p class="mb-1 tx-inverse">Marketing</p>
                                 <h4 class="mb-1"><span>$</span>67,927</h4>
                                 <span class="text-muted fs-12"><i class="fas fa-caret-up mr-1 text-success"></i>54% last month</span> 
                              </div>
                              <div class="col-6 col-md-6 text-center">
                                 <div class="mb-2">
                                    <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#01b8ff&quot;, &quot;#77778e33&quot;], &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }" style="display: none;">2/7</span>
                                    <svg class="peity" height="40" width="40">
                                       <path d="M 20 0 A 20 20 0 0 1 39.498558243636474 24.450418679126287 L 33.64899077054553 23.1152930753884 A 14 14 0 0 0 20 6" data-value="2" fill="#01b8ff"></path>
                                       <path d="M 39.498558243636474 24.450418679126287 A 20 20 0 1 1 19.999999999999996 0 L 19.999999999999996 6 A 14 14 0 1 0 33.64899077054553 23.1152930753884" data-value="5" fill="#77778e33"></path>
                                    </svg>
                                 </div>
                                 <p class="mb-1 tx-inverse">Sales</p>
                                 <h4 class="mb-1"><span>$</span>24,789</h4>
                                 <span class="text-muted fs-12"><i class="fas fa-caret-down mr-1 text-danger"></i>33% last month</span> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card custom-card">
                        <div class="card-body">
                           <div>
                              <h6 class="card-title mb-1">Monthly Profits</h6>
                              <p class="text-muted card-sub-title">Excepteur sint occaecat cupidatat non proident.</p>
                           </div>
                           <h3><span>$</span>22,534</h3>
                           <div class="clearfix mb-3">
                              <div class="clearfix"> <span class="float-left text-muted">This Month</span> <span class="float-right">75%</span> </div>
                              <div class="progress mt-1">
                                 <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-70p bg-primary" role="progressbar"></div>
                              </div>
                           </div>
                           <div class="clearfix">
                              <div class="clearfix"> <span class="float-left text-muted">Last Month</span> <span class="float-right">50%</span> </div>
                              <div class="progress mt-1">
                                 <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-xs wd-50p bg-success" role="progressbar"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Row --> <!-- Row --> 
               <div class="row row-sm">
                  <div class="col-sm-12 col-xl-4 col-lg-4">
                     <div class="card custom-card">
                        <div class="card-body">
                           <div>
                              <h6 class="card-title mb-1">Activity</h6>
                              <p class="text-muted mb-0 card-sub-title">Nemo enim ipsam voluptatem fugit sequi nesciunt.</p>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="activity-block">
                              <ul class="task-list">
                                 <li>
                                    <i class="task-icon bg-success"></i> 
                                    <h6>Successful Purchase<small class="float-right text-muted tx-11">29 Oct 2019</small></h6>
                                    <span class="text-muted tx-12">Order ID: #4567</span> 
                                 </li>
                                 <li>
                                    <i class="task-icon bg-secondary"></i> 
                                    <h6>New Registered Seller<small class="float-right text-muted tx-11">25 Oct 2019</small></h6>
                                    <span class="text-muted tx-12">User ID: #8976</span> 
                                 </li>
                                 <li>
                                    <i class="task-icon bg-primary"></i> 
                                    <h6>Order Verification<small class="float-right text-muted tx-11">14 Oct 2019</small></h6>
                                    <span class="text-muted tx-12">Order ID: #6290</span> 
                                 </li>
                                 <li>
                                    <i class="task-icon bg-info"></i> 
                                    <h6>New Item Added<small class="float-right text-muted tx-11">02 Oct 2019</small></h6>
                                    <span class="text-muted tx-12">Item ID: #0235</span> 
                                 </li>
                                 <li>
                                    <i class="task-icon bg-danger"></i> 
                                    <h6>Purchase Cancellation<small class="float-right text-muted tx-11">28 Sep 2019</small></h6>
                                    <span class="text-muted tx-12">Order ID: #1905</span> 
                                 </li>
                                 <li class="mb-0">
                                    <i class="task-icon bg-warning"></i> 
                                    <h6>Overdue Shipments<small class="float-right text-muted tx-11">25 Sep 2019</small></h6>
                                    <span class="text-muted tx-12">Order ID: #8902</span> 
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-xl-4 col-lg-4">
                     <div class="card custom-card">
                        <div class="card-body">
                           <div>
                              <h6 class="card-title mb-1">Top Users Conversion Rate</h6>
                              <p class="text-muted mb-0 card-sub-title">Nemo enim ipsam voluptatem fugit sequi nesciunt.</p>
                           </div>
                        </div>
                        <div class="user-manager scroll-widget border-top mCustomScrollbar _mCS_1 mCS-autoHide" style="position: relative; overflow: visible;">
                           <div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0">
                              <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                 <div class="table-responsive">
                                    <table class="table mg-b-0">
                                       <tbody>
                                          <tr>
                                             <td class="bd-t-0">
                                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/2.jpg" class="mCS_img_loaded"></div>
                                             </td>
                                             <td class="bd-t-0">
                                                <h6 class="mg-b-0">Socrates Itumay</h6>
                                                <small class="tx-11 tx-gray-500">Sales Manager1</small> 
                                             </td>
                                             <td class="bd-t-0">
                                                <h6 class="mg-b-0 font-weight-bold">34%</h6>
                                                <small class="tx-11 tx-gray-500">Conversion Rate</small> 
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/3.jpg" class="mCS_img_loaded"></div>
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0">Reynante Labares</h6>
                                                <small class="tx-11 tx-gray-500">Sales Manager2</small> 
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0 font-weight-bold">22%</h6>
                                                <small class="tx-11 tx-gray-500">Conversion Rate</small> 
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/4.jpg" class="mCS_img_loaded"></div>
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0">Owen Bongcaras</h6>
                                                <small class="tx-11 tx-gray-500">Sales Manager3</small> 
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0 font-weight-bold">18%</h6>
                                                <small class="tx-11 tx-gray-500">Conversion Rate</small> 
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/5.jpg" class="mCS_img_loaded"></div>
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0">Mariane Galeon</h6>
                                                <small class="tx-11 tx-gray-500">Sales Manager4</small> 
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0 font-weight-bold">15%</h6>
                                                <small class="tx-11 tx-gray-500">Conversion Rate</small> 
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/6.jpg" class="mCS_img_loaded"></div>
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0">Joyce Chua</h6>
                                                <small class="tx-11 tx-gray-500">Sales Manager5</small> 
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0 font-weight-bold">12%</h6>
                                                <small class="tx-11 tx-gray-500">Conversion Rate</small> 
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/7.jpg" class="mCS_img_loaded"></div>
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0">Sonia Fraser</h6>
                                                <small class="tx-11 tx-gray-500">Sales Manager5</small> 
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0 font-weight-bold">11%</h6>
                                                <small class="tx-11 tx-gray-500">Conversion Rate</small> 
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/4.jpg" class="mCS_img_loaded"></div>
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0">Owen Bongcaras</h6>
                                                <small class="tx-11 tx-gray-500">Sales Manager3</small> 
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0 font-weight-bold">18%</h6>
                                                <small class="tx-11 tx-gray-500">Conversion Rate</small> 
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/5.jpg" class="mCS_img_loaded"></div>
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0">Mariane Galeon</h6>
                                                <small class="tx-11 tx-gray-500">Sales Manager4</small> 
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0 font-weight-bold">15%</h6>
                                                <small class="tx-11 tx-gray-500">Conversion Rate</small> 
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/4.jpg" class="mCS_img_loaded"></div>
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0">Owen Bongcaras</h6>
                                                <small class="tx-11 tx-gray-500">Sales Manager3</small> 
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0 font-weight-bold">18%</h6>
                                                <small class="tx-11 tx-gray-500">Conversion Rate</small> 
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/5.jpg" class="mCS_img_loaded"></div>
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0">Mariane Galeon</h6>
                                                <small class="tx-11 tx-gray-500">Sales Manager4</small> 
                                             </td>
                                             <td>
                                                <h6 class="mg-b-0 font-weight-bold">15%</h6>
                                                <small class="tx-11 tx-gray-500">Conversion Rate</small> 
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: block;">
                              <div class="mCSB_draggerContainer">
                                 <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 252px; max-height: 350px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                                 </div>
                                 <div class="mCSB_draggerRail"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-xl-4 col-lg-4">
                     <div class="card custom-card">
                        <div class="card-body">
                           <div>
                              <h6 class="card-title mb-1">Countrywise Sales</h6>
                              <p class="text-muted mb-0 card-sub-title">Nemo enim ipsam voluptatem fugit sequi nesciunt.</p>
                           </div>
                        </div>
                        <div class="country-sales scroll-widget bd-t mCustomScrollbar _mCS_2 mCS-autoHide" style="position: relative; overflow: visible;">
                           <div id="mCSB_2" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" tabindex="0" style="max-height: none;">
                              <div id="mCSB_2_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                 <div class="list-group">
                                    <div class="list-group-item  d-flex border-right-0 border-left-0 border-top-0">
                                       <i class="flag-icon flag-icon-us flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">United States</p>
                                       <span class="ml-auto font-weight-bold">$12,897</span> 
                                    </div>
                                    <div class="list-group-item d-flex border-right-0 border-left-0">
                                       <i class="flag-icon flag-icon-nl flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">Netherlands</p>
                                       <span class="ml-auto font-weight-bold">$11,789</span> 
                                    </div>
                                    <div class="list-group-item d-flex border-right-0 border-left-0">
                                       <i class="flag-icon flag-icon-gb flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">United Kingdom</p>
                                       <span class="ml-auto font-weight-bold">$10,234</span> 
                                    </div>
                                    <div class="list-group-item d-flex border-right-0 border-left-0">
                                       <i class="flag-icon flag-icon-ca flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">Canada</p>
                                       <span class="ml-auto font-weight-bold">$9,104</span> 
                                    </div>
                                    <div class="list-group-item d-flex border-right-0 border-left-0">
                                       <i class="flag-icon flag-icon-au flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">Australia</p>
                                       <span class="ml-auto font-weight-bold">$16,205</span> 
                                    </div>
                                    <div class="list-group-item d-flex border-right-0 border-left-0">
                                       <i class="flag-icon flag-icon-si flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">Slovenia</p>
                                       <span class="ml-auto font-weight-bold">$18,165</span> 
                                    </div>
                                    <div class="list-group-item d-flex border-right-0 border-left-0 rounded-0">
                                       <i class="flag-icon flag-icon-de flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">Denmark</p>
                                       <span class="ml-auto font-weight-bold">$19,765</span> 
                                    </div>
                                    <div class="list-group-item d-flex border-right-0 border-left-0">
                                       <i class="flag-icon flag-icon-si flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">Slovenia</p>
                                       <span class="ml-auto font-weight-bold">$18,165</span> 
                                    </div>
                                    <div class="list-group-item d-flex border-right-0 border-left-0 rounded-0">
                                       <i class="flag-icon flag-icon-de flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">Denmark</p>
                                       <span class="ml-auto font-weight-bold">$19,765</span> 
                                    </div>
                                    <div class="list-group-item d-flex border-right-0 border-left-0">
                                       <i class="flag-icon flag-icon-si flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">Slovenia</p>
                                       <span class="ml-auto font-weight-bold">$18,165</span> 
                                    </div>
                                    <div class="list-group-item d-flex border-right-0 border-left-0 rounded-0">
                                       <i class="flag-icon flag-icon-de flag-icon-squared"></i> 
                                       <p class="ml-3 mb-0">Denmark</p>
                                       <span class="ml-auto font-weight-bold">$19,765</span> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: block;">
                              <div class="mCSB_draggerContainer">
                                 <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 257px; max-height: 350px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                                 </div>
                                 <div class="mCSB_draggerRail"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Row --> <!-- Row--> 
               <div class="row">
                  <div class="col-sm-12 col-xl-12 col-lg-12">
                     <div class="card custom-card">
                        <div class="card-body">
                           <div>
                              <h6 class="card-title mb-1">Product Summary</h6>
                              <p class="text-muted card-sub-title">Nemo enim ipsam voluptatem fugit sequi nesciunt.</p>
                           </div>
                           <div class="table-responsive">
                              <table class="table table-bordered text-nowrap mb-0">
                                 <thead>
                                    <tr>
                                       <th>#No</th>
                                       <th>Client Name</th>
                                       <th>Product ID</th>
                                       <th>Product</th>
                                       <th>Product Cost</th>
                                       <th>Payment Mode</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>#01</td>
                                       <td>Sean Black</td>
                                       <td>PRO12345</td>
                                       <td>Mi LED Smart TV 4A 80</td>
                                       <td>$14,500</td>
                                       <td>Online Payment</td>
                                       <td><span class="badge badge-success">Delivered</span></td>
                                    </tr>
                                    <tr>
                                       <td>#02</td>
                                       <td>Evan Rees</td>
                                       <td>PRO8765</td>
                                       <td>Thomson R9 122cm (48 inch) Full HD LED TV </td>
                                       <td>$30,000</td>
                                       <td>Cash on delivered</td>
                                       <td><span class="badge badge-primary">Add Cart</span></td>
                                    </tr>
                                    <tr>
                                       <td>#03</td>
                                       <td>David Wallace</td>
                                       <td>PRO54321</td>
                                       <td>Vu 80cm (32 inch) HD Ready LED TV</td>
                                       <td>$13,200</td>
                                       <td>Online Payment</td>
                                       <td><span class="badge badge-secondary">Pending</span></td>
                                    </tr>
                                    <tr>
                                       <td>#04</td>
                                       <td>Julia Bower</td>
                                       <td>PRO97654</td>
                                       <td>Micromax 81cm (32 inch) HD Ready LED TV</td>
                                       <td>$15,100</td>
                                       <td>Cash on delivered</td>
                                       <td><span class="badge badge-info">Delivering</span></td>
                                    </tr>
                                    <tr>
                                       <td>#05</td>
                                       <td>Kevin James</td>
                                       <td>PRO4532</td>
                                       <td>HP 200 Mouse &amp; Wireless Laptop Keyboard </td>
                                       <td>$5,987</td>
                                       <td>Online Payment</td>
                                       <td><span class="badge badge-danger">Shipped</span></td>
                                    </tr>
                                    <tr>
                                       <td>#06</td>
                                       <td>Theresa Wright</td>
                                       <td>PRO6789</td>
                                       <td>Digisol DG-HR3400 Router </td>
                                       <td>$11,987</td>
                                       <td>Cash on delivered</td>
                                       <td><span class="badge badge-secondary">Delivering</span></td>
                                    </tr>
                                    <tr>
                                       <td>#07</td>
                                       <td>Sebastian Black</td>
                                       <td>PRO4567</td>
                                       <td>Dell WM118 Wireless Optical Mouse</td>
                                       <td>$4,700</td>
                                       <td>Online Payment</td>
                                       <td><span class="badge badge-info">Add to Cart</span></td>
                                    </tr>
                                    <tr>
                                       <td>#08</td>
                                       <td>Kevin Glover</td>
                                       <td>PRO32156</td>
                                       <td>Dell 16 inch Laptop Backpack </td>
                                       <td>$678</td>
                                       <td>Cash On delivered</td>
                                       <td><span class="badge badge-success">Delivered</span></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Row --> 
            </div>
         </div>
         <!-- End Main Content--> <!-- Sidebar --> 
         <div class="sidebar sidebar-right sidebar-animate">
            <div class="sidebar-icon"> <a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a> </div>
            <div class="sidebar-body">
               <h5>Todo</h5>
               <div class="d-flex p-2"> <label class="ckbox"><input checked="" type="checkbox"><span>Hangout With friends</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
               <div class="d-flex p-2 border-top"> <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
               <div class="d-flex p-2 border-top"> <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
               <div class="d-flex p-2 border-top"> <label class="ckbox"><input checked="" type="checkbox"><span>System Updated</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
               <div class="d-flex p-2 border-top"> <label class="ckbox"><input type="checkbox"><span>Do something more</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
               <div class="d-flex p-2 border-top"> <label class="ckbox"><input type="checkbox"><span>System Updated</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
               <div class="d-flex p-2 border-top"> <label class="ckbox"><input type="checkbox"><span>Find an Idea</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
               <div class="d-flex p-2 border-top mb-4 border-bottom"> <label class="ckbox"><input type="checkbox"><span>Project review</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
               <h5>Overview</h5>
               <div class="p-2">
                  <div class="main-traffic-detail-item">
                     <div> <span>Founder &amp; CEO</span> <span>24</span> </div>
                     <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
                     </div>
                     <!-- progress --> 
                  </div>
                  <div class="main-traffic-detail-item">
                     <div> <span>UX Designer</span> <span>1</span> </div>
                     <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
                     </div>
                     <!-- progress --> 
                  </div>
                  <div class="main-traffic-detail-item">
                     <div> <span>Recruitment</span> <span>87</span> </div>
                     <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
                     </div>
                     <!-- progress --> 
                  </div>
                  <div class="main-traffic-detail-item">
                     <div> <span>Software Engineer</span> <span>32</span> </div>
                     <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
                     </div>
                     <!-- progress --> 
                  </div>
                  <div class="main-traffic-detail-item">
                     <div> <span>Project Manager</span> <span>32</span> </div>
                     <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
                     </div>
                     <!-- progress --> 
                  </div>
               </div>
            </div>
         </div>
         <!-- End Sidebar --> <!-- Main Footer--> 
         <div class="main-footer text-center">
            <div class="container">
               <div class="row">
                  <div class="col-md-12"> <span>Copyright © 2019 <a href="#">Dashlead</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span> </div>
               </div>
            </div>
         </div>
         <!--End Footer--> 
      </div>
      <!-- End Page --> <!-- Back-to-top --> <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a> <!-- Jquery js--> 
      
      <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
      <div class="main-navbar-backdrop"></div>
   </body>
</html>