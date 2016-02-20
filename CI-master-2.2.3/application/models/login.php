<?php if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Login extends CI_Model{
	function add_user($user){
		$query = "INSERT INTO users(first_name, last_name, email, password, created_at, updated_at) VALUES(?,?,?,?,?,?)";
		$values = array($user['first_name'], $user['last_name'], $user['email'], $user['password'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}
	function get_user($email){
		return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
	}

	function add_message($message){
		$query = "INSERT INTO messages(message, created_at, users_id) VALUES (?,?,?)";
		$values = array($message['message'], date("Y-m-d, H:i:s"), $message['user_id']);
		return $this->db->query($query, $values);
	} 

	function get_messages(){
		$messages_query = "SELECT * FROM messages
						   LEFT JOIN users
                           ON messages.users_id=users.id
                           ORDER BY messages.id DESC LIMIT 10";
		return $this->db->query($messages_query)->result_array();
	}

	function add_pic($pic){
		$query = "INSERT INTO user_pics(file_path, created_at, users_id) VALUES(?,?,?)";
		$values = array($pic['pic'], date("Y-m-d, H:i:s"), $pic['user_id']);
		return $this->db->query($query, $values);
	}

	function get_pics(){
		$pic_query = "SELECT * FROM user_pics";
		return $this->db->query($pic_query)->result_array();
	}

	function add_facebook_user($user){
		$query = "INSERT INTO facebook_users(first_name, last_name, email, clientID, accessToken) VALUES(?,?,?,?,?)";
		$values = array($user['first_name'], $user['last_name'], $user['email'], $user['clientID'], $user['accessToken']);
		return $this->db->query($query, $values);
	}
}