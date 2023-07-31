<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "nav.php";?>
    <div class="container  box  p-5">
        <div class="row p-5" style="  box-shadow: 5px 8px 15px;">
            <div class="col-12 text-center">
                <h2>-APPLY HERE-
                </h2>
                <p>We nurture and cultivate a sense pride in the work and create team leaders. Your growth chart will be
                    governed by well-defined transparent policies of the firm. Apply via the form given below and meet
                    us for face to face interview.</p>
                <hr>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">First Name</label>
                <input class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">
                    Last Name</label>
                <input class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Email</label>
                <input class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Mobile No *</label>
                <input class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Gender *</label>
                <select class="form-control" style="font-family:Arial;width:100%;">
                    <option value="0">-----Please Select-----</option>
                    <option value="Others">Male</option>
                    <option value="Others">Female</option>
                </select>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Position you are applying for</label>
                <input class="form-control" type="text" class="w-100">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Date Of Birth (DD/MM/YYYY)*</label>
                <input class="form-control" type="text" class="w-100">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Highest Qualification</label>
                <input class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Portfolio website</label>
                <input class="form-control" type="text" class="w-100" placeholder="http://">
            </div>
            <div class=" col-lg-6 col-md-6 col-12">
                <label for="FileUpload1">
                    <span>Upload Resume<span style="font-size: small;">*( Max size 1 mb )</span></span></label>
                <input type="file" class="form-control">

            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Last company you worked for</label>
                <input class="form-control" type="text" class="w-100">
            </div>
            <div class=" col-lg-6 col-md-6 col-12 d-flex">
                <table class="p-3">
                    <tr>
                        <td>Years Of Experience</td>
                        <td> | Month</td>
                    </tr>
                    <tr class="">
                        <td>
                            <select class="form-control" id="expyear" name="expyear" style="width:100%;">
                                <option value="-1">Select Year</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" id="expmnth" name="expmnth" style="width:100%;">
                                <option value="-1">Select Month</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                            </select>
                        </td>
                    </tr>
                </table>

            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label for="" class="w-100">Reference / Comments / Questions</label>
                <textarea class="form-control" class="form-control" rows="2" class="w-100"></textarea>
            </div>
            <div class="col-lg-12 col-md-12 col-12 p-5 text-center">
                <button class="btn btn-light border">Send Application</button>
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
</body>

</html>