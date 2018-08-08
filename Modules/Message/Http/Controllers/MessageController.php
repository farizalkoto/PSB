<?php

namespace Modules\Message\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use SMSGatewayMe\Client\ApiClient;
use SMSGatewayMe\Client\Configuration;
use SMSGatewayMe\Client\Api\MessageApi;
use SMSGatewayMe\Client\Model\SendMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    public function lulus(Request $request)
    {
        $post = $request->except('_token');
        if (empty($post)) {
            return view('message::lulus');
        }

        $list = parent::listData('registries',  ['registry_status' => 'registry_option1'], ['option1', 'option2', 'user.studentPersonal.studentAddresses']);
        if ($list['status'] != 200) {
            return back()->withErrors(['Data tidak valid']);
        }

        foreach ($list['result'] as $value) {
            $message = $request['message'].' Anda lulus jurusan '.$value['option1']['department_name'];
            $phone = $value['user']['student_personal']['student_addresses']['student_address_phone'];
            $send = $this->index($message, $phone);
        }

        $list = parent::listData('registries',  ['registry_status' => 'registry_option2'], ['option1', 'option2', 'user.studentPersonal.studentAddresses']);
        if ($list['status'] != 200) {
            return back()->withErrors(['Data tidak valid']);
        }

        foreach ($list['result'] as $value) {
            $message = $request['message'].' Anda lulus jurusan '.$value['option2']['department_name'];
            $phone = $value['user']['student_personal']['student_addresses']['student_address_phone'];
            $send = $this->index($message, $phone);
        }

        return back()->with(['success' => ['Pesan telah dikirim']]);
    }

    public function nolulus(Request $request)
    {
        $post = $request->except('_token');
        if (empty($post)) {
            return view('message::nolulus');
        }

        $list = parent::listData('registries',  ['registry_status' => 'not_pass'], ['option1', 'option2', 'user.studentPersonal.studentAddresses']);
        if ($list['status'] != 200) {
            return back()->withErrors(['Tidak ada siswa yang tidak lulus']);
        }

        foreach ($list['result'] as $value) {
            $message = $request['message'].' Anda lulus jurusan '.$value['option1']['department_name'];
            $phone = $value['user']['student_personal']['student_addresses']['student_address_phone'];
            $send = $this->index($message, $phone);
        }

        return back()->with(['success' => ['Pesan telah dikirim']]);
    }

    public function index($message, $phone)
    {

        $config = Configuration::getDefaultConfiguration();
        $config->setApiKey('Authorization', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUzMjUzMTUzNSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjU3NDUwLCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.I0Myp5vApVLrsE2xUYBl62otXMjpcQoUQbXTJf4WpuY');
        $apiClient = new ApiClient($config);
        $messageClient = new MessageApi($apiClient);

// Sending a SMS Message
        $sendMessageRequest1 = new SendMessageRequest([
            'phoneNumber' => $phone,
            'message' => $message,
            'deviceId' => 97488
        ]);
        $sendMessages = $messageClient->sendMessages([
            $sendMessageRequest1
        ]);

        return true;
    }
}
