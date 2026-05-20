<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapController extends Controller
{
    private $caps = [
        ['id' => 1, 'name' => 'Chicago Bulls 1996 Champions', 'brand' => 'Logo 7', 'era' => '90s', 'condition' => 'Mint', 'image' => 'https://shoegrab.com.au/cdn/shop/products/bulls96.png?v=1670371045'],
        ['id' => 2, 'name' => 'Los Angeles Lakers Showtime', 'brand' => 'New Era', 'era' => '80s', 'condition' => 'Near Mint', 'image' => 'https://p16-oec-general-useast5.ttcdn-us.com/tos-useast5-i-omjb5zjo8w-tx/6390624b35cc4c128df7f2a4607b6c8c~tplv-fhlh96nyum-resize-webp:800:805.webp?dr=12190&t=555f072d&ps=933b5bde&shp=8dbd94bf&shcp=948674b7&idc=useast5&from=2378011839'],
        ['id' => 3, 'name' => 'Boston Celtics Classic Green', 'brand' => 'Starter', 'era' => '70s', 'condition' => 'Excellent', 'image' => 'https://nbastore.com.ph/cdn/shop/files/2_83c7ac55-90b8-4bd2-88b0-fbd9ebc13186_3024x.png?v=1766401208'],
        ['id' => 4, 'name' => 'Seattle SuperSonics Two-Tone', 'brand' => 'Nutmeg', 'era' => '90s', 'condition' => 'Deadstock', 'image' => 'https://m.media-amazon.com/images/I/91L6hMjsJhL._AC_UY1000_.jpg'],
        ['id' => 5, 'name' => 'Detroit Pistons "Bad Boys"', 'brand' => 'American Needle', 'era' => '80s', 'condition' => 'Good', 'image' => 'https://www.pistons313shop.com/cdn/shop/files/DETPMH0198B.jpg?v=1771013680&width=533'],
        ['id' => 6, 'name' => 'Miami Heat 2006 Script', 'brand' => 'Reebok', 'era' => '2000s', 'condition' => 'Excellent', 'image' => 'https://images.footballfanatics.com/miami-heat/black-miami-heat-2006-nba-finals-champions-snapback-hat_ss5_p-201552294+pv-1+u-oldloi79msuystw6swz0+v-rweczy6qqzpegurzxzxp.jpg?_hv=2&w=1018'],
        ['id' => 7, 'name' => 'Orlando Magic Pinstripe', 'brand' => 'Logo 7', 'era' => '90s', 'condition' => 'New Old Stock', 'image' => 'https://m.media-amazon.com/images/I/61CYmhkpSyL._AC_UY1000_.jpg'],
        ['id' => 8, 'name' => 'Toronto Raptors Purple Dino', 'brand' => 'Starter', 'era' => '95-96', 'condition' => 'Mint', 'image' => 'https://www.topperzstore.com/media/1d/2b/ae/1765510442/970394-new_era_toronto_raptors_9Fifty_AFrame_60839819_06.jpg?ts=1765510442'],
        ['id' => 9, 'name' => 'Golden State Warriors "The City"', 'brand' => 'Cooperstown', 'era' => '60s Reissue', 'condition' => 'Worn', 'image' => 'https://www.topperzstore.co.uk/media/72/6e/35/1765510421/970351-new_era_golden_state_warriors_9Fifty_AFrame_60839776_06.jpg?ts=1765510421'],
    ];

    public function index() {
        return view('caps.index', ['caps' => $this->caps]);
    }

    public function show($id) {
        $cap = collect($this->caps)->firstWhere('id', $id);
        if (!$cap) abort(404);
        return view('caps.show', compact('cap'));
    }
}