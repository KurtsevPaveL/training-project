
    $("document").ready(function () {
        $("body").click(function () {
            var click = event.target.id;
            switch (click) {
                case ("specifyWeight"):
                    var weight = $("#weight").val();
                    $.ajax({
                        type: 'POST',
                        url: 'php/oop5response/oop5response.php',
                        data: {
                            weight: weight,
                            ajax1: "ajax1"
                        },
                        success: function (data) {
                            $('#inputCharacteristics').html(data);
                        }
                    });
                    break;
                case ("countTax"):
                    var data = [];
                    //Common
                    data ["characteristic"] = $("#characteristic").val();
                    data ["weightEmpty"] = $("#weightEmpty").val();
                    data ["weightFull"] = $("#weightFull").val();
                    data ["engineVol"] = $("#engineVol").val();
                    data ["fuelType"] = $("#fuelType").val();
                    //Car
                    data ["typeTransmission"] = $("#typeTransmission").val();
                    data ["numPassenger"] = $("#numPassenger").val();
                    data ["bodyType"] = $("#bodyType").val();
                    //Truck
                    data["allowedWeightTrailer"] = $("#allowedWeightTrailer").val();
                    data["numAxle"] = $("#numAxle").val();

                    $.ajax({
                        type: 'POST',
                        url: 'php/oop5response/oop5response.php',
                        data: {
                            characteristic: data["characteristic"],
                            weightEmpty: data ["weightEmpty"],
                            weightFull: data ["weightFull"],
                            engineVol: data ["engineVol"],
                            fuelType: data ["fuelType"],
                            typeTransmission: data ["typeTransmission"],
                            numPassenger: data ["numPassenger"],
                            bodyType: data ["bodyType"],
                            allowedWeightTrailer: data ["allowedWeightTrailer"],
                            numAxle: data ["numAxle"],
                            ajax2: "ajax2"
                        },
                        success: function (data) {
                            $('#results').html(data);
                        }
                    });
                    break;
            }
        });
    });