/**
 * Created by Muhsin Ahadi on 1/16/2018.
 */
$(document).ready(function () {
    $('#subservices').change (function () {
        if(this.value === "Cloud Server"){
            $('input[name="services"]').val('Cloud Server');
            $('input[name="product_family"]').val('Cloud Service');
            //bagian yang muncul
            $("#cloud_server_services").show();
            $("#cloud_server_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();


        }
        else if(this.value==="Managed Server") {
            $('input[name="services"]').val('Managed Server');
            $('input[name="product_family"]').val('Managed Service');
            //baguian yang muncul
            $("#managed_server_services").show();
            $("#managed_server_product").show()
            //bagian yang gak muncul
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();


        }
        else if (this.value ==="Managed Wifi"){
            $('input[name="services"]').val('Managed Wifi');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#managed_wifi_services").show();
            $("#managed_wifi_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "Managed Mail")
        {
            $('input[name="services"]').val('Managed Application');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#managed_mail_services").show();
            $("#managed_mail_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();


        }

        else if (this.value === "Managed Radius"){
            $('input[name="services"]').val('Managed Application');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#managed_radius_services").show();
            $("#managed_radius_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();



        }
        else if (this.value === "Managed Web"){
            $('input[name="services"]').val('Managed Application');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#managed_radius_services").show();
            $("#managed_radius_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();



        }
        else if (this.value === "Managed Antivirus"){
            $('input[name="services"]').val('Managed Application');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#managed_radius_services").show();
            $("#managed_radius_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "Managed SSL"){
            $('input[name="services"]').val('Managed Application');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#managed_radius_services").show();
            $("#managed_radius_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "Managed Cpanel"){
            $('input[name="services"]').val('Managed Application');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#managed_radius_services").show();
            $("#managed_radius_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();



        }
        else if (this.value === "Managed Firewall"){
            $('input[name="services"]').val('Managed Application');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#managed_radius_services").show();
            $("#managed_radius_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "Managed DNS"){
            $('input[name="services"]').val('Managed Application');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#managed_radius_services").show();
            $("#managed_radius_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "IT Solution"){
            $('input[name="services"]').val('Professional Services');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#it_solution_services").show();
            $("#it_solution_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "Implementasi - Integrasi - Migrasi - Pengadaan"){
            $('input[name="services"]').val('Professional Services');
            $('input[name="product_family"]').val('Managed Service');
            //bagian yang muncul
            $("#it_solution_services").show();
            $("#it_solution_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide()
            $("#sms_services").hide();




        }
        else if (this.value === "Implementasi Salesforce"){
            $('input[name="services"]').val('CRM Salesforce.com');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#salesforce_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "License Salesforce"){
            $('input[name="services"]').val('CRM Salesforce.com');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#salesforce_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "Support & Maintenance Salesforce"){
            $('input[name="services"]').val('CRM Salesforce.com');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#salesforce_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "Training Salesforce"){
            $('input[name="services"]').val('CRM Salesforce.com');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#salesforce_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "License Microsoft"){
            $('input[name="services"]').val('Microsoft');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#microsoft_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }
        else if (this.value === "Implementasi Microsoft"){
            $('input[name="services"]').val('Microsoft');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#microsoft_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide()
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();




        }else if (this.value === "Implementasi Cozytizen"){
            $('input[name="services"]').val('Cozytizen');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#cozytizen_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#microsoft_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();


        }
        else if (this.value === "License Cozytizen" ){
            $('input[name="services"]').val('Cozytizen');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#cozytizen_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#microsoft_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();


        }
        else if (this.value === "Support & Maintenance Cozytizen" ){
            $('input[name="services"]').val('Cozytizen');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#cozytizen_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#microsoft_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();


        }
        else if (this.value === "Application Development" ){
            $('input[name="services"]').val('Application Services');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#application_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#microsoft_services").hide();
            $("#sms_services").hide();

        }
        else if (this.value === "Staffing" ){
            $('input[name="services"]').val('Application Services');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#application_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#microsoft_services").hide();
            $("#sms_services").hide();

        }
        else if (this.value === "SMS Corporate" ){
            $('input[name="services"]').val('SMS Corporate');
            $('input[name="product_family"]').val('SaaS');
            //bagian yang muncul
            $("#sms_services").show();
            $("#salesforce_product").show();
            //bagian yang gak muncul
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#microsoft_services").hide();
        }
        else {
            $("#managed_server_services").hide();
            $("#managed_server_product").hide();
            $("#cloud_server_services").hide();
            $("#cloud_server_product").hide();
            $("#managed_wifi_services").hide();
            $("#managed_wifi_product").hide();
            $("#managed_mail__services").hide();
            $("#managed_mail_product").hide();
            $("#managed_radius_services").hide();
            $("#managed_radius_product").hide();
            $("#it_solution_services").hide();
            $("#it_solution_product").hide();
            $("#salesforce_services").hide();
            $("#salesforce_product").hide();
            $("#microsoft_services").hide();
            $("#cozytizen_services").hide();
            $("#application_services").hide();
            $("#sms_services").hide();



        }

    });

});



       $("#npwp").mask("99.999.999.9-999.999", {
           placeholder: "NPWP"
       });


$("#join_date").datepicker();


$(document).ready(function() {
// ketika input usia di isi, eksekusi bagian ini.
    $("#npwp").keypress(function (data)
    {
// kalau data bukan berupa angka, tampilkan pesan error
        if(data.which!==8 && data.which!==0 &&
            (data.which<48 || data.which>57))
        {
            $("#pesan").html("Isikan Angka").show().fadeOut("slow");
            return false;
        }
    });
});


