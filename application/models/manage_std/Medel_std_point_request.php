<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Medel_std_point_request extends CI_Model
{
    public function getMenu($semester, $subject)
    {
        $query = $this->db->query('SELECT * FROM menuPointSpecial WHERE menuPS_semester = "' . $semester . '" AND menuPS_subject = "' . $subject . '"');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function getSubjectMain($semester)
    {
        $query = $this->db->query('SELECT subsem_semester, subject_id , subject_name FROM subject_semester 
        LEFT JOIN subject ON subject_id = subsem_subject
        WHERE subsem_semester = "' . $semester . '" AND subject_major != "MUT"');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function getSubjectAdd($semester, $subject, $menuId)
    {
        $query = $this->db->query('SELECT subject_id, subject_name FROM ps_subject 
        LEFT JOIN subject ON subject_id = PS_sub_subadd
        WHERE PS_sub_semester = "' . $semester . '" AND PS_sub_subject = "' . $subject . '" AND PS_sub_menuid = "' . $menuId . '" ');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function getStd($User)
    {
        $query = $this->db->query('SELECT * FROM student WHERE std_code_id = "' . $User . '" ');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function getHeader($subject_id, $semester, $point_id)
    {
        $this->db->select('*');
        $this->db->from('subject_setpoint');
        $this->db->where('setpoint_subject', $subject_id);
        $this->db->where('setpoint_semester', $semester);
        $this->db->where('setpoint_id', $point_id);
        //$this->db->order_by('setpoint_index', 'ASC');
        $this->db->order_by('cast(setpoint_index as int)', 'ASC');
        //$this->db->order_by('menuDowId', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function AddSubjectRequest($subject_id, $semester, $std_sub, $std_point, $User, $menu_id)
    {
        $now = $this->db->query('SELECT menuPS_date FROM menuPointSpecial WHERE menuPS_date >= DATE(NOW()) AND menuPS_semester = "' . $semester . '" AND menuPS_subject = "' . $subject_id . '" AND menuPS_id = "' . $menu_id . '" ');
        if ($now->num_rows() > 0) {
            $chk = $this->db->query('SELECT * FROM ps_student WHERE ps_std_semester = "' . $semester . '" AND ps_std_subject = "' . $subject_id . '" AND ps_std_psID = "' . $menu_id . '" AND ps_std_stdID = "' . $User . '" ');
            if ($chk->num_rows() > 0) {
                return 0;
            } else {
                $count = count($std_sub);
                for ($i = 0; $i < $count; $i++) {
                    $this->db->query('INSERT INTO ps_student VALUES("' . $semester . '", "' . $subject_id . '" , "' . $menu_id . '", "' . $std_sub[$i] . '", "' . $User . '", "' . $std_point[$i] . '", "0") ');
                }
                return 1;
            }
        }else{
            return 'now';
        }
    }
}
