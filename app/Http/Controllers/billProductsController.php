<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateFormBayProduct;
use App\Models\Donhang;
use App\Models\Donhangchitiet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
    function createBill(validateFormBayProduct $request)
    {
        try {
            $donHang = new Donhang();

            if (!session()->has('product_cart')) return back()->with('error', '');

            $donHang->id_user = '11';
            $donHang->thoidiemmua =  date('Y-m-d H:i:s');
            $donHang->tennguoinhan = $request->input('firstName') . ' ' . $request->input('lastName');
            $donHang->dienthoai = $request->input('phoneNumber');
            $donHang->diachigiaohang = $request->input('address');
            $donHang->tinh_tp =  $request->input('tinh_tp');
            $donHang->nghi_chu = $request->input('nghi_chu') ?? '';
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
            return redirect(route('home-page'));
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    function showTablet(Request $request)
    {
        $menuCheckStatus = [
            'title' => 'trạng thái',
            'children' => [
                [
                    'id' => 1,
                    'title' => 'cuẩn bị hàng hóa',
                    'background' => '',
                ],
                [
                    'id' => 2,
                    'title' => 'chuẩn bị giao hàng',
                    'background' => 'border-warning',
                ],
                [
                    'id' => 3,
                    'title' => 'đang giao sàng',
                    'background' => 'border-primary',
                ],
                [
                    'id' => 4,
                    'title' => 'đã giao hàng',
                    'background' => 'border-success',
                ],
                [
                    'id' => 5,
                    'title' => 'hủy đơn hàng',
                    'background' => 'border-danger',
                ],
            ]

        ];
        $tabletList = array(
            ' DH', 'người nhận', 'địa chỉ ', 'tỉnh thành', ' điện thoại', 'ngày tạo '
        );

        try {
            $billList =  DB::table('donhang')->select('*')
                ->orderBy('donhang.created_at', 'asc')->paginate(25);

            foreach ($billList as $bill) {
                $productListBill = Donhangchitiet::where('id_dh', '=', $bill->id_dh)->get();
                $bill->productList = $productListBill;
            }

            return View(
                'pages/table/tabletBill',
                [
                    'menuCheckStatus' => $menuCheckStatus,
                    'dataTablet' => $billList,
                    'tablet' => $tabletList,
                    'pages' => $billList
                ]
            );
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    function deleteBillProduct($id)
    {
        try {
            $bill = Donhangchitiet::find($id);
            $bill->delete();
            return back()->with('message_successfully', 'xoa thanh cong');
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    function deleteBill($id)
    {
        try {
            $bill = Donhang::find($id);
            $bill->delete();

            return back()->with('message_successfully', 'xoa thanh cong');
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    function update($id)
    {
        $rl = Donhang::find($id)->update([]);
    }
}
