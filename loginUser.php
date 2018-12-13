<?php
session_start();


$ldap_username = $_SESSION['username'] . "@EHH.de";
$ldap_password = $_SESSION['password'];


$ldap_connection = ldap_connect("ldap://localhost");

if (FALSE === $ldap_connection){
    echo 'Unable to connect to the ldap server';
}

ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3) or die('Unable to set LDAP protocol version');
ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0);

if (TRUE === ldap_bind($ldap_connection, $ldap_username, $ldap_password)){

    //Your domains DN to query
    $ldap_base_dn = 'DC=EHH,DC=de';

    //Get standard users and contacts
    $search_filter = '(|(objectCategory=person)(objectCategory=contact))';

    //Connect to LDAP
    $result = ldap_search($ldap_connection, $ldap_base_dn, $search_filter);

    if (FALSE !== $result){
        $entries = ldap_get_entries($ldap_connection, $result);

        //For each account returned by the search
        for ($x=0; $x<$entries['count']; $x++){

            if (($entries[$x]['samaccountname'][0]) == $_SESSION['username']) {


                //Windows Usernaame
                $LDAP_samaccountname = "";

                if (!empty($entries[$x]['samaccountname'][0])) {
                    $LDAP_samaccountname = $entries[$x]['samaccountname'][0];
                    if ($LDAP_samaccountname == "NULL") {
                        $LDAP_samaccountname = "";
                    }
                } else {
                    //#There is no samaccountname s0 assume this is an AD contact record so generate a unique username

                    $LDAP_uSNCreated = $entries[$x]['usncreated'][0];
                    $LDAP_samaccountname = "CONTACT_" . $LDAP_uSNCreated;
                }

                //Last Name
                $LDAP_LastName = "";

                if (!empty($entries[$x]['sn'][0])) {
                    $LDAP_LastName = $entries[$x]['sn'][0];
                    if ($LDAP_LastName == "NULL") {
                        $LDAP_LastName = "";
                    }
                }

                //First Name
                $LDAP_FirstName = "";

                if (!empty($entries[$x]['givenname'][0])) {
                    $LDAP_FirstName = $entries[$x]['givenname'][0];
                    if ($LDAP_FirstName == "NULL") {
                        $LDAP_FirstName = "";
                    }
                }

                //Company
                $LDAP_CompanyName = "";

                if (!empty($entries[$x]['company'][0])) {
                    $LDAP_CompanyName = $entries[$x]['company'][0];
                    if ($LDAP_CompanyName == "NULL") {
                        $LDAP_CompanyName = "";
                    }
                }

                //Department
                $LDAP_Department = "";

                if (!empty($entries[$x]['department'][0])) {
                    $LDAP_Department = $entries[$x]['department'][0];
                    if ($LDAP_Department == "NULL") {
                        $LDAP_Department = "";
                    }
                }

                //Job Title
                $LDAP_JobTitle = "";

                if (!empty($entries[$x]['title'][0])) {
                    $LDAP_JobTitle = $entries[$x]['title'][0];
                    if ($LDAP_JobTitle == "NULL") {
                        $LDAP_JobTitle = "";
                    }
                }

                //IPPhone
                $LDAP_OfficePhone = "";

                if (!empty($entries[$x]['ipphone'][0])) {
                    $LDAP_OfficePhone = $entries[$x]['ipphone'][0];
                    if ($LDAP_OfficePhone == "NULL") {
                        $LDAP_OfficePhone = "";
                    }
                }

                //FAX Number
                $LDAP_OfficeFax = "";

                if (!empty($entries[$x]['facsimiletelephonenumber'][0])) {
                    $LDAP_OfficeFax = $entries[$x]['facsimiletelephonenumber'][0];
                    if ($LDAP_OfficeFax == "NULL") {
                        $LDAP_OfficeFax = "";
                    }
                }

                //Mobile Number
                $LDAP_CellPhone = "";

                if (!empty($entries[$x]['mobile'][0])) {
                    $LDAP_CellPhone = $entries[$x]['mobile'][0];
                    if ($LDAP_CellPhone == "NULL") {
                        $LDAP_CellPhone = "";
                    }
                }

                //Telephone Number
                $LDAP_DDI = "";

                if (!empty($entries[$x]['telephonenumber'][0])) {
                    $LDAP_DDI = $entries[$x]['telephonenumber'][0];
                    if ($LDAP_DDI == "NULL") {
                        $LDAP_DDI = "";
                    }
                }

                //Email address
                $LDAP_InternetAddress = "";

                if (!empty($entries[$x]['mail'][0])) {
                    $LDAP_InternetAddress = $entries[$x]['mail'][0];
                    if ($LDAP_InternetAddress == "NULL") {
                        $LDAP_InternetAddress = "";
                    }
                }

                //Home phone
                $LDAP_HomePhone = "";

                if (!empty($entries[$x]['homephone'][0])) {
                    $LDAP_HomePhone = $entries[$x]['homephone'][0];
                    if ($LDAP_HomePhone == "NULL") {
                        $LDAP_HomePhone = "";
                    }
                }

							//cn
							$LDAP_cn = "";

							if (!empty($entries[$x]['cn'][0])) {
								$LDAP_cn = $entries[$x]['cn'][0];
								if ($LDAP_cn == "NULL") {
									$LDAP_cn = "";
								}
							}

							//description
							$LDAP_description = "";

							if (!empty($entries[$x]['description'][0])) {
								$LDAP_description = $entries[$x]['description'][0];
								if ($LDAP_description == "NULL") {
									$LDAP_description = "";
								}
							}

							//office
							$LDAP_physicaldeliveryofficename = "";

							if (!empty($entries[$x]['physicaldeliveryofficename'][0])) {
								$LDAP_physicaldeliveryofficename = $entries[$x]['physicaldeliveryofficename'][0];
								if ($LDAP_physicaldeliveryofficename == "NULL") {
									$LDAP_physicaldeliveryofficename = "";
								}
							}

							//telephonenumber
							$LDAP_telephonenumber = "";
							if (!empty($entries[$x]['telephonenumber'][0])) {
								$LDAP_telephonenumber = $entries[$x]['telephonenumber'][0];
								if ($LDAP_telephonenumber == "NULL") {
									$LDAP_telephonenumber = "";
								}
							}

							//mail
							$LDAP_mail = "";
							if (!empty($entries[$x]['mail'][0])) {
								$LDAP_mail = $entries[$x]['mail'][0];
								if ($LDAP_mail == "NULL") {
									$LDAP_mail = "";
								}
							}

							//wwwhomepage
							$LDAP_wwwhomepage = "";
							if (!empty($entries[$x]['wwwhomepage'][0])) {
								$LDAP_wwwhomepage = $entries[$x]['wwwhomepage'][0];
								if ($LDAP_wwwhomepage == "NULL") {
									$LDAP_wwwhomepage = "";
								}
							}

							//streetaddress
							$LDAP_streetaddress = "";
							if (!empty($entries[$x]['streetaddress'][0])) {
								$LDAP_streetaddress = $entries[$x]['streetaddress'][0];
								if ($LDAP_streetaddress == "NULL") {
									$LDAP_streetaddress = "";
								}
							}

							//postofficebox
							$LDAP_postofficebox = "";
							if (!empty($entries[$x]['postofficebox'][0])) {
								$LDAP_postofficebox = $entries[$x]['postofficebox'][0];
								if ($LDAP_postofficebox == "NULL") {
									$LDAP_postofficebox = "";
								}
							}

							//city
							$LDAP_city = "";
							if (!empty($entries[$x]['l'][0])) {
								$LDAP_city = $entries[$x]['l'][0];
								if ($LDAP_city == "NULL") {
									$LDAP_city = "";
								}
							}

							//plz
							$LDAP_postalcode = "";
							if (!empty($entries[$x]['postalcode'][0])) {
								$LDAP_postalcode = $entries[$x]['postalcode'][0];
								if ($LDAP_postalcode == "NULL") {
									$LDAP_postalcode = "";
								}
							}

							//region
							$LDAP_region = "";
							if (!empty($entries[$x]['st'][0])) {
								$LDAP_region = $entries[$x]['st'][0];
								if ($LDAP_region == "NULL") {
									$LDAP_region = "";
								}
							}

							//country
							$LDAP_country = "";
							if (!empty($entries[$x]['co'][0])) {
								$LDAP_country = $entries[$x]['co'][0];
								if ($LDAP_country == "NULL") {
									$LDAP_country = "";
								}
							}

							//position
							$LDAP_title = "";
							if (!empty($entries[$x]['title'][0])) {
								$LDAP_title = $entries[$x]['title'][0];
								if ($LDAP_title == "NULL") {
									$LDAP_title = "";
								}
							}

							//department
							$LDAP_department = "";
							if (!empty($entries[$x]['department'][0])) {
								$LDAP_department = $entries[$x]['department'][0];
								if ($LDAP_department == "NULL") {
									$LDAP_department = "";
								}
							}

							//company
							$LDAP_company = "";
							if (!empty($entries[$x]['company'][0])) {
								$LDAP_company = $entries[$x]['company'][0];
								if ($LDAP_company == "NULL") {
									$LDAP_company = "";
								}
							}

            }

        }
    }

    ldap_unbind($ldap_connection);


}
