var WizardDemo=function() {
    $("#m_wizard");
    var e,
        r,
        i=$("#m_form");
    return {
        init:function() {
            var n;
            $("#m_wizard"),
                i=$("#m_form"),
                (r=new mWizard("m_wizard", {
                        startStep: 1
                    }
                )).on("beforeNext", function(r) {
                        !0!==e.form()&&r.stop()
                    }
                ),
                r.on("change", function(e) {
                        mApp.scrollTop()
                    }
                ),
                e=i.validate( {
                        ignore:":hidden"
                        , invalidHandler:function(e, r) {
                            mApp.scrollTop(), swal( {
                                    title: "", text: "There are some errors in your submission. Please correct them.", type: "error", confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
                                }
                            )
                        }
                        , submitHandler:function(e) {}
                    }
                ),
                (n=i.find('[data-wizard-action="submit"]')).on("click", function(r) {

                        r.preventDefault();
                                var data = new FormData(i[0]);
                                // var serial = i.serialize();
                                // // var imagefile = document.querySelector(file);
                                // var un_student_upload_url = document.querySelector('#un_student_upload_url');
                                // var r_student_upload_url = document.querySelector('#r_student_upload_url');
                                // var uas_student_upload_url = document.querySelector('#uas_student_upload_url');
                                // data.append("un_student_upload_url", un_student_upload_url.files[0]);
                                // data.append("r_student_upload_url", r_student_upload_url.files[0]);
                                // data.append("uas_student_upload_url", uas_student_upload_url.files[0]);
                                // Object.keys(serial).forEach(function (key) {
                                //     data.append(key, serial[key]);
                                // });
                                $.ajax({
                                    url: i.attr( 'action' ),
                                    type: "POST",
                                    data: data,
                                    contentType : false,
                                    processData : false,
                                    success: function (data) {
                                        console.log(data);
                                        swal({
                                            title: "Berhasil",
                                            text: "Data Berhasil Disimpan ",
                                            type: "success",
                                            showCancelButton: true
                                        }).then(function(){ 
                                           location.reload();
                                           });

                                    },
                                    error: function (data) {
                                        swal({
                                            title: "Gagal",
                                            text: "Harap Periksa Kembali Data Anda ",
                                            type: "error",
                                            showCancelButton: true
                                        });
                                    }
                                });
                        }
                        //         success:function() {
                        //             mApp.unprogress(n), swal( {
                        //                     title: "", text: "The application has been successfully submitted!", type: "success", confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
                        //                 }
                        //             )
                        //         }



                )
        }
    }
}

();
jQuery(document).ready(function() {
        WizardDemo.init()
    }

);


