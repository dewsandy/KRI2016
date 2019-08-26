<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of template
 *
 * @author Afandi
 */
class auth {
    public $_ci;
    function  __construct() {
        $this->_ci=&get_instance();
    }

    public function check() {

        if (!$this->_ci->session->userdata('admin_session')) {
            redirect(base_url('admin/user/login'));
        }
    }

    public function save($_param) {
        $this->_ci->session->set_userdata('admin_session', $_param);
    }

    public function destroy() {

       $this->_ci->session->unset_userdata('admin_session');
       redirect(base_url() . "admin/user/login");
    }
}
?>