<?php

namespace App\Http\Controllers;

use App\Models\Donhang;
use App\Models\Donhangchitiet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class billProductsController extends Controller
{

    // Take out all the products from the session the display to view
    function showCart(Request $request)
    {
        $productListSession =  $request->session()->get('product_cart', []);
        return View('pages/cart/index', ['productBillList' =>   $productListSession]);
    }


    // Add products to the session has a name is "product_cart" 
    function addProductToShoppingCart(Request $request)
    {
        $productId = $_GET['id']  ?? '';
        $product =  DB::table('sanpham')->select('*')->where('id_sp', '=', $productId)->first();
        if ($productId) {
            $productCart = session()->get('product_cart', []);
            if (isset($productCart[$productId])) {
                $productCart[$productId]['quantity'] += intval($request->post('quant')[1]);
            } else {
                $productCart[$productId] = [
                    'product_name' => $product->ten_sp,
                    'url_image' => $product->hinh,
                    'price' => $product->gia,
                    'quantity' => intval($request->post('quant')[1])
                ];
            }
            session()->put('product_cart',  $productCart);
            return back();
        }
    }

    // Remove product with the requested id
    function delete(Request $request, $productId)
    {
        $productCartSession = session()->get('product_cart');
        if (isset($productCartSession[$productId])) {
            unset($productCartSession[$productId]);
            session()->put('product_cart', $productCartSession);
        }
        return back();
    }
    function showFormCheckout()
    {
        return view('pages/cart/checkout');
    }
    function createBill(Request $request)
    {
        $donHang = new Donhang();

        if (!session()->has('product_cart')) {
            return;
        }
        $donHang->id_user = '11';
        $donHang->thoidiemmua =  date('Y-m-d H:i:s');
        $donHang->tennguoinhan = $_POST['firstName'] . ' ' . $_POST['lastName'];
        $donHang->dienthoai = $_POST['phoneNumber'];
        $donHang->diachigiaohang = $_POST['address'];
        $donHang->trangthai = 0;
        $donHang->save();
        $idDonHang = $donHang->id_dh;
        $cartBillList = session()->get('product_cart');
        foreach ($cartBillList as $key => $value) {
            Donhangchitiet::create([
                'id_dh' => $idDonHang,
                'id_user' => 1,
                'ten_sp' => $value['product_name'],
                'id_sp' => $key,
                'gia' => $value['price'],
                'soluong' => $value['quantity']
            ]);
        }
        return back()->with('message', 'mua hàng thành công');
    }
    function showTablet(Request $request)
    {
        $tabletList = array(
            ' DH', 'người nhận', 'địa chỉ ', 'tỉnh thành', ' điện thoại', 'ngày tạo ', 'trạng thái'
        );
        $billList =  DB::table('donhang')->select('*')
            ->orderBy('donhang.created_at', 'asc')->paginate(25) ?? [];
        foreach ($billList as $bill) {
            $productListBill = Donhangchitiet::where('id_dh', '=', $bill->id_dh)->get();
            $bill->productList = $productListBill;
        }

        return View(
            'pages.bill.tablet',
            [
                'billList' => $billList,
                'tablet' => $tabletList,
                'pages' => $billList
            ]
        );
    }
    function deleteBill($id)
    {
    }
}
