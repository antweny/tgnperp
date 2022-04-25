<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * Get current logged in user
 */
function currentLogged()
{
    return auth()->user();
}


//Change date and time to human readable
function humanDateTime($date) {

    if(!is_null($date)) {
        return date('d M, y : H:i ',strtotime($date));
    }
    return null;
}

/*  Format a datepicker date to mysql format YYYY-mm-dd */
function date_to_mysql($date)
{
    return Carbon::parse($date)->format('Y-m-01');
}

/* Format a mysql date to datepicker format  date to mysql format m/d/Y */
function mysql_to_date($date)
{
    if($date != null ) {
        return Carbon::parse($date)->format('M Y');
    }
        return null;
}

/* Get month and year from mysql format date */
function get_month_and_year($date)
{
    return Carbon::parse($date)->format('M Y');
}

/* Get month and year from mysql format date */
function get_day_month_and_year($date)
{
    return Carbon::parse($date)->format('d M, Y');
}

/* Find date difference */
function date_difference($start_date,$end_date)
{
    $fromDate = new DateTime($start_date);
    $curDate = new DateTime($end_date);
    $months = $curDate->diff($fromDate);
    if($months->format('%y') > 0) {
        echo $months->format('%y years %m months');
    }
    else {
        echo $months->format('%m months');
    }
}

/* Calculate Someone Age */
function calculate_age ($date)
{
    if ($date != null){
        $dob = new DateTime($date);
        $today = new DateTime(date('Y-m-d'));
        return $today->diff($dob);
    }
    else {
        return null;
    }
}

/* Multiply two numbers */
function multiply_two_numbers ($num1, $num2)
{
    return $num1 * $num2;
}

/*  Remove Strings from dates */
function remove_character_from_date ($date)
{
    $dt = array();
    if(!empty($date)) {
        foreach ($date as $tarehe){
            $date = str_replace('"','',$tarehe);
            $dt[] = Carbon::parse($date)->format('d M Y');
        }
        return $dt;
    }
}

/* Convert time to human readable */
function age($timestamp){
    //date_default_timezone_set("Asia/Kolkata");
    $time_ago        = strtotime($timestamp);
    $current_time    = time();
    $time_difference = $current_time - $time_ago;
    $seconds         = $time_difference;

    $minutes = round($seconds / 60); // value 60 is seconds
    $hours   = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec
    $days    = round($seconds / 86400); //86400 = 24 * 60 * 60;
    $weeks   = round($seconds / 604800); // 7*24*60*60;
    $months  = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60
    $years   = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60

    if ($seconds <= 60){
        return "Just Now";
    } else if ($minutes <= 60){

        if ($minutes == 1){
            return "1 min";
        } else {
            return "$minutes mins";
        }

    } else if ($hours <= 24){

        if ($hours == 1){
            return "1 hr";

        } else {
            return "$hours hrs";
        }

    } else if ($days <= 7){

        if ($days == 1){
            return "yesterday";

        } else {
            return "$days days";
        }

    } else if ($weeks <= 4.3){

        if ($weeks == 1){
            return "a week ago";
        } else {
            return "$weeks weeks";
        }

    } else if ($months <= 12){

        if ($months == 1){
            return "a month ago";

        } else {
            return "$months months";
        }

    } else {

        if ($years == 1){
            return "one yr";

        } else {
            return "$years yrs";
        }
    }
}

/*  Convert file size to human readable */
function humanFilesize($size, $decimals = 2){
    $units = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
    $step = 1024;
    $i = 0;
    while(($size/$step) > 0.9) {
        $size = $size / $step;
        $i++;
    }
    return round($size, $decimals).' '.$units[$i];
}

/*  filter the collection to only the one's which are enabled */
function onlyEnabled($collection) {
    return $collection->filter(function($item) {
        return $item->enabled == 1;
    });
}

/* used for returning the oldest last_ran_at date */
function minValue($checks) {
    return min(array_column($checks->toArray(), 'last_ran_at'));
}

/* change text color based on the last message */
function textClass($status, $last_message) {
    if ($last_message == 'is running') {
        return ($status == 'success') ? 'text-success' : 'text-danger';
    }
    return ($status == 'failed') ? 'text-danger' : '';
}

/*  change text color based on the threshold value */
function numberTextClass($type, $status, $text) {
    // these maps to the treshold configs in the config/server-monitor.php`
    $configs = [
        'diskspace' => 'server-monitor.diskspace_percentage_threshold',
        'cpu' => 'server-monitor.cpu_usage_threshold',
        'memory' => 'server-monitor.memory_usage_threshold'
    ];

    preg_match('/(\d+)/', $text, $pieces); // get all the numbers in the text

    if (!empty($pieces)) {
        $number = (float) $pieces[0];
        $config = config($configs[$type]);
        return ($number >= $config['fail']) ? 'text-danger' : (($number >= $config['warning']) ? 'text-warning' : ''); // determine the class to add based on the current percentage value
    }

    return textClass($status, $text); // for the one's whose value isn't percentage based
}

/* create permission category based on permission name remove "_" and "-" */
function permissionCategory($string) {
    return ucwords(str_replace("-"," ",substr($string,0,strpos($string,"_"))));
}

/* Modify permission name*/
function permissionName($string) {
    return substr($string,strpos($string,"_") + 1);
}

/* */
function str_limit($text, $limit) {
    return Str::limit($text, $limit, ' (...)');
}

//Change date and time to human readable
function percentage($number,$total = 100) {

    return ($number/$total)*100;

}






