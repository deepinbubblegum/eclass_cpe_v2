<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Teacher_add_subject extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('manage_te/Model_te_add_subject');
    }

    public function Add_Data_ctl_te()
    {
        $data = array(
            'subsem_semester' => $this->input->post('semester_id'),
            'subsem_subject' => $this->input->post('subject_id'),
            'subsem_teacher' => $this->session->userdata('ses_id')
        );
        $this->Model_te_add_subject->Add_data_model_subject($data);
        $this->genDir($this->input->post('semester_id'),$this->input->post('subject_id'));

        $data_img = $this->input->post('img_data');
        if($data_img != ''){
            $img_array = explode(";", $data_img);
            $img_array2 = explode(",", $img_array[1]);
            $img_decode = base64_decode($img_array2[1]);
            $path_full = '/Eclass/uploads/';
            $image = $this->input->post('subject_id').'-'.$this->input->post('semester_id').'png';
            file_put_contents($image, $img_decode);
        }
    }

    public function Show_Data_ctl()
    {
        $semester = $this->input->post('semester');
        $te_id = $this->session->userdata('ses_id');
        $result = $this->Model_te_add_subject->Show_Data_subject_model($semester, $te_id);
        echo json_encode($result);
    }

    public function Subject_Add_data_ctl()
    {
        $te_id = $this->session->userdata('ses_id');
        $result = $this->Model_te_add_subject->Show_Data_subject_add_model($te_id);
        echo json_encode($result);
    }

    public function getSemester(){
        $result = $this->Model_te_add_subject->selectSemester();
        echo json_encode($result);
    }

    public function Add_SubJoin_Data_ctl_te()
    {
        $semes = $this->input->post('$semes[]');
        $sub = $this->input->post('$sub[]');
        $subjoin = $this->input->post('$subjoin[]');
        // print_r($semes);
        // $arrayLength = count($semes);
        // for ($i = 0; $i < $arrayLength; $i++)  {
        //     echo $semes[$i] ."<br />";
        // }
        $this->Model_te_add_subject->Add_Subject_Join($semes,$sub,$subjoin);
    }
    
}
