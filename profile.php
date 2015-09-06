<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Admin Template</title>
    <link href="css/application.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="background-dark">
<div class="logo">
    <h4><a href="index.html">Light <strong>Blue</strong></a></h4>
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li>
            <a href="index.html"><i class="icon-desktop"></i> <span class="name">Dashboard</span></a>
        </li>
        <li class="active accordion-group">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#side-nav" href="#forms-collapse"><i class="icon-edit"></i> <span class="name">Forms</span></a>
            <ul id="forms-collapse" class="accordion-body collapse in">
                <li class="active"><a href="form_account.html">Account</a></li>
                <li><a href="form_article.html">Article</a></li>
                <li><a href="form_elements.html">Elements</a></li>
                <li><a href="form_validation.html">Validation</a></li>
                <li><a href="form_wizard.html">Wizard</a></li>
            </ul>
        </li>
        <li class="accordion-group">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#stats-collapse"><i class="icon-bar-chart"></i> <span class="name">Statistics</span></a>
            <ul id="stats-collapse" class="accordion-body collapse">
                <li><a href="stat_statistics.html">Stats</a></li>
                <li><a href="stat_charts.html">Charts</a></li>
                <li><a href="stat_realtime.html">Realtime</a></li>
            </ul>
        </li>
        <li class="accordion-group">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#ui-collapse"><i class="icon-magic"></i> <span class="name">User Interface</span></a>
            <ul id="ui-collapse" class="accordion-body collapse">
                <li><a href="ui_buttons.html">Buttons</a></li>
                <li><a href="ui_dialogs.html">Dialogs</a></li>
                <li><a href="ui_icons.html">Icons</a></li>
                <li><a href="ui_tabs.html">Tabs</a></li>
                <li><a href="ui_accordion.html">Accordion</a></li>
            </ul>
        </li>
        <li class="accordion-group">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#components-collapse"><i class="icon-bookmark-empty"></i> <span class="name">Components</span></a>
            <ul id="components-collapse" class="accordion-body collapse">
                <li><a href="component_calendar.html">Calendar</a></li>
                <li><a href="component_maps.html">Maps</a></li>
                <li><a href="component_gallery.html">Gallery</a></li>
                <li><a href="component_fileupload.html">Fileupload</a></li>
            </ul>
        </li>
        <li class="accordion-group">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#tables-collapse"><i class="icon-table"></i> <span class="name">Tables</span></a>
            <ul id="tables-collapse" class="accordion-body collapse">
                <li><a href="tables_static.html">Static</a></li>
                <li><a href="tables_dynamic.html">Dynamic</a></li>
            </ul>
        </li>
        <li>
            <a href="grid.html"><i class="icon-reorder"></i> <span class="name">Grid</span></a>
        </li>
        <li class="accordion-group">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#special-collapse"><i class="icon-asterisk"></i> <span class="name">Special</span></a>
            <ul id="special-collapse" class="accordion-body collapse">
                <li><a href="special_search.html">Search</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="special_404.html">404</a></li>
            </ul>
        </li>
        <li class="visible-phone">
            <a href="login.html"><i class="icon-signout"></i> <span class="name">Sign Out</span></a>
        </li>
    </ul>
    <div id="sidebar-settings" class="settings">
        <button type="button" data-value="icons" class="btn-icons btn btn-transparent btn-small">Icons</button>
        <button type="button" data-value="auto" class="btn-auto btn btn-transparent btn-small">Auto</button>
    </div>
</nav>
<div class="wrap">
<header class="page-header">
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav pull-right">
                <li class="dropdown">
                        <a href="#" title="Messages" id="messages" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-comments"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/1.jpg" alt="" />
                                    <div class="details">
                                        <div class="sender">Jane Hew</div>
                                        <div class="text">
                                            Hey, John! How is it going? ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/2.jpg" alt="" />
                                    <div class="details">
                                        <div class="sender">Alies Rumiancaŭ</div>
                                        <div class="text">
                                            I'll definitely buy this template
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/3.jpg" alt="" />
                                    <div class="details">
                                        <div class="sender">Michał Rumiancaŭ</div>
                                        <div class="text">
                                            Is it really Lore ipsum? Lore ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all messages <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="dropdown">
                        <a href="#" title="8 support tickets" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-group"></i>
                            <span class="count">8</span>
                        </a>
                        <ul id="support-menu" class="dropdown-menu support" role="menu">
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="icon-bell-alt"></i></span>
                                    </div>
                                    <div class="details">
                                        Check out this awesome ticket
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-warning"><i class="icon-question-sign"></i></span>
                                    </div>
                                    <div class="details">
                                        "What is the best way to get ...
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-success"><i class="icon-tag"></i></span>
                                    </div>
                                    <div class="details">
                                        This is just a simple notification
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-info"><i class="icon-info-sign"></i></span>
                                    </div>
                                    <div class="details">
                                        12 new orders has arrived today
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="icon-plus"></i></span>
                                    </div>
                                    <div class="details">
                                        One more thing that just happened
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all tickets <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="divider"></li>
                <li class="hidden-phone">
                    <a href="#" id="settings" data-toggle="popover" data-placement="bottom" title="">
                        <i class="icon-cog"></i>
                    </a>
                </li>
                <li class="hidden-phone dropdown">
                        <a href="#" title="Account" id="account" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.jpg" alt="" />
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="icon-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="icon-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="icon-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="visible-phone">
                    <a href="#" class="btn-navbar" data-toggle="collapse" data-target=".sidebar" title="">
                        <i class="icon-reorder"></i>
                    </a>
                </li>
                <li class="hidden-phone"><a href="login.html"><i class="icon-signout"></i></a></li>
            </ul>
            <form class="navbar-search pull-right" />
                <input type="search" class="search-query" placeholder="Search..." />
            </form>
        </div>
    </div>
</header>
<div class="content container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h2 class="page-title">Account Demo <small>Out of the box form</small></h2>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span7">
            <section class="widget">
                <header>
                    <h4><i class="icon-user"></i> Account Profile <small>Create new or edit existing user</small></h4>
                </header>
                <div class="body">
                    <form id="user-form" class="form-horizontal label-left" novalidate="novalidate" method="post" data-validate="parsley" />
                        <div class="row-fluid">
                            <div class="span4">
                                <div class="text-align-center">
                                    <img class="img-circle" src="img/15.jpg" alt="64x64" style="height: 112px;" />
                                </div>
                            </div>
                            <div class="span8">
                                <h3 class="no-margin">Maryna Dorash</h3>
                                <address>
                                    <strong>Development manager</strong> at <strong><a href="#">Allspana Inc.</a></strong><br />
                                    <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">maryna.dorash@allspana.by</a><br />
                                    <abbr title="Work Phone">phone:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <fieldset>
                            <legend>Account Edit Form <small>Some explanation text</small></legend>
                        </fieldset>
                        <fieldset>
                            <legend class="section">Personal Info</legend>
                            <div class="control-group">
                                <label class="control-label" for="prefix">Prefix</label>
                                <div class="controls controls-row">
                                    <input type="text" id="prefix" name="prefix" class="span6" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="first-name">First Name <span class="required">*</span></label>
                                <div class="controls controls-row">
                                    <input type="text" id="first-name" name="first-name" required="required" class="span11" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="last-name">Last Name <span class="required">*</span></label>
                                <div class="controls controls-row">
                                    <input type="text" id="last-name" name="last-name" required="required" class="span11" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="middle-name" class="control-label">Middle Name / Initial</label>
                                <div class="controls controls-row">
                                    <input id="middle-name" class="span11" type="text" name="middle-name" value="" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Gender</label>
                                <div class="controls controls-row">
                                    <input id="gender-input" type="hidden" name="gender" value="female" />
                                    <div id="gender" class="btn-group" data-toggle="buttons-radio" data-target="gender-input">
                                        <button type="button" class="btn" data-toggle-class="btn-primary" name="gender" value="male">&nbsp; Male &nbsp;</button>
                                        <button type="button" class="btn btn-primary active" data-toggle-class="btn-primary" name="gender" value="female">Female</button>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="date-of-birth" class="control-label">Date Of Birth <span class="required">*</span></label>
                                <div class="controls controls-row">
                                    <input id="date-of-birth" class="span6 date-picker" required="required" type="text" name="date-of-birth" value="" />
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="section">Contact Info</legend>
                            <div class="control-group">
                                <label id="email-label" for="email" class="control-label">Email <span class="required">*</span></label>
                                <div class="controls controls-row">
                                    <div class="input-append span9">
                                        <input id="email" type="email" data-trigger="change" required="required" class="span8" name="email" />
                                        <button class="btn btn-success" type="button">Write an email</button> </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="phone" class="control-label">Phone <span class="required">*</span></label>
                                <div class="controls controls-row">
                                    <div class="input-append span12">
                                        <input id="phone" class="span6 mask" required="required" type="text" name="phone" maxlength="28" />

                                        <select id="phone-type" class="selectpicker">
                                            <option />Mobile
                                            <option />Home
                                            <option />Work
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="fax" class="control-label">Fax</label>
                                <div class="controls controls-row">
                                    <div class="input-append span12">
                                        <input id="fax" class="span6" type="text" name="phone" maxlength="28" />
                                        <select id="fax-type" class="selectpicker">
                                            <option />Mobile
                                            <option />Home
                                            <option />Work
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="section">
                                Address
                                <button type="button" class="btn btn-primary btn-mini pull-right">
                                    <i class="icon-plus"></i>
                                    Add Address
                                </button>
                            </legend>
                            <div class="control-group">
                                <label for="address" class="control-label">Address <span class="required">*</span></label>
                                <div class="controls controls-row">
                                    <div class="input-append span12">
                                        <input id="address" class="span6" required="required" type="text" value="" name="address" />
                                        <select id="address-type" class="selectpicker" name="address-type">
                                            <option value="1" />Work
                                            <option value="2" />Home
                                            <option value="3" />Next
                                        </select>
                                    </div>
                                </div>
                                <div class="controls controls-row">
                                    <input id="address-2" class="span6" type="text" value="" name="address-2" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="city" class="control-label">City <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="city" class="span6" required="required" type="text" value="" name="city" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="state" class="control-label">State <span class="required">*</span></label>
                                <div class="controls">
                                    <select id="state" data-placeholder="Select state" required="required" class="span7 chzn-select" name="state">
                                        <option value="" />
                                        <option value="AL" />Alabama
                                        <option value="AK" />Alaska
                                        <option value="AZ" />Arizona
                                        <option value="AR" />Arkansas
                                        <option value="CA" />California
                                        <option value="CO" />Colorado
                                        <option value="CT" />Connecticut
                                        <option value="DE" />Delaware
                                        <option value="DC" />District Of Columbia
                                        <option value="FL" />Florida
                                        <option value="GA" />Georgia
                                        <option value="HI" />Hawaii
                                        <option value="ID" />Idaho
                                        <option value="IL" />Illinois
                                        <option value="IN" />Indiana
                                        <option value="IA" />Iowa
                                        <option value="KS" />Kansas
                                        <option value="KY" />Kentucky
                                        <option value="LA" />Louisiana
                                        <option value="ME" />Maine
                                        <option value="MD" />Maryland
                                        <option value="MA" />Massachusetts
                                        <option value="MI" />Michigan
                                        <option value="MN" />Minnesota
                                        <option value="MS" />Mississippi
                                        <option value="MO" />Missouri
                                        <option value="MT" />Montana
                                        <option value="NE" />Nebraska
                                        <option value="NV" />Nevada
                                        <option value="NH" />New Hampshire
                                        <option value="NJ" />New Jersey
                                        <option value="NM" />New Mexico
                                        <option value="NY" />New York
                                        <option value="NC" />North Carolina
                                        <option value="ND" />North Dakota
                                        <option value="OH" />Ohio
                                        <option value="OK" />Oklahoma
                                        <option value="OR" />Oregon
                                        <option value="PA" />Pennsylvania
                                        <option value="RI" />Rhode Island
                                        <option value="SC" />South Carolina
                                        <option value="SD" />South Dakota
                                        <option value="TN" />Tennessee
                                        <option value="TX" />Texas
                                        <option value="UT" />Utah
                                        <option value="VT" />Vermont
                                        <option value="VA" />Virginia
                                        <option value="WA" />Washington
                                        <option value="WV" />West Virginia
                                        <option value="WI" />Wisconsin
                                        <option value="WY" />Wyoming
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="country" class="control-label">Country <span class="required">*</span></label>
                                <div class="controls">
                                    <select id="country" required="required" data-placeholder="Select country" class="span7 chzn-select" name="country">
                                        <option value="" />
                                        <option value="United States" />United States
                                        <option value="United Kingdom" />United Kingdom
                                        <option value="Afghanistan" />Afghanistan
                                        <option value="Albania" />Albania
                                        <option value="Algeria" />Algeria
                                        <option value="American Samoa" />American Samoa
                                        <option value="Andorra" />Andorra
                                        <option value="Angola" />Angola
                                        <option value="Anguilla" />Anguilla
                                        <option value="Antarctica" />Antarctica
                                        <option value="Antigua and Barbuda" />Antigua and Barbuda
                                        <option value="Argentina" />Argentina
                                        <option value="Armenia" />Armenia
                                        <option value="Aruba" />Aruba
                                        <option value="Australia" />Australia
                                        <option value="Austria" />Austria
                                        <option value="Azerbaijan" />Azerbaijan
                                        <option value="Bahamas" />Bahamas
                                        <option value="Bahrain" />Bahrain
                                        <option value="Bangladesh" />Bangladesh
                                        <option value="Barbados" />Barbados
                                        <option value="Belarus" />Belarus
                                        <option value="Belgium" />Belgium
                                        <option value="Belize" />Belize
                                        <option value="Benin" />Benin
                                        <option value="Bermuda" />Bermuda
                                        <option value="Bhutan" />Bhutan
                                        <option value="Bolivia" />Bolivia
                                        <option value="Bosnia and Herzegovina" />Bosnia and Herzegovina
                                        <option value="Botswana" />Botswana
                                        <option value="Bouvet Island" />Bouvet Island
                                        <option value="Brazil" />Brazil
                                        <option value="British Indian Ocean Territory" />British Indian Ocean Territory
                                        <option value="Brunei Darussalam" />Brunei Darussalam
                                        <option value="Bulgaria" />Bulgaria
                                        <option value="Burkina Faso" />Burkina Faso
                                        <option value="Burundi" />Burundi
                                        <option value="Cambodia" />Cambodia
                                        <option value="Cameroon" />Cameroon
                                        <option value="Canada" />Canada
                                        <option value="Cape Verde" />Cape Verde
                                        <option value="Cayman Islands" />Cayman Islands
                                        <option value="Central African Republic" />Central African Republic
                                        <option value="Chad" />Chad
                                        <option value="Chile" />Chile
                                        <option value="China" />China
                                        <option value="Christmas Island" />Christmas Island
                                        <option value="Cocos (Keeling) Islands" />Cocos (Keeling) Islands
                                        <option value="Colombia" />Colombia
                                        <option value="Comoros" />Comoros
                                        <option value="Congo" />Congo
                                        <option value="Congo, The Democratic Republic of The" />Congo, The Democratic Republic of The
                                        <option value="Cook Islands" />Cook Islands
                                        <option value="Costa Rica" />Costa Rica
                                        <option value="Cote D'ivoire" />Cote D'ivoire
                                        <option value="Croatia" />Croatia
                                        <option value="Cuba" />Cuba
                                        <option value="Cyprus" />Cyprus
                                        <option value="Czech Republic" />Czech Republic
                                        <option value="Denmark" />Denmark
                                        <option value="Djibouti" />Djibouti
                                        <option value="Dominica" />Dominica
                                        <option value="Dominican Republic" />Dominican Republic
                                        <option value="Ecuador" />Ecuador
                                        <option value="Egypt" />Egypt
                                        <option value="El Salvador" />El Salvador
                                        <option value="Equatorial Guinea" />Equatorial Guinea
                                        <option value="Eritrea" />Eritrea
                                        <option value="Estonia" />Estonia
                                        <option value="Ethiopia" />Ethiopia
                                        <option value="Falkland Islands (Malvinas)" />Falkland Islands (Malvinas)
                                        <option value="Faroe Islands" />Faroe Islands
                                        <option value="Fiji" />Fiji
                                        <option value="Finland" />Finland
                                        <option value="France" />France
                                        <option value="French Guiana" />French Guiana
                                        <option value="French Polynesia" />French Polynesia
                                        <option value="French Southern Territories" />French Southern Territories
                                        <option value="Gabon" />Gabon
                                        <option value="Gambia" />Gambia
                                        <option value="Georgia" />Georgia
                                        <option value="Germany" />Germany
                                        <option value="Ghana" />Ghana
                                        <option value="Gibraltar" />Gibraltar
                                        <option value="Greece" />Greece
                                        <option value="Greenland" />Greenland
                                        <option value="Grenada" />Grenada
                                        <option value="Guadeloupe" />Guadeloupe
                                        <option value="Guam" />Guam
                                        <option value="Guatemala" />Guatemala
                                        <option value="Guinea" />Guinea
                                        <option value="Guinea-bissau" />Guinea-bissau
                                        <option value="Guyana" />Guyana
                                        <option value="Haiti" />Haiti
                                        <option value="Heard Island and Mcdonald Islands" />Heard Island and Mcdonald Islands
                                        <option value="Holy See (Vatican City State)" />Holy See (Vatican City State)
                                        <option value="Honduras" />Honduras
                                        <option value="Hong Kong" />Hong Kong
                                        <option value="Hungary" />Hungary
                                        <option value="Iceland" />Iceland
                                        <option value="India" />India
                                        <option value="Indonesia" />Indonesia
                                        <option value="Iran, Islamic Republic of" />Iran, Islamic Republic of
                                        <option value="Iraq" />Iraq
                                        <option value="Ireland" />Ireland
                                        <option value="Israel" />Israel
                                        <option value="Italy" />Italy
                                        <option value="Jamaica" />Jamaica
                                        <option value="Japan" />Japan
                                        <option value="Jordan" />Jordan
                                        <option value="Kazakhstan" />Kazakhstan
                                        <option value="Kenya" />Kenya
                                        <option value="Kiribati" />Kiribati
                                        <option value="Korea, Democratic People's Republic of" />Korea, Democratic People's Republic of
                                        <option value="Korea, Republic of" />Korea, Republic of
                                        <option value="Kuwait" />Kuwait
                                        <option value="Kyrgyzstan" />Kyrgyzstan
                                        <option value="Lao People's Democratic Republic" />Lao People's Democratic Republic
                                        <option value="Latvia" />Latvia
                                        <option value="Lebanon" />Lebanon
                                        <option value="Lesotho" />Lesotho
                                        <option value="Liberia" />Liberia
                                        <option value="Libyan Arab Jamahiriya" />Libyan Arab Jamahiriya
                                        <option value="Liechtenstein" />Liechtenstein
                                        <option value="Lithuania" />Lithuania
                                        <option value="Luxembourg" />Luxembourg
                                        <option value="Macao" />Macao
                                        <option value="Macedonia, The Former Yugoslav Republic of" />Macedonia, The Former Yugoslav Republic of
                                        <option value="Madagascar" />Madagascar
                                        <option value="Malawi" />Malawi
                                        <option value="Malaysia" />Malaysia
                                        <option value="Maldives" />Maldives
                                        <option value="Mali" />Mali
                                        <option value="Malta" />Malta
                                        <option value="Marshall Islands" />Marshall Islands
                                        <option value="Martinique" />Martinique
                                        <option value="Mauritania" />Mauritania
                                        <option value="Mauritius" />Mauritius
                                        <option value="Mayotte" />Mayotte
                                        <option value="Mexico" />Mexico
                                        <option value="Micronesia, Federated States of" />Micronesia, Federated States of
                                        <option value="Moldova, Republic of" />Moldova, Republic of
                                        <option value="Monaco" />Monaco
                                        <option value="Mongolia" />Mongolia
                                        <option value="Montserrat" />Montserrat
                                        <option value="Morocco" />Morocco
                                        <option value="Mozambique" />Mozambique
                                        <option value="Myanmar" />Myanmar
                                        <option value="Namibia" />Namibia
                                        <option value="Nauru" />Nauru
                                        <option value="Nepal" />Nepal
                                        <option value="Netherlands" />Netherlands
                                        <option value="Netherlands Antilles" />Netherlands Antilles
                                        <option value="New Caledonia" />New Caledonia
                                        <option value="New Zealand" />New Zealand
                                        <option value="Nicaragua" />Nicaragua
                                        <option value="Niger" />Niger
                                        <option value="Nigeria" />Nigeria
                                        <option value="Niue" />Niue
                                        <option value="Norfolk Island" />Norfolk Island
                                        <option value="Northern Mariana Islands" />Northern Mariana Islands
                                        <option value="Norway" />Norway
                                        <option value="Oman" />Oman
                                        <option value="Pakistan" />Pakistan
                                        <option value="Palau" />Palau
                                        <option value="Palestinian Territory, Occupied" />Palestinian Territory, Occupied
                                        <option value="Panama" />Panama
                                        <option value="Papua New Guinea" />Papua New Guinea
                                        <option value="Paraguay" />Paraguay
                                        <option value="Peru" />Peru
                                        <option value="Philippines" />Philippines
                                        <option value="Pitcairn" />Pitcairn
                                        <option value="Poland" />Poland
                                        <option value="Portugal" />Portugal
                                        <option value="Puerto Rico" />Puerto Rico
                                        <option value="Qatar" />Qatar
                                        <option value="Reunion" />Reunion
                                        <option value="Romania" />Romania
                                        <option value="Russian Federation" />Russian Federation
                                        <option value="Rwanda" />Rwanda
                                        <option value="Saint Helena" />Saint Helena
                                        <option value="Saint Kitts and Nevis" />Saint Kitts and Nevis
                                        <option value="Saint Lucia" />Saint Lucia
                                        <option value="Saint Pierre and Miquelon" />Saint Pierre and Miquelon
                                        <option value="Saint Vincent and The Grenadines" />Saint Vincent and The Grenadines
                                        <option value="Samoa" />Samoa
                                        <option value="San Marino" />San Marino
                                        <option value="Sao Tome and Principe" />Sao Tome and Principe
                                        <option value="Saudi Arabia" />Saudi Arabia
                                        <option value="Senegal" />Senegal
                                        <option value="Serbia and Montenegro" />Serbia and Montenegro
                                        <option value="Seychelles" />Seychelles
                                        <option value="Sierra Leone" />Sierra Leone
                                        <option value="Singapore" />Singapore
                                        <option value="Slovakia" />Slovakia
                                        <option value="Slovenia" />Slovenia
                                        <option value="Solomon Islands" />Solomon Islands
                                        <option value="Somalia" />Somalia
                                        <option value="South Africa" />South Africa
                                        <option value="South Georgia and The South Sandwich Islands" />South Georgia and The South Sandwich Islands
                                        <option value="Spain" />Spain
                                        <option value="Sri Lanka" />Sri Lanka
                                        <option value="Sudan" />Sudan
                                        <option value="Suriname" />Suriname
                                        <option value="Svalbard and Jan Mayen" />Svalbard and Jan Mayen
                                        <option value="Swaziland" />Swaziland
                                        <option value="Sweden" />Sweden
                                        <option value="Switzerland" />Switzerland
                                        <option value="Syrian Arab Republic" />Syrian Arab Republic
                                        <option value="Taiwan, Province of China" />Taiwan, Province of China
                                        <option value="Tajikistan" />Tajikistan
                                        <option value="Tanzania, United Republic of" />Tanzania, United Republic of
                                        <option value="Thailand" />Thailand
                                        <option value="Timor-leste" />Timor-leste
                                        <option value="Togo" />Togo
                                        <option value="Tokelau" />Tokelau
                                        <option value="Tonga" />Tonga
                                        <option value="Trinidad and Tobago" />Trinidad and Tobago
                                        <option value="Tunisia" />Tunisia
                                        <option value="Turkey" />Turkey
                                        <option value="Turkmenistan" />Turkmenistan
                                        <option value="Turks and Caicos Islands" />Turks and Caicos Islands
                                        <option value="Tuvalu" />Tuvalu
                                        <option value="Uganda" />Uganda
                                        <option value="Ukraine" />Ukraine
                                        <option value="United Arab Emirates" />United Arab Emirates
                                        <option value="United Kingdom" />United Kingdom
                                        <option value="United States" />United States
                                        <option value="United States Minor Outlying Islands" />United States Minor Outlying Islands
                                        <option value="Uruguay" />Uruguay
                                        <option value="Uzbekistan" />Uzbekistan
                                        <option value="Vanuatu" />Vanuatu
                                        <option value="Venezuela" />Venezuela
                                        <option value="Viet Nam" />Viet Nam
                                        <option value="Virgin Islands, British" />Virgin Islands, British
                                        <option value="Virgin Islands, U.S." />Virgin Islands, U.S.
                                        <option value="Wallis and Futuna" />Wallis and Futuna
                                        <option value="Western Sahara" />Western Sahara
                                        <option value="Yemen" />Yemen
                                        <option value="Zambia" />Zambia
                                        <option value="Zimbabwe" />Zimbabwe
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Validate &amp; Submit</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="span5">
            <section class="widget">
                <header>
                    <h4><i class="icon-cogs"></i> Account settings</h4>
                    <div class="actions">
                        <button class="btn btn-mini btn-inverse"><i class="icon-arrow-down"></i> View more</button>
                    </div>
                </header>
                <div class="body">
                    <form method="get" action="" />
                        <fieldset>
                                <div class="control-group">
                                    <label for="exp" class="control-label">Account expiration date</label>
                                    <div class="controls">
                                        <input id="exp" class="input-block-level date-picker" type="text" name="exp" value="" />
                                        <span class="help-block">Bootstrap datepicker</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="website" class="control-label">Associate to Website</label>
                                    <div class="controls">
                                        <select id="website" class="chzn-select select-block-level" data-width="off" data-minimum-results-for-search="10" name="website">
                                            <option selected="selected" value="0" />Admin
                                            <option value="1" />Main Website
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="created_by" class="control-label">Created By</label>
                                    <div class="controls">
                                        <input id="created_by" class="input-block-level" type="text" name="created_by" value="Admin" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="groups" class="control-label">Account Group</label>
                                    <div class="controls">
                                        <select id="groups" name="groups" class="chzn-select select-block-level" multiple="" data-placeholder="Choose one or more groups for account" data-width="off">
                                            <option value="0" />Subscriber
                                            <option value="1" />Retailer
                                            <option value="2" />Supplier
                                            <option value="3" />Manager
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                        <input type="checkbox" id="change-password" name="change-password" />
                                            Request password change
                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
</div>

<!-- jquery and friends -->
<script src="lib/jquery/jquery.1.9.0.min.js"> </script>
<script src="lib/jquery/jquery-migrate-1.1.0.min.js"> </script>

<!-- jquery plugins -->
<script src="lib/jquery-maskedinput/jquery.maskedinput.js"></script>
<script src="lib/parsley/parsley.js"> </script>
<script src="lib/uniform/js/jquery.uniform.js"></script>
<script src="lib/select2.js"></script>


<!--backbone and friends -->
<script src="lib/backbone/underscore-min.js"></script>

<!-- bootstrap default plugins -->
<script src="js/bootstrap/bootstrap-transition.js"></script>
<script src="js/bootstrap/bootstrap-collapse.js"></script>
<script src="js/bootstrap/bootstrap-alert.js"></script>
<script src="js/bootstrap/bootstrap-tooltip.js"></script>
<script src="js/bootstrap/bootstrap-popover.js"></script>
<script src="js/bootstrap/bootstrap-button.js"></script>
<script src="js/bootstrap/bootstrap-dropdown.js"></script>
<script src="js/bootstrap/bootstrap-modal.js"></script>

<!-- bootstrap custom plugins -->
<script src="lib/bootstrap-datepicker.js"></script>
<script src="lib/bootstrap-select/bootstrap-select.js"></script>
<script src="lib/wysihtml5/wysihtml5-0.3.0_rc2.js"></script>
<script src="lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<!-- basic application js-->
<script src="js/app.js"></script>
<script src="js/settings.js"></script>

<!-- page specific -->
<script src="js/forms.js"></script>

<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-small btn-transparent <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-small btn-transparent <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-small btn-transparent <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-small btn-transparent <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-small btn-transparent <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-small btn-transparent <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
        <% auto = sidebarState == 'auto'%>
        <% if (auto) {%>
            <button type="button"
                    data-value="icons"
                    class="btn-icons btn btn-transparent btn-small">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-small">Auto</button>
        <%} else {%>
            <button type="button"
                    data-value="auto"
                    class="btn btn-transparent btn-small">Auto</button>
        <% } %>
</script>



</body></html>