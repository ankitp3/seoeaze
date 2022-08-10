$(document).ready(function () {

    var count = 0;

    $('.add_new_plan_paramaetr').click(function(){
        count++;
        $('.adding_area').append('<div class="form-group col-lg-12"><span class="abs_close_button" style="position: absolute;color: red; cursor: pointer"> X</span> <div class="col-lg-6"> <label for="" class="control-label">Name </label> <input type="text" name="text_field_'+count+'[]" class="form-control" > </div> <div class="col-lg-6"> <label for="" class="control-label">value </label> <input type="text" name="text_field_'+count+'[]" value="" class="form-control"> </div><br> </div>')
        return false;
    });

    $('.add_new_plan_option').click(function () {
        count++;
        $('.adding_area').append('<div class="form-group col-lg-12"><span class="abs_close_button" style="position: absolute;color: red; cursor: pointer"> X</span> <div class="col-lg-6"> <label for="" class="control-label">Name </label> <input type="text" name="option_field_'+count+'[]" class="form-control" > </div> <div class="col-lg-6"> <label for="" class="control-label">value </label><select  name="option_field_'+count+'[]" value="" class="form-control"> <option value=""></option> <option value="1">Available</option> <option value="0">Not available</option> </select> </div><br> </div>')
        return false;
    });

    $('.add_new_faq').click(function () {
            count++;
        $('.adding_faq_area').append('<div class="form-group col-lg-12"><span class="abs_close_button" style="position: absolute;color: red; cursor: pointer"> X</span> <div class="col-lg-6"> <label for="" class="control-label">Name </label> <input type="text" name="faq_field_'+count+'[]" class="form-control" > </div> <div class="col-lg-6"> <label for="" class="control-label">value </label> <input type="text" name="faq_field_'+count+'[]" value="" class="form-control"> </div><br> </div>')
        return false;
    });

    $('.edit_add_new_faq').click(function () {
        faq_count++

        $('.adding_faq_area').append('<div class="form-group col-lg-12"><span class="abs_close_button" style="position: absolute;color: red; cursor: pointer"> X</span> <div class="col-lg-6"> <label for="" class="control-label">Name </label> <input type="text" name="faq_field_'+faq_count+'[]" class="form-control" > </div> <div class="col-lg-6"> <label for="" class="control-label">value </label> <input type="text" name="faq_field_'+faq_count+'[]" value="" class="form-control"> </div><br> </div>')
        return false;
    });




    $('.add_new_benefit').click(function () {
            count++;
        $('.adding_benefit_area').append('<div class="form-group col-lg-12"><span class="abs_close_button" style="position: absolute;color: red; cursor: pointer;right:0"> X</span> <div class="col-lg-12"> <label for="" class="control-label"> benefit text </label> <input type="text" name="benefit_field[]" class="form-control" > <br> </div>')
        return false;
    });

    var url_count = 2

    $('.add_new_url').click(function () {
        url_count++;
        $('.urls_area').append('<div class="form-group col-lg-12" style="position: relative;"><span class="abs_close_button" style="position: absolute;color: red; cursor: pointer; right: 0px"> X</span><div class="form-group col-lg-6"><label for="" class="control-label"> Other url </label><input type="text" name="url_field_'+url_count+'[]" class="form-control" ></div><div class="form-group col-lg-6"><label for=""> Other Keywords </label><input type="text" name="url_field_'+url_count+'[]" class="form-control"> </div></div>')
        return false;
    });
    var count_tabs = 0;
    $('.add_new_link_tab').click(function () {
        count_tabs++;
        $('.clonable').clone().appendTo('.urls_area');
    });
    $('.add_new_link_tab_html').click(function () {
        count_tabs++;
        $('.urls_area').append('<div class="form-group" style="position: relative;">' +
            '<span class="abs_close_button" style="position: absolute;color: red; cursor: pointer; right: 0px">' +
            ' X' +
            '</span><div class="form-group col-lg-6">' +
            '<label for="" class="control-label">Tab name</label>' +
            '<input type="text" name="tab_'+count_tabs+'_[]" class="form-control" value="">' +
            '</div>' +
            '<div class="form-group col-lg-6"><label for="">Choose plan</label>' +
            '<textarea type="text" name="tab_'+count_tabs+'_[]" class="form-control"></textarea>'+
            ' </div>' +
            '</div>');
        return false;
    });


    $(document).delegate('.abs_close_button','click',function(){
        $(this).parent().remove();
    });



    var count = 0;
    $('.gen_pass_show').click(function () {
        count ++;
        if(count == 1) {
            var aceptchar = '^(([A-Za-z]+[^A-Za-z\d&Ñ])|([^A-Za-z\d&Ñ][A-Za-z]+)|([^A-Za-z\d&Ñ][A-Za-z]+[^A-Za-z\d&Ñ]))$'
            $('.genpass_area').attr('type', 'text');
            $('.gen_pass_show').text('Hide password');
        }else{
            $('.genpass_area').attr('type', 'password');
            $('.gen_pass_show').text('Show password');
            count = 0;
        }
    });

    $(document).delegate('.order_status' , 'change' , function () {
        var status = $(this).val();
        var teg = $(this);
        var id = $(this).attr('name');
        $.ajax({
            type:'post',
            url:'/dashboard/change_order_status',
            data:{id:id,status:status },
            success:function(res){
                if(res.massage == 'succes'){
                    $('.success').addClass('in');
                    if(status == 'edit'){
                        var status_change = 'On Progress';
                    }
                    teg.parent().prev().prev().prev().children().text(status_change)
                }else{
                    $('.error').addClass('in');
                }
            }
        })
    });

    $(document).delegate('.change_user_role' , 'change' , function () {
        var role = $(this).val();
        var teg = $(this);
        var id = $(this).attr('name');
        $.ajax({
            type:'post',
            url:'/dashboard/change_user_role',
            data:{id:id,role:role },
            success:function(res){
                if(res.massage == 'succes') {
                    if(role == 6){
                        var text = 'Affiliates ';
                    }
                    else if(role == 5){
                        var text = 'Reseller';ww
                    }
                    else if (role == 4){
                        text = 'Clients';
                    }
                    else if (role == 3){
                        text = 'Staff';
                    }
                    else if (role == 2){
                    text = 'Admin';
                }
                    $('.success').addClass('in');
                        teg.parent().prev().text(text)
                }else{
                    $('.error').addClass('in');
                }
            }
        })
    });


    $(document).delegate('.change_quote_status' , 'change' , function () {
        var status = $(this).val();
        var id = $(this).attr('id');
        $.ajax({
            type:'post',
            url : '/dashboard/change_a_quote',
            data:{id:id, status:status},
            success:function(res){
                if(res.massage == 'success'){
                    $(this).parent().prev().text(status)
                }
            }
        })
    });




    $('.close').click(function () {
        $('.fade').removeClass('in');
    });


    $('.plans_close_button').click(function () {
       $(this).parent().html('');
    });


    $('.edit_add_new_plan_paramaetr').click(function(){
        plan_option_count++;
        $('.adding_area').append('<div class="form-group col-lg-12"><span class="abs_close_button" style="position: absolute;color: red; cursor: pointer"> X</span> <div class="col-lg-6"> <label for="" class="control-label">Name </label> <input type="text" name="text_field_'+plan_option_count+'[]" class="form-control" > </div> <div class="col-lg-6"> <label for="" class="control-label">value </label> <input type="text" name="text_field_'+plan_option_count+'[]" value="" class="form-control"> </div><br> </div>')
        return false;
    });

    $('.edit_add_new_plan_option').click(function () {
        plan_option_count++;
        $('.adding_area').append('<div class="form-group col-lg-12"><span class="abs_close_button" style="position: absolute;color: red; cursor: pointer"> X</span> <div class="col-lg-6"> <label for="" class="control-label">Name </label> <input type="text" name="option_field_'+plan_option_count+'[]" class="form-control" > </div> <div class="col-lg-6"> <label for="" class="control-label">value </label><select  name="option_field_'+plan_option_count+'[]" value="" class="form-control"> <option value=""></option> <option value="1">Available</option> <option value="0">Not available</option> </select> </div><br> </div>')
        return false;
    });



    $('#services_change_function').change(function () {

        var service_name = $(this).val();
        $.ajax({
            type:'post',
            url:'/dashboard/get_service_plan_name',
            data:{service_name:service_name },
            success:function(res){
                $('#plan_addet_area')
                    .find('option')
                    .remove()
                    .end();
                var countsdsd = 0
                res.massage.forEach(function (element) {
                    $('#plan_addet_area').append('<option value="'+ element.id+'">'+ element.plan_name+' </option>');
                });
                $('#plan_addet_area').append('<option value="custom_plan">Custom Plan</option>')
            }
        })
    });



/*
    $(document).delegate('.get_plans_via_service' , 'change' , function () {
        var param  = $(this).val();
        var id = JSON.parse(param);
        $.ajax({
            type:'post',
            data:{ids:id},
            url:'/dashboard/get_plans_json',
            success:function(res){
                if(res.massage != ''){
                    var data = res.massage
                    console.log(data);
                    $('.plans_appendet_area')
                }
            }
        })
    })
*/


});