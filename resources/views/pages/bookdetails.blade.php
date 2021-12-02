@extends('layout.app')

@section('content')

<div id="bookdetailsbody" class="row justify-content-center">
    <div class="col-sm-4 shadow">
        <div class="titlebooking">
            {{$title}}
        </div>
        <p> Fill out the need information to continue </p>
        <div class="bookh5">
        <h5> Appointment Date </h5>
        </div>

        <div class="">
            <div class="">
                <input placeholder="Select Date" style="color: #3fb9a4" type="text" class="form-control" id="datepicker">
            </div>
        </div>
            <br>
            <h5> Morning </h5>
            

            <div id="firstbox" class="col-sm-15 row shadow p-1 mb-4 rounded ">
                        <label name="label1" id="label1" class="col-sm-3 mt-2 btn">
                            <input class="t830AM"type="radio" id="t830AM" name="timesched" value="08:30 AM">
                            <i class="fas fa-clock"> 08:30 AM</i>
                        </label>

                        <label name="label2" id="label2" class="col-sm-3 mt-2 btn">
                            <input type="radio" id="09:00AM" name="timesched" autocomplete="off" value="09:00 AM">
                            <i class="fas fa-clock"> 09:00 AM</i>
                        </label>

                        <label name="label3" id="label3" class="col-sm-3 mt-2 btn">
                            <input type="radio" id="09:30AM" name="timesched" autocomplete="off" value="09:30 AM">
                           <i class="fas fa-clock"> 09:30 AM</i>
                        </label>

                        <label name="label4" id="label4" class="col-sm-3 mt-2 btn">
                            <input type="radio" id="10:00AM" name="timesched" autocomplete="off" value="10:00 AM">
                            <i class="fas fa-clock"> 10:00 AM</i>
                        </label>

                        <label name="label5" id="label5" class="col-sm-3 mt-2 btn">
                            <input type="radio" id="10:30AM" name="timesched" autocomplete="off" value="10:30 AM">
                            <i class="fas fa-clock"> 10:30 AM</i>
                        </label>

                        <label name="label6" id="label6" class="col-sm-3 mt-2 btn">
                            <input type="radio" id="11:00AM" name="timesched" autocomplete="off" value="11:00 AM">
                            <i class="fas fa-clock"> 11:00 AM</i>
                        </label>

                        <label name="label7" id="label7" class="col-sm-3 mt-2 btn">
                            <input type="radio" id="11:30AM" name="timesched" autocomplete="off" value="11:30 AM">
                            <i class="fas fa-clock"> 11:30 AM</i>
                        </label>

                        <label name="label8" id="label8" class="col-sm-3 mt-2 btn">
                            <input type="radio" id="12:0AM" name="timesched" autocomplete="off" value="12:00 AM">
                            <i class="fas fa-clock"> 12:00 AM</i>
                        </label>
            </div>

            <h5> Evening </h5>

            <div id="firstbox" class="col-sm-15 row shadow p-1 mb-4 rounded">
                <label name="label9" id="label9" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="12:30AM" name="timesched" autocomplete="off" value="12:30 AM">
                    <i class="fas fa-clock"> 12:30 AM</i>
                </label>

                <label name="label10" id="label10" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="01:00AM" name="timesched" autocomplete="off" value="01:00 AM">
                    <i class="fas fa-clock"> 01:00 AM</i>
                </label>

                <label name="label11" id="label11" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="01:30AM" name="timesched" autocomplete="off" value="01:30 AM">
                    <i class="fas fa-clock"> 01:30 AM</i>
                </label>

                <label name="label12" id="label12" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="02:00AM" name="timesched" autocomplete="off" value="02:00 AM">
                    <i class="fas fa-clock"> 02:00 AM</i>
                </label>

                <label name="label13" id="label13" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="02:30AM" name="timesched" autocomplete="off" value="02:30 AM">
                    <i class="fas fa-clock"> 02:30 AM</i>
                </label>

                <label name="label14" id="label14" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="03:00AM" name="timesched" autocomplete="off" value="03:00 AM">
                    <i class="fas fa-clock"> 03:00 AM</i>
                </label>

                <label name="label15" id="label15" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="03:30AM" name="timesched" autocomplete="off" value="03:30 AM">
                    <i class="fas fa-clock"> 03:30 AM</i>
                </label>

                <label name="label16" id="label16" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="04:00AM" name="timesched" autocomplete="off" value="04:00 AM">
                    <i class="fas fa-clock"> 04:00 AM</i>
                </label>

                <label name="label17" id="label17" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="04:30AM" name="timesched" autocomplete="off" value="04:30 AM">
                    <i class="fas fa-clock"> 04:30 AM</i>
                </label>

                <label name="label18" id="label18" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="05:00AM" name="timesched" autocomplete="off" value="05:00 AM">
                    <i class="fas fa-clock"> 05:00 AM</i>
                </label>

                <label name="label19" id="label19" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="05:30AM" name="timesched" autocomplete="off" value="05:30 AM">
                    <i class="fas fa-clock"> 05:30 AM</i>
                </label>

                <label name="label20" id="label20" class="col-sm-3 mt-2 btn">
                    <input type="radio" id="06:00AM" name="timesched" autocomplete="off" value="06:00 AM">
                    <i class="fas fa-clock"> 06:00 AM</i>
                </label>
            </div>

        <h5> Service Type </h5>

            <div class="form-group">
                <label style="color: #3fb9a4; font-weight: bold;" class="form-label primary" for="service_type">Service Type <i id="service_type-error" class="fas fa-exclamation-circle error" style="display: none" aria-hidden="true"></i></label>
                <select name="service_type" id="service_type" class="form-control valid" aria-invalid="false">
                    <option>Choose Here</option>
                    <option name="service_type" value="in-lounge">In-lounge</option>
                    <option name="service_type" value="home-service">Home Service</option>
                    <label id="service_type-error" class="error" for="service_type"></label></select>

                    <br>

                    <label style="color: #3fb9a4; font-weight: bold;" class="form-label primary" for="service_category">Service Category <i id="service_category-error" class="fas fa-exclamation-circle error" style="display: none" aria-hidden="true"></i></label>
                    <select name="service_category" id="service_category" class="form-control valid" onChange="changecat(this.value);">
                        <option>Choose Here</option>
                        <option value="A">LASH</option>
                        <option value="B">WAX</option>
                        <option value="C">NAILS</option>
                        <option value="D">FOOT SPA</option>
                        <option value="E">PARAFFIN</option>
                        <option value="F">KIDDIE</option>
                        </select>
                        <br>
                    <label style="color: #3fb9a4; font-weight: bold;" class="form-label primary" for="specific_service">Specific Service<i id="specific_service-error" class="fas fa-exclamation-circle error" style="display: none" aria-hidden="true"></i></label>
                    <select name="category" id="category" class="form-control valid" aria-invalid="false">
                    <option id="">Choose Here</option>
                    </select>
           <br>
                </div>
    </div>
</div>

<br>
<div class="row justify-content-center">
    <div class="col-sm-8 text-center">
    <a type="submit" style="color:black; background-color: #3fb9a4; border-color: #3fb9a4;" id="detailsinfobtn" class="btn btn-primary w-50 ripple-surface">Next</a>
    </div>
    </div>
    <br>

    <script type="text/javascript">
    var mealsByCategory = {
    A: ["Natural Lash Extension", "5D Lash Extension", "Tea", "Lash Removal", "Retouch", "Eyelash Repair", "Oh! Happy Day Package"],
    B: ["Arm Wax", "Back Wax", "Bikini Wax", "Brazillian Wax", "Butt Cheeck Wax", "Chest Wax", "Eyebrow",
        "Whole Face Wax", "Fingers Wax", "Full Body Wax", "Full Leg Wax", "Knees Wax", "Lower Lip Wax",
        "Brazillian with Soothing Mask Wax", "Nape Wax", "Nostrils Wax", "Toes Wax", "Underarm Wax", "Upper Lip Wax"],
    C: ["Manicure", "Pedicure", "Gel Manicure", "Gel Pedicure", "Gel Removal"],
    D: ["Regular Foot Spa", "Foot Logix"],
    E: ["Hand Paraffin", "Foot Paraffin"],
    F: ["Kiddie Foot Spa", "Kiddie Hand Spa", "Kiddie Manicure", "Kiddie Pedicure"]}

    function changecat(value) {
        if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
        else {
            var catOptions = "";
            for (categoryId in mealsByCategory[value]) {
                catOptions += "<option>" + mealsByCategory[value][categoryId] + "</option>";
            }
            document.getElementById("category").innerHTML = catOptions;
        }
    }
    </script>

    <script>

        $(document).ready(function(){

            $('.col-sm-15').hover(
            function(){
                $(this).css({                       
                    
                    borderStyle: "groove"

                });
            },

            function(){
                $(this).css ({
                    borderStyle: ""
                });
                 }
            );
        })

    </script>

@endsection