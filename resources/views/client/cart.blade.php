@extends('client.layout')

@section('title', 'Cart')

@section('content')

<!-- Banner-about  -->
<div class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-container">
            <h1 class="page-title">Shopping Cart</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('cart') }}">Shopping Cart</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- EndBanner-about  -->

<!-- Main-info  -->
<main>
    <div id="icheckout-cart" class="container">
        <div class="row">
            <div id="content" class="col">
                <div id="shopping-cart">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td class="text-center">Image</td>
                                    <td class="text-start">Product Name</td>
                                    <td class="text-start">Model</td>
                                    <td class="text-start">Quantity</td>
                                    <td class="text-end">Unit Price</td>
                                    <td class="text-end">Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"> <a href="#"><img src="{{ asset('assets/client/images/products/7.jpg') }}" width="90" alt="Backsaw tool" title="Backsaw tool" class="img-thumbnail"></a> </td>
                                    <td class="text-start text-wrap"><a href="#">Screwdriver</a> <span class="text-danger">***</span> </td>
                                    <td class="text-start">Product 9</td>
                                    <td class="text-start">
                                        <form method="post" data-oc-target="#shopping-cart">
                                            <div class="input-group cart_quantity">
                                                <input type="text" name="quantity" value="1" size="1" class="form-control"> <input type="hidden" name="key" value="41">
                                                <button type="submit" data-bs-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa-solid fa-rotate"></i></button>
                                                <button type="submit" data-bs-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="text-end">$122.00</td>
                                    <td class="text-end">$122.00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"> <a href="#"><img src="{{ asset('assets/client/images/products/7.jpg') }}" width="90" alt="Backsaw tool" title="Backsaw tool" class="img-thumbnail"></a> </td>
                                    <td class="text-start text-wrap"><a href="#">	Electric drill</a> <span class="text-danger">***</span> </td>
                                    <td class="text-start">Product 17</td>
                                    <td class="text-start">
                                        <form method="post" data-oc-target="#shopping-cart">
                                            <div class="input-group cart_quantity">
                                                <input type="text" name="quantity" value="1" size="1" class="form-control"> <input type="hidden" name="key" value="41">
                                                <button type="submit" data-bs-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa-solid fa-rotate"></i></button>
                                                <button type="submit" data-bs-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="text-end">$1,202.00</td>
                                    <td class="text-end">$1,202.00</td>
                                </tr>
                            </tbody>
                            <tfoot id="checkout-total">
                                <tr>
                                    <td colspan="5" class="text-end"><strong>Sub-Total</strong></td>
                                    <td class="text-end">$,1100.00</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-end"><strong>Eco Tax (-2.00)</strong></td>
                                    <td class="text-end">$4.00</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-end"><strong>VAT (20%)</strong></td>
                                    <td class="text-end">$220.00</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-end"><strong>Total</strong></td>
                                    <td class="text-end">$1,324.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <h2>What would you like to do next?</h2>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                <div id="accordion" class="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-shipping" aria-expanded="false">Estimate Shipping &amp; Taxes</button></h2>
                        <div id="collapse-shipping" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <form id="form-quote">
                                    <p>Enter your destination to get a shipping estimate.</p>
                                    <div class="row mb-3 required">
                                        <label for="input-country" class="col-md-4 col-form-label">Country</label>
                                        <div class="col-md-8">
                                            <select name="country_id" id="input-country" class="form-select">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="244">Aaland Islands</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                                <option value="7">Anguilla</option>
                                                <option value="8">Antarctica</option>
                                                <option value="9">Antigua and Barbuda</option>
                                                <option value="10">Argentina</option>
                                                <option value="11">Armenia</option>
                                                <option value="12">Aruba</option>
                                                <option value="252">Ascension Island (British)</option>
                                                <option value="13">Australia</option>
                                                <option value="14">Austria</option>
                                                <option value="15">Azerbaijan</option>
                                                <option value="16">Bahamas</option>
                                                <option value="17">Bahrain</option>
                                                <option value="18">Bangladesh</option>
                                                <option value="19">Barbados</option>
                                                <option value="20">Belarus</option>
                                                <option value="21">Belgium</option>
                                                <option value="22">Belize</option>
                                                <option value="23">Benin</option>
                                                <option value="24">Bermuda</option>
                                                <option value="25">Bhutan</option>
                                                <option value="26">Bolivia</option>
                                                <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="27">Bosnia and Herzegovina</option>
                                                <option value="28">Botswana</option>
                                                <option value="29">Bouvet Island</option>
                                                <option value="30">Brazil</option>
                                                <option value="31">British Indian Ocean Territory</option>
                                                <option value="32">Brunei Darussalam</option>
                                                <option value="33">Bulgaria</option>
                                                <option value="34">Burkina Faso</option>
                                                <option value="35">Burundi</option>
                                                <option value="36">Cambodia</option>
                                                <option value="37">Cameroon</option>
                                                <option value="38">Canada</option>
                                                <option value="251">Canary Islands</option>
                                                <option value="39">Cape Verde</option>
                                                <option value="40">Cayman Islands</option>
                                                <option value="41">Central African Republic</option>
                                                <option value="42">Chad</option>
                                                <option value="43">Chile</option>
                                                <option value="44">China</option>
                                                <option value="45">Christmas Island</option>
                                                <option value="46">Cocos (Keeling) Islands</option>
                                                <option value="47">Colombia</option>
                                                <option value="48">Comoros</option>
                                                <option value="49">Congo</option>
                                                <option value="50">Cook Islands</option>
                                                <option value="51">Costa Rica</option>
                                                <option value="52">Cote D'Ivoire</option>
                                                <option value="53">Croatia</option>
                                                <option value="54">Cuba</option>
                                                <option value="246">Curacao</option>
                                                <option value="55">Cyprus</option>
                                                <option value="56">Czech Republic</option>
                                                <option value="237">Democratic Republic of Congo</option>
                                                <option value="57">Denmark</option>
                                                <option value="58">Djibouti</option>
                                                <option value="59">Dominica</option>
                                                <option value="60">Dominican Republic</option>
                                                <option value="61">East Timor</option>
                                                <option value="62">Ecuador</option>
                                                <option value="63">Egypt</option>
                                                <option value="64">El Salvador</option>
                                                <option value="65">Equatorial Guinea</option>
                                                <option value="66">Eritrea</option>
                                                <option value="67">Estonia</option>
                                                <option value="68">Ethiopia</option>
                                                <option value="69">Falkland Islands (Malvinas)</option>
                                                <option value="70">Faroe Islands</option>
                                                <option value="71">Fiji</option>
                                                <option value="72">Finland</option>
                                                <option value="74">France, Metropolitan</option>
                                                <option value="75">French Guiana</option>
                                                <option value="76">French Polynesia</option>
                                                <option value="77">French Southern Territories</option>
                                                <option value="126">FYROM</option>
                                                <option value="78">Gabon</option>
                                                <option value="79">Gambia</option>
                                                <option value="80">Georgia</option>
                                                <option value="81">Germany</option>
                                                <option value="82">Ghana</option>
                                                <option value="83">Gibraltar</option>
                                                <option value="84">Greece</option>
                                                <option value="85">Greenland</option>
                                                <option value="86">Grenada</option>
                                                <option value="87">Guadeloupe</option>
                                                <option value="88">Guam</option>
                                                <option value="89">Guatemala</option>
                                                <option value="256">Guernsey</option>
                                                <option value="90">Guinea</option>
                                                <option value="91">Guinea-Bissau</option>
                                                <option value="92">Guyana</option>
                                                <option value="93">Haiti</option>
                                                <option value="94">Heard and Mc Donald Islands</option>
                                                <option value="95">Honduras</option>
                                                <option value="96">Hong Kong</option>
                                                <option value="97">Hungary</option>
                                                <option value="98">Iceland</option>
                                                <option value="99">India</option>
                                                <option value="100">Indonesia</option>
                                                <option value="101">Iran (Islamic Republic of)</option>
                                                <option value="102">Iraq</option>
                                                <option value="103">Ireland</option>
                                                <option value="254">Isle of Man</option>
                                                <option value="104">Israel</option>
                                                <option value="105">Italy</option>
                                                <option value="106">Jamaica</option>
                                                <option value="107">Japan</option>
                                                <option value="257">Jersey</option>
                                                <option value="108">Jordan</option>
                                                <option value="109">Kazakhstan</option>
                                                <option value="110">Kenya</option>
                                                <option value="111">Kiribati</option>
                                                <option value="253">Kosovo, Republic of</option>
                                                <option value="114">Kuwait</option>
                                                <option value="115">Kyrgyzstan</option>
                                                <option value="116">Lao People's Democratic Republic</option>
                                                <option value="117">Latvia</option>
                                                <option value="118">Lebanon</option>
                                                <option value="119">Lesotho</option>
                                                <option value="120">Liberia</option>
                                                <option value="121">Libyan Arab Jamahiriya</option>
                                                <option value="122">Liechtenstein</option>
                                                <option value="123">Lithuania</option>
                                                <option value="124">Luxembourg</option>
                                                <option value="125">Macau</option>
                                                <option value="127">Madagascar</option>
                                                <option value="128">Malawi</option>
                                                <option value="129">Malaysia</option>
                                                <option value="130">Maldives</option>
                                                <option value="131">Mali</option>
                                                <option value="132">Malta</option>
                                                <option value="133">Marshall Islands</option>
                                                <option value="134">Martinique</option>
                                                <option value="135">Mauritania</option>
                                                <option value="136">Mauritius</option>
                                                <option value="137">Mayotte</option>
                                                <option value="138">Mexico</option>
                                                <option value="139">Micronesia, Federated States of</option>
                                                <option value="140">Moldova, Republic of</option>
                                                <option value="141">Monaco</option>
                                                <option value="142">Mongolia</option>
                                                <option value="242">Montenegro</option>
                                                <option value="143">Montserrat</option>
                                                <option value="144">Morocco</option>
                                                <option value="145">Mozambique</option>
                                                <option value="146">Myanmar</option>
                                                <option value="147">Namibia</option>
                                                <option value="148">Nauru</option>
                                                <option value="149">Nepal</option>
                                                <option value="150">Netherlands</option>
                                                <option value="151">Netherlands Antilles</option>
                                                <option value="152">New Caledonia</option>
                                                <option value="153">New Zealand</option>
                                                <option value="154">Nicaragua</option>
                                                <option value="155">Niger</option>
                                                <option value="156">Nigeria</option>
                                                <option value="157">Niue</option>
                                                <option value="158">Norfolk Island</option>
                                                <option value="112">North Korea</option>
                                                <option value="159">Northern Mariana Islands</option>
                                                <option value="160">Norway</option>
                                                <option value="161">Oman</option>
                                                <option value="162">Pakistan</option>
                                                <option value="163">Palau</option>
                                                <option value="247">Palestinian Territory, Occupied</option>
                                                <option value="164">Panama</option>
                                                <option value="165">Papua New Guinea</option>
                                                <option value="166">Paraguay</option>
                                                <option value="167">Peru</option>
                                                <option value="168">Philippines</option>
                                                <option value="169">Pitcairn</option>
                                                <option value="170">Poland</option>
                                                <option value="171">Portugal</option>
                                                <option value="172">Puerto Rico</option>
                                                <option value="173">Qatar</option>
                                                <option value="174">Reunion</option>
                                                <option value="175">România</option>
                                                <option value="176">Russian Federation</option>
                                                <option value="177">Rwanda</option>
                                                <option value="178">Saint Kitts and Nevis</option>
                                                <option value="179">Saint Lucia</option>
                                                <option value="180">Saint Vincent and the Grenadines</option>
                                                <option value="181">Samoa</option>
                                                <option value="182">San Marino</option>
                                                <option value="183">Sao Tome and Principe</option>
                                                <option value="184">Saudi Arabia</option>
                                                <option value="185">Senegal</option>
                                                <option value="243">Serbia</option>
                                                <option value="186">Seychelles</option>
                                                <option value="187">Sierra Leone</option>
                                                <option value="188">Singapore</option>
                                                <option value="189">Slovak Republic</option>
                                                <option value="190">Slovenia</option>
                                                <option value="191">Solomon Islands</option>
                                                <option value="192">Somalia</option>
                                                <option value="193">South Africa</option>
                                                <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                                <option value="113">South Korea</option>
                                                <option value="248">South Sudan</option>
                                                <option value="195">Spain</option>
                                                <option value="196">Sri Lanka</option>
                                                <option value="249">St. Barthelemy</option>
                                                <option value="197">St. Helena</option>
                                                <option value="250">St. Martin (French part)</option>
                                                <option value="198">St. Pierre and Miquelon</option>
                                                <option value="199">Sudan</option>
                                                <option value="200">Suriname</option>
                                                <option value="201">Svalbard and Jan Mayen Islands</option>
                                                <option value="202">Swaziland</option>
                                                <option value="203">Sweden</option>
                                                <option value="204">Switzerland</option>
                                                <option value="205">Syrian Arab Republic</option>
                                                <option value="206">Taiwan</option>
                                                <option value="207">Tajikistan</option>
                                                <option value="208">Tanzania, United Republic of</option>
                                                <option value="209">Thailand</option>
                                                <option value="210">Togo</option>
                                                <option value="211">Tokelau</option>
                                                <option value="212">Tonga</option>
                                                <option value="213">Trinidad and Tobago</option>
                                                <option value="255">Tristan da Cunha</option>
                                                <option value="214">Tunisia</option>
                                                <option value="215">Turkey</option>
                                                <option value="216">Turkmenistan</option>
                                                <option value="217">Turks and Caicos Islands</option>
                                                <option value="218">Tuvalu</option>
                                                <option value="219">Uganda</option>
                                                <option value="220">Ukraine</option>
                                                <option value="221">United Arab Emirates</option>
                                                <option value="222" selected="selected">United Kingdom</option>
                                                <option value="223">United States</option>
                                                <option value="224">United States Minor Outlying Islands</option>
                                                <option value="225">Uruguay</option>
                                                <option value="226">Uzbekistan</option>
                                                <option value="227">Vanuatu</option>
                                                <option value="228">Vatican City State (Holy See)</option>
                                                <option value="229">Venezuela</option>
                                                <option value="230">Viet Nam</option>
                                                <option value="231">Virgin Islands (British)</option>
                                                <option value="232">Virgin Islands (U.S.)</option>
                                                <option value="233">Wallis and Futuna Islands</option>
                                                <option value="234">Western Sahara</option>
                                                <option value="235">Yemen</option>
                                                <option value="238">Zambia</option>
                                                <option value="239">Zimbabwe</option>
                                            </select>
                                            <div id="error-country" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 required">
                                        <label for="input-zone" class="col-md-4 col-form-label">Region / State</label>
                                        <div class="col-md-8">
                                            <select name="zone_id" id="input-zone" class="form-select">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="3513">Aberdeen</option>
                                                <option value="3514">Aberdeenshire</option>
                                                <option value="3515">Anglesey</option>
                                                <option value="3516">Angus</option>
                                                <option value="3517">Argyll and Bute</option>
                                                <option value="3518">Bedfordshire</option>
                                                <option value="3519">Berkshire</option>
                                                <option value="3520">Blaenau Gwent</option>
                                                <option value="3521">Bridgend</option>
                                                <option value="3522">Bristol</option>
                                                <option value="3523">Buckinghamshire</option>
                                                <option value="3524">Caerphilly</option>
                                                <option value="3525">Cambridgeshire</option>
                                                <option value="3526">Cardiff</option>
                                                <option value="3527">Carmarthenshire</option>
                                                <option value="3528">Ceredigion</option>
                                                <option value="3529">Cheshire</option>
                                                <option value="3530">Clackmannanshire</option>
                                                <option value="3531">Conwy</option>
                                                <option value="3532">Cornwall</option>
                                                <option value="3949">County Antrim</option>
                                                <option value="3950">County Armagh</option>
                                                <option value="3951">County Down</option>
                                                <option value="3952">County Fermanagh</option>
                                                <option value="3953">County Londonderry</option>
                                                <option value="3954">County Tyrone</option>
                                                <option value="3955">Cumbria</option>
                                                <option value="3533">Denbighshire</option>
                                                <option value="3534">Derbyshire</option>
                                                <option value="3535">Devon</option>
                                                <option value="3536">Dorset</option>
                                                <option value="3537">Dumfries and Galloway</option>
                                                <option value="3538">Dundee</option>
                                                <option value="3539">Durham</option>
                                                <option value="3540">East Ayrshire</option>
                                                <option value="3541">East Dunbartonshire</option>
                                                <option value="3542">East Lothian</option>
                                                <option value="3543">East Renfrewshire</option>
                                                <option value="3544">East Riding of Yorkshire</option>
                                                <option value="3545">East Sussex</option>
                                                <option value="3546">Edinburgh</option>
                                                <option value="3547">Essex</option>
                                                <option value="3548">Falkirk</option>
                                                <option value="3549">Fife</option>
                                                <option value="3550">Flintshire</option>
                                                <option value="3551">Glasgow</option>
                                                <option value="3552">Gloucestershire</option>
                                                <option value="3553">Greater London</option>
                                                <option value="3554">Greater Manchester</option>
                                                <option value="3555">Gwynedd</option>
                                                <option value="3556">Hampshire</option>
                                                <option value="3557">Herefordshire</option>
                                                <option value="3558">Hertfordshire</option>
                                                <option value="3559">Highlands</option>
                                                <option value="3560">Inverclyde</option>
                                                <option value="3561">Isle of Wight</option>
                                                <option value="3562">Kent</option>
                                                <option value="3563">Lancashire</option>
                                                <option value="3564">Leicestershire</option>
                                                <option value="3565">Lincolnshire</option>
                                                <option value="3566">Merseyside</option>
                                                <option value="3567">Merthyr Tydfil</option>
                                                <option value="3568">Midlothian</option>
                                                <option value="3569">Monmouthshire</option>
                                                <option value="3570">Moray</option>
                                                <option value="3571">Neath Port Talbot</option>
                                                <option value="3572">Newport</option>
                                                <option value="3573">Norfolk</option>
                                                <option value="3574">North Ayrshire</option>
                                                <option value="3575">North Lanarkshire</option>
                                                <option value="3576">North Yorkshire</option>
                                                <option value="3577">Northamptonshire</option>
                                                <option value="3578">Northumberland</option>
                                                <option value="3579">Nottinghamshire</option>
                                                <option value="3580">Orkney Islands</option>
                                                <option value="3581">Oxfordshire</option>
                                                <option value="3582">Pembrokeshire</option>
                                                <option value="3583">Perth and Kinross</option>
                                                <option value="3584">Powys</option>
                                                <option value="3585">Renfrewshire</option>
                                                <option value="3586">Rhondda Cynon Taff</option>
                                                <option value="3587">Rutland</option>
                                                <option value="3588">Scottish Borders</option>
                                                <option value="3589">Shetland Islands</option>
                                                <option value="3590">Shropshire</option>
                                                <option value="3591">Somerset</option>
                                                <option value="3592">South Ayrshire</option>
                                                <option value="3593">South Lanarkshire</option>
                                                <option value="3594">South Yorkshire</option>
                                                <option value="3595">Staffordshire</option>
                                                <option value="3596">Stirling</option>
                                                <option value="3597">Suffolk</option>
                                                <option value="3598">Surrey</option>
                                                <option value="3599">Swansea</option>
                                                <option value="3600">Torfaen</option>
                                                <option value="3601">Tyne and Wear</option>
                                                <option value="3602">Vale of Glamorgan</option>
                                                <option value="3603">Warwickshire</option>
                                                <option value="3604">West Dunbartonshire</option>
                                                <option value="3605">West Lothian</option>
                                                <option value="3606">West Midlands</option>
                                                <option value="3607">West Sussex</option>
                                                <option value="3608">West Yorkshire</option>
                                                <option value="3609">Western Isles</option>
                                                <option value="3610">Wiltshire</option>
                                                <option value="3611">Worcestershire</option>
                                                <option value="3612">Wrexham</option>
                                            </select>
                                            <div id="error-zone" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 required">
                                        <label for="input-postcode" class="col-md-4 col-form-label">Post Code</label>
                                        <div class="col-md-8">
                                            <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control">
                                            <div id="error-postcode" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" id="button-quote" class="btn btn-primary">Get Quotes</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-coupon" aria-expanded="false">Use Coupon Code</button></h2>
                        <div id="collapse-coupon" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <form id="form-coupon" method="post" data-oc-toggle="ajax" data-oc-load="" data-oc-target="#shopping-cart">
                                    <div class="row mb-3">
                                        <label for="input-coupon" class="col-md-4 col-form-label">Enter your coupon here</label>
                                        <div class="col-md-8">
                                            <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
                                        </div>
                                    </div>
                                    <div class="text-end"><button type="submit" class="btn btn-primary">Apply Coupon</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-voucher" aria-expanded="false">Use Gift Certificate</button></h2>
                        <div id="collapse-voucher" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <form id="form-voucher" method="post" data-oc-toggle="ajax" data-oc-load="" data-oc-target="#shopping-cart">
                                    <div class="row mb-3">
                                        <label for="input-voucher" class="col-md-4 col-form-label">Enter your gift certificate code here</label>
                                        <div class="col-md-8">
                                            <input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
                                        </div>
                                    </div>
                                    <div class="text-end"><button type="submit" class="btn btn-primary">Apply Gift Certificate</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="d-inline-block pt-2 pd-2 w-100">
                    <div class="float-start"><a href="{{ route('home') }}" class="btn btn-primary">Continue Shopping</a></div>
                    <div class="float-end"><a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a></div>
                </div>
            </div>
            <aside id="column-left" class="col-3">
                <div class="account-content list-group">
                    <div class="box-content">
                        <h3 class="toggled relative">Account<span class="toggle-open"><i class="fa fa-chevron-down"></i></span></h3>
                        <ul id="account-info" class="list-unstyled list-group to-show">
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Login</a></li>
                            <li><a href="{{ route('auth.register') }}" class="list-group-item">Register</a></li>
                            <li><a href="{{ route('auth.forgot') }}" class="list-group-item">Forgotten Password</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">My Account</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Address Book</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Wish List</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Order History</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Downloads</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Subscriptions</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Reward Points</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Returns</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Transactions</a></li>
                            <li><a href="{{ route('auth.login') }}" class="list-group-item">Newsletter</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="box-content">
                        <h3 class="toggled relative">Information<span class="toggle-open"><i class="fa fa-chevron-down"></i></span></h3>
                        <ul id="info" class="list-unstyled to-show">
                            <li><a href="{{ route('termsConditions') }}" class="list-group-item">Terms &amp; Conditions</a></li>
                            <li><a href="{{ route('deliveryInformation') }}" class="list-group-item">Delivery Information</a></li>
                            <li><a href="{{ route('about') }}" class="list-group-item">About Us</a></li>
                            <li><a href="{{ route('privacyPolicy') }}" class="list-group-item">Privacy Policy</a></li>
                            <li><a href="{{ route('contact') }}" class="list-group-item">Contact Us</a></li>
                            <li><a href="{{ route('siteMap') }}" class="list-group-item">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>
<!--End Main-info  -->


@endsection
