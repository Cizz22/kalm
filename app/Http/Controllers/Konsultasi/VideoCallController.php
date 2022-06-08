<?php

namespace App\Http\Controllers\Konsultasi;

use App\Events\StartVideoChat;
use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

class VideoCallController extends Controller
{
    public function index($id){
        $konsultasi = Konsultasi::find($id);
        $user = $konsultasi->user;
        $psikolog = $konsultasi->psikolog;;

        return view('pages.konsultasi.videocall', compact(['psikolog', 'user']));
    }

    public function generate_token()
    {
        // Substitute your Twilio Account SID and API Key details
        $accountSid = env('TWILIO_ACCOUNT_SID');
        $apiKeySid = env('TWILIO_API_KEY_SID');
        $apiKeySecret = env('TWILIO_API_KEY_SECRET');

        $identity = uniqid();

        // Create an Access Token
        $token = new AccessToken(
            $accountSid,
            $apiKeySid,
            $apiKeySecret,
            3600,
            $identity
        );

        // Grant access to Video
        $grant = new VideoGrant();
        $grant->setRoom('cool room');
        $token->addGrant($grant);

        // Serialize the token as a JWT
        echo $token->toJWT();
    }




    // public function callUser(Request $request)
    // {
    //     $data['userToCall'] = $request->user_to_call;
    //     $data['signalData'] = $request->signal_data;
    //     $data['from'] = Auth::id();
    //     $data['type'] = 'incomingCall';

    //     broadcast(new StartVideoChat($data))->toOthers();
    // }
    // public function acceptCall(Request $request)
    // {
    //     $data['signal'] = $request->signal;
    //     $data['to'] = $request->to;
    //     $data['type'] = 'callAccepted';
    //     broadcast(new StartVideoChat($data))->toOthers();
    // }
    // public function auth(Request $request) {
    //     $user = $request->user();
    //     $socket_id = $request->socket_id;
    //     $channel_name = $request->channel_name;
    //     $pusher = new Pusher(
    //         config('broadcasting.connections.pusher.key'),
    //         config('broadcasting.connections.pusher.secret'),
    //         config('broadcasting.connections.pusher.app_id'),
    //         [
    //             'cluster' => config('broadcasting.connections.pusher.options.cluster'),
    //             'encrypted' => true
    //         ]
    //     );
    //     return response(
    //         $pusher->presence_auth($channel_name, $socket_id, $user->id)
    //     );
    // }
}
