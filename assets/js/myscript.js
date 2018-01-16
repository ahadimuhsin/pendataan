/**
 * Created by Muhsin Ahadi on 1/16/2018.
 */

$('#subservices').on('change', function () {
    if(this.value === "Cloud Server"){
        $("#cloud_server_services").show();
        $("#cloud_server_product").show();

    } else {
        $("#cloud_server_services").hide();
        $("#cloud_server_product").hide();
    }
});

