<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include 'link.php';?>
</head>
<style>
.navbar-nav li:hover>ul.dropdown-menu {
    display: block;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0px;
    margin-top: -5px;
    left: 100%;
}

.dropdown-menu>li>a:hover::after {
    text-decoration: underline;
    transform: rotate(90deg);
}
</style>

<body>

    <div class="top container-fluid bg-dark text-light">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-5 d-flex justify-content-center">
                <div class="top p-2 ">
                    <a href="" style="color:white;" class="mx-3"> <i class="fa fa-phone" aria-hidden="true"> Phone No.:
                            9891768667 </i></a>

                    <a href="" class="pl-2" style="color:white;"> <i class="fa fa-envelope" aria-hidden="true">
                            mail@gdfskills.com</i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-center">

                <div class="box p-2 ">
                    <a href="" style="color:white;"> <i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
                </div>
                <div class="box p-2">
                    <a href="" style="color:white;"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
                </div>
                <div class="box p-2">
                    <a href="" style="color:white;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: whitesmoke;">
        <div class="row">
            <div class="col-lg-6 p-2 d-flex justify-content-center">
                <img src="image/gdsn.png" style="height:10vh;" alt="">
            </div>
            <div class="col-lg-6 my-auto p-2">
                <h1 id="gds_heading"> <span style="color:hotpink;">Gayatri</span> <span style="color:green;">Devi</span>
                    <span style="color: rgb(20, 20, 90);">Solution</span>
                </h1>
                Our Team Your Solution
            </div>
        </div>
    </div>

    <div class="head navbar-light">
        <nav class="container navbar navbar-expand-lg p-0 " style="align-items: center;justify-content: center;">
            <span class="text-light" id='menu'>
                <div class='menu-line1'></div>
                <div class='menu-line2'></div>
                <div class='menu-line3'></div>
            </span>

            <div class="navbar-collapse justify-content-around" id="navbarSupportedContent">
                <ul class="navbar-nav nav-page1">
                    <li class="nav-item active mx-3">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item  mx-3">
                        <a class="nav-link" href="team.php">Team</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="income_tax_and_tds.php">Income Tax & TDS </a>
                            <a class="dropdown-item" href="Value_Added_Tax_(VAT).php">VALUE ADDED TAX (VAT)</a>
                            <a class="dropdown-item" href="Corporate_Services.php">CORPORATE SERVICES</a>
                            <a class="dropdown-item" href="accounting.php">ACCOUNTING SERVICES</a>
                            <a class="dropdown-item" href="benifit_out_sorcesing.php">Benefits of Out Sourcing </a>
                            <a class="dropdown-item" href="corporate.php">CORPORATE GOVERNANCE</a>
                            <a class="dropdown-item" href="gst.php">GOODS AND SERVICES TAX</a>
                            <a class="dropdown-item" href="s_gst.php">Service Tax</a>
                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Knowledge Bank
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu  dropright">
                                <a href="#" class="dropdown-item dropdown-toggle">Calculator</a>
                                <ul class="dropdown-menu">
                                    <li><a href="k_gst_Calculater.php" class="dropdown-item">GST Calculator</a></li>
                                    <li><a href="k_tax_calcilater.php" class="dropdown-item">TAX Calculator</a></li>
                                    <li><a href="tds_Calculator.php" class="dropdown-item">TDS Calculator</a></li>
                                    <li><a href="net_profit.php" class="dropdown-item">Calculator Net Profit</a></li>
                                    <li><a href="net_profit.php" class="dropdown-item">Effective Capital</a></li>
                                    <li><a href="net_profit.php" class="dropdown-item">HRA</a></li>
                                    <li><a href="net_profit.php" class="dropdown-item">NSC</a></li>
                                    <li><a href="net_profit.php" class="dropdown-item">EMI</a></li>
                                    <li><a href="net_profit.php" class="dropdown-item">Auto Loan Calculator</a></li>
                                    <li><a href="net_profit.php" class="dropdown-item">Home Loan Calculator</a></li>
                                    <li><a href="net_profit.php" class="dropdown-item">Get No. Of Instalment</a></li>
                                    <li class="dropdown-submenu  dropright">
                                        <a href="#" class="dropdown-item dropdown-toggle ">RERA Calculator</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Developers Calculator</a></li>
                                            <li><a href="#" class="dropdown-item">Home Buyer Delay Intrest</a></li>
                                            <li><a href="#" class="dropdown-item">Home Buyer Refund </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  dropright">
                                <a href="#" class="dropdown-item dropdown-toggle ">Bulletins</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item">RBI SEBI</a></li>
                                    <li><a href="#" class="dropdown-item">Notification</a></li>
                                    <li><a href="#" class="dropdown-item">Circular</a></li>
                                    <li><a href="#" class="dropdown-item">Income Tax</a></li>
                                    <li><a href="#" class="dropdown-item">Service Tax</a></li>
                                    <li><a href="#" class="dropdown-item">Central Sales Tax</a></li>
                                    <li><a href="#" class="dropdown-item">Excise Mathters</a></li>
                                    <li><a href="#" class="dropdown-item">Customs</a></li>
                                    <li><a href="#" class="dropdown-item">Company Law</a></li>
                                    <li><a href="#" class="dropdown-item">Labour Laws</a></li>
                                    <li><a href="#" class="dropdown-item">FEMA</a></li>
                                    <li><a href="#" class="dropdown-item">The LLP Act 2008</a></li>
                                    <li><a href="#" class="dropdown-item">Accounting Standard(INDAS)</a></li>
                                    <li><a href="#" class="dropdown-item">Others</a></li>
                                    <li><a href="#" class="dropdown-item">GST</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">VAT</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Delhi VAT</a></li>
                                            <li><a href="#" class="dropdown-item">Maharastra Vat</a></li>
                                            <li><a href="#" class="dropdown-item">Gujarat VAT</a></li>
                                            <li><a href="#" class="dropdown-item">Telangana VAT</a></li>
                                            <li><a href="#" class="dropdown-item">Tamil Nadu VAT</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="dropdown-item">IGST</a></li>
                                    <li><a href="#" class="dropdown-item">UTGST</a></li>
                                    <li><a href="#" class="dropdown-item">Compensation Caee</a></li>
                                    <li><a href="#" class="dropdown-item">IBC Regulation</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  dropright">
                                <a href="#" class="dropdown-item dropdown-toggle ">Utilities</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item">Application & Petition Fees (NCLT)</a></li>
                                    <li><a href="#" class="dropdown-item">Rates of TDS</a></li>
                                    <li><a href="#" class="dropdown-item">TDS Rates for N.R.I us 195</a></li>
                                    <li><a href="#" class="dropdown-item">Rates of Income Tax</a></li>
                                    <li><a href="#" class="dropdown-item">Rates of Depreciation Under Companies Act</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Rates of Depreciation Under Income Tax Act
                                        </a></li>
                                    <li><a href="#" class="dropdown-item">ROC Filling Frees(As per Companies Act. 2013)
                                        </a></li>
                                    <li><a href="#" class="dropdown-item">ROC Filling Frees Structure(As per Companies
                                            Act. 2013) </a></li>
                                    <li><a href="#" class="dropdown-item">Cost Inflation Index</a></li>
                                    <li><a href="#" class="dropdown-item">IFSC Codes</a></li>
                                    <li><a href="#" class="dropdown-item">MICR Codes</a></li>
                                    <li><a href="#" class="dropdown-item">Rates of NSC Interest</a></li>
                                    <li><a href="#" class="dropdown-item">Gold And Silver Rates</a></li>
                                    <li><a href="#" class="dropdown-item">Rates of Stamp Duty</a></li>
                                    <li><a href="#" class="dropdown-item">Limitied Liability Partnership Fees</a></li>
                                    <li><a href="#" class="dropdown-item">National industries of Classification</a></li>
                                    <li><a href="#" class="dropdown-item">HSN Rate List</a></li>
                                    <li><a href="#" class="dropdown-item">Comparison of Deducation u/s 80TTA & 80TTB</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  dropright">
                                <a href="#" class="dropdown-item dropdown-toggle ">Links</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item">Quick Link</a></li>
                                    <li><a href="#" class="dropdown-item">Important Links</a></li>
                                    <li><a href="#" class="dropdown-item">GST/VAT Links</a></li>
                                    <li><a href="#" class="dropdown-item">Ease of Doing Business</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  dropright">
                                <a href="#" class="dropdown-item dropdown-toggle ">Acts</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">Direct Tax</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Income Tax Act</a></li>
                                            <li><a href="#" class="dropdown-item">Wealth Tax Act</a></li>
                                            <li><a href="#" class="dropdown-item">Income Declaration Scheme 2016</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">indirect Tax</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Service Tax(Finance Act, 1994)</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Central Sales Tax Act, 1956</a></li>
                                            <li><a href="#" class="dropdown-item">The Central Excise Acts, 1944</a></li>
                                            <li><a href="#" class="dropdown-item">Customs Acts, 1962</a></li>
                                            <li><a href="#" class="dropdown-item">Entry Tax Act</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">Corporate Laws</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Companies Acts 2013</a></li>
                                            <li><a href="#" class="dropdown-item">Companies Acts 1956</a></li>
                                            <li><a href="#" class="dropdown-item">The Limited Liability Partnership ACT,
                                                    2008</a></li>
                                            <li><a href="#" class="dropdown-item">The Securities and Exchange Board of
                                                    India Act, 1992</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">VAT Laws</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Delhi Value Added Tax Act, 2004</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Maharashtra Value Added Tax Act
                                                    (2002)</a></li>
                                            <li><a href="#" class="dropdown-item">Maharashtra Value Added Tax Act
                                                    (2002)</a></li>
                                            <li><a href="#" class="dropdown-item">West Bengal Value Added Tax Act,
                                                    2003</a></li>
                                            <li><a href="#" class="dropdown-item">Tamilnadu VAT ACT, 2006</a></li>
                                            <li><a href="#" class="dropdown-item">Karnataka Value Added Tax Act 2003</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Gajarat VAlue Added Tax Act, 2003</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">The Uttar Pardash Value Added Tax
                                                    2008</a></li>
                                            <li><a href="#" class="dropdown-item">Rajasthan Value Added Tax Act,
                                                    2003</a></li>
                                            <li><a href="#" class="dropdown-item">Panjab Value Added Tax Act</a></li>
                                            <li><a href="#" class="dropdown-item">Haryana Value Added Tax Act</a></li>
                                            <li><a href="#" class="dropdown-item">Telangana VAT Act 2005</a></li>
                                            <li><a href="#" class="dropdown-item">Andhra Pradesh Value Added Tax Act
                                                    2005</a></li>
                                            <li><a href="#" class="dropdown-item">Bihar Value Added Tax Act,2005</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">Other Statutes</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">
                                                    The Employees' State Insurance Act, 1948
                                                </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    The Employees' Provident Funds and Miscellaneous Provisions Act,
                                                    1952</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Profession Tax Act</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    The Indian Partnership Act, 1932</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Societies Registration Act, 1860</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Competition Act, 2002</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Reserve Bank of India Act, 1934</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Monopolies and Restrictive Trade Practices Act, 1969</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Equalisation Levy Act, 2016</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Right To Information Act, 2005</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Foreign Exchange Management Act, 1999</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Maharashtra Real Estate Regulatory Authority and Rules</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    The Real Estate (Regulation and Development) Act, 2016</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    The Insolvency And Bankruptcy Code, 2016</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Prohibition Of Benami Property Transaction Act 1988</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">GST Laws</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">
                                                    IGST Act, 2017
                                                </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Central Goods and Services Tax Act, 2017
                                                </a></li>
                                            <li><a href="#" class="dropdown-item">Union Territory Goods and Services Tax
                                                    Act, 2017</a></li>
                                            <li><a href="#" class="dropdown-item">GST (Compensation to States) Act,
                                                    2017</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  dropright">
                                <a href="#" class="dropdown-item dropdown-toggle ">Rules</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">Direct Tax</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Income Tax Act</a></li>
                                            <li><a href="#" class="dropdown-item">Wealth Tax Act</a></li>
                                            <li><a href="#" class="dropdown-item">Income Declaration Scheme 2016</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">indirect Tax</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Service Tax(Finance Act, 1994)</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Central Sales Tax Act, 1956</a></li>
                                            <li><a href="#" class="dropdown-item">The Central Excise Acts, 1944</a></li>
                                            <li><a href="#" class="dropdown-item">Customs Acts, 1962</a></li>
                                            <li><a href="#" class="dropdown-item">Entry Tax Act</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">Corporate Laws</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Companies Acts 2013</a></li>
                                            <li><a href="#" class="dropdown-item">Companies Acts 1956</a></li>
                                            <li><a href="#" class="dropdown-item">The Limited Liability Partnership ACT,
                                                    2008</a></li>
                                            <li><a href="#" class="dropdown-item">The Securities and Exchange Board of
                                                    India Act, 1992</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">VAT Laws</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Delhi Value Added Tax Act, 2004</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Maharashtra Value Added Tax Act
                                                    (2002)</a></li>
                                            <li><a href="#" class="dropdown-item">Maharashtra Value Added Tax Act
                                                    (2002)</a></li>
                                            <li><a href="#" class="dropdown-item">West Bengal Value Added Tax Act,
                                                    2003</a></li>
                                            <li><a href="#" class="dropdown-item">Tamilnadu VAT ACT, 2006</a></li>
                                            <li><a href="#" class="dropdown-item">Karnataka Value Added Tax Act 2003</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Gajarat VAlue Added Tax Act, 2003</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">The Uttar Pardash Value Added Tax
                                                    2008</a></li>
                                            <li><a href="#" class="dropdown-item">Rajasthan Value Added Tax Act,
                                                    2003</a></li>
                                            <li><a href="#" class="dropdown-item">Panjab Value Added Tax Act</a></li>
                                            <li><a href="#" class="dropdown-item">Haryana Value Added Tax Act</a></li>
                                            <li><a href="#" class="dropdown-item">Telangana VAT Act 2005</a></li>
                                            <li><a href="#" class="dropdown-item">Andhra Pradesh Value Added Tax Act
                                                    2005</a></li>
                                            <li><a href="#" class="dropdown-item">Bihar Value Added Tax Act,2005</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">Other Statutes</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">
                                                    The Employees' State Insurance Act, 1948
                                                </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    The Employees' Provident Funds and Miscellaneous Provisions Act,
                                                    1952</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Profession Tax Act</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    The Indian Partnership Act, 1932</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Societies Registration Act, 1860</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Competition Act, 2002</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Reserve Bank of India Act, 1934</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Monopolies and Restrictive Trade Practices Act, 1969</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Equalisation Levy Act, 2016</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Right To Information Act, 2005</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Foreign Exchange Management Act, 1999</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Maharashtra Real Estate Regulatory Authority and Rules</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    The Real Estate (Regulation and Development) Act, 2016</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    The Insolvency And Bankruptcy Code, 2016</a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Prohibition Of Benami Property Transaction Act 1988</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">GST Laws</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">
                                                    IGST Act, 2017
                                                </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                    Central Goods and Services Tax Act, 2017
                                                </a></li>
                                            <li><a href="#" class="dropdown-item">Union Territory Goods and Services Tax
                                                    Act, 2017</a></li>
                                            <li><a href="#" class="dropdown-item">GST (Compensation to States) Act,
                                                    2017</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  dropright">
                                <a href="#" class="dropdown-item dropdown-toggle ">Forms</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">VAT Forms
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">DVAT Forms</a></li>
                                            <li><a href="#" class="dropdown-item">MVAT Forms</a></li>
                                            <li><a href="#" class="dropdown-item">WB Vat Forms</a></li>
                                            <li><a href="#" class="dropdown-item">Karnataka VAT Forms</a></li>
                                            <li><a href="#" class="dropdown-item">UPVAT Forms</a></li>
                                            <li><a href="#" class="dropdown-item">Punjab VAT Forms</a></li>
                                            <li><a href="#" class="dropdown-item">Haryana VAT Forms</a></li>
                                            <li><a href="#" class="dropdown-item">Bihar VAT Forms</a></li>
                                            <li><a href="#" class="dropdown-item">Tamil Nadu VAT Forms</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Income Tax Forms</a></li>
                                    <li><a href="#" class="dropdown-item">ROC Forms (As per Companies Act, 2013)</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">ROC Forms (As per Companies Act, 1956)</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Income Declaration Forms</a></li>
                                    <li><a href="#" class="dropdown-item">Wealth Tax Forms</a></li>
                                    <li><a href="#" class="dropdown-item">Service Tax Forms</a></li>
                                    <li><a href="#" class="dropdown-item">Companies Unpaid Dividend Forms</a></li>
                                    <li><a href="#" class="dropdown-item">NBFCs Forms</a></li>
                                    <li><a href="#" class="dropdown-item">LLP Winding up</a></li>
                                    <li><a href="#" class="dropdown-item">FEMA Forms</a></li>
                                    <li><a href="#" class="dropdown-item">Limited Liability Partnership (LLP)</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">CGST Forms
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">GST Forms</a></li>
                                            <li><a href="#" class="dropdown-item">Accounts and Records</a></li>
                                            <li><a href="#" class="dropdown-item">Advance Ruling</a></li>
                                            <li><a href="#" class="dropdown-item">Appeals and Revision</a></li>
                                            <li><a href="#" class="dropdown-item">Assessment and Audit</a></li>
                                            <li><a href="#" class="dropdown-item">Composition</a></li>
                                            <li><a href="#" class="dropdown-item">Demands and Recovery</a></li>
                                            <li><a href="#" class="dropdown-item">Input Tax Credit</a></li>
                                            <li><a href="#" class="dropdown-item">Inspection, Search and Seizure</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Offences and Penalties</a></li>
                                            <li><a href="#" class="dropdown-item">Payment of Tax</a></li>
                                            <li><a href="#" class="dropdown-item">Refund</a></li>
                                            <li><a href="#" class="dropdown-item">Registration</a></li>
                                            <li><a href="#" class="dropdown-item">Returns</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="news.php">News</a>
                    </li>
                    <li class="nav-item  mx-3 ">
                        <a class="nav-link" href="query.php">Query</a>
                    </li>

                    <li class="nav-item  mx-3">
                        <a class="nav-link" href="carees.php">Careers</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Login</a>
                            <a class="dropdown-item" href="#">Email Login</a>
                            <a class="dropdown-item" href="#">Time Sheet</a>
                        </div>
                    </li>

                    <li class="nav-item  mx-3 ">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</body>

<script>
window.onload = () => {
    const $ = document.querySelector.bind(document);
    // const $All = document.querySelectorAll.bind(document);
    $('#menu').onclick = () => {
        $('#menu').classList.toggle('rotate')
        $('.nav-page1').classList.toggle('transform')
        $('.menu-line1').classList.toggle('rotate1')
        $('.menu-line2').classList.toggle('rotate2')
        $('.menu-line3').classList.toggle('rotate3')
    }
}
</script>

</html>