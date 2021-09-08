<?php

namespace App\Http\Controllers\Client;


use App\Core\Services\Infrastructure\IMailService;

use App\Http\Controllers\Client\Base\ClientControllerBase;
use App\Http\Requests\Client\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class   RequestController extends ClientControllerBase
{

    /**

     * @var IMailService

     */

    private $_mailService;

    public function __construct(IMailService $mailService)

    {
        $this->_mailService = $mailService;
    }


    public function add(ContactRequest $request)
    {
        $validated = $request->validated();

        $data = Contact::create($validated);

        return response()->json('success');

    }

}