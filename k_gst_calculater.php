<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>value added tax</title>
</head>

<body>
    <?php include "nav.php";?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 p-3">
                <div class="cal_contain w-100 ">
                    <div class="table-responsive">

                        <table class="table center-block gst-calc">
                            <thead>
                                <tr>
                                    <th style="text-align:center;" class="gst-calc1">Type Of Sale</th>
                                    <th style="text-align:center;" class="gst-calc2">Rate OF Tax</th>
                                    <th style="text-align:center;" class="gst-calc3">Taxable Amount</th>
                                    <th style="text-align:center;" class="gst-calc4">Total Tax Amount</th>
                                    <th style="text-align:center;" class="gst-calc5">IGST</th>
                                    <th style="text-align:center;" class="gst-calc6">CGST</th>
                                    <th style="text-align:center;" class="gst-calc7">SGST</th>
                                    <th style="text-align:center;" class="gst-calc8">Rate of Cess</th>
                                    <th style="text-align:center;" class="gst-calc9">CESS</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class=" form-control-static" id="drptype"
                                            onchange="return calculatetax();">
                                            <option value="1">Inter State Sale
                                            <option value="2">Intra State Sale
                                        </select>
                                    </td>
                                    <td> <select class=" form-control-static" id="drprate1"
                                            onchange="return calculatetax();">
                                            <option value="0">select....
                                            <option value="0.25">0.25
                                            <option value="3">3
                                            <option value="5">5
                                            <option value="12">12
                                            <option value="18">18
                                            <option value="28">28
                                        </select></td>
                                    <td><input class="form-control" id="txtamt1" onblur="return calculatetax();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>
                                    <td><input class="form-control" id="tottaxamt1" style="text-align:right;"
                                            readonly="" type="text"></td>
                                    <td><input class="form-control" id="txtigst1" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtcgst1" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtsgst1" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txttaxcess1" onblur="return calculatetax();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>
                                    <td><input class="form-control" id="txtcess1" style="text-align:right;" readonly=""
                                            type="text"></td>

                                </tr>

                                <tr>
                                    <td>
                                        <select class=" form-control-static" id="drptype2"
                                            onchange="return calculatetax2();">
                                            <option value="1">Inter State Sale
                                            <option value="2">Intra State Sale
                                        </select>
                                    </td>
                                    <td>
                                        <select class=" form-control-static" id="drprate2"
                                            onchange="return calculatetax2();">
                                            <option value="0">select....
                                            <option value="0.25">0.25
                                            <option value="3">3
                                            <option value="5">5
                                            <option value="12">12
                                            <option value="18">18
                                            <option value="28">28
                                        </select>
                                    </td>
                                    <td><input class="form-control" id="txtamt2" onkeypress="return DigitOnly(event);"
                                            onblur="return calculatetax2();" style="text-align:right;" type="text"></td>
                                    <td><input class="form-control" id="tottaxamt2" style="text-align:right;"
                                            readonly="" type="text"></td>
                                    <td><input class="form-control" id="txtigst2" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtcgst2" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtsgst2" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txttaxcess2" onblur="return calculatetax2();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>
                                    <td><input class="form-control" id="txtcess2" style="text-align:right;" readonly=""
                                            type="text"></td>

                                </tr>

                                <tr>
                                    <td>
                                        <select class="form-control-static" id="drptype3"
                                            onchange="return calculatetax3();">
                                            <option value="1">Inter State Sale
                                            <option value="2">Intra State Sale
                                        </select>
                                    </td>
                                    <td> <select class="form-control-static" id="drprate3"
                                            onchange="return calculatetax3(); ">
                                            <option value="0">select....
                                            <option value="0.25">0.25
                                            <option value="3">3
                                            <option value="5">5
                                            <option value="12">12
                                            <option value="18">18
                                            <option value="28">28
                                        </select></td>
                                    <td><input class="form-control" id="txtamt3" onblur="return calculatetax3();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>
                                    <td><input class="form-control" id="tottaxamt3" style="text-align:right;"
                                            readonly="" type="text"></td>
                                    <td><input class="form-control" id="txtigst3" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtcgst3" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtsgst3" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txttaxcess3" onblur="return calculatetax3();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>

                                    <td><input class="form-control" id="txtcess3" style="text-align:right;" readonly=""
                                            type="text"></td>

                                </tr>

                                <tr>
                                    <td>
                                        <select class=" form-control-static" id="drptype4"
                                            onchange="return calculatetax4();">
                                            <option value="1">Inter State Sale
                                            <option value="2">Intra State Sale
                                        </select>
                                    </td>
                                    <td> <select class=" form-control-static" id="drprate4"
                                            onchange="return calculatetax4();">
                                            <option value="0">select....
                                            <option value="0.25">0.25
                                            <option value="3">3
                                            <option value="5">5
                                            <option value="12">12
                                            <option value="18">18
                                            <option value="28">28
                                        </select></td>
                                    <td><input class="form-control" id="txtamt4" onblur="return calculatetax4();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>
                                    <td><input class="form-control" id="tottaxamt4" style="text-align:right;"
                                            readonly="" type="text"></td>
                                    <td><input class="form-control" id="txtigst4" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtcgst4" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtsgst4" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txttaxcess4" onblur="return calculatetax4();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>

                                    <td><input class="form-control" id="txtcess4" style="text-align:right;" readonly=""
                                            type="text"></td>

                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control-static" id="drptype5"
                                            onchange="return calculatetax5();">
                                            <option value="1">Inter State Sale
                                            <option value="2">Intra State Sale
                                        </select>
                                    </td>
                                    <td> <select class="form-control-static" id="drprate5"
                                            onchange="return calculatetax5();">
                                            <option value="0">select....
                                            <option value="0.25">0.25
                                            <option value="3">3
                                            <option value="5">5
                                            <option value="12">12
                                            <option value="18">18
                                            <option value="28">28
                                        </select></td>
                                    <td><input class="form-control" id="txtamt5" onblur="return calculatetax5();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>
                                    <td><input class="form-control" id="tottaxamt5" style="text-align:right;"
                                            readonly="" type="text"></td>
                                    <td><input class="form-control" id="txtigst5" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtcgst5" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtsgst5" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txttaxcess5" onblur="return calculatetax5();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>

                                    <td><input class="form-control" id="txtcess5" style="text-align:right;" readonly=""
                                            type="text"></td>

                                </tr>
                                <tr>
                                    <td>
                                        <select class=" form-control-static" id="drptype6"
                                            onchange="return calculatetax6();">
                                            <option value="1">Inter State Sale
                                            <option value="2">Intra State Sale
                                        </select>
                                    </td>
                                    <td> <select class=" form-control-static" id="drprate6"
                                            onchange="return calculatetax6();">
                                            <option value="0">select....
                                            <option value="0.25">0.25
                                            <option value="3">3
                                            <option value="5">5
                                            <option value="12">12
                                            <option value="18">18
                                            <option value="28">28
                                        </select></td>
                                    <td><input class="form-control" id="txtamt6" onblur="return calculatetax6();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>
                                    <td><input class="form-control" id="tottaxamt6" style="text-align:right;"
                                            readonly="" type="text"></td>
                                    <td><input class="form-control" id="txtigst6" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtcgst6" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txtsgst6" style="text-align:right;" readonly=""
                                            type="text"></td>
                                    <td><input class="form-control" id="txttaxcess6" onblur="return calculatetax6();"
                                            onkeypress="return DigitOnly(event);" style="text-align:right;" type="text">
                                    </td>

                                    <td><input class="form-control" id="txtcess6" style="text-align:right;" readonly=""
                                            type="text"></td>

                                </tr>
                                <tr class="calc-res">
                                    <td colspan="2">&nbsp;

                                    </td>
                                    <td align="left">
                                        <h6 class="left">Total Amount :<span id="totamt"
                                                style="text-align:right;float:right;text-decoration:underline;"></span>
                                        </h6>
                                    </td>
                                    <td align="left">
                                        <h6 class="left">Total Tax : <span id="tottax"
                                                style="text-align:right;float:right;text-decoration:underline;"></span>
                                        </h6>
                                    </td>
                                    <td align="left">
                                        <h6 class="left">Total IGST : <span id="totigst"
                                                style="text-align:right;float:right;text-decoration:underline;"></span>
                                        </h6>
                                    </td>
                                    <td align="left">
                                        <h6 class="left">Total CGST : <span id="totcgst"
                                                style="text-align:right;float:right;text-decoration:underline;"></span>
                                        </h6>
                                    </td>
                                    <td align="left">
                                        <h6 class="left">Total SGST : <span id="totsgst"
                                                style="text-align:right;float:right;text-decoration:underline;"></span>
                                        </h6>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td align="left">
                                        <h6 class="left">Total CESS : <span id="totcess"
                                                style="text-align:right;float:right;text-decoration:underline;"></span>
                                        </h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9" align="right">
                                        <br>
                                        <input class="btn-danger" onclick="return cleartextboxes();" value="Reset"
                                            type="button">

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php";?>
</body>

</html>