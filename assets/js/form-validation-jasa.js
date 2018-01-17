/**
 * Created by Muhsin Ahadi on 1/11/2018.
 */
// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='myform']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            no_company: "required",
            no_jaringan: "required",
            subservices: "required",
            contract_start_date: "required",
            contract_end_date: "required",
            spk_number: "required",
            spk_date: "required",
            spk_handover_date: "required",
            otc: "required",
            mrc: "required",
            type: "required"

        },
        // Specify validation error messages
        messages: {
            no_company: "Mohon masukkan satu/dua/tiga digit terakhir nomor Company. Contoh nomor Company    2018001 ditulis 1",
            no_jaringan: "Mohon masukkan nomor jaringan",
            subservices: "Mohon masukkan Subservice",
            contract_start_date: "Mohon masukkan tanggal dimulainya kontrak",
            contract_end_date: "Mohon masukkan tanggal berakhirnya kontrak",
            spk_number: "Mohon masukkan SPK Number",
            spk_date: "Mohon masukkan tanggal SPK terbit",
            spk_handover_date: "Mohon masukkan tanggal penyerahan SPK",
            otc: "Mohon masukkan nomor OTC",
            mrc: "Mohon masukkan nomor MRC",
            type: "Mohon masukkan tipe berlangganan"

        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});/**
 * Created by Muhsin Ahadi on 1/17/2018.
 */
