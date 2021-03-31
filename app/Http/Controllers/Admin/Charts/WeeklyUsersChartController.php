<?php

namespace App\Http\Controllers\Admin\Charts;

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
         $users_created_today = User::whereDate('created_at', today())->count();

         $this->chart->dataset('Số người dùng mới', 'bar', [
                    50,
                 ])
             ->color('rgba(205, 32, 31, 1)')
             ->backgroundColor('rgba(205, 32, 31, 0.4)');

         $this->chart->dataset('Số đơn hàng bán được', 'bar', [
             122,
         ])
             ->color('rgba(70, 127, 208, 1)')
             ->backgroundColor('rgba(70, 127, 208, 0.4)');

         $this->chart->dataset('Tổng sản phẩm', 'bar', [
             80,
         ])
             ->color('rgb(77, 189, 116)')
             ->backgroundColor('rgba(77, 189, 116, 0.4)');

         $this->chart->dataset('Danh mục', 'bar', [
             27,
         ])
             ->color('rgb(96, 92, 168)')
             ->backgroundColor('rgba(96, 92, 168, 0.4)');
     }

}
