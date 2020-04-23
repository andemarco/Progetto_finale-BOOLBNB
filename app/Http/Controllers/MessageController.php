<?php

namespace App\Http\Controllers;
use App\Message;
// use App\Apartment;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $validateRequest;

    public function __construct()
    {
        $this->validateRequest = [
            'apartment_id' => 'required|numeric|exists:apartments,id',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'email' => 'required|email'
        ];
    }

    public function writeMessage(Request $request)
    {

        // $apartmentId = Apartment::find($id);
        $request->validate($this->validateRequest);
        $data = $request->all();

        $newMessage = new Message;
        $newMessage->fill($data);
        $saved = $newMessage->save();

        if (!$saved) {
            return redirect()->back();
        }

        return redirect()->route('show', $newMessage->apartment->id)->with('message', $newMessage);
    }
}
