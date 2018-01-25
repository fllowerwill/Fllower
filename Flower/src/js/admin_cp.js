$(function () {


    $("#signupForm1").validate({
        rules: {
            username: {
                required: true,
                minlength: 1


            },

            newpass: {
                required: true,
                minlength: 1

            },
            confirm_password: {
                required: true,
                minlength: 1,
                equalTo: "#newpass"
            },


        },
        messages: {

            username: {
                required: "请输入用户名",
                minlength: "您的用户名必须至少1个字",

            },
            newpass: {
                required: "请输入密码",
                minlength: "您的密码必须至少有1个字符"
            },
            confirm_password: {
                required: "请输入密码",
                minlength: "您的密码必须至少有1个字符",
                equalTo: "请输入与上述相同的密码"
            }

        },
        submitHandler: function () {

            var name=$('#name').val();
            console.log(name);
            var pass=$('#newpass').val();
            $.ajax({
                url: 'index.php?m=admin&a=updatepass',
                type: 'post',
                data:{name,pass},
                success: function (data) {

                    document.write(data);
                    // if(data==1){
                    //     $('.box').slideDown().html('修改成功');
                    // }else{
                    //     $('.box').slideDown().html('修改失败');
                    //
                    // }


                }
            })
        }
    })

})