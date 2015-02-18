<?php namespace Zeropingheroes\Lanager;

use Zeropingheroes\Lanager\EventSignups\EventSignupService;
use View;

class EventSignupsController extends BaseController {

	protected $route = 'events.signups';

	public function __construct()
	{
		parent::__construct();
		$this->service = new EventSignupService($this);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($eventId)
	{
		$event = $this->service->parent([$eventId]);

		return View::make('event-signups.index')
					->with('title','Signups: '.$event->name)
					->with('event',$event)
					->with('eventSignups', $this->service->all([$eventId]));
	}

}