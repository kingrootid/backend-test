<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Data_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Data_model extends CI_Model
{

    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
    }

    // ------------------------------------------------------------------------


    // ------------------------------------------------------------------------
    public function data()
    {
        $table = 'data';
        $primaryKey = 'id';
        $columns = array(
            array('db' => 'id', 'dt' => 0),
            array('db' => 'id_employee', 'dt' => 1),
            array('db' => 'employee_name', 'dt' => 2),
            array('db' => 'employee_salary', 'dt' => 3),
            array('db' => 'employee_age', 'dt' => 4),
            array('db' => 'profile_image', 'dt' => 5),

        );

        // SQL server connection information
        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db'   => $this->db->database,
            'host' => $this->db->hostname,
            'charset' => 'utf8'
        );

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * If you just want to use the basic configuration for DataTables with PHP
     * server-side, there is no need to edit below this line.
     */
        $joinQuery = null;
        $extraWhere = '';
        $groupBy = '';
        $having = '';
        echo json_encode(
            SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
        );
    }
    public function save($post)
    {
        if (empty($post['id']) || empty($post['employee_name']) || empty($post['employee_salary']) || empty($post['employee_age'])) {
            return array('error' => true, 'message' => 'Ada data yang tidak sesuai');
        } else {
            $cek = $this->db->get_where('data', ['id_employee' => $post['id']]);
            $dcek = $cek->row_array();
            if ($cek->num_rows() > 0) {
                $di = array(
                    'id_employee' => $post['id'],
                    'employee_name' => $post['employee_name'],
                    'employee_salary' => $post['employee_salary'],
                    'employee_age' => $post['employee_age'],
                    'profile_image' => $post['profile_image'],
                );
                $aksi = $this->db->where('id', $dcek['id'])->update('data', $di);
            } else {
                $di = array(
                    'id_employee' => $post['id'],
                    'employee_name' => $post['employee_name'],
                    'employee_salary' => $post['employee_salary'],
                    'employee_age' => $post['employee_age'],
                    'profile_image' => $post['profile_image'],
                );
                $aksi = $this->db->insert('data', $di);
            }
            if ($aksi) {
                return array('error' => false, 'message' => 'Data berhasil direfresh');
            } else {
                return array('error' => true, 'message' => 'Data gagal direfresh');
            }
        }
    }

    // ------------------------------------------------------------------------

}

/* End of file Data_model.php */
/* Location: ./application/models/Data_model.php */