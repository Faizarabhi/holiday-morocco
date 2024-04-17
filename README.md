# Moroccan Holidays Package

This PHP package provides functionality to check if a given date is a holiday in Morocco.

## Installation

You can install this package via Composer. Run the following command in your terminal:

```bash
composer require vendor/moroccan-holidays
```


#Usage

To check if today is a holiday, you can use the HolidayChecker class provided by this package. Here's an example:

```bash
require 'vendor/autoload.php';

use Vendor\MoroccanHolidays\HolidayChecker;

// Check if today is a holiday
$result = HolidayChecker::isTodayHoliday();

if ($result['status']) {
    echo "Today is a holiday in Morocco: " . $result['name'];
} else {
    echo "Today is not a holiday in Morocco.";
}
```