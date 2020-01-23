<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	private $guzzle;

	public function __construct()
	{
		$this->guzzle = new GuzzleHttp\Client(["base_uri" => "https://reqres.in/api/", "verify" => false]);
	}

	public function all($page){
		try {
			$response = $this->guzzle->get("users?page={$page}");

			if($response->getStatusCode() === 200){
				$json_response = json_decode($response->getBody()->getContents());
				if($json_response)
					return $json_response;
			}
		}catch (Exception $exception){
			// Guzzle Logging
		}


		return (object)["page" => 1, "total_pages" => 1, "total" => 0, "data" => []];
	}

	public function get($id){
		try {
			$response = $this->guzzle->get("users/{$id}");

			if ($response->getStatusCode() === 200) {
				$json_response = json_decode($response->getBody()->getContents());
				if ($json_response && $json_response->data)
					return $json_response->data;
			}
		}catch (Exception $exception){
			// Guzzle Logging
		}

		return false;
	}

	public function add($first_name, $last_name, $email) {
		try {
			$response = $this->guzzle->post("users", [
				'form_params' => [
					'first_name' => $first_name,
					'last_name' => $last_name,
					'email' => $email
				]
			]);

			if ($response->getStatusCode() === 201) {
				return true;
			}
		}catch (Exception $exception){
			// Guzzle Logging
		}

		return false;
	}

	public function update($id, $first_name, $last_name, $email) {
		try {
			$response = $this->guzzle->put("users/{$id}", [
				'form_params' => [
					'first_name' => $first_name,
					'last_name' => $last_name,
					'email' => $email
				]
			]);

			if ($response->getStatusCode() === 200) {
				return true;
			}
		}catch (Exception $exception){
			// Guzzle Logging
		}

		return false;
	}

	public function delete($id) {
		try {
			$response = $this->guzzle->delete("users/{$id}");

			if ($response->getStatusCode() === 204) {
				return true;
			}
		}catch (Exception $exception){
			// Guzzle Logging
		}

		return false;
	}
}
