<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Libraries\Innerapp;
/* use App\Libraries\Simanis; */
use App\Config\App;


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
     
    protected $jsfiles = '';
    protected $cssfiles = '';
    protected $suburl = '';
    protected $token = '';
    protected $innerapp;
    //protected $simanis;
    protected $mpkpt;
    protected $masksalt = '72l3';
    protected $trigger = array();
    protected $modulename = '';
    function __construct() {
		$this->innerapp = new Innerapp;
		//$this->simanis = new Simanis;
		$this->appconfig = Config('App')->siteconfig;
	}
    
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        //$this->innerapp->servervar->storage = \Config\Services::session();
    }
    protected function addJs($base_url_file_path) {
		$this->jsfiles .= '<script src="'.base_url($base_url_file_path).'"></script>';
	}
	protected function addCss($base_url_file_path) {
		$this->cssfiles .= '<link href="'.base_url($base_url_file_path).'" rel="stylesheet" type="text/css" />';
	}
	protected function commonViewVars() {
		$data = array();
		$data['suburl'] = site_url($this->suburl);
		$data['base'] = base_url();
		$data['token'] = $this->innerapp->servervar->getToken();
		$data['serviceurl'] = site_url($this->suburl).'/service/'.$data['token'];
		$maskref = $this->innerapp->servervar->maskref($this->masksalt);
		$data['maskref']= json_encode($maskref);
		$data['trigger'] = json_encode($this->trigger);
		$data['innerapp'] = $this->innerapp;
		$data['modulename'] = $this->modulename;
		return $data;
	}
	protected function ViewDefault($page, $newdata) {
		$data = $this->commonViewVars();
		$data['encdata'] = base64_encode(json_encode($data));
		$data['jsfiles'] = $this->jsfiles;
		$data['cssfiles'] = $this->cssfiles;
		$data['innerapp'] = $this->innerapp;
		if (count($newdata) > 0) {
			$data = array_merge($data, $newdata);
		}
		$out = view('construct/header', $data);
		$out .= view('construct/sidebar', $data);
		//$out .= view('construct/right_content', $data);		
		$out .= view($page, $data);
		$out .= view('construct/footer', $data);
		return $out;
	}
	protected function ViewPemohon($page, $newdata) {
		$data = $this->commonViewVars();
		$data['encdata'] = base64_encode(json_encode($data));
		$data['jsfiles'] = $this->jsfiles;
		$data['cssfiles'] = $this->cssfiles;
		$data['innerapp'] = $this->innerapp;
		if (count($newdata) > 0) {
			$data = array_merge($data, $newdata);
		}
		$out = view('construct_pemohon/header', $data);
		//~ $out = view('construct/sidebar', $data);
		$out .= view($page, $data);
		$out .= view('construct_pemohon/footer', $data);
		return $out;
	}
	protected function ViewOuterapp($page, $newdata) {
		$data = $this->commonViewVars();
		if (count($newdata) > 0) {
			$data = array_merge($data, $newdata);
		}
		$data['encdata'] = base64_encode(json_encode($data));
		$data['jsfiles'] = $this->jsfiles;
		$data['cssfiles'] = $this->cssfiles;
		$data['innerapp'] = $this->innerapp;
		if (count($newdata) > 0) {
			$data = array_merge($data, $newdata);
		}

		$out = view('outerapp/'.$page, $data);
		return $out;
	}
}
