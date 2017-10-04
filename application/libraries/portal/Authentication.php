<?php

if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/*
* @author Mark Rahman
*
*/
class Authentication
{
    protected $CI;
    public $_table_prefix = "";
    protected $_login_table_name = 'dashboard_login';

    /*
     * constructor
     */
    function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI =& get_instance();
        $this->_table_prefix = $this->CI->config->item('prefix');
        $this->CI->load->model('portal/login');
    }
    /*
     * check user authentication with data validation
     */
    public function checkAuthentication($postData, $ip)
    {

        if (sizeof($postData) > 0 AND !empty($postData['email'])) {
            
            $loginTrue = 0;

            // check XSS
            $email = $this->CI->security->xss_clean($postData ['email']);
            $password = $this->CI->security->xss_clean($postData ['password']);

            //check form token
            /*$msg = $postData ['token'];
            $encryption_key = $this->CI->config->item('encryption_key');
            $key = $encryption_key;
            $decrypted_string = $this->CI->encrypt->decode($msg, $key);*/

            if($email AND $password){

                $loginTrue = $this->checkFormDataAgainstDb ( $postData ['email'], $postData ['password'] );
            }

            if ($loginTrue) {

                $redirect_path = $this->CI->config->item('redirect_path_after_login');

                //$this->CI->login->remove_ip_block_data ($ip);

                //$user_role = get_user_role();
                //$opening_view = get_user_opening_view($user_role);

                /*if(!empty($opening_view)){
                    $redirect_path = "dbtables/".$opening_view."/listing";
                }
                else{
                    $opening_view = $this->CI->config->item('#VIEW_ON_OPENING');
                    if(!empty($opening_view)){
                        $redirect_path = "dbtables/".$opening_view."/listing";
                    }

                }*/

                redirect ( site_url ($redirect_path) );

            } else {
                redirect ($this->CI->config->item('login_url'));

            /*

                //insert this ip to login_failed_ip table
                $this->CI->login->insert_failed_ip($ip);
                // if this ip found at blocked_ip table this set a session for captcha validation
                $this->CI->login->checkIfIpBlocked ( $ip );*/
            }
        }

    }


    /*
     *Check form data against database
     */

    private function checkFormDataAgainstDb($user_email = '', $user_pass = '') {

        //check captcha validation

        /*if($this->CI->session->userdata("blocked_ip") == 1) {
            require_once(FCPATH . '/application/third_party/recaptchalib.php');
            $privatekey = $this->CI->config->item('privatekey');
            $resp = recaptcha_check_answer($privatekey,
                $_SERVER["REMOTE_ADDR"],
                $_POST["recaptcha_challenge_field"],
                $_POST["recaptcha_response_field"]);

            if (!$resp->is_valid) {
                // when the CAPTCHA was entered incorrectly
                $this->CI->session->set_userdata('login_error', dashboard_lang('_CAPTCHA_ERROR_PLEASE_TRY_AGAIN'));
                return false;

            }
        }*/

        $user_id_config = $this->CI->config->item ( 'user_id' );
        // Check if already logged in
        if ($this->CI->session->userdata ( $user_id_config ))
            return true;

        // Check against user table
        $user_pass = md5 ( $user_pass );

        $this->CI->db->where ( array (
            'email' => $user_email,
            'password' => $user_pass,
            'status' => 1,
            'is_deleted' => 0
        ) );

        $dashboard_login_table = $this->_table_prefix . $this->_login_table_name;

        $query = $this->CI->db->get_where ( $dashboard_login_table );

        // data for session
        /*$this->CI->db->select("FIRST_NAME,IMAGE");
        $query1 = $this->CI->db->get_where( "$dashboard_login_table", array( "email" =>  "$user_email" ));
        $user_info = $query->result_array ();*/
        // data for session close

        if ($query->num_rows () > 0) {

            $userData = $query->row_array ();
            //print_r($userData); die("hi");
            //check user's tenant id
            /*$subdomain_name = "";
            $subdomain_arr = explode('.', $_SERVER['HTTP_HOST'], 2); 
            if(sizeof($subdomain_arr) > 1){
                $subdomain_name = $subdomain_arr[0];
            }
             
            $default_tenant = $this->CI->config->item('#DEFAULT_TENANT');
            
            if(!empty($subdomain_name)){
                $this->CI->db->select('id');
                $this->CI->db->where('id', $userData ['account_id']);
                $this->CI->db->where('slug', $subdomain_name);
                $tenant_check_query = $this->CI->db->get($this->_table_prefix."accounts");
                if($tenant_check_query->num_rows() < 1){
                    $this->CI->session->set_userdata ( 'login_error', dashboard_lang ( '_DASHBOARD_LOGIN_TENANT_ERROR_MESSAGE' ) );
                    return false;
                }
            }else{                
                $this->CI->db->select('id');
                $this->CI->db->where('id', $userData ['account_id']);
                $this->CI->db->where('slug', $default_tenant);
                $tenant_check_query = $this->CI->db->get($this->_table_prefix."accounts");
                if($tenant_check_query->num_rows() < 1){
                    $this->CI->session->set_userdata ( 'login_error', dashboard_lang ( '_DASHBOARD_LOGIN_TENANT_ERROR_MESSAGE' ) );
                    return false;
                }                
            }*/
            
            $user_id_config = $this->CI->config->item ( 'user_id' );
            $user_role = $this->CI->config->item ( 'user_role' );
            $user_account_id = $this->CI->config->item ( 'account_id' );
            
            $this->CI->session->set_userdata ( $user_id_config, $userData ['id'] );
            $this->CI->session->set_userdata ( $user_role, $userData ['role'] );
            $this->CI->session->set_userdata ( $user_account_id, $userData ['account_id'] );
            $this->CI->session->set_userdata ( 'user_language', $userData ['language'] );



            // session data for image upload validation at ckeditor
            /*set_account_id ( $userData ['account_id'] );
            if ($user_info [0] ['image']) {
                $this->CI->session->set_userdata ( 'image', $user_info [0] ['image'] );
            } else {
                $this->CI->session->set_userdata ( 'image', "uploads/profile_image/blank-user.png" );
            }

            $this->CI->session->set_userdata ( 'first_name', $user_info [0] ['first_name'] );

            if (isset ( $_POST ['remember'] ) && $_POST ['remember'] == 1) {

                $value = hash ( 'sha256', rand ( 0, 1000 ) . '*%Gy4x#GpUw[' );

                $cookie = array (
                    'name' => 'rememberCookie',
                    'value' => $value,
                    'expire' => time () + (10 * 365 * 24 * 60 * 60),
                    'path' => '/'
                );

                set_cookie ( $cookie );

                $data = array (
                    'user_id' => $userData ['id'],
                    'session_key' => $value
                );
                $login_session_table = $this->_table_prefix . "login_session";
                $this->CI->db->insert ( $login_session_table, $data );
            }*/

            return true;
        } else {

            //$this->CI->session->set_userdata ( 'login_error', dashboard_lang ( '_DASHBOARD_LOGIN_ERROR_MESSAGE' ) );
            return false;
        }
    }

    /*
     * check a user loggedin or not
     */

    public function checkUserLoggedIn() {

        $user_id_config = $this->CI->config->item ( 'user_id' );
        
        if ($this->CI->session->userdata ( $user_id_config )) {

            return true;
        } else {

            return false;
        }
    }

    public function userSignUp($postData){

        $status = 1;

        if (sizeof($postData) > 0) {

            $this->CI->load->library ( 'form_validation' );
            $this->CI->form_validation->set_error_delimiters ( '<span class="error help-block">', '</span>' );

            $this->CI->form_validation->set_rules ( 'first_name', dashboard_lang ( '_FIRST_NAME' ), 'required' );
            $this->CI->form_validation->set_rules ( 'password', dashboard_lang ( '_PASSWORD' ), 'required' );
            $this->CI->form_validation->set_rules ( 'email', dashboard_lang ( '_EMAIL' ), 'required|valid_email' );

            if ($this->CI->form_validation->run () == FALSE) {

                $status = 0;

            } else {

                //check form token
                $msg = $postData ['token'];
                $encryption_key = $this->CI->config->item('encryption_key');
                $decrypted_string = $this->CI->encrypt->decode($msg, $encryption_key);

                if($decrypted_string === $this->CI->config->item('encryption_text')){

                    $account_data = $this->checkAccountStatus ($postData ['email']);

                    if( $account_data['status'] == 0){

                        $this->CI->session->set_userdata ( 'sign_up_message', dashboard_lang ( '_GIVEN_EMAIL_ALREADY_EXIST' ) );
                        redirect ( base_url () . "dashboard/signup" );

                    }
                    elseif ( $account_data['status'] == 1){

                        $this->CI->session->set_userdata ( 'sign_up_message', dashboard_lang ( '_PLEASE_CHECK_YOUR_EMAIL_FOR_ACCOUNT_CONFIRMATION' ) );
                        $this->CI->session->set_userdata ( 'alert_success', 1 );

                        $email_data = array('user_id' => $account_data['id']);
                        email_sender($email_data, "return_user");

                        redirect ( base_url () . "dashboard/signup" );

                    }
                    else{
                        
                        //check user's tenant id
                        $account_id = 1;
                        $subdomain_name = "";
                        $subdomain_arr = explode('.', $_SERVER['HTTP_HOST'], 2);
                        if(sizeof($subdomain_arr) > 1){
                            $subdomain_name = $subdomain_arr[0];
                        }                        
                         
                        $default_tenant = $this->CI->config->item('#DEFAULT_TENANT');
                        
                        if(!empty($subdomain_name)){
                            $this->CI->db->select('id');                            
                            $this->CI->db->where('slug', $subdomain_name);
                            $tenant_check_query = $this->CI->db->get($this->_table_prefix."accounts");
                            if($tenant_check_query->num_rows() > 0){
                                $data = $tenant_check_query->row();
                                $account_id = $data->id;
                            }
                        }else{
                            $this->CI->db->select('id');
                            $this->CI->db->where('slug', $default_tenant);
                            $tenant_check_query = $this->CI->db->get($this->_table_prefix."accounts");
                            if($tenant_check_query->num_rows() > 0){
                                $data = $tenant_check_query->row();
                                $account_id = $data->id;
                            }
                        }                       
                        

                        $insert_data = array (
                            'first_name' => $postData ['first_name'],
                            'last_name' => $postData ['last_name'],
                            'email' => $postData ['email'],
                            'password' => md5 ( $postData ['password'] ),
                            'role' => $this->CI->config->item('default_signup_user_role'), // default user role
                            'account_id' => $account_id, 
                            'status' => 0  // default user status inactive
                        );

                        $this->CI->db->insert ( $this->_table_prefix . $this->_login_table_name, $insert_data );
                        $user_id = $this->CI->db->insert_id();
                        
                        // send email to new user and admin
                        $email_data['data_result'] = $insert_data;
                        $email_data['new_password'] = $postData ['password'];
                        $email_data['user_id'] = $user_id;
                        email_sender($email_data, "sign_up");

                        $this->CI->session->set_userdata ( 'sign_up_message', dashboard_lang ( '_SIGNUP_SUCCESS_MESSAGE' ) );
                        $this->CI->session->set_userdata ( 'alert_success', 1 );

                        redirect ( base_url () . "dashboard/signup" );

                    }
                }
                else{
                    $status = 0;
                }
            }
        } else {
            $status = 0;
        }

        if(!$status){
            $this->CI->load->view ( 'core_' . $this->CI->config->item ( 'template_name' ) . '/authentication/signup' );
        }
    }

    public function checkAccountStatus($email=''){

        $return_data = array();
        if( isset($email) AND !empty($email)){
            $this->CI->db->select('id,email,is_deleted');
            $this->CI->db->where('email', $email );
            $sql = $this->CI->db->get($this->_table_prefix . $this->_login_table_name);
            $rows = $sql->num_rows();

            if( $rows > 0){
                $data = $sql->row();
                if( $data-> is_deleted == 0){
                    $return_data['status'] = 0;
                }
                else{
                    $update_data = array(
                        'is_deleted' => 0,
                        'status' => 0
                    );

                    $this->CI->db->where('email', $email);
                    $result = $this->CI->db->update( $this->_table_prefix . $this->_login_table_name, $update_data);

                    if($result){

                        $return_data['status'] = 1;
                        $return_data['id'] = $data->id;
                    }
                }
            }
            else{
                $return_data['status'] = 2;
            }
        }
        return $return_data;
    }

    /*
     *Reset user password
     */

    public function resetUserPassword(){

        $post = $this->CI->input->post ();

        if (sizeof($post) > 0) {

            $this->CI->session->set_userdata ( 'forget_pass', 1);

            $reset_email = $post ['reset_email'];

            $this->CI->db->select ( '*' );
            $result = $this->CI->db->get_where ( $this->_table_prefix . $this->_login_table_name , array (
                'email' => $reset_email
            ), 1 );
            $data_result = $result->row_array ();
            $data['first_name'] = $data_result['first_name'];

            if ($data_result) {

                $token = md5 ( time () );
                $data['to'] = $reset_email;

                $data['url'] = base_url ()."dashboard/input_reset_password?token=".$token;

                //call a helper function to send email
                email_sender($data, "password_reset");


                $where = array (
                    'email' => $reset_email
                );
                $this->CI->db->select ( '*' );
                $result = $this->CI->db->get_where ( $this->_table_prefix . 'reset_password', $where, 1 );
                $row = $result->row_array ();

                if ($row) {
                    $this->CI->db->where ( 'id', $row ['id'] );
                    $this->CI->db->update ( $this->_table_prefix . "reset_password", array (
                        'token' => $token
                    ) );
                } else {

                    $ins = array (
                        'user_id' => $data_result ['id'],
                        'email' => $reset_email,
                        'token' => $token
                    );
                    $this->CI->db->insert ( $this->_table_prefix . "reset_password", $ins );
                }

                $this->CI->session->set_userdata ( 'change_password_message', dashboard_lang ( '_RESET_PASSWORD_LINK_SENT_TO_YOUR_EMAIL' ) );
                $this->CI->session->set_userdata ( 'alert_success', 1 );

                redirect ( site_url ( $this->CI->config->item ( 'login_url' ) ) );
            } else {

                $this->CI->session->set_userdata ( 'change_password_message', dashboard_lang ( '_EMAIL_NOT_EXISTS' ) );
                redirect ( site_url ( $this->CI->config->item ( 'login_url' ) ) );
            }

        }

    }

    public function checkResetPassword($post, $token){

        if(isset($token) AND !empty($token)){

            $this->CI->db->select ( '*' );
            $result = $this->CI->db->get_where ( $this->_table_prefix . 'reset_password', array (
                'token' => $token
            ), 1 );

            $row = $result->row_array ();
        }

        if ($row) {

            $data = array ();

            if (sizeof($post) > 0 ) {

                $new_pass = md5 ( $post ['new_password'] );

                if (empty ( $post ['new_password'] )) {
                    $data ['message'] = dashboard_lang ( '_PLEASE_ENTER_PASSWORD' );

                } else if ($post ['new_password'] == $post ['re_password']) {

                    $this->CI->db->select ( '*' );
                    $result = $this->CI->db->get_where ( $this->_table_prefix . $this->_login_table_name, array (
                        'email' => $row ['email']
                    ), 1 );
                    $data_result = $result->row_array ();

                    if ($data_result) {
                        // update pass
                        $this->CI->db->where ( 'id', $data_result ['id'] );
                        $update1 = $this->CI->db->update ( $this->_table_prefix . $this->_login_table_name, array (
                            'password' => $new_pass
                        ) );

                        // update token
                        $this->CI->db->where ( 'id', $row ['id'] );
                        $update2 = $this->CI->db->update ( $this->_table_prefix . "reset_password", array (
                            'token' => ""
                        ) );

                        if ($update1 && $update2) {
                            $email_data['data_result'] = $data_result;
                            $email_data['new_password'] = $post ['new_password'];

                            //email_sender($email_data, "password_reset");

                            $data ['message'] = dashboard_lang ( '_PASSWORD_CHANGED_SUCCESSFULLY' );
                            $data ['btn_hide'] = TRUE;
                            $data ['alert_success'] = TRUE;
                            $data ['form_hide'] = TRUE;
                        }
                    } else {

                        $data ['message'] = dashboard_lang ( '_EMAIL_NOT_EXISTS' );
                        $data ['form_hide'] = TRUE;
                    }
                } else {

                    $data ['message'] = dashboard_lang ( '_PASSWORD_IS_NOT_MATCHED' );
                }
            }

        } else {

            $data ['message'] = dashboard_lang ( '_TOKEN_IS_INVALID_OR_EXPIRED' );
            $data ['btn_hide'] = TRUE;
            $data ['form_hide'] = TRUE;

        }

        $this->CI->load->view ( 'core_' . $this->CI->config->item ( 'template_name' ) . '/authentication/reset_password', $data );
    }

    public function logoutFromPortal(){

        $this->CI->session->sess_destroy ();
        
        $cookie = get_cookie ( 'rememberCookie' );
        if (isset ( $cookie )) {

            $cookie = array (
                'name' => 'rememberCookie',
                'value' => '',
                'expire' => '0'
            );

            delete_cookie ( $cookie );

            $user_id_config = $this->CI->config->item ( 'user_id' );
            $user_id = $this->CI->session->userdata ( $user_id_config );
            $this->CI->db->where ( "user_id", $user_id );
            $this->CI->db->delete ( $this->_table_prefix . 'login_session' );
        }
        redirect ( site_url ( $this->CI->config->item ( 'login_url' ) ) );
    }

    /*
     *Change user password
     */
    public function changePassword($post){

        $data = array ();
        
        $dashboard_login_table = $this->_table_prefix  . $this->_login_table_name;

        if (isset ( $post ) && count($post) ) {

            //$currentPassword = $post ['current_password'];
            $newPassword = $post ['new_password'];
            $re_type_password = $post['retype_password'];

            //$user_current_pass = md5 ( $currentPassword );
            $user_new_pass = md5 ( $newPassword );

            $this->CI->db->where ( array (
                'id' => get_user_id ()
            ) );

            $query = $this->CI->db->get_where ( $dashboard_login_table );

            if ($query->num_rows () > 0) {
                $email_data['data_result'] = $query->row_array();
                $email_data['new_password'] = $newPassword;
                $data = array (
                    'password' => $user_new_pass
                );

                if ( $newPassword != $re_type_password ) {

                    $data ['change_password_error'] = dashboard_lang ('_NEW_PASSWORD_AND_RETYPE_PASSWOED_NOT_MATCH' );

                }else {

                    if(strlen($re_type_password) < 6){
                        
                        $data ['change_password_error'] = dashboard_lang ('_NEW_PASSWORD_SHOULD_HAVE_AT_LAST_6_CHARACTERS' );
                    }
                    else{

                        $this->CI->db->where ( "id", get_user_id () );
                        $this->CI->db->update ( $dashboard_login_table, $data );

                        $data ['change_password_message'] = dashboard_lang ( '_PASSWORD_CHANGED_SUCCESS' );
                    }

                }

            } else {
                $data ['change_password_error'] = dashboard_lang ( '_CURRENT_PASSWORD_NOT_MATCH' );
            }
        }
        else{
            if(!empty($post)) {
                $data ['change_password_error'] = dashboard_lang('_PLEASE_ENTER_YOUR_CURRENT_PASSWORD');
            }
        }

        if (! get_user_id ()) {
            redirect ( site_url ( $this->CI->config->item ( 'login_url' ) ) );
        }

        $this->CI->db->where ( array (
            'id' => get_user_id ()
        ) );

        $query = $this->CI->db->get_where ( $dashboard_login_table );
        if (array_key_exists ( 'id', $_GET )) {
            if ($_GET ['id'] === $query->row_array ()[0]) {
            }
        }

        $data ['data'] = $query->row_array ();

        $this->CI->template->write_view ( 'content', 'core_' . $this->CI->config->item ( 'template_name' ) . '/authentication/setting', $data );

        $this->CI->template->render ();

    }
    
    /*  
     * Change user email address
     */
    
    public function changeEmail(){
        
        $result = false;
        
        $verification_key = $this->CI->input->get('verification_key');
        $email_change_log_table = $this->_table_prefix . "email_change_log";
        $dashboard_login_table = $this->_table_prefix . $this->_login_table_name;
        
        if (isset($verification_key)) {
        
            $this->CI->db->select('*');
            $this->CI->db->where('is_deleted', 0);
            $this->CI->db->where('valid_upto >', time());
            $this->CI->db->where('verification_key', $verification_key);
            $query = $this->CI->db->get($email_change_log_table);
            if ($query->num_rows() > 0) {
                $data = $query->row();
                $id = $data->id;
                $user_id = $data->user_id;
                $email = $data->new_email_address;
                // update dashboard login table
                $this->CI->db->where('id', $user_id);
                $result = $this->CI->db->update($dashboard_login_table, array(
                    'email' => $email
                ));
                // delete record from email_change_log table
                if ($result) {
                    $this->CI->db->where('id', $id);
                    $result = $this->CI->db->update($email_change_log_table, array(
                        'is_deleted' => 1
                    ));
                }
        
                if ($result) {
                    $this->logoutFromPortal();
                }
            } else {
        
                $url  = base_url()."dashboard/home";
                $error_msg['redirect_time'] = $redirect_time = $this->CI->config->item('no_permission_listing_view_redirect');
                header("Refresh: $redirect_time; URL=$url");
                $error_msg['not_show_time_msg'] = FALSE;
                $error_msg['heading'] = dashboard_lang('_ACCESS_DENIED');
                $error_msg['message'] = dashboard_lang('_THIS_LINK_IS_EXPIRED');
        
                $this->CI->load->view('errors/html/error_403', $error_msg);
            }
        } else {
        
            $data = array();
        
            $result = $this->addNewEmail();
            if ($result['status']) {
                $data['status'] = 1;
                $data['message'] = dashboard_lang("_CHECK_YOUR_EMAIL_TO_COMPLETE_THIS_OPERATION");
            } else {
                if(isset($result['type']) AND $result['type'] == "duplicate_email"){
                    $data['status'] = 0;
                    $data['message'] = dashboard_lang("_GIVEN_EMAIL_USED_BY_OTHER_USER");
                }else{
                    $data['status'] = 0;
                    $data['message'] = dashboard_lang("_EMAIL_CHANGE_FAILED");
                }
        
            }
            echo json_encode($data);
        }
    }
    
    /*
     *Change user email
     */
    protected  function addNewEmail(){ 
        
        $expire_after = 86400; //24 hour        
        $result = array();
        
        $data = array ();
        $email_data = array ();
        $user_helper = BUserHelper::get_instance();
        $email_change_log_table = $this->_table_prefix  . "email_change_log";
        $login_table = $this->_table_prefix  . $this->_login_table_name;
        
        $new_email = $this->CI->input->post('email');
        
        //check new email exists in application or not        
        $this->CI->db->select('id');
        $this->CI->db->where('email', $new_email);
        $this->CI->db->where('is_deleted', 0);
        $query = $this->CI->db->get($login_table);
        if($query->num_rows() > 0){
            $result['status'] = FALSE;
            $result['type'] = "duplicate_email";
            
            return $result;
        }        
        
        
        if( isset($user_helper->id) AND $user_helper->id > 0){
            
            $data['user_id'] = $user_helper->id;
            $data['old_email_address'] = $user_helper->email;
            $data['new_email_address'] = $new_email;
            $data['verification_key'] = md5(time());
            $data['valid_upto'] = time()+$expire_after;
            
            $status = $this->CI->db->insert($email_change_log_table, $data);
        }
        
        if($status){
            
            $data['first_name'] = $user_helper->first_name;
            $data['url'] = base_url()."dashboard/change_email?verification_key=".$data['verification_key'];
            
            $result['status'] = email_sender($data, "change_email");
            
        }
        
        return $result;        
    
    }
    
}