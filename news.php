<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <title>


    </title>
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
    <link href="CSS/NewStyleSheet.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript">
    function visible1() {
        document.getElementById("tr1").style.display = "block";
        document.getElementById("tr2").style.display = "none";
        document.getElementById("tr3").style.display = "none";
        document.getElementById("td1").bgColor = "gray";
        document.getElementById("td2").bgColor = "silver";
        document.getElementById("td3").bgColor = "silver";
    }

    function visible2() {
        document.getElementById("tr1").style.display = "none";
        document.getElementById("tr2").style.display = "block";
        document.getElementById("tr3").style.display = "none";
        document.getElementById("td1").bgColor = "silver";
        document.getElementById("td2").bgColor = "gray";
        document.getElementById("td3").bgColor = "silver";
    }

    function visible3() {
        document.getElementById("tr1").style.display = "none";
        document.getElementById("tr2").style.display = "none";
        document.getElementById("tr3").style.display = "block";
        document.getElementById("td1").bgColor = "silver";
        document.getElementById("td2").bgColor = "silver";
        document.getElementById("td3").bgColor = "gray";
    }
    </script>
    <style type="text/css">
    * {
        font-family: Arial !important;
        font-weight: 200 !important;
    }

    A:link {
        text-decoration: none
    }

    A:visited {
        text-decoration: none
    }

    A:active {
        text-decoration: none
    }

    A:hover {
        text-decoration: underline;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="/usercss/afterloginbar.css" />
    <link rel="stylesheet" type="text/css" href="/usercss/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/usercss/blog.css" />
    <link rel="stylesheet" type="text/css" href="/usercss/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/usercss/bootstrap.min.css" />
    <script language="javascript" type="text/javascript" src="/usercss/bootstrap.min.js"> </script>
    <link rel="stylesheet" type="text/css" href="/usercss/ca-style.css" />
    <link rel="stylesheet" type="text/css" href="/usercss/hit-counter.css" />
    <script language="javascript" type="text/javascript" src="/usercss/jquery.easing.1.3.js"> </script>
    <script language="javascript" type="text/javascript" src="/usercss/jquery.js"> </script>
    <script language="javascript" type="text/javascript" src="/usercss/jquery.min.js"> </script>
    <script language="javascript" type="text/javascript" src="/usercss/jssor.js"> </script>
    <script language="javascript" type="text/javascript" src="/usercss/jssor.slider.js"> </script>
    <link rel="stylesheet" type="text/css" href="/usercss/login.css" />
    <script language="javascript" type="text/javascript" src="/usercss/menu.js"> </script>
    <link rel="stylesheet" type="text/css" href="/usercss/Res-Style.css" />
    <script language="javascript" type="text/javascript" src="/usercss/responsiveslides.min.js"> </script>
    <link rel="stylesheet" type="text/css" href="/usercss/slider-style.css" />
    <link rel="stylesheet" type="text/css" href="/usercss/style-main.css" />
    <link rel="stylesheet" type="text/css" href="/usercss/test-res-style.css" />
</head>

<body style="font-size: 12pt; margin: 0px" onload="visible1()">
    <form name="form1" method="post" action="News.aspx" id="form1">
        <div class="container-fluid">
            <div class="col-md-12">
                <div>
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                        value="/wEPDwULLTE0MDkxNzYwNDNkZBW6SfV6+P19f8X9kN4kDWtb6XQC" />
                </div>
                <div>
                    <table width="100%">
                        <tr>
                            <td id="td1" class="headerNew" onclick="visible1()" style="width: 30%; cursor:pointer;"
                                align="center">
                                Business News
                            </td>
                            <td id="td2" onclick="visible2();" class="headerNew"
                                style="width: 30%;cursor:pointer;margin-top:10px;" align="center">
                                National News
                            </td>
                            <td id="td3" class="headerNew" onclick="visible3();" style="width: 40%;cursor:pointer;"
                                align="center">
                                International News
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr style="width: 100%" id="tr1">
                            <td style="width: 100%;font-family:Verdana; font-size:14px;">
                                <script language="javascript" type="text/javascript"
                                    src="https://feed2js.org//feed2js.php?src=http%3A%2F%2Feconomictimes.indiatimes.com%2Frssfeedsdefault.cms">
                                </script>

                            </td>
                        </tr>
                        <tr style="width: 100%" id="tr2">
                            <td
                                style="width: 100%; font-family:Verdana; font-size:14px; padding-top:10px; list-style-type:circle;">


                                <script type="text/javascript"
                                    src="//rss.bloople.net/?url=https%3A%2F%2Ftimesofindia.indiatimes.com%2Frssfeeds%2F-2128936835.cms&detail=-1&showtitle=false&type=js">
                                </script>

                            </td>
                        </tr>
                        <tr style="width: 100%" id="tr3">
                            <td>
                                <table>
                                    <tr>
                                        <td style="width: 50%; font-family:Verdana; font-size:14px;" valign="top">

                                            <script language="JavaScript"
                                                src="https://feed2js.org//feed2js.php?src=http%3A%2F%2Frss.news.yahoo.com%2Frss%2Ftopstories"
                                                type="text/javascript"></script>

                                        </td>
                                        <td style="width: 50%;font-family:Verdana; font-size:14px;" valign="top">

                                            <script language="JavaScript"
                                                src="https://feed2js.org//feed2js.php?src=http%3A%2F%2Fnews.bbc.co.uk%2Frss%2Fnewsonline_world_edition%2Ffront_page%2Frss.xml"
                                                type="text/javascript"></script>

                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div>

                    <script type="text/javascript">
                    td1.bgColor = "gray";
                    </script>

                </div>
            </div>
        </div>
    </form>
</body>

</html>