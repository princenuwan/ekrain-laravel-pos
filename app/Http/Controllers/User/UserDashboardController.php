<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Order;
use App\Models\PaymentRecord;
use App\Models\Product;
use App\Models\Review;
use App\Models\TaxSetting;
use App\Models\UserContact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    //
    public function index()
    {

        return view('user.home');
    }

}
