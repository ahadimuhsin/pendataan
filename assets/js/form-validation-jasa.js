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
            subservices: "required",
            contract_start_date: { required : true, max: 'contract_end_date'},
            contract_end_date: { required : true, min: 'contract_start_date'},
            spk_number: "required",
            spk_date: { required : true, max: 'spk_handover_date'},
            spk_handover_date: { required : true, min: 'spk_date'},
            otc: "required",
            mrc: "required",
            type: "required",
            keterangan: "required"

        },
        // Specify validation error messages
        messages: {
            no_company: "Mohon masukkan satu/dua/tiga digit terakhir nomor Company",
            subservices: "Mohon masukkan Subservice",
            // contract_start_date: "Mohon masukkan tanggal dimulainya kontrak",
            // contract_end_date: "Mohon masukkan tanggal berakhirnya kontrak",
            spk_number: "Mohon masukkan SPK Number",
            // spk_date: "Mohon masukkan tanggal SPK terbit",
            // spk_handover_date: "Mohon masukkan tanggal penyerahan SPK",
            otc: "Mohon masukkan nomor OTC",
            mrc: "Mohon masukkan nomor MRC",
            type: "Mohon masukkan tipe berlangganan",
            keterangan : "Mohon masukkan keterangan. Bila kosong, isi '-'"


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
$(function() {
    var start_date = new Date(document.getElementById("start_date"));
    var end_date = new Date(document.getElementById("end_date"));

    if (start_date > end_date) {
        alert('Masukkan tanggal dengan benar');
    }
});
