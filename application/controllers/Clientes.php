<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('clientes_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['clientes'] = $this->clientes_model->get_clientes();
        $this->load->view('clientes/index', $data);
    }

    public function crear()
	{
		$this->load->view('crear_cliente');
	}

    public function guardar()
    {
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('clientes/create');
        }
        else
        {
            $this->clientes_model->create_cliente();
            redirect('clientes');
        }
    }

    public function edit($id)
    {
        $data['cliente'] = $this->clientes_model->get_cliente($id);

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('clientes/edit', $data);
        }
        else
        {
            $this->clientes_model->update_cliente($id);
            redirect('clientes');
        }
    }

    public function delete($id)
    {
        $this->clientes_model->delete_cliente($id);
        redirect('clientes');
    }
}