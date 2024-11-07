<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'TP-Link Archer AX73 AX5400 Dual-Band Gigabit Wi-Fi 6 Router - Archer AX73',
                'img_path' => 'images/Archer_AX73.jpg',
                'price' => 1770000,
                'category_id' => 1,
            ],
            [
                'name' => 'Cisco Business 110 Series CBS110-8T-D-EU, 8-Ports GbE Unmanaged Switch - Unit Only',
                'img_path' => 'images/CBS110.jpg',
                'price' => 1120000,
                'category_id' => 1,
            ],
            [
                'name' => 'NETGEAR 24-Port Gigabit Ethernet Switch Hub GS324',
                'img_path' => 'images/Netgear_GS324.jpg',
                'price' => 2999000,
                'category_id' => 1,
            ],
            [
                'name' => 'Processor Intel Core i7 12700F Box Alder Lake Socket LGA 1700',
                'img_path' => 'images/Intel_i7.jpg',
                'price' => 3990000,
                'category_id' => 4,
            ],
            [
                'name' => 'Processor Intel Core i5 13400F 2.5GHz Up To 4.6GHz - [Box] LGA 1700',
                'img_path' => 'images/Intel_i5.jpg',
                'price' => 3190000,
                'category_id' => 4,
            ],
            [
                'name' => 'ZOTAC GAMING Nvidia GeForce RTX 4080 SUPER Trinity OC White 16GB DDR6X',
                'img_path' => 'images/RTX_4080.jpg',
                'price' => 16730000,
                'category_id' => 5,
            ],
            [
                'name' => 'Colorful iGame GeForce RTX 4090 Vulcan OC',
                'img_path' => 'images/RTX_4090.jpg',
                'price' => 42395000,
                'category_id' => 5,
            ],
            [
                'name' => 'KOORUI 34E6UC Curved Gaming Monitor 21:9 Ultra Wide 165Hz 1ms HDR',
                'img_path' => 'images/KOORUI_34E6UC.jpg',
                'price' => 3990000,
                'category_id' => 2,
            ],
            [
                'name' => 'Monitor Samsung 27" Inch C27R500 Curved FHD LED FREESYNC | C27R500FHE - 27"',
                'img_path' => 'images/Samsung_C27R500.jpg',
                'price' => 1685000,
                'category_id' => 2,
            ],
            [
                'name' => 'Logitech MK470 / MK 470 Combo Keyboard & Mouse Wireless Slim - Graphite',
                'img_path' => 'images/Logi_MK470.jpg',
                'price' => 770000,
                'category_id' => 3,
            ],
            [
                'name' => 'Rexus KM8 Keyboard Mouse Wireless Combo - Hitam',
                'img_path' => 'images/Rexus_KM8-B.jpg',
                'price' => 144000,
                'category_id' => 3,
            ],
            [
                'name' => 'Rexus KM8 Keyboard Mouse Wireless Combo - Putih',
                'img_path' => 'images/Rexus_KM8-W.jpg',
                'price' => 159000,
                'category_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::factory()->create([
                'name' => $product['name'],
                'img_path' => $product['img_path'],
                'price' => $product['price'],
                'category_id' => $product['category_id'],
            ]);
        }
    }
}
