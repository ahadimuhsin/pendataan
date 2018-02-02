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
            npwp: "required",
            company: "required",
            parent_company: "required",
            address: "required",
            city: "required",
            contact_person: "required",
            title: "required",

            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            phone:"required",
            mobile: "required",
            business_consultant: "required",
            join_date:{
                required:true,
                date:true
            },
            assignment: "required"
            // password: {
            //     required: true,
            //     minlength: 5
            // }
        },
        // Specify validation error messages
        messages: {
            npwp: "Anda belum memasukkan NPWP",
            company: "Anda belum memasukkan nama Company",
            parent_company: "Anda belum memasukkan nama Parent Company",
            address: "Anda belum memasukkan Alamat",
            city: "Anda belum memasukkan Kota",
            contact_person: "Anda belum memasukkan Contact Person",
            title: "Anda belum memasukkan Title",
            phone: "Anda belum memasukkan nomor Phone",
            mobile: "Anda belum memasukkan nomor Mobile",
            business_consultant: "Anda belum memilih Business Consultant",
            join_date: "Anda belum memasukkan Join Date",
            assignment: "Anda belum memilih Assignment",
            // password: {
            //     required: "Please provide a password",
            //     minlength: "Your password must be at least 5 characters long"
            // },
            email: "Masukkan email dengan format yang benar <br> Contoh: username@domain.com"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});