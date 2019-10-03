<?php

class Model_su_semester extends CI_Model
{

        public function Show_Max_Data_model()
        {
                $query = $this->db->get('semester');
                return $query->num_rows();
        }

        public function Show_Data_Semester_model($limit = null, $start = null)
        {
                if ($limit == 0 and $start == 0) {
                        $limit = null;
                        $start = null;
                }
                $this->db->select('semester_id, semester_year, semester_part, semester_name');
                $this->db->from('semester');
                $this->db->limit($limit, $start);
                $query = $this->db->get();
                if ($query->num_rows() > 0) {
                        return $query->result();
                } else {
                        return 0;
                }
        }

        public function Add_data_model($dataInsert)
        {
                $this->db->insert('semester', $dataInsert);
        }

        public function Delete_Data_model($data)
        {
                $this->db->where_in('semester_id', $data);
                $this->db->delete('semester');
        }

        public function Edit_data_model($org_semester_id, $data)
        {
                $this->db->where('semester_id', $org_semester_id);
                $this->db->update('semester', $data);
        }

        public function Search_data_model($keyword, $type)
        {
                $this->db->select('semester_id, semester_year, semester_part,semester_name');
                $this->db->from('semester');
                if ($type != null) {
                        $this->db->like($type, $keyword);
                } else {
                        $this->db->like('semester_year', $keyword);
                        $this->db->or_like('semester_part', $keyword);
                        $this->db->or_like('semester_name', $keyword);
                }

                $query = $this->db->get();
                if ($query->num_rows() > 0) {
                        return $query->result();
                } else {
                        return 0;
                }
        }
}
