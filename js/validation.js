/**
 * Created by Aykut on 2/14/14.
 */

$(document).ready(function(){

    $("#sign_up").validate({

        rules:{

            email:{
                required: true,
                minlength: 6
//                maxlength: 16
            },

            password:{
                required: true,
                minlength: 6,
                maxlength: 16
            },

            password_2:{
                required: true,
                equalTo: "#password"
            }
        },

        messages:{

            email:{
                required: "Ёто поле об€зательно дл€ заполнени€",
                minlength: "¬ведите подлинный E-mail"
            },

            password:{
                required: "Ёто поле об€зательно дл€ заполнени€",
                minlength: "ѕароль должен быть минимум из 6 символов",
                maxlength: "ѕароль должен быть минимум из 16 символов"
            },
            password_2:{
                required: "Ёто поле об€зательно дл€ заполнени€",
                equalTo: "Ётот пароль должен быть идентичным первому"
            }

        }

});

});
