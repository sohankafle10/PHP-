<?php
// Display today's date in various formats

// Default formats
echo "Today is " . date("Y/m/d") . "<br>"; // Year/Month/Day (e.g., 2024/09/02)
echo "Today is " . date("Y.m.d") . "<br>"; // Year.Month.Day (e.g., 2024.09.02)
echo "Today is " . date("Y-m-d") . "<br>"; // Year-Month-Day (e.g., 2024-09-02)

// Day of the month
echo "Today is " . date("d") . "<br>"; // Day of the month, 2 digits with leading zeros (e.g., 02)
echo "Today is " . date("j") . "<br>"; // Day of the month without leading zeros (e.g., 2)

// Day of the week
echo "Today is " . date("D") . "<br>"; // A textual representation of a day, three letters (e.g., Mon)
echo "Today is " . date("l") . "<br>"; // Full textual representation of the day of the week (e.g., Monday)

// Day of the week (numeric and ISO)
echo "Today is " . date("N") . "<br>"; // ISO-8601 numeric representation of the day of the week (1 for Monday, 7 for Sunday)
echo "Today is " . date("z") . "<br>"; // Day of the year (0 through 365)

// ISO week number
echo "Today is " . date("W") . "<br>"; // ISO-8601 week number of year, weeks starting on Monday (e.g., 35)

// Month
echo "Today is " . date("F") . "<br>"; // Full textual representation of a month (e.g., September)
echo "Today is " . date("m") . "<br>"; // Numeric representation of a month, with leading zeros (e.g., 09)
echo "Today is " . date("M") . "<br>"; // A short textual representation of a month, three letters (e.g., Sep)

// Leap year
echo "Today is " . date("L") . "<br>"; // Whether it’s a leap year (1 if it’s a leap year, 0 otherwise)

// Year
echo "Today is " . date("Y") . "<br>"; // A full numeric representation of a year, 4 digits (e.g., 2024)

// Ante meridiem and Post meridiem
echo "Today is " . date("a") . "<br>"; // Lowercase Ante meridiem and Post meridiem (e.g., am)
echo "Today is " . date("A") . "<br>"; // Uppercase Ante meridiem and Post meridiem (e.g., AM)

///today is 4th day of the year 2024
echo "Today is " . date("z") . " day of the year ".date("Y")."<br>";


//Today is 2025/09/02
echo "Today is " . date("Y/m/d")."<br>";

//Now is 10:57:59 am
echo "Now its ".date("G:i:s a")."<br>";


echo "Today is " .date("U"). "<br>";
?>