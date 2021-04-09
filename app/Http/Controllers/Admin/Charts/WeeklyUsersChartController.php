<?php

namespace App\Http\Controllers\Admin\Charts;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

/**
 * Class WeeklyUsersChartController
 * @package App\Http\Controllers\Admin\Charts
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WeeklyUsersChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels([
            'Tổng quan',
        ]);

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/weekly-users'));

//         OPTIONAL
         $this->chart->minimalist(false);
         $this->chart->displayLegend(true);
    }

    /**
     * Respond to AJAX calls with all the chart data points.
     *
     * @return json
     */
     public function data()
     {
         $order = Order::count();
         $product = Product::count();
         $category = Category::count();
         $customer = Customer::count();

         $this->chart->dataset('Khách hàng', 'bar', [
                    $customer,
                 ])
             ->color('rgba(205, 32, 31, 1)')
             ->backgroundColor('rgba(205, 32, 31, 0.4)');

         $this->chart->dataset('Số đơn hàng bán được', 'bar', [
             $order,
         ])
             ->color('rgba(70, 127, 208, 1)')
             ->backgroundColor('rgba(70, 127, 208, 0.4)');

         $this->chart->dataset('Tổng sản phẩm', 'bar', [
             $product,
         ])
             ->color('rgb(77, 189, 116)')
             ->backgroundColor('rgba(77, 189, 116, 0.4)');

         $this->chart->dataset('Danh mục', 'bar', [
             $category,
         ])
             ->color('rgb(96, 92, 168)')
             ->backgroundColor('rgba(96, 92, 168, 0.4)');
     }

}
