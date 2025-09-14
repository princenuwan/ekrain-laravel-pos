<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    //
    public function reportOverview()
    {
        return view('admin.report.overview');
    }

    public function salesReportPage()
    {

        return view('admin.report.salesreport');
    }

    //Sales Report
    public function salesReport(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate   = $request->input('end_date');

        // dd($endDate);
        $results = [];

        if ($startDate && $endDate) {
            $results = Order::select(
                DB::raw('SUM(orders.quantity) as totalOrders'),
                DB::raw('SUM(orders.totalprice) as totalSales'),
                DB::raw('DATE(orders.created_at) as Date'),
                DB::raw('SUM(orders.totalprice) / SUM(orders.quantity) as AvgOrdValue')
            )
                ->whereDate('orders.created_at', '>=', $startDate)
                ->whereDate('orders.created_at', '<=', $endDate)
                ->groupBy(DB::raw('DATE(orders.created_at)'))
                ->orderBy('Date', 'desc')
                ->get();
        }
        // Log::info($results);

        // dd($results);
        return view('admin.report.salesreport', compact('results', 'startDate', 'endDate'));
    }

    //Product Analysis Report
    public function inventoryPage()
    {
        return view('admin.report.inventory');
    }

    public function productAnalysis(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate   = $request->input('end_date');
        $results   = [];

        // dd($request);

        if ($startDate && $endDate) {
            $stock = Product::select(
                'products.id as product_id',
                'products.name as product_name',
                'products.qty as in_stock',
                DB::raw('SUM(orders.quantity) as units_sold'),
                DB::raw('products.qty - IFNULL(SUM(orders.quantity), 0) as remaining_stock'),
                'categories.name as category_name'
            )
                ->leftJoin('categories', 'products.category_id', 'categories.id')
                ->leftJoin('orders', function ($join) use ($startDate, $endDate) {
                    $join->on('products.id', '=', 'orders.product_id')
                        ->whereDate('orders.created_at', '>=', $startDate)
                        ->whereDate('orders.created_at', '<=', $endDate);
                })
                ->groupBy('products.id', 'products.name', 'products.qty',  'categories.name')
                ->get();

        }

        // dd($stock);
        return view('admin.report.inventory', compact('stock', 'startDate', 'endDate'));

    }

    public function supplierPurchasePage()
    {
        return view('admin.report.supplierpurchase');
    }

    public function supplierPurchase(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate   = $request->input('end_date');

        $supplierPurchase = Supplier::select(
            'suppliers.name',
            'suppliers.contact',
            DB::raw('SUM(purchases.total_amount) as total_purchase'),
            DB::raw('SUM(purchases.paid_amount) as total_paid'),
            DB::raw('SUM(purchases.due_amount) as total_due'),
            DB::raw('DATE(purchases.created_at) as Date')

        )
            ->leftJoin('purchases', 'suppliers.id', '=', 'purchases.supplier_id')
            ->whereDate('purchases.created_at', '>=', $startDate)
            ->whereDate('purchases.created_at', '<=', $endDate)
            ->groupBy(DB::raw('DATE(purchases.created_at)'))
            ->groupBy('suppliers.id', 'suppliers.name', 'suppliers.contact')
            ->orderBy('Date', 'desc')
            ->get();

        // dd($supplierPurchase);
        return view('admin.report.supplierpurchase', compact('supplierPurchase'));
    }

    public function purchasedetailsPage()
    {
        return view('admin.report.detailpurchase');
    }

    public function purchaseDetails(Request $request)
    {

        $startDate = $request->input('start_date');
        $endDate   = $request->input('end_date');

        // fetch purchase details
        $details = Supplier::select(
            'suppliers.name as supplier',
            'ingredients.name',
            'ingredients.cost_price',
            'ingredients.unit',
            'purchase__items.quantity',
            'purchase__items.total_price',
            DB::raw('DATE(purchases.created_at) as Date')
        )
            ->leftJoin('purchases', 'suppliers.id', '=', 'purchases.supplier_id')
            ->leftJoin('purchase__items', 'purchases.id', '=', 'purchase__items.purchase_id')
            ->leftJoin('ingredients', 'purchase__items.ingredient_id', '=', 'ingredients.id')
            ->whereDate('purchases.created_at', '>=', $startDate)
            ->whereDate('purchases.created_at', '<=', $endDate)
            ->orderBy('Date', 'desc')
            ->get();

        return view('admin.report.detailpurchase', compact('details'));
    }

    public function feedbackPage()
    {
        return view('admin.report.feedback');
    }

}
