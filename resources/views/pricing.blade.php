@extends('layouts/header')

@section('title', 'Stellar HTML Demo - Pricing')

<body class="ct4dl cytps cmdk0 c5pf3 cq25l">

    <!-- Page wrapper -->
    <div class="ckejv cfekt c44e7 cor41 c96dl">

        @include('layouts/navbar')

        <!-- Page content -->
        <main class="cksot">

            <!-- Hero -->
            <section class="c95ga">

                <!-- Radial gradient -->
                <div class="clynz c5iei c2xfp clx5f cy21z cqhau c7hjw clrhu cag8s cpvl9 c09ly c96dl" aria-hidden="true">
                    <div class="cabs6 c1018 c5rr4 cvvbi coeb9 cag8s cwkgi"></div>
                    <div class="c1018 cekqd cpn6c cvvbi ctonv cag8s cpgbp c9mu1"></div>
                </div>

                <!-- Particles animation -->
                <div class="cag8s cwkgi c09ly c7yyw" aria-hidden="true">
                    <canvas data-particle-animation="" data-particle-quantity="15"></canvas>
                </div>

                <!-- Illustration -->
                <div class="clynz c5iei chwa6 clrhu c3qvt cag8s c5udx clqtt c09ly" aria-hidden="true">
                    <img src="images/page-illustration.svg" class="cnqh4" width="1440" height="427" alt="Page Illustration">
                </div>

                <div class="cprys cxhtj cecgn c2iur">
                    <div class="c8ozz cxnez cl0z1 cy2wm">

                        <!-- Section header -->
                        <div class="ce08t cyi18 cspj9">
                            <div class="cz1f5 c8yrn c2fyz ce0v4 cmck1 cx8xx cveoa ce9wh">The security first platform</div>
                            <h1 class="cy4g8 cz1f5 cl10g c8yrn c10r8 cmck1 c9mpk cl2cw">Simple plans for everyone</h1>
                            <div class="c3blx cecgn">
                                <p class="c3pte ckr9u">Cut down overhead costs and ditch clunky software. Get a flexible, purpose-built tool to simplify your security with authentication services.</p>
                            </div>
                        </div>

                        <!-- Pricing tabs -->
                        <div class="c95ga">
                            <!-- Blurred shape -->
                            <div class="clynz c5iei ce0ut ctonv cpvz6 cag8s cqewy c5udx chqoc" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                                    <defs>
                                        <linearGradient id="bs5-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                            <stop offset="0%" stop-color="#A855F7"></stop>
                                            <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#bs5-a)" fill-rule="evenodd" d="m661 736 461 369-284 58z" transform="matrix(1 0 0 -1 -661 1163)"></path>
                                </svg>
                            </div>
                            <!-- Content -->
                            <div class="cfnj0 cglgv chavu cm70w cmw6i c1my7 ckuib cnziz c0mxs czf15 c6v89 cxnd7 cj53q czerv cta2b cbevk c4mm5 c2yb3 cstev c5dbx cgzjw cas5u cu5ut c6z6i c63gh c70df c4apc cfzix czlc0 cdaol" x-data="{ annual: true }">
                                <!-- Pricing toggle -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj cr13y cd3hm">
                                        <!-- Toggle switch -->
                                        <div class="cwgnc">
                                            <div class="ccqdh cqhau cx8xx">
                                                <div class="c6sxl c73ss cveoa czlc0 cbw56">Monthly</div>
                                                <div class="c95ga">
                                                    <input type="checkbox" id="toggle" class="c69ch cxdbl" x-model="annual">
                                                    <label for="toggle" class="cjacz cfd1h c69ce cnhwk c7r3a cqeqp c6e59 cai8b cigco cp82t cmnf9 co4fi copqb cojlh cqhau cvvbi cg2gr cnooz c4yyt c95ga crdb5 c96dl cpjpy cf4ea">
                                                        <span class="c69ch">Pay Yearly</span>
                                                    </label>
                                                </div>
                                                <div class="c73ss cveoa czlc0 cn2l5">Yearly <span class="cunb8">(-20%)</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pro price -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj cm5p0 c7nnj cksot c9mpk">
                                        <div class="cz1f5 c8yrn c2fyz ce0v4 cmck1 cveoa cz7oz cpsw7">Pro</div>
                                        <div class="cryyo">
                                            <span class="c73ss cveoa ckr9u">$</span><span class="cm72l cpryy cy7gp" x-text="annual ? '24' : '29'">24</span><span class="csb06 cveoa czlc0">/mo</span>
                                        </div>
                                        <div class="c73ss">Everything at your fingertips.</div>
                                    </div>
                                    <div class="cx2aj cm5p0 c9mpk">
                                        <a class="cz1f5 c9roy c2dob ck2e7 czagy cxkpk cy2w0 c0h1x cesx7 ca0zp c1621 c474f" href="#0">
                                            Get Started <span class="c0lwy c1ogz cg4ou cp8n5 cxkpk cy2w0 caz78">-&gt;</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Team price -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj cm5p0 c7nnj cksot c9mpk">
                                        <div class="cz1f5 c8yrn c2fyz ce0v4 cmck1 cveoa cz7oz cpsw7">Team</div>
                                        <div class="cryyo">
                                            <span class="c73ss cveoa ckr9u">$</span><span class="cm72l cpryy cy7gp" x-text="annual ? '49' : '54'">49</span><span class="csb06 cveoa czlc0">/mo</span>
                                        </div>
                                        <div class="c73ss">Everything at your fingertips.</div>
                                    </div>
                                    <div class="cx2aj cm5p0 c9mpk">
                                        <a class="ckcj1 c5rr4 cxkpk cy2w0 c5zoy c0h1x ca0zp c1621 c474f" href="#0">
                                            Get Started <span class="c0lwy c1ogz cg4ou chkot cxkpk cy2w0 caz78">-&gt;</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Enterprise price -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj cm5p0 c7nnj cksot c9mpk">
                                        <div class="cz1f5 c8yrn c2fyz ce0v4 cmck1 cveoa cz7oz cpsw7">Enterprise</div>
                                        <div class="cryyo">
                                            <span class="c73ss cveoa ckr9u">$</span><span class="cm72l cpryy cy7gp" x-text="annual ? '79' : '85'">79</span><span class="csb06 cveoa czlc0">/mo</span>
                                        </div>
                                        <div class="c73ss">Everything at your fingertips.</div>
                                    </div>
                                    <div class="cx2aj cm5p0 c9mpk">
                                        <a class="cz1f5 c9roy c2dob ck2e7 czagy cxkpk cy2w0 c0h1x cesx7 ca0zp c1621 c474f" href="#0">
                                            Get Started <span class="c0lwy c1ogz cg4ou cp8n5 cxkpk cy2w0 caz78">-&gt;</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- # Usage -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa c83bg cbw2w">Usage</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa cbccu c83bg cbw2w">Usage</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa cbccu c83bg cbw2w">Usage</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa cbccu c83bg cbw2w">Usage</div>
                                </div>
                                <!-- Social Connections -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">Social Connections</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>100 <span class="cbccu">Social Connections</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>250 <span class="cbccu">Social Connections</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>Unlimited <span class="cbccu">Social Connections</span></span>
                                    </div>
                                </div>
                                <!-- Custom Domains -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">Custom Domains</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>4 <span class="cbccu">Custom Domains</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>Unlimited <span class="cbccu">Custom Domains</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>Unlimited <span class="cbccu">Custom Domains</span></span>
                                    </div>
                                </div>
                                <!-- User Role Management -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">User Role Management</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>Unlimited <span class="cbccu">User Role Management</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>Unlimited <span class="cbccu">User Role Management</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>Unlimited <span class="cbccu">User Role Management</span></span>
                                    </div>
                                </div>
                                <!-- External Databases -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">External Databases</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>1 <span class="cbccu">External Databases</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>5 <span class="cbccu">External Databases</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span>Unlimited <span class="cbccu">External Databases</span></span>
                                    </div>
                                </div>
                                <!-- # Features -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa c83bg cbw2w">Features</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa cbccu c83bg cbw2w">Features</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa cbccu c83bg cbw2w">Features</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa cbccu c83bg cbw2w">Features</div>
                                </div>
                                <!-- Custom Connection -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">Custom Connection</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Custom Connection</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Custom Connection</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Custom Connection</span></span>
                                    </div>
                                </div>
                                <!-- Advanced Deployment Options -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">Advanced Deployment Options</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Advanced Deployment Options</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Advanced Deployment Options</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Advanced Deployment Options</span></span>
                                    </div>
                                </div>
                                <!-- Extra Add-ons -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">Extra Add-ons</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Extra Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Extra Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Extra Add-ons</span></span>
                                    </div>
                                </div>
                                <!-- Admin Roles -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">Admin Roles</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte ce0ut cqhau cm5p0 c96dl cbw2w">
                                        <span><span class="cbccu">Admin Roles</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte ce0ut cqhau cm5p0 c96dl cbw2w">
                                        <span><span class="cbccu">Admin Roles</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Admin Roles</span></span>
                                    </div>
                                </div>
                                <!-- Deploy and Monitor -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">Deploy and Monitor</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte ce0ut cqhau cm5p0 c96dl cbw2w">
                                        <span><span class="cbccu">Deploy and Monitor</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte ce0ut cqhau cm5p0 c96dl cbw2w">
                                        <span><span class="cbccu">Deploy and Monitor</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Deploy and Monitor</span></span>
                                    </div>
                                </div>
                                <!-- Enterprise Add-ons -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">Enterprise Add-ons</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte ce0ut cqhau cm5p0 c96dl cbw2w">
                                        <span><span class="cbccu">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte ce0ut cqhau cm5p0 c96dl cbw2w">
                                        <span><span class="cbccu">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Enterprise Add-ons</span></span>
                                    </div>
                                </div>
                                <!-- # Support -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa c83bg cbw2w">Support</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa ckp1z c83bg cbw2w">Support</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa cbccu c83bg cbw2w">Support</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cm72l cveoa cbccu c83bg cbw2w">Support</div>
                                </div>
                                <!-- Premium Support -->
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cm5p0 cbw2w">Premium Support</div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte ce0ut cqhau cm5p0 c96dl cbw2w">
                                        <span><span class="cbccu">Premium Support</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Premium Support</span></span>
                                    </div>
                                </div>
                                <div class="ckntc cor41 c96dl cqfzd">
                                    <div class="cx2aj c3pte cqhau cm5p0 cwvsi c96dl cbw2w">
                                        <svg class="c2wam cl4se ch4e1" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                            <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z"></path>
                                        </svg>
                                        <span><span class="cbccu">Premium Support</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

            <!-- Features -->
            <section class="c95ga">
            
                <!-- Particles animation -->
                <div class="c5iei clrhu cag8s c3jqb cpvl9 c09ly cpgbp c9mu1">
                    <div class="cag8s cwkgi c09ly" aria-hidden="true">
                        <canvas data-particle-animation="" data-particle-quantity="6" data-particle-staticity="30"></canvas>
                    </div>
                </div>
            
                <div class="cprys cxhtj cecgn c2iur">
                    <div class="cyi18 cspj9">
            
                        <!-- Section header -->
                        <div class="ce08t c3blx cecgn cspj9">
                            <h2 class="cy4g8 cz1f5 cl10g c8yrn c10r8 cmck1 c9mpk c2pml">Stop overpaying for software</h2>
                            <p class="c3pte ckr9u">There are many variations available, but the majority have suffered alteration in some form, by injected humour.</p>
                        </div>
            
                        <!-- Rings illustration -->
                        <div class="ce08t c4yyu">
                            <div class="clx5f cqhau cx8xx c95ga">
                                <!-- Particles animation -->
                                <div class="cag8s cwkgi c09ly" aria-hidden="true">
                                    <canvas data-particle-animation="" data-particle-quantity="10"></canvas>
                                </div>
                                <div class="cx8xx">
                                    <img src="images/pricing-illustration.svg" width="334" height="334" alt="Features illustration">
                                </div>
                                <img class="cwkzh cag8s" src="images/pricing-illustration-top.svg" width="396" height="328" alt="Features illustration top" aria-hidden="true">
                                <div class="clx5f cqhau ch7jf cnlq2 cag8s c96dl">
                                    <div class="cbkyh">
                                        <img class="cqpai cy4u0 chig4 cbfpv cpjpy" src="images/pricing-icon-01.svg" width="80" height="80" alt="Pricing icon 01">
                                    </div>
                                    <div class="c7ip1">
                                        <img class="cjwh6 cy4u0 c40f3 cgtc3 cndtu" src="images/pricing-icon-02.svg" width="80" height="80" alt="Pricing icon 02">
                                    </div>
                                    <div class="cbkyh">
                                        <img class="cs5fe cy4u0 csqq4 ct0i7 cbtlt" src="images/pricing-icon-03.svg" width="80" height="80" alt="Pricing icon 03">
                                    </div>
                                    <img class="cy4u0 cwq8r" src="images/pricing-icon-04.svg" width="80" height="80" alt="Pricing icon 04">
                                    <div class="c7ip1">
                                        <img class="cs5fe cy4u0 csqq4 ct0i7 cbtlt" src="images/pricing-icon-05.svg" width="80" height="80" alt="Pricing icon 05">
                                    </div>
                                    <div class="cbkyh">
                                        <img class="cjwh6 cy4u0 c40f3 cgtc3 cndtu" src="images/pricing-icon-06.svg" width="80" height="80" alt="Pricing icon 06">
                                    </div>
                                    <div class="c7ip1">
                                        <img class="animate-[float_2.6ås_ease-in-out_infinite] c04s0 cy4u0 chig4 cbfpv cpjpy" src="images/pricing-icon-07.svg" width="80" height="80" alt="Pricing icon 07">
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Features list -->
                        <div class="c0fx3 corqv cve1l cdaol">
                            <!-- Card #1 -->
                            <div class="cclv7 c7v95 cx2aj cnvx4 cvnax c0cr8">
                                <div class="cqhau cmbvf cwvsi c96dl ck46w">
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                        <path class="c2wam" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z"></path>
                                        <path class="ca4ls" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z"></path>
                                    </svg>
                                    <p class="c3pte czlc0">
                                        Purpose-built for company that requires more than a <strong class="c1yjy cveoa">simple plan</strong> with security infrastructure.
                                    </p>
                                </div>
                            </div>
                            <!-- Card #2 -->
                            <div class="cclv7 c7v95 cx2aj cnvx4 cvnax c0cr8">
                                <div class="cqhau cmbvf cwvsi c96dl ck46w">
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                        <path class="c2wam" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z"></path>
                                        <path class="ca4ls" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z"></path>
                                    </svg>
                                    <p class="c3pte czlc0">
                                        AI-powered to <strong class="c1yjy cveoa">remove the burdens</strong> of tedious knowledge management and security tasks.
                                    </p>
                                </div>
                            </div>
                            <!-- Card #3 -->
                            <div class="cclv7 c7v95 cx2aj cnvx4 cvnax c0cr8">
                                <div class="cqhau cmbvf cwvsi c96dl ck46w">
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                        <path class="c2wam" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z"></path>
                                        <path class="ca4ls" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z"></path>
                                    </svg>
                                    <p class="c3pte czlc0">
                                        There's no prioritized support in Stellar. You can use email or live chat and you will hear back in a <strong class="c1yjy cveoa">couple of hours</strong>.
                                    </p>
                                </div>
                            </div>
                            <!-- Card #4 -->
                            <div class="cclv7 c7v95 cx2aj cnvx4 cvnax c0cr8">
                                <div class="cqhau cmbvf cwvsi c96dl ck46w">
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                        <path class="c2wam" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z"></path>
                                        <path class="ca4ls" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z"></path>
                                    </svg>
                                    <p class="c3pte czlc0">
                                        Comprehensive <strong class="c1yjy cveoa">developer docs</strong> and a centralized support center packed many resources.
                                    </p>
                                </div>
                            </div>
                            <!-- Card #5 -->
                            <div class="cclv7 c7v95 cx2aj cnvx4 cvnax c0cr8">
                                <div class="cqhau cmbvf cwvsi c96dl ck46w">
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                        <path class="c2wam" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z"></path>
                                        <path class="ca4ls" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z"></path>
                                    </svg>
                                    <p class="c3pte czlc0">
                                        No upcharges—and we'd never upsell you to a higher plan or a <strong class="c1yjy cveoa">dedicated IP</strong> to improve deliverability.
                                    </p>
                                </div>
                            </div>
                            <!-- Card #6 -->
                            <div class="cclv7 c7v95 cx2aj cnvx4 cvnax c0cr8">
                                <div class="cqhau cmbvf cwvsi c96dl ck46w">
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                        <path class="c2wam" fill-opacity=".24" d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0Z"></path>
                                        <path class="ca4ls" fill-rule="nonzero" d="M13 6.586 14.414 8l-5.747 5.748-3.081-3.081L7 9.252l1.667 1.667z"></path>
                                    </svg>
                                    <p class="c3pte czlc0">
                                        Tool training, dedicated resources, and <strong class="c1yjy cveoa">regular updates</strong> are available for both small and large teams.
                                    </p>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </section>

            <!-- Customers -->
            <section class="c95ga">
                <!-- Radial gradient -->
                <div class="clynz cfekt cag8s cwkgi c09ly" aria-hidden="true">
                    <div class="c5iei c2xfp clx5f cy21z cqhau clrhu cag8s c432a cpvl9 c96dl">
                        <div class="cabs6 c1018 c5rr4 cvvbi c3ool cag8s cwkgi"></div>
                    </div>
                </div>
                <div class="cprys cxhtj cecgn c2iur">
                    <div class="cgxwr cwmju">
                        <!-- Content -->
                        <div class="ce08t c3blx cyi18 cecgn cspj9">
                            <h2 class="cy4g8 cz1f5 cl10g c8yrn c10r8 cmck1 c9mpk c2pml">Meet our customers</h2>
                            <p class="c3pte ckr9u">There are many variations available, but the majority have suffered, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                        <!-- Customers -->
                        <div class="corqv cggap cvl1n csv50 cecgn cb4xw cdaol">
                            <!-- Customer #01 -->
                            <div class="c0yvd cq8v3 clhi3 cho1t ca8hk ctppe cs98r cxxzi c95ga cz3kt">
                                <div class="ck9br cqhau cahhp c7nnj c96dl">
                                    <div class="cqhau cmbvf c96dl">
                                        <img class="cvvbi cl4se" src="images/customer-01.jpg" width="44" height="44" alt="Customer 01">
                                        <div class="c0uod cksot">
                                            <div class="cytps cpryy c0uod">Mike Smets</div>
                                            <a class="crfov cmnf9 c73ss cveoa c0uod czlc0" href="#0">@MikeSmets</a>
                                        </div>
                                    </div>
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                        <path class="c2wam" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z"></path>
                                    </svg>
                                </div>
                                <p class="c3pte czlc0">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                            </div>
                            <!-- Customer #02 -->
                            <div class="c0yvd cq8v3 clhi3 cho1t ca8hk ctppe cs98r cxxzi c95ga cz3kt">
                                <div class="ck9br cqhau cahhp c7nnj c96dl">
                                    <div class="cqhau cmbvf c96dl">
                                        <img class="cvvbi cl4se" src="images/customer-02.jpg" width="44" height="44" alt="Customer 02">
                                        <div class="c0uod cksot">
                                            <div class="cytps cpryy c0uod">Mike Bryan</div>
                                            <a class="crfov cmnf9 c73ss cveoa c0uod czlc0" href="#0">@mike0point7 </a>
                                        </div>
                                    </div>
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                        <path class="c2wam" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z"></path>
                                    </svg>
                                </div>
                                <p class="c3pte czlc0">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                            </div>
                            <!-- Customer #03 -->
                            <div class="c0yvd cq8v3 clhi3 cho1t ca8hk ctppe cs98r cxxzi c95ga cz3kt">
                                <div class="ck9br cqhau cahhp c7nnj c96dl">
                                    <div class="cqhau cmbvf c96dl">
                                        <img class="cvvbi cl4se" src="images/customer-03.jpg" width="44" height="44" alt="Customer 03">
                                        <div class="c0uod cksot">
                                            <div class="cytps cpryy c0uod">Liz Park</div>
                                            <a class="crfov cmnf9 c73ss cveoa c0uod czlc0" href="#0">@liz-park82</a>
                                        </div>
                                    </div>
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                        <path class="c2wam" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z"></path>
                                    </svg>
                                </div>
                                <p class="c3pte czlc0">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                            </div>
                            <!-- Customer #04 -->
                            <div class="c0yvd cq8v3 clhi3 cho1t ca8hk ctppe cs98r cxxzi c95ga cz3kt">
                                <div class="ck9br cqhau cahhp c7nnj c96dl">
                                    <div class="cqhau cmbvf c96dl">
                                        <img class="cvvbi cl4se" src="images/customer-04.jpg" width="44" height="44" alt="Customer 04">
                                        <div class="c0uod cksot">
                                            <div class="cytps cpryy c0uod">Jessie Maison</div>
                                            <a class="crfov cmnf9 c73ss cveoa c0uod czlc0" href="#0">@jessiem9</a>
                                        </div>
                                    </div>
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                        <path class="c2wam" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z"></path>
                                    </svg>
                                </div>
                                <p class="c3pte czlc0">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                            </div>
                            <!-- Customer #05 -->
                            <div class="c0yvd cq8v3 clhi3 cho1t ca8hk ctppe cs98r cxxzi c95ga cz3kt">
                                <div class="ck9br cqhau cahhp c7nnj c96dl">
                                    <div class="cqhau cmbvf c96dl">
                                        <img class="cvvbi cl4se" src="images/customer-05.jpg" width="44" height="44" alt="Customer 05">
                                        <div class="c0uod cksot">
                                            <div class="cytps cpryy c0uod">Devani Janssen</div>
                                            <a class="crfov cmnf9 c73ss cveoa c0uod czlc0" href="#0">@deva07p</a>
                                        </div>
                                    </div>
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                        <path class="c2wam" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z"></path>
                                    </svg>
                                </div>
                                <p class="c3pte czlc0">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                            </div>
                            <!-- Customer #06 -->
                            <div class="c0yvd cq8v3 clhi3 cho1t ca8hk ctppe cs98r cxxzi c95ga cz3kt">
                                <div class="ck9br cqhau cahhp c7nnj c96dl">
                                    <div class="cqhau cmbvf c96dl">
                                        <img class="cvvbi cl4se" src="images/customer-06.jpg" width="44" height="44" alt="Customer 06">
                                        <div class="c0uod cksot">
                                            <div class="cytps cpryy c0uod">Mark Gerkules</div>
                                            <a class="crfov cmnf9 c73ss cveoa c0uod czlc0" href="#0">@mark-gerk</a>
                                        </div>
                                    </div>
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                        <path class="c2wam" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z"></path>
                                    </svg>
                                </div>
                                <p class="c3pte czlc0">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                            </div>
                            <!-- Customer #07 -->
                            <div class="c0yvd cq8v3 clhi3 cho1t ca8hk ctppe cs98r cxxzi c95ga cz3kt">
                                <div class="ck9br cqhau cahhp c7nnj c96dl">
                                    <div class="cqhau cmbvf c96dl">
                                        <img class="cvvbi cl4se" src="images/customer-07.jpg" width="44" height="44" alt="Customer 07">
                                        <div class="c0uod cksot">
                                            <div class="cytps cpryy c0uod">Andrey Propenk</div>
                                            <a class="crfov cmnf9 c73ss cveoa c0uod czlc0" href="#0">@andrey-prok</a>
                                        </div>
                                    </div>
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                        <path class="c2wam" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z"></path>
                                    </svg>
                                </div>
                                <p class="c3pte czlc0">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                            </div>
                            <!-- Customer #08 -->
                            <div class="c0yvd cq8v3 clhi3 cho1t ca8hk ctppe cs98r cxxzi c95ga cz3kt">
                                <div class="ck9br cqhau cahhp c7nnj c96dl">
                                    <div class="cqhau cmbvf c96dl">
                                        <img class="cvvbi cl4se" src="images/customer-08.jpg" width="44" height="44" alt="Customer 08">
                                        <div class="c0uod cksot">
                                            <div class="cytps cpryy c0uod">Jay Master</div>
                                            <a class="crfov cmnf9 c73ss cveoa c0uod czlc0" href="#0">@masterpro</a>
                                        </div>
                                    </div>
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                        <path class="c2wam" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z"></path>
                                    </svg>
                                </div>
                                <p class="c3pte czlc0">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                            </div>
                            <!-- Customer #09 -->
                            <div class="c0yvd cq8v3 clhi3 cho1t ca8hk ctppe cs98r cxxzi c95ga cz3kt">
                                <div class="ck9br cqhau cahhp c7nnj c96dl">
                                    <div class="cqhau cmbvf c96dl">
                                        <img class="cvvbi cl4se" src="images/customer-09.jpg" width="44" height="44" alt="Customer 09">
                                        <div class="c0uod cksot">
                                            <div class="cytps cpryy c0uod">Steve Wolf</div>
                                            <a class="crfov cmnf9 c73ss cveoa c0uod czlc0" href="#0">@imsteve</a>
                                        </div>
                                    </div>
                                    <svg class="cl4se" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                        <path class="c2wam" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z"></path>
                                    </svg>
                                </div>
                                <p class="c3pte czlc0">I love Stellar, is super easy to use with top notch features. My favourites are the affiliates and the lovely login box that converts like magic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQs -->
            <section class="c95ga">

                <!-- Blurred shape -->
                <div class="clynz c5iei ctqic c3ool clrhu cag8s c5udx cpvl9 c09ly cvbt8" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                        <defs>
                            <linearGradient id="bs3-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                <stop offset="0%" stop-color="#6366F1"></stop>
                                <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#bs3-a)" fill-rule="evenodd" d="m410 0 461 369-284 58z" transform="matrix(1 0 0 -1 -410 427)"></path>
                    </svg>
                </div>

                <div class="cprys cxhtj cecgn c2iur">
                    <div class="c02xj cgxwr cko88 cwmju">

                        <!-- Section header -->
                        <div class="ce08t c3blx cyi18 cecgn cspj9">
                            <div>
                                <div class="cz1f5 c8yrn c2fyz ce0v4 cmck1 cx8xx cveoa ce9wh">Getting started with Stellar</div>
                            </div>
                            <h2 class="cy4g8 cz1f5 cl10g c8yrn c10r8 cmck1 c9mpk c2pml">Everything you need to know</h2>
                        </div>

                        <!-- Columns -->
                        <div class="ceusp c9nh2 cymg4 cxpz5">

                            <!-- Column -->
                            <div class="cc40e cymg4 c1621">

                                <!-- Item -->
                                <div class="cc1ft">
                                    <h4 class="c7mr9">What is Stellar?</h4>
                                    <p class="c3pte">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                                </div>

                                <!-- Item -->
                                <div class="cc1ft">
                                    <h4 class="c7mr9">What's an affordable alternative to Stellar?</h4>
                                    <p class="c3pte">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                                </div>

                                <!-- Item -->
                                <div class="cc1ft">
                                    <h4 class="c7mr9">Can I remove the 'Powered by Stellar' branding?</h4>
                                    <p class="c3pte">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                                </div>

                            </div>

                            <!-- Column -->
                            <div class="cc40e cymg4 c1621">

                                <!-- Item -->
                                <div class="cc1ft">
                                    <h4 class="c7mr9">What kind of data can I collect from my customers?</h4>
                                    <p class="c3pte">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                                </div>

                                <!-- Item -->
                                <div class="cc1ft">
                                    <h4 class="c7mr9">Can I use Stellar for free?</h4>
                                    <p class="c3pte">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                                </div>

                                <!-- Item -->
                                <div class="cc1ft">
                                    <h4 class="c7mr9">Is Stellar affordable for small businesses?</h4>
                                    <p class="c3pte">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum.</p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section>
                <div class="cprys cxhtj cecgn c2iur">
                    <div class="cynpc cfekt cgxwr c95ga cwmju cyo0r">
                        <!-- Radial gradient -->
                        <div class="clynz c5iei c2xfp clx5f cy21z cqhau clrhu cag8s c432a cpvl9 c09ly c96dl" aria-hidden="true">
                            <div class="cabs6 c1018 c5rr4 cvvbi ctonv cag8s cwkgi"></div>
                            <div class="c1018 cekqd cu52k cvvbi cag8s crwt2 caer0"></div>
                        </div>
                        <!-- Blurred shape -->
                        <div class="clynz cgv1i c3ool cag8s cqewy c5udx c3n7t c09ly" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                                <defs>
                                    <linearGradient id="bs5-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                        <stop offset="0%" stop-color="#A855F7"></stop>
                                        <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                                <path fill="url(#bs5-a)" fill-rule="evenodd" d="m0 0 461 369-284 58z" transform="matrix(1 0 0 -1 0 427)"></path>
                            </svg>
                        </div>
                        <!-- Content -->
                        <div class="ce08t c3blx cecgn">
                            <div>
                                <div class="cz1f5 c8yrn c2fyz ce0v4 cmck1 cx8xx cveoa ce9wh">The security first platform</div>
                            </div>
                            <h2 class="cy4g8 cz1f5 cl10g c8yrn c10r8 cmck1 c9mpk c2pml">Take control of your business</h2>
                            <p class="c3pte ckr9u ciex7">All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                            <div>
                                <a class="cz1f5 c9roy c2dob ck2e7 czagy cxkpk cy2w0 c0h1x cesx7 c474f cnp54" href="#0">
                                    Get Started <span class="c0lwy c1ogz cg4ou cp8n5 cxkpk cy2w0 caz78">-&gt;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        @include('layouts.footer')