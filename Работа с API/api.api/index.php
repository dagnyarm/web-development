<?php
    header('Content-Type: application/json');

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['time'])){
            $result = date('h:i:s');
        }
        if(isset($_GET['date'])){
            $result = get_day_of_week($_GET['date']);
        }
        if(isset($_GET['current_holidays'])){
            $result = show_holidays($_GET['current_holidays']);
        }
        if(isset($_GET['date1']) && isset($_GET['date2'])){
            $result = calculate_date($_GET['date1'], $_GET['date2']);
        }
        if(isset($_POST['zodiac']) && isset($_POST['date_predict'])){
            $result = get_today_prediction($_POST['zodiac'], $_POST['date_predict']);
        }
    }

    function get_day_of_week($date){
        $date = strtotime($date);
        $day = date('w', $date);
        $day = get_day_str($day);
        return $day;
    }

    function get_day_str($day){
        switch($day){
            case 1:
                return 'Monday';
            case 2:
                return 'Tuesday';
            case 3:
                return 'Wednesday';
            case 4:
                return 'Thursday';
            case 5:
                return 'Friday';
            case 6:
                return 'Saturday';
            case 7:
                return 'Sunday';
            default:
                return 'day not found';
        }
    }

    function show_holidays($date){
        return current_year_holidays('Новый год', $date) . "<br>" .
        current_year_holidays('Рождество', $date) . "<br>" .
        current_year_holidays('День защитника отечества', $date) . "<br>" .
        current_year_holidays('Международный женский день', $date) . "<br>" .
        current_year_holidays('Праздник весны и труда', $date) . "<br>" .
        current_year_holidays('День победы', $date) . "<br>" .
        current_year_holidays('День России', $date) . "<br>" .
        current_year_holidays('День народного единства', $date);
    }

    

    function current_year_holidays($holiday, $date){
        $date = strtotime($date);
        $current_year = date('Y', $date);
        switch($holiday){
            case 'Новый год':
                $h_date = strtotime($current_year . "-12-31");
                break;
            case 'Рождество':
                $h_date = strtotime($current_year . "-01-07");
                break;
            case 'День защитника отечества':
                $h_date = strtotime($current_year . "-02-23");
                break;
            case 'Международный женский день':
                $h_date = strtotime($current_year . "-03-08");
                break;
            case 'Праздник весны и труда':
                $h_date = strtotime($current_year . "-05-01");
                break;
            case 'День победы':
                $h_date = strtotime($current_year . "-05-09");
                break;
            case 'День России':
                $h_date = strtotime($current_year . "-06-12");
                break;
            case 'День народного единства':
                $h_date = strtotime($current_year . "-11-04");
                break;
            default:
                return 'holiday not found';
        }
        $wait = $h_date - $date;
        $wait = ceil($wait / (60 * 60 * 24)) . " дней";
        if($h_date - $date < 0){
            $wait = 'Закончился';
        }
        return $holiday . " " . $wait;
    }

    function calculate_date($date1, $date2){
        $date1 = strtotime($date1);
        $date2 = strtotime($date2);
        $diff = $date1 - $date2;
        $diff = abs($diff);
        $diff = ceil($diff / (60 * 60 * 24));
        return $diff . " дней разницы";
    }

    function get_today_prediction($zodiac, $date){
        $predictions = [
            'Овен' => [
                '2025-11-22' => "Предсказание 1",
                '2025-12-22' => "Предсказание 2"
            ],
            'Телец' => [
                '2025-10-22' => "Предсказание 3"
            ]
        ];
        if(array_key_exists($zodiac, $predictions)){
            if(array_key_exists($date, $predictions[$zodiac])){
                return $predictions[$zodiac][$date];
            }
        }
        return "Нет новых предсказаний на сегодня";
    }

    $response = [
        'status' => 'success',
        'result' => $result,
        'message' => 'Время успешно получено.'
    ];

    echo json_encode($response);
?>