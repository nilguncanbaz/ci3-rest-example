<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("users_model");
    }

    public function index()
    {
        $page = (int) $this->input->get("page");
        $page = $page > 0 ? $page : 1;

        $users = $this->users_model->all($page);

        $this->layout('users', compact("users"));
    }

    public function add()
    {
        $first_name = $this->input->post("first_name", true);
        $last_name = $this->input->post("last_name", true);
        $email = $this->input->post("email", true);

        if ($first_name && $last_name && $email) {
            $response = $this->users_model->add($first_name, $last_name, $email);

            if ($response) {
                return $this->success("Successfully", "/users");
            }

            return $this->error("Something went wrong!");
        }

        $this->error("Please enter first name, last name and e-mail!");
    }

    public function edit($id)
    {
        $user = $this->users_model->get($id);

        if ($user) {
            return $this->layout("edit", compact("user"));
        }

        $this->error("User not found!");
    }

    public function update($id)
    {
        $first_name = $this->input->post("first_name", true);
        $last_name = $this->input->post("last_name", true);
        $email = $this->input->post("email", true);

        if ($first_name && $last_name && $email) {
            $response = $this->users_model->update($id, $first_name, $last_name, $email);

            if ($response) {
                return $this->success("Successfully", "/users");
            }

            return $this->error("Something went wrong!");
        }

        $this->error("Please enter first name, last name and e-mail!");
    }

    public function delete($id)
    {
        $response = $this->users_model->delete($id);

        if ($response) {
            return $this->success("Successfully");
        }

        $this->error("Something went wrong!");
	}
	
    public function get($id)
    {
        $user = $this->users_model->get($id);

        if ($user) {
            return $this->layout("user", compact("user"));
        }

        $this->error("User not found!");
	}
	
    public function form()
    {
        $this->layout("user_form");
    }
}
