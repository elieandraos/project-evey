<?php 
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Response;

class ApiController extends Controller
{
	protected $status_code = 200;

	/**
	 * Getter for $status_code
	 * @return type
	 */
	public function getStatusCode()
	{
		return $this->status_code;
	}

	/**
	 * Setter for $status_code
	 * @param type $status_code 
	 * @return type
	 */
	public function setStatusCode($status_code)
	{
		$this->status_code = $status_code;
		return $this;
	}


	/**
	 * Json Response
	 * @param type $data 
	 * @param type $header 
	 * @return type
	 */
	public function respond($data, $headers = [])
	{
		 return Response::json( $data , $this->getStatusCode(), $headers);
	}


	/**
	 * 404 Not Found Error Response
	 * @param type $message 
	 * @return type
	 */
	public function respondNotFound($message = "404 Not Found")
	{
		return $this->setStatusCode(404)->respond([
			'error' => [
				'message' => $message,
				'code'	  => $this->getStatusCode()
			]
		]);
	}
}
