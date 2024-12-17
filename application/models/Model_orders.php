<?php 
class Model_orders extends CI_Model{
    public function update_status()
    {
    $this->db->where($id_orders, $data['$id_orders']);
    $this->db->update('orders', $data);
    }
    public function get_orders_by_status($userId, $status)
{
    $this->db->where('user_id', $userId);
    $this->db->where('status', $status);
    $query = $this->db->get('orders');
    return $query->result_array();
}

}