<?php 

function cek_login(){
	$ci = get_instance();
	if(!$ci->session->userdata('email')){
		redirect('auth');
	}else{
		

		$id_role = $ci->session->userdata('id_role');
		$menu = $ci->uri->segment(1);
		$id_menu = $ci->db->get_where('base_menu',['url' => $menu])->row()->id_menu;

		$ci->db->where('mr_id_role', $id_role);
		$ci->db->where('mr_id_menu', $id_menu);
		$access = $ci->db->get('base_menurole')->num_rows();

		if($access == 0){
			redirect('auth/blocked','refresh');

			// echo $access

		}

	}
}


function check_access($id_role,$id_menu){
	$ci = get_instance();

	$ci->db->where('mr_id_role', $id_role);
	$ci->db->where('mr_id_menu', $id_menu);
	$result = $ci->db->get('base_menurole')->num_rows();

	if ($result > 0) {
		return "checked";
	}else{
		return 'false';
	}

	// return $result;

}

function checkroleuser($id_role,$id_user){
	$ci = get_instance();

	$ci->db->where('ur_id_role', $id_role);
	$ci->db->where('ur_id_user', $id_user);
	$result = $ci->db->get('base_userrole')->num_rows();

	if ($result > 0) {
		return "checked";
	}else{
		return 'false';
	}

	// return $result;

}

 ?>