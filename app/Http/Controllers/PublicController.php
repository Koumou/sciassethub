<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Throwable;
use Mpdf\Tag\Th;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Models\Asset;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;


class PublicController extends Controller
{


    // API

    public function auth_user()
    {

        // if (Auth::user() != NULL) {
            $retrieve_firstname = Cache::get("firstname");
            $retrieve_lastname = Cache::get("lastname");





            return $receivedData = [
                "firstname" => $retrieve_firstname,
                "username" => $retrieve_lastname,
            ];
        // } else {
        //     return "Unauthorized";
        // }
    }
    public function index()
    {
        return view('welcome');
    }

    public function search()
    {
        return view('common.search');
    }

    public function about()
    {
        return view('common.about');
    }

    public function reset_password()
    {
        return view('auth.reset_password');
    }

    public function set_password()
    {
        return view('auth.set_new_password');
    }
    public function set_new_password(Request $request)
    {
        User::where('email', Auth::user()->email)
            ->update([
                'password' => Hash::make($request->new_password),
            ]);
        $request->session()->flash('PASSWORD_CHANGED');
        return redirect()->back();
    }
    public function new_password(Request $request)
    {

        if (cache::has("pin_reset") && cache::has("email_pin_reset")) {

            $retrieve_pin_generated = cache::get("pin_reset");
            $retrieve_email_pin = cache::get("email_pin_reset");

            if ($retrieve_pin_generated == $request->code_pin && $retrieve_email_pin == $request->email) {
                User::where('email', $retrieve_email_pin)
                    ->update([
                        'password' => Hash::make($request->new_password),
                    ]);

                $details = [
                    'user_email' => $retrieve_email_pin,
                ];

                Mail::to($retrieve_email_pin)->send(new \App\Mail\Password_changed($details));

                $request->session()->flash('PASSWORD_CHANGED');
                return redirect()->back();
            }
        }
    }

    public function reset_(Request $request)
    {

        $user_verification = User::where('email', $request->email)->first();

        if ($user_verification != NULL) {

            $generate_pin = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $pin_ = '';

            for ($i = 0; $i < 6; $i++) {
                $pin_ .= $generate_pin[rand(0, 35)];
            }

            $current_user_email = $request->email;
            $minutes = 15;

            cache::put('pin_reset', $pin_, $minutes = 2880);
            cache::put('email_pin_reset', $current_user_email, $minutes = 2880);


            $details = [
                'user_email' => $current_user_email,
                'pin' => $pin_,
            ];

            Mail::to($current_user_email)->send(new \App\Mail\Reset_password($details));


            $request->session()->flash('RESET_EMAIL_SENT');
            return redirect()->back();
        } else {

            $request->session()->flash('UNKNOQN_MAIL');

            return redirect()->back();
        }
    }

    public function search_request(Request $request)
    {

        try {

            $client = new Client([
                'verify' => FALSE,
            ]);

            $inputText_ = "What is " . $request->input_insert . " in the bioscience, and pharmacy in few words?";


            $response = $client->post('https://api.edenai.run/v2/text/chat', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . config('services.openai.api_key'),
                ],
                'json' => [
                    // 'model'=> 'text-davinci-003',
                    'text' => $inputText_,
                    // 'role' => 'user',
                    'content' => 'Chemestry and pharmacy',
                    "providers" => "openai",
                    // 'temperature' => 0.1,
                    'max_tokens' => 100,
                    // 'top_p' => 1,
                    // 'n' => 1,
                    // "frequency_penalty" => 0,
                    // "presence_penalty" => 0.6,
                    'stop' => [" Human:", " AI:"],
                ],
                // 'verify' => 'C:\wamp64\bin\php\php8.1.13\extras\ssl\cacert.pem',
            ]);

            // Continue with the rest of your code...


            // Decode the JSON response
            $responseData = json_decode($response->getBody(), true);

            // dd($responseData);


            // $client = new Client([
            //     'verify' => FALSE,
            // ]);

            // $inputText = "What is the purpose of ".$inputText_."? in the domain of chemestry and pharmacy";

            // $response = $client->post('https://api.openai.com/v1/engines/davinci/completions', [
            //     'headers' => [
            //         'Content-Type' => 'application/json',
            //         'Authorization' => 'Bearer ' . config('services.openai.api_key'),
            //     ],
            //     'json' => [
            //         // 'model'=> 'text-davinci-003',
            //         'prompt' => $inputText,
            //         // 'role' => 'user',
            // // 'content' => 'Chemestry and pharmacy',
            //         'temperature' => 0.1,
            //         'top_p' => 0.7,
            //         'max_tokens' => 100,

            //         'n' => 1,
            //         "frequency_penalty" => 0,
            //         "presence_penalty" => 0.6,
            //         'stop' => [" Human:", " AI:"],
            //     ],
            //     // 'verify' => 'C:\wamp64\bin\php\php8.0.13\extras\ssl\cacert.pem',
            // ]);

            // // Continue with the rest of your code...
            // // dd(count(count_chars($responseData['openai']['generated_text'])));

            // // Decode the JSON response
            // $responseData = json_decode($response->getBody(), true);

            // dd($responseData);

            // dd(json_decode($response->getBody(), true)['choices'][0]['text']);

            // dd(json_decode($response->getBody(), true)['choices'][0]['text']);

            // Check if the 'choices' key is set and not null
            // if (isset($responseData['openai']['generated_text'])) {
            //     // Access the token count
            //     $tokenCount = count(count_chars($responseData['openai']['generated_text']));

            //     // Check if the token count exceeds the limit
            //     if ($tokenCount <= 2000) {
            //         // Make the actual API call with adjusted max_tokens
            //         $response = $client->post('https://api.openai.com/v1/engines/davinci/completions', [
            //             'headers' => [
            //                 'Content-Type' => 'application/json',
            //                 'Authorization' => 'Bearer ' . config('services.openai.api_key'),
            //             ],
            //             'json' => [
            //                 'prompt' => "Extract important information, make it one paragraph, make it make sense, remove unnecessary words and improve the overall: ".json_decode($response->getBody(), true)['openai']['generated_text'],
            //                 'temperature' => 0.7,
            //                 'max_tokens' => 200,
            //                 'top_p' => 1,
            //                 'n' => 1,
            //                 "frequency_penalty" => 1,
            //                 "presence_penalty" => 0.6,
            //                 'stop' => [" Human:", " AI:"],            
            //             ],
            //         ]);

            //         // Process the response as needed
            //         $outputText = json_decode($response->getBody(), true)['choices'][0]['text'];
            //     } else {
            //         $outputText = "Input text exceeds token limit.";
            //     }
            // } else {
            //     $outputText = "Error: Unable to retrieve token count from API response.";
            // }

            // Basic analysis (count words)
            $wordCount = str_word_count($responseData['openai']['generated_text']);

            // Restructure the text (for demonstration, reverse the text)
            $restructuredText = strrev($responseData['openai']['generated_text']);

            // Log the results
            \Log::info('Text analysis result', [
                'wordCount' => $wordCount,
                'restructuredText' => $restructuredText,
            ]);

            // dd(json_decode($response->getBody()->getContents(), true));



            $rentSpaces =  DB::table('assets')
                ->join('users', 'assets.user_reference', '=', 'users.email')
                ->orderBy('assets.updated_at', 'DESC')
                ->get();

            $rentSpaces_ =  DB::table('rent_space')
                ->join('users', 'rent_space.user_reference', '=', 'users.email')
                ->orderBy('rent_space.updated_at', 'DESC')
                ->get();


            $decryptedRentSpaces = $rentSpaces->map(function ($rentSpace) {
                $rentSpace->asset_name = gzuncompress(Crypt::decrypt($rentSpace->asset_name));
                return $rentSpace;
            });

            $decryptedRentSpace_ = $rentSpaces_->map(function ($rentSpace_) {
                $rentSpace_->asset_name = gzuncompress(Crypt::decrypt($rentSpace_->type_storage));
                return $rentSpace_;
            });


            $filter_result = $decryptedRentSpaces->filter(function ($rentSpace) use ($request) {

                // dd($rentSpace->asset_name, ucwords(strtolower($request->input_insert)));
                return strpos($rentSpace->asset_name, ucwords(strtolower($request->input_insert))) !== false;
            });

            $filter_result1 = $decryptedRentSpace_->filter(function ($rentSpaces_) use ($request) {

                // dd(gzuncompress(Crypt::decrypt($rentSpaces_->type_storage)), ucwords(strtolower($request->input_insert)));


                return strpos(gzuncompress(Crypt::decrypt($rentSpaces_->type_storage)), ucwords(strtolower($request->input_insert))) !== false;
            });


            // dd(json_decode($response->getBody(), true)['openai']['generated_text']);

            // $requested_chapgpt = response()->json($result['choices'][0]['text']);
            Cache::put('asset_search', $filter_result, $minutes = 2880);
            Cache::put('asset_search1', $filter_result1, $minutes = 2880);
            Cache::put('input_inserted', $request->input_insert, $minutes = 2880);
            Cache::put('ChapGPT', $responseData['openai']['generated_text'], $minutes = 2880);

            return redirect()->back();
            // }

            //  catch (Throwable $e) {
            //         return redirect()->back();
            //     }

        } catch (Throwable $e) {
            return redirect()->back();
        }
    }
}
