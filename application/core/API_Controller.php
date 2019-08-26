<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH . "libraries/REST_Controller.php";

class API_Controller extends REST_Controller {

    /**
     * @var Bugsnag_Client bugsnag
     * Bugsnag initialize for bugtracking
     */
    //var $bugsnag; 
    public function __construct()
    {
        parent::__construct();		       	
        /*
        if (defined('ENVIRONMENT') && (ENVIRONMENT == 'production' || ENVIRONMENT == 'testing'))
        {
            $this->bugsnag = new Bugsnag_Client("f7f1f5a0664f50bc415b547b6a4a7246");
            set_error_handler(array($this->bugsnag, "errorHandler"));
            set_exception_handler(array($this->bugsnag, "exceptionHandler"));
            $this->bugsnag->setErrorReportingLevel(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
        }*/
	
        $this->load->model('user_m', '', TRUE);
        $this->load->library('form_validation');

        // Get the api key name variable set in the rest config file
        $api_key_variable = config_item('rest_key_name');

        // Work out the name of the SERVER entry based on config
        $key_name = 'HTTP_'.strtoupper(str_replace('-', '_', $api_key_variable));

        $this->user = $this->user_m->get_user_by_key($this->input->server($key_name));
    }

    protected function _check_request($request, $mandatory, $name, $validate, $param = NULL, $return = NULL)
    {
		$this->load->library('form_validation');
        $hasil = $request;
		
        // Request ada
        if ($request !== FALSE) {
            $bool = TRUE;
            if ($validate != 'skip') {
                if (is_null($param))
                    $bool = $this->form_validation->$validate($request);
                else
                    $bool = $this->form_validation->$validate($request, $param);
            }

            if ($bool === FALSE) {
                $this->response(array(
                    'status'=> 0,
                    'error' => "Your parameter '" . $name . "' is not valid."
                ));
            }

            if(empty($request) && $mandatory) {
                $this->response(array(
                    'status'    => 0,
                    'error'     => "Your parameter is not complete. Missing parameter '" . $name . "'."
                ), 403);
            }

        }
        // Request kosong, mandatory
        else if (empty($request) && $mandatory && ($validate !== "boolean")) {
            // tampilkan error
            $this->response(array(
                    'status'    => 0,
                    'error'     => "Your parameter is not complete. Missing parameter '" . $name . "'."
                ), 403);
        } else if (is_null($request) && $mandatory && ($validate == "boolean")) {
            $this->response(array(
                'status'    => 0,
                'error'     => "Your parameter is not complete. Missing parameter '" . $name . "'."
            ), 403);
        }

        return $hasil;
    }

    protected function _check_all_request($param, $method)
    {
        $data = array();

        // save params in variable
        foreach ($param as $k => $p)
        {
            $var =  (isset($p[1])) ? $p[1] : NULL;
            if ($$k = self::_check_request($this->$method($k), 0, $k, $p[0], $var)) $data[$k] = $$k;
        }
        return $data;
    }

    protected function _validate_request($request, $validate, $param = NULL)
    {
        $bool = false;
        if (is_null($param))
        {
            if (is_null($param))
                $bool = $this->form_validation->$validate($request);
            else
                $bool = $this->form_validation->$validate($request, $param);
        }

        return $bool;
    }

    protected function _check_user($id_user)
    {
        return $this->db->where('id_user', $id_user)->get('users')->row();
    }

    protected function _check_product($id_product)
    {
        return $this->db->where('id_product', $id_product)->get('products')->row();
    }

}