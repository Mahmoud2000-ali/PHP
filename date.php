<?php


    /*
    
        time() => will return the time now with ms
        date(format, timestamp);
       format:
        d: represent the day of the mounth [01-31]
        m: Represents a month (01 to 12)
        F: Represents a month like July
        Y: Represents a year (in four digits) like 2019
        y: Represents a year (in four digits) like 19 that mean 2019
        l: (lowercase 'l') - Represents the day of the week like Saturday
        D: represent the day of the mounth like sat that mean saturday
        M: Represents a month like Jul
        j: represent the day of the mounth [1-31] without 0
        S: 1st, 2nd , 3rd, 4th => work will with j
        
        H - 24-hour format of an hour (00 to 23)
        h - 12-hour format of an hour with leading zeros (01 to 12)
        i - Minutes with leading zeros (00 to 59)
        s - Seconds with leading zeros (00 to 59)
        a - Lowercase Ante meridiem and Post meridiem (am or pm)
        A - Lowercase Ante meridiem and Post meridiem (AM or PM)

        timestamp:
        if i want to get the time after for example on week => time() + (30 * 24 * 60 *60 )
        date('y-m-d h:i:s', time() + (30 * 24 * 60 *60 ))

        date_default_timezone_get() => get the time of the server
        date_default_timezone_set() => to set the time

        strtotime('now'); => return the mun by linux
        strtotime('+3 week') => return the time withe plus x of week or year
        $date = strtotime('+30 year');
        echo date('Y - m - d', $date);

        mktime(hour,minute,second,month,day,year) => that win i want to print the date will return this result
    
    
    */


        $date = strtotime('+30 year');
        echo date('Y - m - d', $date);