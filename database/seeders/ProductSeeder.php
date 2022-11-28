<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'categoriesId' => 1,
                'subCategoriesId' => 3,
                'products_name' => 'Huawei Y9a',
                'products_description' => 'Battery Capacity: 5000mAH
                Primary Camera: 8MP, Dual 2MP
                Front Camera: 16MP
                Network & Connectivity:2G, 3G, 4G
                Operating System: Android
                Screen Size: 6.6 inch screen
                SIM Card Slots: Single SIM
                Internal Storage:128GB
                RAM: 6GB RAM, 8GB RAM ',
                'products_quantity' => 10,
                'products_price' => 35000,
                'products_image' => "assets('storage/images/Huawei-Y9a-min.jpg')",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 2,
                'products_name' => 'Xiaomi 12S Ultra',
                'products_description' => 'Primary Camera: 50MP, Dual 48MP
                RAM: 12GB RAM, 8GB RAM
                Network & Connectivity: 2G, 3G, 4G, 5G, USB Type-C
                Operating System: Android, Android 12
                SIM Card Slots: Dual SIM
                Battery Capacity: 4860 mAh
                Chipset: Snapdragon
                Front Camera: 32MP
                Internal Storage: 256GB, 512GB
                Screen Size: 6.7 inch screen',
                'products_quantity' => 10,
                'products_price' => 160000,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2022/06/Xiaomi-12S-Ultra-a.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 2,
                'products_name' => 'Redmi A1 Plus',
                'products_description' => 'RAM: 2GB
                Internal Storage: 32GB
                Battery: 5000 mAh
                Main camera: 8 MP + 0.3 MP
                Front camera: 5 MP
                Display: 6.52 inches, IPS LCD
                Processor: MediaTek Helio A22
                Connectivity: Dual sim, 4G
                Colors: Light Green, Light Blue, Black
                OS: Android 12',
                'products_quantity' => 5,
                'products_price' => 11000,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2022/09/Redmi-A1-plus.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 2,
                'products_name' => 'Xiaomi Redmi 10A',
                'products_description' => 'RAM: 2GB/3GB/4GB
                Internal Storage: 32GB/64GB/128GB
                Battery: 5000 mAh
                Main camera: 13 MP, AF
                Front camera: 5 MP
                Display: 6.53 inches, IPS LCD
                Processor: MediaTek Helio G25
                Connectivity: Dual sim, 4G
                Colors: Black, Silver, Blue
                OS: Android 11, MIUI 12.5',
                'products_quantity' => 6,
                'products_price' => 13100,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2022/01/Xiaomi-Redmi-10A-a.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 2,
                'products_name' => 'Redmi Note 11 Pro',
                'products_description' => 'RAM: 8GB
                Internal Storage: 128 GB
                Battery: 5000 mAh, 67W, 100% in 43 min
                Main camera: 108 MP + 8 MP + 2 MP
                Front camera: 16 MP
                Display: 6.67 inches, Super AMOLED, 120Hz, HDR10
                Processor: MediaTek Helio G96
                Connectivity: GSM / CDMA / HSPA / EVDO / LTE /
                Colors: Black, Green, Purple, Blue
                OS: Android 11, MIUI 12.5',
                'products_quantity' => 15,
                'products_price' => 31000 - 33500,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2021/10/Xiaomi-Redmi-Note-11-Pro.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 2,
                'products_name' => 'Xiaomi Poco M4 Pro',
                'products_description' => 'RAM: 4/6/ 8GB
                Internal Storage: 64/128 /256GB
                Battery: 5000 mAh
                Main camera: 50 MP + 8 MP
                Front camera: 16 MP
                Display: 6.6 inches
                Processor: MediaTek Dimensity 810 5G
                Connectivity: 2G,3G,4G, 5G, Dual SIM
                Colors: Poco Yellow, Power Black, Cool Blue
                OS: Android 11',
                'products_quantity' => 3,
                'products_price' => 26000 - 30000,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2022/01/Poco-M4-Pro-5G-a.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 2,
                'products_name' => 'Xiaomi Redmi 9C',
                'products_description' => 'RAM: 3GB, 4GB
                Internal Storage: 64GB, 128GB
                Battery: 5000 mAh
                Main camera: 13 MP + 5 MP + 2 MP
                Front camera: 5MP
                Display: 6.53 inch
                Processor: Helio G35
                Connectivity: Dual sim, 3G, 4G, VoLTE, Wi-Fi
                Colors: Orange, Blue, Black
                OS: Android 10.0',
                'products_quantity' => 6,
                'products_price' => 14000 - 17500,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2020/07/Xiaomi-Redmi-9C.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 2,
                'products_name' => 'Xiaomi 11T',
                'products_description' => 'RAM: 8GB
                Internal Storage: 256GB
                Battery: 5,000 mAh
                Main camera: 108 MP + 8 MP + 5 MP
                Front camera: 16 MP
                Display: 6.67 inch, AMOLED, 1B colors, 120Hz, HDR10+
                Processor: MediaTek Dimensity 1200 5G
                Connectivity: Dual sim, 2G, 3G, 4G, 5G,  Wi-Fi
                Colors: Gray, White, Blue
                OS: Android 11, MIUI 12.5',
                'products_quantity' => 6,
                'products_price' => 53000,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2021/11/Xiaomi-11T-a.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 1,
                'products_name' => 'Nokia C31',
                'products_description' => 'RAM: 4GB
                Storage: 64GB
                Network: 4G
                Display Size: 6.75 inches, IPS LCD
                Resolution: 720 x 1600 pixels
                Operating System: Android 12
                Processor: Octa-Core, Unisoc SC9863A (28nm)
                Main Camera: 13MP + 2MP + 2MP
                Secondary Camera: 5MP
                Battery: 5,050mAh
                Color: Gray and Blue',
                'products_quantity' => 5,
                'products_price' => 15800,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2022/09/Nokia-C31.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 1,
                'products_name' => 'Nokia X10(5G)',
                'products_description' => 'RAM: 6GB
                Storage: 128GB
                Battery: 4470 mAh
                Camera: 48MP + 5MP + 2MP + 2MP
                Selfie: 8 MP
                Display: 6.67 inches, IPS LCD
                Processor: Qualcomm Snapdragon 480 5G
                Connectivity: Dual sim, 5G, Wi-Fi
                Colors: Dusk, Night
                OS: upgradable to Android 12',
                'products_quantity' => 15,
                'products_price' => 22000,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2021/05/Nokia-X10-a.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 1,
                'products_name' => 'Nokia T20',
                'products_description' => 'RAM: 4GB
                Storage: 64GB
                Battery: 8,200 mAh
                Camera: 8MP
                Selfie: 5MP
                Display: 10.4 inch
                Processor: Unisoc T610
                Connectivity: Dual sim, 4G, Wi-Fi
                Colors: Deep Ocean
                OS: Android 11',
                'products_quantity' => 8,
                'products_price' => 21400,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2021/10/Nokia-T20.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 1,
                'products_name' => 'Nokia X20',
                'products_description' => 'RAM: 8GB
                Storage: 128GB
                Battery: 4470 mAh
                Camera: 64MP + 5MP + 2MP + 2MP
                Selfie: 32 MP
                Display: 6.67 inches, IPS LCD
                Processor: Qualcomm Snapdragon 480 5G
                Connectivity: Dual sim,,5G, Wi-Fi
                Colors: Midnight Sun, Nordic Blue
                OS: upgradable to Android 12',
                'products_quantity' => 5,
                'products_price' => 27100,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2021/05/Nokia-X20.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 1,
                'products_name' => 'Nokia C10(3G)',
                'products_description' => 'RAM: 1GB
                Internal Storage: 32GB
                Battery: 3000 mAh
                Main camera: 5MP
                Front camera: 5 MP
                Display: 6.52 inch
                Processor: Unisoc SC7331E
                Connectivity: Dual sim, 3G, Wi-Fi
                Colors: Gray, Light Purple
                OS: Android 11 (Go edition)',
                'products_quantity' => 5,
                'products_price' => 10000,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2021/05/Nokia-C10.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'categoriesId' => 1,
                'subCategoriesId' => 1,
                'products_name' => 'nokia C21 Plus',
                'products_description' => 'RAM: 2GB
                Storage: 64GB
                Battery: 4,000mAh
                Camera: 13MP + 2MP
                Selfie: 5 MP
                Display: 6.52 inch
                Processor: Unisoc SC9863A
                Connectivity: Dual sim, 4G, Wi-Fi
                Colors: Dark Cyan, Warm Gray
                OS: Android 11 (Go edition)',
                'products_quantity' => 7,
                'products_price' => 14800,
                'products_image' => 'https://www.phoneplacekenya.com/wp-content/uploads/2022/02/Nokia-C21-Plus-a.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],



        ];

        DB::table('products')->insert($products);

    }
}
