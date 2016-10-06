<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 04/10/2016
 * Time: 16:53
 */
namespace App\Modules\ContactUs\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Modules\ContactUs\Models\ContactUs;
use Breadcrumbs;
use Lang;
use Request;
use SEOMeta;
use Setting;
use Theme;

class ContactUsController extends Controller {
    public function __construct() {
		// Home > [Career]
		Breadcrumbs::register('contact-us', function($breadcrumbs) {
			$breadcrumbs->parent('home');
			$breadcrumbs->push(Lang::get('contact-us::app.contact us'));
		});
    }

    public function index(ContactUs $contact) {
		SEOMeta::setTitle(Setting::get_key('company_name').' '.Lang::get('contact-us::app.contact us'))
		->setDescription(Setting::get_key('company_name').' '.Lang::get('contact-us::app.contact us'))
		->setCanonical(url('/'))
		->addKeyword(Setting::get_key('company_name').' '.Lang::get('contact-us::app.contact us'));
		
        return Theme::view ('contact-us::index',array(
			'index' => 'contact-us',
			'page_title' => Lang::get('contact-us::app.contact us'),	
            'contacts' => $contact->where('is_active','=',1)->get()
        ));
    }
	
	
}
