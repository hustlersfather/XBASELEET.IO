      <nav class="navbar navbar-expand-xl navbar  navbar-light " style="
			position:fixed;
			background-color: var(--color-nav);
			z-index:1;
			top:0;
			left:0;
			right:0;
			line-height: 1.5;
			font-family: 'Lato', sans-serif;
			font-size: 15px;
			padding-top: 0.5rem;
			padding-right: 1rem;
			padding-bottom: 0.5rem;
			padding-left: 1rem;">
                <a class="navbar-brand" href="index.php" style="color: var(--font-color);"><img width="40px" src="layout/images/logo.png"> XbaseTools </a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="navbar-toggler-icon"></i></button>
                <div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <!-- /.navbar-collapse -->
          
                <!-- ... USA BANK+(Fullz Infos) ... -->
                <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-warehouse fa-sm orange-text"></i>
                                <small>
                                        USA SELF REGISTERED (verified accounts) (1)
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <!-- Banks A to Z -->
                                <?php
							$banks = [  "53bank", "huntingtonbanks", "aacreditunionbank", "sofibank", "advantiscubank", "afcubank", "alaskausabank", "alliantbank", "allybank", "americanheritagecubank", "amexbank", 
							
							/* Add more banks in alphabetical order */
							"andigobank", "andrewsfcubank", "aplusfcubank", "applebank", "applefcubank", 
							"bankatfirst", "bankMobile", "bankofhope", "barclaysusbank", "baxterbank", "bbt&tbank", "bbvabanks", "bell.bankbethpagefcu", "bmobank", "boabanks", 
							"caltechefcubank", "campuscubank", "campusfederalbank", "cbnabank", "centrisfcubank", "cfcubank", "chartwaybank", "chasebanks", "chimebank", "citadelbank", "citibanks", "citizensbank", "coastal24bank", "columbiabank", "comericabank", "corningcubank", "credithumanbank", "cutxbank", 
							"discoverbank", 
							"edwardjonesbank", "efirstbank", "etradebank",
							"fargobank", "fcbankingbank", 
							"gatecitybank", "gcefcbank", "gesabank", "glcubank", "golden1bank", "greatwesternbank", "greenstatebank", "gtefinancialbank", "gulfbank",
							"hpcubank”, “huntingtonbank", 
							"iafinancialbank", "iangleyfcubank", "ibcbank", "iberiabankbank", "iccubank", "imcubank", "ithinkfibank",
							"jhfcubank",
							"key(bussines)bank", "kpcubank",
							"macubank", "mapscubank", "members1stbank", "merrickbank", "missionfedbank", "msufcubank", "mygenfcubank", "mynycbbank", "myoccubank", "mysummitbank",
							"ncsecubank", "nfcubank", "northropfcubank", "nymcubank",
							"onenevadabank", "onpointbank", "optumbank", "ozkbank",
							"penfedbank", "peoplesbank", "pncbank", "progressivebank", "prosperitybankusabank",
							"raymondjamesbank", "regionbank", "riverbankandtrustbank", "riverviewbank", "robinsfcubank", "rocklandtrustbank",
							"salliemaebank", "santaderbank", "sccubank", "schoolsfirstfcubank", "sdccubank", "selliemaebank", "simplebank", "snbbank", "Sofibank", "southsidebank", "ssfcubank", "statefarmbank", "suffolkfcubank", "suncoastcubank", "SunTrustbank", "swacubank",
							"tcfbank", "tcunetbank", "teachersththirdfederalonlinebank", "truistbank", "trustmarkbank", "tvacubank", "tyndallbank",
							"ucbibank", "uhcubank", "umbbank", "umpquabank", "unifyfcubank", "unionbank", "unitedfcubank", "usbank", "usaabank", "uvacubank", "uwcubank",
							"valleybank", "vanguardbank", "veridiancubank", "veritexbank", "vibeaccountbank", "vystarcubank",
							"wellsfargobank", "westbank", "woodforestbank"
							
							
							
							
							
							/* Add more banks in alphabetical order */
							];
							
							foreach ($banks as $bank) {
							    $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'");
							    $bankCount = mysqli_num_rows($bankCount);
							    $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));
							    echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>
							        <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}+AN:RN+(fullz infos)
							            <span class='badge badge-warning'>{$bankCount}</span>
							        </span>
							    </a>
											</small>";
							}
			?>                <!-- ... USA BANK+an:rn(login/addres) ... -->
                <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-warehouse fa-sm orange-text"></i>
                                <small>
                                        USA SELF REGISTERED (verified accounts) (2)
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <!-- Banks A to Z -->
                                <?php
							$banks = [  "53bank", "huntingtonbanks", "aacreditunionbank", "sofibank", "advantiscubank", "afcubank", "alaskausabank", "alliantbank", "allybank", "americanheritagecubank", "amexbank", 
							
							/* Add more banks in alphabetical order */
							"andigobank", "andrewsfcubank", "aplusfcubank", "applebank", "applefcubank", 
							"bankatfirst", "bankMobile", "bankofhope", "barclaysusbank", "baxterbank", "bbt&tbank", "bbvabanks", "bell.bankbethpagefcu", "bmobank", "boabanks", 
							"caltechefcubank", "campuscubank", "campusfederalbank", "cbnabank", "centrisfcubank", "cfcubank", "chartwaybank", "chasebanks", "chimebank", "citadelbank", "citibanks", "citizensbank", "coastal24bank", "columbiabank", "comericabank", "corningcubank", "credithumanbank", "cutxbank", 
							"discoverbank", 
							"edwardjonesbank", "efirstbank", "etradebank",
							"fargobank", "fcbankingbank", 
							"gatecitybank", "gcefcbank", "gesabank", "glcubank", "golden1bank", "greatwesternbank", "greenstatebank", "gtefinancialbank", "gulfbank",
							"hpcubank”, “huntingtonbank", 
							"iafinancialbank", "iangleyfcubank", "ibcbank", "iberiabankbank", "iccubank", "imcubank", "ithinkfibank",
							"jhfcubank",
							"key(bussines)bank", "kpcubank",
							"macubank", "mapscubank", "members1stbank", "merrickbank", "missionfedbank", "msufcubank", "mygenfcubank", "mynycbbank", "myoccubank", "mysummitbank",
							"ncsecubank", "nfcubank", "northropfcubank", "nymcubank",
							"onenevadabank", "onpointbank", "optumbank", "ozkbank",
							"penfedbank", "peoplesbank", "pncbank", "progressivebank", "prosperitybankusabank",
							"raymondjamesbank", "regionbank", "riverbankandtrustbank", "riverviewbank", "robinsfcubank", "rocklandtrustbank",
							"salliemaebank", "santaderbank", "sccubank", "schoolsfirstfcubank", "sdccubank", "selliemaebank", "simplebank", "snbbank", "Sofibank", "southsidebank", "ssfcubank", "statefarmbank", "suffolkfcubank", "suncoastcubank", "SunTrustbank", "swacubank",
							"tcfbank", "tcunetbank", "teachersththirdfederalonlinebank", "truistbank", "trustmarkbank", "tvacubank", "tyndallbank",
							"ucbibank", "uhcubank", "umbbank", "umpquabank", "unifyfcubank", "unionbank", "unitedfcubank", "usbank", "usaabank", "uvacubank", "uwcubank",
							"valleybank", "vanguardbank", "veridiancubank", "veritexbank", "vibeaccountbank", "vystarcubank",
							"wellsfargobank", "westbank", "woodforestbank"
							
							
							
							
							
							/* Add more banks in alphabetical order */
							];
							
							foreach ($banks as $bank) {
							    $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'");
							    $bankCount = mysqli_num_rows($bankCount);
							    $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));
							    echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>
							        <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}+AN:RN+(fullz infos)
							            <span class='badge badge-warning'>{$bankCount}</span>
							        </span>
							    </a>
											</small>";
							}
			?>

																	
                     <!-- ... CANADA BANK+(Fullz Infos) ... -->
                <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-warehouse fa-sm orange-text"></i>
                                <small>
                                        USA SELF REGISTERED (verified accounts) (3)
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <!-- Banks A to Z -->
                                <?php
							$banks = [  "53bank", "huntingtonbanks", "aacreditunionbank", "sofibank", "advantiscubank", "afcubank", "alaskausabank", "alliantbank", "allybank", "americanheritagecubank", "amexbank", 
							
							/* Add more banks in alphabetical order */
							"andigobank", "andrewsfcubank", "aplusfcubank", "applebank", "applefcubank", 
							"bankatfirst", "bankMobile", "bankofhope", "barclaysusbank", "baxterbank", "bbt&tbank", "bbvabanks", "bell.bankbethpagefcu", "bmobank", "boabanks", 
							"caltechefcubank", "campuscubank", "campusfederalbank", "cbnabank", "centrisfcubank", "cfcubank", "chartwaybank", "chasebanks", "chimebank", "citadelbank", "citibanks", "citizensbank", "coastal24bank", "columbiabank", "comericabank", "corningcubank", "credithumanbank", "cutxbank", 
							"discoverbank", 
							"edwardjonesbank", "efirstbank", "etradebank",
							"fargobank", "fcbankingbank", 
							"gatecitybank", "gcefcbank", "gesabank", "glcubank", "golden1bank", "greatwesternbank", "greenstatebank", "gtefinancialbank", "gulfbank",
							"hpcubank”, “huntingtonbank", 
							"iafinancialbank", "iangleyfcubank", "ibcbank", "iberiabankbank", "iccubank", "imcubank", "ithinkfibank",
							"jhfcubank",
							"key(bussines)bank", "kpcubank",
							"macubank", "mapscubank", "members1stbank", "merrickbank", "missionfedbank", "msufcubank", "mygenfcubank", "mynycbbank", "myoccubank", "mysummitbank",
							"ncsecubank", "nfcubank", "northropfcubank", "nymcubank",
							"onenevadabank", "onpointbank", "optumbank", "ozkbank",
							"penfedbank", "peoplesbank", "pncbank", "progressivebank", "prosperitybankusabank",
							"raymondjamesbank", "regionbank", "riverbankandtrustbank", "riverviewbank", "robinsfcubank", "rocklandtrustbank",
							"salliemaebank", "santaderbank", "sccubank", "schoolsfirstfcubank", "sdccubank", "selliemaebank", "simplebank", "snbbank", "Sofibank", "southsidebank", "ssfcubank", "statefarmbank", "suffolkfcubank", "suncoastcubank", "SunTrustbank", "swacubank",
							"tcfbank", "tcunetbank", "teachersththirdfederalonlinebank", "truistbank", "trustmarkbank", "tvacubank", "tyndallbank",
							"ucbibank", "uhcubank", "umbbank", "umpquabank", "unifyfcubank", "unionbank", "unitedfcubank", "usbank", "usaabank", "uvacubank", "uwcubank",
							"valleybank", "vanguardbank", "veridiancubank", "veritexbank", "vibeaccountbank", "vystarcubank",
							"wellsfargobank", "westbank", "woodforestbank"
							
							
							
							
							
							/* Add more banks in alphabetical order */
							];
							
							foreach ($banks as $bank) {
							    $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'");
							    $bankCount = mysqli_num_rows($bankCount);
							    $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));
							    echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>
							        <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}+AN:RN+(fullz infos)
							            <span class='badge badge-warning'>{$bankCount}</span>
							        </span>
							    </a>
											</small>";
							}
			?>
																	<!----USA BANK (full info)----->
																	

                <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-warehouse fa-sm orange-text"></i>
                                <small>
                                        USA SELF REGISTERED (verified accounts) (4)
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <!-- Banks A to Z -->
                                <?php
							$banks = [  "53bank", "huntingtonbanks", "aacreditunionbank", "sofibank", "advantiscubank", "afcubank", "alaskausabank", "alliantbank", "allybank", "americanheritagecubank", "amexbank", 
							
							/* Add more banks in alphabetical order */
							"andigobank", "andrewsfcubank", "aplusfcubank", "applebank", "applefcubank", 
							"bankatfirst", "bankMobile", "bankofhope", "barclaysusbank", "baxterbank", "bbt&tbank", "bbvabanks", "bell.bankbethpagefcu", "bmobank", "boabanks", 
							"caltechefcubank", "campuscubank", "campusfederalbank", "cbnabank", "centrisfcubank", "cfcubank", "chartwaybank", "chasebanks", "chimebank", "citadelbank", "citibanks", "citizensbank", "coastal24bank", "columbiabank", "comericabank", "corningcubank", "credithumanbank", "cutxbank", 
							"discoverbank", 
							"edwardjonesbank", "efirstbank", "etradebank",
							"fargobank", "fcbankingbank", 
							"gatecitybank", "gcefcbank", "gesabank", "glcubank", "golden1bank", "greatwesternbank", "greenstatebank", "gtefinancialbank", "gulfbank",
							"hpcubank”, “huntingtonbank", 
							"iafinancialbank", "iangleyfcubank", "ibcbank", "iberiabankbank", "iccubank", "imcubank", "ithinkfibank",
							"jhfcubank",
							"key(bussines)bank", "kpcubank",
							"macubank", "mapscubank", "members1stbank", "merrickbank", "missionfedbank", "msufcubank", "mygenfcubank", "mynycbbank", "myoccubank", "mysummitbank",
							"ncsecubank", "nfcubank", "northropfcubank", "nymcubank",
							"onenevadabank", "onpointbank", "optumbank", "ozkbank",
							"penfedbank", "peoplesbank", "pncbank", "progressivebank", "prosperitybankusabank",
							"raymondjamesbank", "regionbank", "riverbankandtrustbank", "riverviewbank", "robinsfcubank", "rocklandtrustbank",
							"salliemaebank", "santaderbank", "sccubank", "schoolsfirstfcubank", "sdccubank", "selliemaebank", "simplebank", "snbbank", "Sofibank", "southsidebank", "ssfcubank", "statefarmbank", "suffolkfcubank", "suncoastcubank", "SunTrustbank", "swacubank",
							"tcfbank", "tcunetbank", "teachersththirdfederalonlinebank", "truistbank", "trustmarkbank", "tvacubank", "tyndallbank",
							"ucbibank", "uhcubank", "umbbank", "umpquabank", "unifyfcubank", "unionbank", "unitedfcubank", "usbank", "usaabank", "uvacubank", "uwcubank",
							"valleybank", "vanguardbank", "veridiancubank", "veritexbank", "vibeaccountbank", "vystarcubank",
							"wellsfargobank", "westbank", "woodforestbank"
							
							
							
							
							
							/* Add more banks in alphabetical order */
							];
							
							foreach ($banks as $bank) {
							    $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'");
							    $bankCount = mysqli_num_rows($bankCount);
							    $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));
							    echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>
							        <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}+AN:RN+(fullz infos)
							            <span class='badge badge-warning'>{$bankCount}</span>
							        </span>
							    </a>
											</small>";
							}
			?>																
																<!---------UK BANK(full infos)----->
																
															
                <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-warehouse fa-sm orange-text"></i>
                                <small>
                                        USA SELF REGISTERED (verified accounts) (5)
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <!-- Banks A to Z -->
                                <?php
							$banks = [  "53bank", "huntingtonbanks", "aacreditunionbank", "sofibank", "advantiscubank", "afcubank", "alaskausabank", "alliantbank", "allybank", "americanheritagecubank", "amexbank", 
							
							/* Add more banks in alphabetical order */
							"andigobank", "andrewsfcubank", "aplusfcubank", "applebank", "applefcubank", 
							"bankatfirst", "bankMobile", "bankofhope", "barclaysusbank", "baxterbank", "bbt&tbank", "bbvabanks", "bell.bankbethpagefcu", "bmobank", "boabanks", 
							"caltechefcubank", "campuscubank", "campusfederalbank", "cbnabank", "centrisfcubank", "cfcubank", "chartwaybank", "chasebanks", "chimebank", "citadelbank", "citibanks", "citizensbank", "coastal24bank", "columbiabank", "comericabank", "corningcubank", "credithumanbank", "cutxbank", 
							"discoverbank", 
							"edwardjonesbank", "efirstbank", "etradebank",
							"fargobank", "fcbankingbank", 
							"gatecitybank", "gcefcbank", "gesabank", "glcubank", "golden1bank", "greatwesternbank", "greenstatebank", "gtefinancialbank", "gulfbank",
							"hpcubank”, “huntingtonbank", 
							"iafinancialbank", "iangleyfcubank", "ibcbank", "iberiabankbank", "iccubank", "imcubank", "ithinkfibank",
							"jhfcubank",
							"key(bussines)bank", "kpcubank",
							"macubank", "mapscubank", "members1stbank", "merrickbank", "missionfedbank", "msufcubank", "mygenfcubank", "mynycbbank", "myoccubank", "mysummitbank",
							"ncsecubank", "nfcubank", "northropfcubank", "nymcubank",
							"onenevadabank", "onpointbank", "optumbank", "ozkbank",
							"penfedbank", "peoplesbank", "pncbank", "progressivebank", "prosperitybankusabank",
							"raymondjamesbank", "regionbank", "riverbankandtrustbank", "riverviewbank", "robinsfcubank", "rocklandtrustbank",
							"salliemaebank", "santaderbank", "sccubank", "schoolsfirstfcubank", "sdccubank", "selliemaebank", "simplebank", "snbbank", "Sofibank", "southsidebank", "ssfcubank", "statefarmbank", "suffolkfcubank", "suncoastcubank", "SunTrustbank", "swacubank",
							"tcfbank", "tcunetbank", "teachersththirdfederalonlinebank", "truistbank", "trustmarkbank", "tvacubank", "tyndallbank",
							"ucbibank", "uhcubank", "umbbank", "umpquabank", "unifyfcubank", "unionbank", "unitedfcubank", "usbank", "usaabank", "uvacubank", "uwcubank",
							"valleybank", "vanguardbank", "veridiancubank", "veritexbank", "vibeaccountbank", "vystarcubank",
							"wellsfargobank", "westbank", "woodforestbank"
							
							
							
							
							
							/* Add more banks in alphabetical order */
							];
							
							foreach ($banks as $bank) {
							    $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'");
							    $bankCount = mysqli_num_rows($bankCount);
							    $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));
							    echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>
							        <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}+AN:RN+(fullz infos)
							            <span class='badge badge-warning'>{$bankCount}</span>
							        </span>
							    </a>
											</small>";							} 	?>
																</div>
																
																		</ul>
												
												</nav>
                       