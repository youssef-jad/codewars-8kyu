<?php
namespace Petunia\Kyu;

class IsItLate
{

    public function periodIsLate($last , $today , $period )
    {
        $interval = $today->diff($last);
        return $interval->days > $period ? true : false ;
    }

}