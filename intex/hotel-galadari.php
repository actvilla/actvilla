<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker3.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#ad , #dd').datepicker({
                });
                var night = 0, usd = 0, noofroom = 0;
                $("input[name$='billing_method']").click(function () {
                    var getval = $(this).val();
                    if (getval === "Card") {
                        $("#cashbox").hide();
                        $("#cardbox").show();

                    }
                    if (getval === "Cash") {
                        $("#cardbox").hide();
                        $("#cashbox").show();
                    }

                });
                $("input[name$='standard']").click(function () {
                    var usd = $(this).attr("usd");
                    var night = $("input[name='days']:checked").attr("night");
                    var noofroom = $("input[name='no_rooms']").val();
                    if (typeof night === "undefined") {
                        night = 0;
                    }
                    if (typeof noofroom === "undefined") {
                        noofroom = 0;
                    }
                    $("#total").val(usd * (night * noofroom));


                });
                $("input[name$='days']").click(function () {
                    var night = $(this).attr("night");
                    var usd = $("input[name='standard']:checked").attr("usd");
                    var noofroom = $("input[name='no_rooms']").val();
                    if (typeof usd === "undefined") {
                        usd = 0;
                    }

                    if (typeof noofroom === "undefined") {
                        noofroom = 0;
                    }

                    $("#total").val(night * (usd * noofroom));

                });
                $("input[name$='no_rooms']").keyup(function () {
                    var noofroom = $(this).val();
                    var usd = $("input[name='standard']:checked").attr("usd");
                    var night = $("input[name='days']:checked").attr("night");
                    //var noofroom = $("input[name='no_rooms']").val();

                    if (typeof usd === "undefined") {
                        usd = 0;
                    }
                    if (typeof night === "undefined") {
                        night = 0;
                    }
                    if (typeof noofroom === "undefined") {
                        noofroom = 0;
                    }
                    $("#total").val(night * (usd * noofroom));

                });
                /*$("input[name$='cashtype']").click(function () {
                 var getval = $(this).val();
                 if (getval === "IN USD") {
                 $("input[name$='inusd']").attr("required", true);
                 $("input[name$='inlkr']").removeAttr("required");
                 }
                 if (getval === "IN LKR") {
                 $("input[name$='inlkr']").attr("required", true);
                 $("input[name$='inusd']").removeAttr("required");
                 }
                 
                 });*/
                $("input[name$='cardtype']").click(function () {
                    var getval = $(this).val();
                    if (getval === "Visa Card") {
                        $("input[name$='visa_card_no']").attr("required", true);
                        $("input[name$='visa_date_expiry']").attr("required", true);

                        $("input[name$='master_card_no']").removeAttr("required");
                        $("input[name$='master_date_expiry']").removeAttr("required");
                        $("input[name$='amex_card_no']").removeAttr("required");
                        $("input[name$='amex_date_expiry']").removeAttr("required");
                    }
                    if (getval === "Master Card") {
                        $("input[name$='master_card_no']").attr("required", true);
                        $("input[name$='master_date_expiry']").attr("required", true);

                        $("input[name$='visa_card_no']").removeAttr("required");
                        $("input[name$='visa_date_expiry']").removeAttr("required");
                        $("input[name$='amex_card_no']").removeAttr("required");
                        $("input[name$='amex_date_expiry']").removeAttr("required");
                    }
                    if (getval === "AMEX Card") {
                        $("input[name$='amex_card_no']").attr("required", true);
                        $("input[name$='amex_date_expiry']").attr("required", true);

                        $("input[name$='visa_card_no']").removeAttr("required");
                        $("input[name$='visa_date_expiry']").removeAttr("required");
                        $("input[name$='master_card_no']").removeAttr("required");
                        $("input[name$='master_date_expiry']").removeAttr("required");
                    }

                });
            });
        </script>
        <style>
            h4{
                margin-top:0px;
            }

            .form-group{

                margin-bottom:20px;

            }

            .control-label{
                text-align:left;
            }

            /*.container{
                width:1000px;

            }
            */
            .form-colr{
                margin-top:20px;
                border-radius:15px;
                padding:20px 20px 10px 20px;
                background-color:#EEEEEE;
            }

            label.error{
                color:red;
                display:none;
            }

        </style>

    </head>
    <body>

        <div class="container">
             <h3 style="text-align: center;">Special Discounted Room Rates at Galadari Hotel</h3>
            <h4 style="text-align: center; color: red;">(Limited rooms are available on a first come, first served basis.)</h4>
            <form id="intexform" name="intexform" class="form-horizontal" method="POST" action="output/tcpdf/examples/hotel-galadari.php">

                <div class="form-group">
                    <div class="col-sm-4">
                        <label class="radio-inline"><input type="radio" name="standard" class="standard" value="Standard-Single : USD 125 Nett" usd="125" required>Standard-Single : USD 125 Nett</label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline"><input type="radio" name="standard" class="standard" value="Standard-Double : USD 135 Nett" usd="135">Standard-Double : USD 135 Nett</label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline"><input type="radio" name="standard" class="standard" value="Standard-Twin : USD 135 Nett" usd="135">Standard-Twin : USD 135 Nett</label>
                    </div>
                </div>
                <label for="standard" class="error">This field is required.</label>
                <div class="form-colr">
                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Company Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="compname" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="usr">Name of Representative 1 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <label class="col-sm-2 control-label" for="usr">Designation :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="designation" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="usr">Name of Representative 2 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="name2">
                        </div>
                        <label class="col-sm-2 control-label" for="usr">Designation :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="designation2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="usr">Address :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="usr">City :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="city" required>
                        </div>
                        <label class="col-sm-2 control-label" for="usr">State :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="state" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="usr">Country :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="country" required>
                        </div>
                        <label class="col-sm-2 control-label" for="usr">Pincode / Zipcode:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="pincode" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="usr">Telephone :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="telephone" required>
                        </div>
                        <label class="col-sm-2 control-label" for="usr">Mobile :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="mobile" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="email">Email :</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <label class="col-sm-2 control-label" for="usr">Website :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="website">
                        </div>

                    </div>
                </div>


               


                <h3>HOTEL BOOKING DETAILS</h3>
                <div class="form-colr">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="usr">Arrival Date :</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="ad" id="ad" required>
                        </div>


                        <label class="col-sm-2 control-label" for="usr">Departure Date :</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="dd" id="dd" required>
                        </div>

                    </div>
                    
                    <label for="dates[]" class="error">This field is required.</label>
                </div>

                <div class="form-colr">
                    <h4>No. of Nights :</h4>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="days" night="1" value="1 Night" required>1 Night</label>
                        </div>

                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="days" night="2" value="2 Nights">2 Nights</label>
                        </div>

                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="days" night="3" value="3 Nights">3 Nights</label>
                        </div>

                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="days" night="4" value="4 Nights">4 Nights</label>
                        </div>

                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="days" night="5" value="5 Nights">5 Nights</label>
                        </div>
                        
                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="days" night="6" value="6 Nights">6 Nights</label>
                        </div>
                        
                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="days" night="7" value="7 Nights">7 Nights</label>
                        </div>
                        
                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="days" night="8" value="8 Nights">8 Nights</label>
                        </div>
                        
                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="days" night="9" value="9 Nights">9 Nights</label>
                        </div>
                        
                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="days" night="10" value="10 Nights">10 Nights</label>
                        </div>
                    </div>
                    <label for="days" class="error">This field is required.</label>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">No of rooms :</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="no_rooms" required>
                        </div>
                        <label class="col-sm-2 control-label" style="text-align: left;">Preference :</label>
                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="preference_type" value="Smoking" required>Smoking</label>
                        </div>

                        <div class="col-sm-2">
                            <label class="radio-inline"><input type="radio" name="preference_type" value="Non-smoking">Non-smoking</label>
                        </div>
                    </div>
                    <label for="preference_type" class="error">This field is required.</label>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Total (IN USD): </label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="total" name="total" readonly>

                        </div>

                    </div>



                </div>

                <div class="form-colr">
                    <h4>BILLING ARRANGEMENTS :</h4>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label class="radio-inline"><input type="radio" name="billing_method" value="Card" required>Credit Card</label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline"><input type="radio" name="billing_method" value="Cash">Cash</label>
                        </div>

                    </div>
                    <label for="billing_method" class="error">This field is required.</label>
                    <div id="cardbox" style="display:none;">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="radio-inline"><input type="radio" name="cardtype" value="Visa Card" required>Visa Card No :</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="visa_card_no">
                            </div>

                            <label class="col-sm-3 control-label" for="usr">Date of Expiry :</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="visa_date_expiry">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="radio-inline"><input type="radio" name="cardtype" value="Master Card">Master Card No :</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="master_card_no">
                            </div>

                            <label class="col-sm-3 control-label" for="usr">Date of Expiry :</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="master_date_expiry">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="radio-inline"><input type="radio" name="cardtype" value="AMEX Card">AMEX Card No :</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="amex_card_no">
                            </div>
                            <label class="col-sm-3 control-label" for="usr">Date of Expiry :</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="amex_date_expiry">
                            </div>

                        </div>
                    </div>
                    <label for="cardtype" class="error">This field is required.</label>
                    <div id="cashbox" style="display:none;">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="radio-inline"><input type="radio"  name="cashtype" value="IN USD" required>IN USD :</label>
                            </div>
                            <div class="col-sm-4">

                            </div>
                            <div class="col-sm-2">
                                <label class="radio-inline"><input type="radio"  name="cashtype" value="IN LKR">IN LKR :</label>
                            </div>
                            <div class="col-sm-4">

                            </div>
                        </div>
                        <label for="cashtype" class="error">This field is required.</label>
                    </div>
                    <div class="form-group">
                        <div align="center" class="col-sm-12">
                            <input class="submit" type="submit" value="Submit">
                        </div>
                    </div>

                </div>



                <div>&#160;</div>

                <h4>IMPORTANT NOTES</h4>
                <ul>
                    <li>Standard check-in time is after <strong>12:00 noon</strong> & standard check-out time is before <strong>12:00 noon</strong>.</li>
                    <li>Complimentary breakfast.</li>
                    <li>Complimentary internet access.</li>
                    <li>Subject to room availability on first-come-first-serve basis.</li>

                </ul>


            </form>
            <script>
                $("#intexform").validate();
            </script>
        </div>

    </body>
</html>
