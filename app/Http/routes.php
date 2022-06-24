<?php


/*
 *
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
    Route::group(['prefix' => 'services'], function () {
        Route::get('/{test}', 'HomeController@testingRoutes');
    });

Route::group(['middleware' => 'redirection'] , function (){
    Route::get('/', 'HomeController@index');
    Route::get('/portfolio', 'HomeController@portfolio');
    Route::get('/seo_packages', 'HomeController@seoService');
    Route::get('/contact_us', array(
        'as' => '/contact',
        'uses' => 'HomeController@contact'
    ));
    Route::get('/case_studies', 'HomeController@caseStudy');
    Route::get('/awards', 'HomeController@awards');
    Route::get('/article_submission_service', 'HomeController@articleSubmissionService');
    Route::get('/company', 'HomeController@company');
    Route::get('/testimonials', 'HomeController@testimonials');
    Route::get('/content_development', 'HomeController@contentDevelopment');
    Route::get('/reseller', 'HomeController@partner');
    Route::get('/contentual_link_building', 'HomeController@contentualLinkBuilding');
    Route::get('/ppc_management_service', 'HomeController@ppc');
    Route::get('/content_writing_service', 'HomeController@contentWritingService');
    Route::get('/panda_penguin_recovery_service', 'HomeController@PandaPenguin');
    Route::get('/blog_management_service ', 'HomeController@blogManagement');
    Route::get('/local_seo_service ', 'HomeController@localSeo');
    Route::get('/privacy_policy', 'HomeController@privacy');
    Route::get('/refund ', 'HomeController@refund');
    Route::get('/career ', 'HomeController@career');
    Route::get('/advanced_seo_audit ', 'HomeController@advancedSeoAudit');
    Route::get('/custom_content_writing_quotation ', 'HomeController@customContentWritingQuotation');
    Route::get('/sitemap ', 'HomeController@siteMap');
    Route::get('/mobile_test ', 'HomeController@mobTest');
    Route::get('/web_development_service', 'HomeController@webDevelopment');
    Route::get('/dedicated_seo_team', 'HomeController@dedicatedSeoTeam');
    Route::get('/request_consultation ', 'HomeController@requestConsultation');
    Route::get('/reputation_management_service', 'HomeController@reputationManagementService');
    Route::get('/guest_blogging_service', 'HomeController@guestBloggingService');
    Route::get('/article_submission_service', 'HomeController@articlesubmissionService');
    Route::get('/forum_link_building_service', 'HomeController@forumlinkbuildingService');
    Route::get('/complete_link_building_service', 'HomeController@completelinkbuildingService');
    Route::get('/guest_posting', 'HomeController@guestPosting');
    Route::get('/link_wheel_service', 'HomeController@linkwheelService');
    Route::get('/search_engine_submission_service', 'HomeController@searchenginesubmissionService');
    Route::get('/schema-generator', 'HomeController@schema');

    Route::get('/guest_posting_service ', 'HomeController@guestPosting');

    Route::get('/link_wheel_service/',
        array(
            'as' => '/link_wheel_service',
            'uses' => 'HomeController@linkWheelService'
        ));
    Route::get('/social_media', 'HomeController@socialMedia');
    Route::get('/cart', 'HomeController@shopingCard');
    Route::get('/update_shoping_card/{id}/{service_name}', 'HomeController@updateShopingCard');
    Route::get('/remove/{id}', 'HomeController@removeItem');
    Route::get('/plus_item/{id}', 'HomeController@plusItem');
    Route::get('/minus_item/{id}', 'HomeController@minusItem');
    Route::post('/update_shoping_card_count', 'HomeController@updateShopingCardCount');
    Route::post('/quick_registration', 'UsersController@quickRegistration');
    Route::post('/registration_as_reseller', 'UsersController@registrationAsReseller');
    Route::post('/save_total', 'UsersController@saveTotal');
    Route::get('/test', 'UsersController@test');
    Route::get('/checkout', 'HomeController@checkout');
    Route::get('/checkouts', 'UsersController@checkout');
    Route::get('/createWebProfile', 'PaypalController@createWebProfile');
    Route::get('/addEmailToList/{email}', 'MailChimpController@addEmailToList');
    Route::get('/social_media_marketing', 'HomeController@socialMediaMarketing');


    Route::get('payPremium', ['as' => 'payPremium', 'uses' => 'PaypalController@payPremium']);
    Route::post('getCheckout', ['as' => 'getCheckout', 'uses' => 'PaypalController@getCheckout']);
    Route::get('getDone', 'PaypalController@getDone');
    Route::get('getCancel', ['as' => 'getCancel', 'uses' => 'PaypalController@getCancel']);
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('/password/sendmail', 'Auth\PasswordController@postEmail');

// Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');
    Route::post('/reset/passowrd', 'Auth\PasswordController@postResetPass');

    Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');
    Route::post('subscribe', ['as' => 'subscribe', 'uses' => 'MailChimpController@subscribe']);
    Route::post('sendCompaign', ['as' => 'sendCompaign', 'uses' => 'MailChimpController@sendCompaign']);


    #Checking coupon code

    Route::post('/check_coupon', 'UsersController@chechCoupon');

    #Users Login and registration routes




    #Get a quote

    Route::post('/get_a_quote', 'UsersController@getAQuote');
    Route::post('/social_media_form', 'UsersController@socialMediaForm');
    Route::post('/ppc_sending_form', 'UsersController@ppcSendingForm');
    Route::post('/seo_sending_form', 'UsersController@seoSendingForm');

    Route::post('/request_consultation_form', 'UsersController@requestConsultationForm');
    Route::post('/panda_penguin_post', 'UsersController@pandaPenguinPost');
    Route::post('/carrer_post', 'UsersController@carrerPost');
    Route::post('/home_page_form', 'UsersController@homePageForm');
    Route::post('/contact_us_post', 'UsersController@contactUsPost');
    Route::post('/custom_content_post', 'UsersController@customContentPost');
    Route::post('/web_development_post', 'UsersController@webDevelopmentPost');
    Route::post('/reputation_managment_post', 'UsersController@reputationManagmentPost');
    Route::post('/blog_menegment_post', 'UsersController@blogMenegmentPost');
    Route::post('/askaquote', 'UsersController@askaquote');


    Route::get('/send_email_to_complate_order/{email}/{id}', 'UsersController@emailToComplateOrder');


    #Complate Order Via Email

    Route::get('complate_order/{order_id}', 'PaypalController@complateOrder');


    #Password Reset Routes
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('/password/sendmail', 'Auth\PasswordController@postEmail');
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');
    Route::post('/reset/passowrd', 'Auth\PasswordController@postResetPass');
    Route::post('/contact_us_post', 'UsersController@contactUsPost');

});
Route::get('/login', 'UsersController@index');
Route::get('/thank_you', 'UsersController@thankYou');
Route::get('/registration', 'UsersController@registration');
Route::post('/admin_login', 'UsersController@adminLogin');
Route::post('/signup', 'UsersController@signup');
Route::post('/login', 'UsersController@login');
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', 'UsersController@dashboard');
        Route::get('logout', 'UsersController@logout');
        Route::get('/transactions', 'UsersController@transaction');
        Route::get('/requests', 'UsersController@orderRequests');
        Route::get('/services', 'UsersController@services');
        Route::get('/aprove_order/{id}', 'UsersController@approveOrder');
        Route::get('/reject_order/{id}', 'UsersController@rejectOrder');
        Route::post('/createAFile', 'ServiceController@createAFile');
        Route::get('/testExecuteProcess', 'ServiceController@testExecuteProcess');
        Route::get('/addService', 'UsersController@addService');
        Route::get('setings', 'UsersController@setings');
        Route::get('plans', 'UsersController@plans');
        Route::get('all_plans', 'UsersController@allPlans');
        Route::get('add_new_plan_group', 'UsersController@addNewPlanGroup');
        Route::post('add_new_main_plan', 'UsersController@addNewMainPlan');
        Route::get('edit_courent_plan_main/{id}', 'UsersController@Plans');
        Route::get('add_courent_plan_main/{id}', 'UsersController@addCourentPlans');
        Route::get('discount', 'UsersController@coupons');
        Route::get('coupons', 'UsersController@getCouponsMain');
        Route::get('add_coupon_new', 'UsersController@addCouponNew');
        Route::post('add_coupon_new', 'UsersController@postAddCouponNew');
        Route::get('edit_coupons/{id}', 'UsersController@editCoupons');
        Route::post('edit_coupons', 'UsersController@postEditCoupons');
        Route::get('delete_coupons/{id}', 'UsersController@deleteCoupons');
        Route::get('edit_corent_plan/{id}', 'UsersController@editCorentPlan');
        Route::get('delete_corent_plan/{id}', 'UsersController@deleteCorentPlan');
        Route::get('add_new_plan/{id}', 'UsersController@addNewPlan');
        Route::post('update_plan', 'UsersController@updatePlan');
        Route::post('change_user_status', 'UsersController@changeUserStatus');
        Route::post('add_new_plan', 'UsersController@addNewPlanPost');
        Route::post('add_new_coupon', 'UsersController@addNewCoupons');
        Route::get('add_new_coupon', 'UsersController@addNewCouponsGet');
        Route::get('edit_corent_coupon/{id}', 'UsersController@editCorentCoupon');
        Route::get('delete_corent_coupon/{id}', 'UsersController@deleteCorentCoupon');
        Route::get('deleteService/{id}', 'UsersController@deleteService');
        Route::get('editService/{id}', 'UsersController@editService');
        Route::post('editServices', 'ServiceController@editServices');
        Route::get('/personal_datas', 'UsersController@personalDatas');
        Route::post('/passwordupdate', 'UsersController@passwordUpdate');

        Route::post('/update_info', 'UsersController@updateInfo');

        #Orders

        Route::get('orders', 'UsersController@orders');
        Route::get('completed_orders', 'UsersController@completedOrders');
        Route::get('/delete_orders/{id}', 'UsersController@deleteOrders');
        Route::get('incomplate_orders', 'UsersController@incomplateOrders');
        Route::get('/send_admin_change_request_order/{id}', 'UsersController@sendAdminChangeRequestOrder');
        Route::get('/order_details/{id}', 'UsersController@editOrder');
        Route::get('/view_order/{id}', 'UsersController@viewOrder');
        Route::get('/update_simple_report/{id}', 'UsersController@updateSimpleReport');
        Route::post('/edit_order_post', 'UsersController@postEditOrder');
        Route::post('/upload_report', 'UsersController@uploadReport');
        Route::post('/change_order_status', 'UsersController@changeOrderStatus');

        #Users

        Route::get('/users', 'UsersController@users');
        Route::get('/delete_user/{id}', 'UsersController@deleteUser');
        Route::get('/user_profile/{id}', 'UsersController@userProfile');
        Route::post('/change_user_role', 'UsersController@changeUserRole');
        Route::post('/update_image', 'UsersController@updateImage');
        Route::post('/change_user_image', 'UsersController@changeUserImage');
        Route::post('/user_password_update', 'UsersController@changeUserPassword');

        #Tabs

        Route::get('/plans_and_tabs', 'ServiceController@plansAndTabs');
        Route::post('/create_tab_plans', 'ServiceController@createTabWihPlan');
        Route::post('/edit_tab_plans', 'ServiceController@editTabPlans');
        Route::get('/list_of_tabs', 'ServiceController@listPlansAndTabs');
        Route::get('/delete_corent_tab/{id}', 'ServiceController@deleteCorentTab');
        Route::get('/edit_corent_tab/{id}', 'ServiceController@editCorentTab');
        Route::get('/create_tab', 'ServiceController@createTabs');


        #invoice

        Route::get('/invoice/{id}', 'UsersController@invoice');
        Route::get('/remind_invoice/{id}', 'UsersController@remindInvoice');
        Route::get('/invoices', 'UsersController@invoices');
        Route::delete('/invoices', 'InvoiceController@remove_invoice')->name('remove_invoice');
        Route::post('/get_plans_json', 'UsersController@getPlansJson');
        Route::post('/send_invoice', 'UsersController@sendInvoice');

        # Get a quotes

        Route::get('/get_a_quotes', 'UsersController@getAQuotes');
        Route::get('/delete_a_quote/{id}', 'UsersController@deleteAQuote');

        Route::post('/change_a_quote', 'UsersController@changeAQuote');
        Route::post('/support_massage', 'UsersController@supportMassage');

        #Get Service PLan name

        Route::post('/get_service_plan_name', 'UsersController@getServicePlanName');
    });

    Route::get('/invoice_pay/{id}', 'PaypalController@invoicePay');
});