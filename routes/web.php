<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
#HOME START ROUTERS
Route::get('/', function () {
    return view('home.index');
});
#END HOME ROUTERS
#START SINGLE-PRODUCT ROUTERS
Route::get('shop/single/product/width', function(){
    return view('shop.single-product-fullwidth');
});
#END SINGLE-PRODUCT ROUTERS
#START GET SHOP ROUTERS
Route::get('shop', function(){
    return view('shop.shop');
});
Route::get('shop/compare' , function(){
    return view('shop.compare');
});
Route::get('shop/wishlist', function(){
    return view('shop.wishlist');
});
Route::get('about-us', function(){
    return view('home.about');
});
Route::get('contact-us', function(){
   return view('home.contact-us');
});
Route::get('shop/cart', function(){
   return view('shop.cart');
});
// Start computers
Route::get('shop/checkout', function(){
    return view('shop.checkout');
});
Route::get('shop/computers/laptops',function(){
   return view('shop.computers.laptops');
});
Route::get('shop/computers/desktops', function(){
  return view('shop.computers.desktops');
});
Route::get('shop/computers/monitors', function(){
   return view('shop.computers.monitors');
});
Route::get('shop/computers/software', function(){
    return view('shop.computers.software');
});
Route::get('shop/computers/stationery' ,function(){
    return view('shop.computers.all_office_stationery');
});
Route::get('shop/computers', function(){
    return view('shop.computers.all_computers');
});
// End computers

//Start Computers&accessories
Route::get('shop/computer/accessories/harddisk' ,function(){
    return view('shop.computers_accessories.external_internalHarddisk');
});
Route::get('shop/computer/accessories/keyboard_mouse', function(){
    return view('shop.computers_accessories.keyboard_mouse');
});
Route::get('shop/computer/accessories/hdmi',function(){
    return view('shop.computers_accessories.hdmi_splitter');
});
Route::get('shop/computer/accessories/adapter_cables', function(){
    return view('shop.computers_accessories.adapter_cables');
});
Route::get('shop/computer/accessories/laptop/stands', function(){
    return view('shop.computers_accessories.laptop_stands');
});
Route::get('shop/all/computer/accessories', function(){
    return view('shop.computers_accessories.all_accessories');
});
//End Computers&accessories

// Start Phone Accessories
Route::get('shop/phone/accessories/headphones_earphones', function(){
    return view('shop.phone_accessories.headphones_earphones');
});
Route::get('shop/phone/accessories/flash_memory_cards', function(){
    return view('shop.phone_accessories.flash_memory_cards');
});
Route::get('shop/phone/accessories/power_bank', function(){
    return view('shop.phone_accessories.power_banks');
});
Route::get('shop/phone/accessories', function(){
    return view('shop.phone_accessories.all_phone_accessories');
});
// End Phone Accessories

//Start Mobiles & Tablets
Route::get('shop/huawei/phones', function(){
    return view('shop.mobiles_tablets.huawei_phone');
});
Route::get('shop/dlna/phones', function(){
    return view('shop.mobiles_tablets.dlna_phone');
});
Route::get('shop/kids/tablets', function(){
    return view('shop.mobiles_tablets.kids_tablets');
});
Route::get('shop/tecno/tablets', function(){
    return view('shop.mobiles_tablets.tecno_tablets');
});
Route::get('shop/itel/tablets', function(){
    return view('shop.mobiles_tablets.itel_tablets');
});
Route::get('shop/samsung/tablets', function(){
    return view('shop.mobiles_tablets.samsung_tablets');
});
//End Mobiles & Tablets

//Start Networking & Internet devices
Route::get('shop/routers/modem', function(){
    return view('shop.networking_internet_devices.routers_modem');
});
Route::get('shop/MiFi', function(){
    return view('shop.networking_internet_devices.MiFi_Wi_Fi');
});
Route::get('shop/ethernet/cables', function(){
    return view('shop.networking_internet_devices.ethernet_cables');
});
Route::get('shop/crimping/tool', function(){
    return view('shop.networking_internet_devices.crimping_tool');
});
Route::get('shop/internet/devices', function(){
    return view('shop.networking_internet_devices.all_internet_devices');
});
//End Networking & Internet devices

//Star Tv & Speakers
Route::get('shop/tv/bracket' ,function(){
    return view('shop.tv_speakers.tv_bracket');
});
Route::get('shop/tv/power/cables' ,function(){
    return view('shop.tv_speakers.tv_power_cable');
});
Route::get('shop/extension' ,function(){
    return view('shop.tv_speakers.extension');
});
Route::get('shop/speakers' ,function(){
    return view('shop.tv_speakers.tv_speakers');
});
Route::get('shop/tv/accessories' ,function(){
    return view('shop.tv_speakers.all_tv_accessories');
});
//End Tv & Speakers

//Star Watches
Route::get('shop/mens/watches' ,function(){
    return view('shop.watches.mens_watches');
});
Route::get('shop/womens/watches' ,function(){
    return view('shop.watches.womens_watches');
});
Route::get('shop/premium/watches' ,function(){
    return view('shop.watches.premium_watches');
});
Route::get('shop/watches' ,function(){
    return view('shop.watches.all_watches');
});
//End Watches

#END GET SHOP ROUTERS
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
