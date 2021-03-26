# PHP Chart.js

  

[![Latest Version on Packagist](https://img.shields.io/packagist/v/adecks/chartjs.svg?style=flat-square)](https://packagist.org/packages/adecks/chartjs)

[![PHP Composer](https://github.com/AndreKendeck/PHPChartjs/actions/workflows/php.yml/badge.svg?branch=main)](https://github.com/AndreKendeck/PHPChartjs/actions/workflows/php.yml)

[![Total Downloads](https://img.shields.io/packagist/dt/adecks/chartjs.svg?style=flat-square)](https://packagist.org/packages/adecks/chartjs)

  

I made this package, since most of my PHP projects make use of graphs, my go to graphing library

if you require more information about chartjs please go here.

  

## Installation

  

You can install the package via composer:

  

```bash

composer require adecks/chartjs -vvv

```

  
## Creating a chart

**Creating a Line chart**
``` php
use Adecks\ChartJs\Types\Line; 
use Adecks\ChartJs\Options;
use Adecks\ChartJs\Datasets\Dataset;

class ExampleController extends Controller {

	public function index() {
	
		$xAxisLabels = ['Jan','Feb','Mar'];
		
		$chartOptions = new Options; 
		
		$lineChart =  new Line($xAxisLabels,$chartOptions);

		$lineChart->addDataset((new Dataset('MyFirstData',[10,12,13])); 
	
		return response()->json($lineChart); 
		
	}

}
```

**The JSON structure from result**
``` json
{ 
"type": "line",
"data": {
	"labels": ["Jan","Feb","Mar"],
	"datasets": [{"label": "MyFirstData",
		"backgroundColor": "red",
		"borderColor": "red",
		"data": [10,12,13]}]
	}
}
```

## Types of Charts.

```php
use Adecks\ChartJs\Types\Area; 
use Adecks\ChartJs\Types\Bar;
use Adecks\ChartJs\Types\Bubble; 
use Adecks\ChartJs\Types\Doughnut; 
use Adecks\ChartJs\Types\Line;
use Adecks\ChartJs\Types\Pie; 
use Adecks\ChartJs\Types\PolarArea; 
use Adecks\ChartJs\Types\Radar; 
use Adecks\ChartJs\Types\Scatter; 
```
  

### Testing

  

``` bash

php vendor/bin/phpunit

```

  

### Changelog

  

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

  

## Contributing

  

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

  

### Security

  

If you discover any security related issues, please email andrekendeck@gmail.com instead of using the issue tracker.

  

## Credits

  

-  [Andre Kendeck](https://github.com/adecks)

  

## License

  

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.Ï