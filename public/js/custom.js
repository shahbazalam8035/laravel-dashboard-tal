$(document).ready(function() {

    
    // Load all states on page load
    $.ajax({
        url: '/states',
        type: 'GET',
        success: function(states) {
            console.log(states);
            $.each(states, function(key, state) {
                $('#state').append('<option id="'+state.id+'" value="'+state.name+'">'+state.name+'</option>');
                });
            }
        });
            $('#state').on('change', function() {
                let stateId = $('#state option:selected').attr('id');
                $('#district').html('<option value="">Select District</option>');
                $('#city').html('<option value="">Select City</option>');

                if(stateId) {
                    $.ajax({
                        url: '/districts/' + stateId,
                        type: 'GET',
                        success: function(districts) {

                            $.each(districts, function(key, district) {
                                $('#district').append('<option id="'+district.id+'" value="'+district.name+'">'+district.name+'</option>');
                            });
                        }
                    });
                }
            });

            // On selecting district, load cities
            $('#district').on('change', function() {
                let districtId = $('#district option:selected').attr('id');
                $('#city').html('<option value="">Select City</option>');

                if(districtId) {
                    $.ajax({
                        url: '/cities/' + districtId,
                        type: 'GET',
                        success: function(cities) {
                            $.each(cities, function(key, city) {
                                $('#city').append('<option id="'+city.id+'" value="'+city.name+'">'+city.name+'</option>');
                            });
                        }
                    });
                }
            });
        });


