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
            assignment: "required",
            // password: {
            //     required: true,
            //     minlength: 5
            // }
        },
        // Specify validation error messages
        messages: {
            npwp: "Mohon masukkan NPWP",
            company: "Mohon masukkan nama Company",
            parent_company: "Mohon masukkan nama Parent Company",
            address: "Mohon masukkan Alamat",
            city: "Mohon masukkan nama Kota",
            contact_person: "Mohon masukkan contact person",
            title: "Mohon masukkan jabatan",
            phone: "Mohon masukkan nomor telepon",
            mobile: "Mohon masukkan nomor mobile",
            business_consultant: "Mohon masukkan nama Business Consultant",
            join_date: "Mohon masukkan tanggal",
            assignment: "Mohon masukkan nama Assignment",
            // password: {
            //     required: "Please provide a password",
            //     minlength: "Your password must be at least 5 characters long"
            // },
            email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});