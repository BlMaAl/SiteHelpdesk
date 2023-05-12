<?php

namespace Helpdesk\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Home extends BaseController
{
    protected $session;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->session = \Config\Services::session();

        helper('form');
    }

    public function before(RequestInterface $request, $arguments = null)
    {
        if (!$this->session->has('user_id')) {
            // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
            return redirect()->to('login');
        }
    }

	public function index()
	{
		$data['title'] = "Helpdesk";

		$this->display_view('Helpdesk\helpdesk_message', $data);
	}

    public function presence()
    {
        $data['title'] = "Presence Apprentie";

        $this->display_view('Helpdesk\presence', $data);
    }


        
}
