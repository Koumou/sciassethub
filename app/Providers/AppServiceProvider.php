<?php

namespace App\Providers;

use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Cache;
use App\Models\Activate_account;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }





    public static function convert_chemical_name_to_chemical_formula($names)
    {

        $items = [
            ['name' => 'Sodium bicarbonate', 'formula' => 'NaHCO3'],
            ['name' => 'Ethanol', 'formula' => 'CH3CH2OH'],
            ['name' => 'Potassium chloride', 'formula' => 'KCl'],
            ['name' => 'Sodium chloride', 'formula' => 'NaCl'],
            ['name' => 'D-Glucose Anhydrous', 'formula' => 'C6H12O6'],
            ['name' => 'Phosphate buffered saline', 'formula' => 'CI2H3K2Na3O8P2'],
            ['name' => 'Formaldehyde solution 37%', 'formula' => 'CH2O'],
        ];

        $results = [];

        // Split the input string into an arraFy of names
        $nameArray = explode(',', $names);

        foreach ($nameArray as $inputName) {
            $inputName = trim($inputName); // Remove leading/trailing whitespaces

            foreach ($items as $item) {
                if ($item['name'] === $inputName) {
                    $results[$inputName] = $item['formula'];
                    break; // Stop searching once a match is found
                }
            }

            // If no match is found, set 'Item not found' for that name
            //   if (!isset($results[$inputName])) {
            //     $results[$inputName] = 'Item not found';
            // }
        }

        return implode(', ', $results);
    }

    public function count_day($end, $start)
    {
        $day_counted = (strtotime($end) - strtotime($start)) / (60 * 60 * 24);

        // dd($day_counted);

        if ($day_counted == 0 || $day_counted == 1) {
            return $day_counted . " day";
        } else {
            return $day_counted . " days";
        }
    }



    // public static function  difference_between_timestamp($date_time_provided)
    // {

    //     $timestamp = $date_time_provided;

    //     $datetime = new DateTime($timestamp);  // Convert the timestamp to a DateTime object

    //     $current_time = new DateTime(); // Get the current time

    //     $time_difference = $current_time->diff($datetime); // Calculate the time difference


    //     $minutes_ago = $time_difference->i; // Convert the time difference to minutes 
    //     $hours_ago = $time_difference->h; // Convert the time difference to hours
    //     $days_ago = $time_difference->days; // Convert the time difference to days
    //     $month_ago = $time_difference->m;
    //     $year_ago = $time_difference->y;
    //     dd($days_ago, $hours_ago, $minutes_ago, $time_difference);

    //     if ($days_ago == 0) {
    //         if ($days_ago != 0 && $days_ago <= 31) {
    //             return "{$days_ago} d ago";
    //         } elseif ($hours_ago != 0 && $hours_ago <= 24) {
    //             return "{$hours_ago} h ago";
    //         } elseif ($minutes_ago  !=  0 && $minutes_ago <= 60) {
    //             return "{$minutes_ago} min ago";
    //         }else {
    //             return "Just now";
    //         }
    //     } elseif ($month_ago >=  1 &&  $month_ago <= 12) {
    //         return "{$month_ago} mo ago";
    //     } elseif ($year_ago != 0) {
    //         return "{$year_ago} y ago";
    //     } else {
    //         return "Just now";
    //     }
    // }


    public static function difference_between_timestamp($date_time_provided)
{
    $timestamp = $date_time_provided;
    $datetime = new DateTime($timestamp);  // Convert the timestamp to a DateTime object
    $current_time = new DateTime(); // Get the current time
    $time_difference = $current_time->diff($datetime); // Calculate the time difference

    $minutes_ago = $time_difference->i; // Convert the time difference to minutes 
    $hours_ago = $time_difference->h; // Convert the time difference to hours
    $days_ago = $time_difference->days; // Convert the time difference to days
    $month_ago = $time_difference->m;
    $year_ago = $time_difference->y;

    if ($days_ago == 0) {
        if ($hours_ago != 0 && $hours_ago <= 24) {
            return "{$hours_ago}h ago";
        } elseif ($minutes_ago != 0 && $minutes_ago <= 60) {
            return "{$minutes_ago} min ago";
        } else {
            return "Just now";
        }
    } elseif ($days_ago <= 31) {
        return "{$days_ago}d ago";
    } elseif ($month_ago >= 1 && $month_ago <= 12) {
        return "{$month_ago} mo ago";
    } elseif ($year_ago != 0) {
        return "{$year_ago}y ago";
    } else {
        return "Just now";
    }
}

    public static  function FirstLetter($user_firstname)
    {
        $user_firstname_split = explode(" ", $user_firstname);
        if (count($user_firstname_split) == 1) {
            $inititals = $user_firstname_split[0][0];
            return $inititals;
        } else {
            $inititals = $user_firstname_split[0][0] . $user_firstname_split[1][0];
            return $inititals;
        }
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('*', function ($view) {

            $universities_data = DB::table('universities')
                ->orderBy('university_name', 'asc')
                ->get();

            $position_data = DB::table('positions')
                ->orderBy('position_name', 'asc')
                ->get();

            $department_data = DB::table('departments')
                ->get();

            $all_asset_available = DB::table('assets')
                ->join('users', 'assets.user_reference', '=', 'users.email')
                ->orderBy('assets.updated_at', 'DESC')
                ->get();

            $all_users = DB::table('users')
                ->get();

            $all_asset = DB::table('users')
                ->join('assets', 'users.email', '=', 'assets.user_reference')
                ->orderBy('assets.updated_at', 'desc'); //descending order

            $all_asset_available = $all_asset->get(); // retrieve all the asset available


            $all_asset_available_four = $all_asset
                ->where('assets.exp_date', 'na')
                // ->take(4) 
                ->get(); // get


            $all_chemical_available_four = DB::table('users')
                ->join('assets', 'users.email', '=', 'assets.user_reference')
                ->orderBy('assets.updated_at', 'desc') //descending order
                ->where('assets.360_view', 'na')
                // ->limit(4)
                ->get();



            $view->with('all_users', $all_users);
            $view->with('all_asset_available', $all_asset_available);
            $view->with('all_asset_available_four', $all_asset_available_four);
            $view->with('all_chemical_available_four', $all_chemical_available_four);


            $view->with('universities_data', $universities_data);
            $view->with('position_data', $position_data);
            $view->with('department_data', $department_data);



            if (Auth::check()) {

                // Artisan::call('schedule:work');
                // $job_queueing = DB::table('jobs')
                //     ->get();

                // if (count($job_queueing) != 0) {

                //             $exitCode = Artisan::call('queue:work --stop-when-empty', []);


                // }

                $asset_requested_display = DB::table('asset_request')
                    ->orderBy('asset_request.created_at', 'DESC') //descending order
                    ->where('asset_request.requester_id', '=', Auth::user()->email)
                    ->get();


                // $asset_requested_by_current_auth = DB::table('asset_request')
                // ->orderBy('asset_request.created_at', 'DESC') //descending order
                // ->where('asset_request.requester_id', '=', Auth::user()->email)
                // ->get();

                $asset_requested_display_to_owner = DB::table('asset_request')
                    ->where('asset_request.asset_owner_ref', Auth::user()->email)
                    ->orderBy('asset_request.updated_at', 'ASC') //descending order
                    ->get();

                $asset_requested_display_to_supervisor = DB::table('asset_request')
                    // ->where('asset_request.is_request_approved ', Auth::user()->email)
                    ->orderBy('asset_request.updated_at', 'ASC') //descending order
                    ->get();

                    // dd($asset_requested_display_to_supervisor);


                $asset_requested_by_requester = DB::table('asset_request')
                    ->where('asset_request.requester_id', Auth::user()->email)
                    ->orderBy('asset_request.updated_at', 'desc') //descending order
                    ->get();

                $all_available_space_ = DB::table('users')
                    ->join('rent_space', 'users.email', '=', 'rent_space.user_reference')
                    ->orderBy('rent_space.created_at', 'desc')
                    ->get();


                $all_space_requested_ = DB::table('users')
                    ->join('space_request', 'users.email', '=', 'space_request.requester_id')
                    ->orderBy('space_request.created_at', 'desc')
                    ->get();


                $activate_account =  Activate_account::where('user_reference', Auth::user()->email)->get();



                $all_available_space_recommendation = DB::table('users')
                    ->join('rent_space', 'users.email', '=', 'rent_space.user_reference')
                    ->orderBy('rent_space.updated_at', 'desc')
                    ->get();

                    $analyst_asset = DB::table('asset_request')
                    ->join('assets', 'asset_request.asset_request_id', '=', 'assets.asset_id')
                    ->orderBy('assets.updated_at', 'desc')
                    ->get();

                    // dd($analyst_asset);

                // dd($asset_requested_display_to_supervisor);
                $view->with('asset_requested_display_to_supervisor', $asset_requested_display_to_supervisor);
                $view->with('analyst_asset', $analyst_asset);

                $view->with('activate_account', $activate_account);
                $view->with('all_space_requested_', $all_space_requested_);

                $view->with('all_available_space_', $all_available_space_);

                $view->with('all_available_space_recommendation', $all_available_space_recommendation);
                $view->with('asset_requested_by_requester', $asset_requested_by_requester);


                $view->with('asset_requested_display', $asset_requested_display);

                $view->with('asset_requested_display_to_owner', $asset_requested_display_to_owner);


                $research_project_data = DB::table('research_project')
                    ->where('student_reference', Auth::user()->email)
                    ->first();

                $all_research_profile = DB::table('research_project')
                    ->get();

                $all_message = DB::table('message')
                    ->where('recipient', Auth::user()->email)
                    ->orderBy('message.updated_at', 'DESC') //descending order
                    ->get();

                $all_space_requested_owner = DB::table('space_request')
                    ->where('space_owner_ref', Auth::user()->email)
                    ->orderBy('space_request.created_at', 'DESC') //descending order
                    ->get();


                $all_space_requested_requested = DB::table('space_request')
                    ->orderBy('space_request.created_at', 'DESC') //descending order
                    ->get();


                $view->with('all_message', $all_message);
                $view->with('all_space_requested_requested', $all_space_requested_requested);

                $view->with('all_space_requested_owner', $all_space_requested_owner);

                $view->with('research_project_data', $research_project_data);
                $view->with('all_research_profile', $all_research_profile);


                if ((Crypt::decrypt(Auth::user()->position_id) === '5')) {
                }
            }
        });
    }
}
