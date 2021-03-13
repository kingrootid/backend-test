<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Data
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model', 'data');
    }

    public function karyawan()
    {
        echo json_decode($this->data->data(), TRUE);
    }
    public function refresh()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://static.sekawanmedia.co.id/data.json");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $json = json_decode($output, TRUE);
        foreach ($json['data'] as $data) {
            $aksi = $this->data->save($data);
        }
        echo json_encode($aksi, TRUE);
    }
}


/* End of file Data.php */
/* Location: ./application/controllers/Data.php */