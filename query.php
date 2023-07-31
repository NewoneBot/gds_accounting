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
        <div class="row bg-light p-5" style="  box-shadow: 5px 10px 10px;">
            <div class="col-12 text-center">
                <h2>:: Query ::
                    <hr>
                </h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Name</label>
                <input class="form-control" class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">
                    Designation</label>
                <input class="form-control" class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Organization</label>
                <input class="form-control" class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Office Address</label>
                <input class="form-control" class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">City *</label>
                <input class="form-control" class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="">E-mail address*</label>
                <input class="form-control" class="form-control" type="text" class="w-100">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Telephone No.</label>
                <input class="form-control" class="form-control" type="text" class="w-100">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <label for="">Mobile *</label>
                <input class="form-control" class="form-control" type="text" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-3">
                <label for="" class="w-100">Other professional updates*</label>
                <label>Yes</label>
                <input type="radio" value="rdb_yes">
                <label>No</label>
                <input type="radio" value="rdb_yes">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="drp_subjectofquery" class="lbl">
                    <span class="bold-text">Subject of Query<font color="red">*</font></span></label>
                <select class="form-control">
                    <option value="0">-----Please Select-----</option>
                    <option value="Income Tax">Income Tax</option>
                    <option value="Audit">Audit</option>
                    <option value="Service Tax">Service Tax</option>
                    <option value="Company Law">Company Law</option>
                    <option value="Excise Duty">Excise Duty</option>
                    <option value="Customs">Customs</option>
                    <option value="Wealth Tax">Wealth Tax</option>
                    <option value="Sales Tax/Value Added Tax">Sales Tax/Value Added Tax</option>
                    <option value="FEMA">FEMA</option>
                    <option value="RBI">RBI</option>
                    <option value="Labour Law">Labour Law</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label for="" class="w-100">Query*</label>
                <textarea class="form-control" rows="2" class="w-100">
                    </textarea>
            </div>
            <div class="col-lg-12 col-md-12 col-12 p-5">
                <button class="btn  btn-danger">back</button>
                <button class="btn btn-success">submit</button>
            </div>

        </div>
    </div>

    <?php include "footer.php";?>

</body>

</html>