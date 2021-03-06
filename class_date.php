<?php
/**
 * Date: 06-Dec-17
 * Time: 8:30 PM
 */

class NewDate extends Date
{
    protected $curr_date;

    protected function UpdateDate()
    {
        $this->curr_date = getdate();
    }

    public function getCurrentDate()
    {
        $this->UpdateDate();
        $day = $this->curr_date['mday'];
        $month = $this->curr_date['mon'];
        $year = $this->curr_date['year'];
        return $day."/".$month."/".$year;
    }

    public function SayAge()
    {
        return "Age: ".$this->CalcAge();
    }


}

class Date
{
    protected  $day;
    protected  $month;
    protected  $year;

    public function __construct($day, $month, $year)
    {
        if (self::validate_date($day,$month,$year))
        {
            $this->day = $day;
            $this->month = $month;
            $this->year = $year;
        }
        else
        {
            $this->day = 01;
            $this->month = 01;
            $this->year = 1900;
        }

    }

   final public function CalcAge()
    {
        $curr_date = getdate();
        return $curr_date['year']-$this->year;
    }

    public function GetDate($separator='/')
    {
        return $this->day.$separator.$this->month.$separator.$this->year;
    }

    protected static function validate_date($day,$month,$year)
    {
        if (self::validate_day($day) and self::validate_month($month) and self::validate_year($year))
            return true;
        return false;
    }

    protected static function validate_day($day)
    {
        if (!empty($day) and is_int($day) and ($day > 0 or $day <32))
        {
            return true;
        }
        return false;
    }

    protected static function validate_month($month)
    {
        if (!empty($month) and is_int($month) and ($month > 0 or $month <13))
        {
            return true;
        }
        return false;
    }

    protected static function validate_year($year)
    {
        $current_year = getdate();
        if (!empty($year) and is_int($year) and ($year > 1900 or $year < $current_year['year']))
        {
            return true;
        }
        return false;
    }
}

?>