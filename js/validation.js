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
                required: "��� ���� ����������� ��� ����������",
                minlength: "������� ��������� E-mail"
            },

            password:{
                required: "��� ���� ����������� ��� ����������",
                minlength: "������ ������ ���� ������� �� 6 ��������",
                maxlength: "������ ������ ���� ������� �� 16 ��������"
            },
            password_2:{
                required: "��� ���� ����������� ��� ����������",
                equalTo: "���� ������ ������ ���� ���������� �������"
            }

        }

});

});
