<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'VicTsing Wireless Mouse,',
            'slug' => 'vic-tsing-wireless-mouse-1',
            'description' =>
                'After thousands of samples of palm data, we designed this ergonomic mouse. The laptop mouse has a streamlined arc and thumb rest to help reduce the stress caused by prolonged use of the laptop mouse.',
            'brand' => 'VicTsing',
            'price' => 10.99,
            'image' => '../images/pages/shop/products/27.png',
            'hasFreeShipping' => 'true',
            'rating' => 3
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Bose Frames Tenor - Rectangular Polarized, Bluetooth Audio Sunglasses',
            'slug' => 'bose-frames-tenor-rectangular-polarized-bluetooth-audio-sunglasses-2',
            'description' =>
                'Redesigned for luxury — Thoughtfully refined and strikingly elegant, the latest Bose sunglasses blend enhanced features and designs for an elevated way to listen',
            'brand' => 'Bose',
            'price' => 249.0,
            'image' => '../images/pages/shop/products/26.png',
            'hasFreeShipping' => 'false',
            'rating' => 4
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Willful Smart Watch for Men Women 2020,',
            'slug' => 'willful-smart-watch-for-men-women-2020-3',
            'description' =>
                'Are you looking for a smart watch, which can not only easily keep tracking of your steps, calories, heart rate and sleep quality, but also keep you informed of incoming calls.',
            'brand' => 'Willful',
            'price' => 29.99,
            'image' => '../images/pages/shop/products/25.png',
            'hasFreeShipping' => 'true',
            'rating' => 5
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Ronyes Unisex College Bag Bookbags for Women',
            'slug' => 'ronyes-unisex-college-bag-bookbags-for-women-4',
            'description' =>
                'Made of high quality water-resistant material; padded and adjustable shoulder straps; external USB with built-in charging cable offers a convenient charging',
            'brand' => 'Ronyes',
            'price' => 23.99,
            'image' => '../images/pages/shop/products/24.png',
            'hasFreeShipping' => 'true',
            'rating' => 2
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Toshiba Canvio Advance 2TB Portable External Hard Drive',
            'slug' => 'toshiba-canvio-advance-2-tb-portable-external-hard-drive-5',
            'description' => 'Up to 3TB of storage capacity to store your growing files and content',
            'brand' => 'Toshiba',
            'price' => 69.99,
            'image' => '../images/pages/shop/products/23.png',
            'hasFreeShipping' => 'true',
            'rating' => 2
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Tile Pro - High Performance Bluetooth Tracker',
            'slug' => 'tile-pro-high-performance-bluetooth-tracker-6',
            'description' =>
                'FIND KEYS, BAGS & MORE -- Pro is our high-performance finder ideal for keys, backpacks, luggage or any other items you want to keep track of. The easy-to-use finder and free app work with iOS and Android.',
            'brand' => 'Tile',
            'price' => 29.99,
            'image' => '../images/pages/shop/products/22.png',
            'hasFreeShipping' => 'false',
            'rating' => 4
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Bugani M90 Portable Bluetooth Speaker',
            'slug' => 'bugani-m90-portable-bluetooth-speaker-7',
            'description' =>
                'Bluetooth Speakers-The M90 Bluetooth speaker uses the latest Bluetooth 5.0 technology and the latest Bluetooth ATS chip, Connecting over Bluetooth in seconds to iPhone, iPad, Smart-phones, Tablets, Windows, and other Bluetooth devices.',
            'brand' => 'Bugani',
            'price' => 56.0,
            'image' => '../images/pages/shop/products/21.png',
            'hasFreeShipping' => 'false',
            'rating' => 3
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'PlayStation 4 Console',
            'slug' => 'play-station-4-console-8',
            'description' =>
                'All the greatest, games, TV, music and more. Connect with your friends to broadcast and celebrate your epic moments at the press of the Share button to Twitch, YouTube, Facebook and Twitter.',
            'brand' => 'Sony',
            'price' => 339.95,
            'image' => '../images/pages/shop/products/20.png',
            'hasFreeShipping' => 'false',
            'rating' => 4
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Giotto 32oz Leakproof BPA Free Drinking Water',
            'slug' => 'giotto-32oz-leakproof-bpa-free-drinking-water-9',
            'description' =>
                'With unique inspirational quote and time markers on it,this water bottle is great for measuring your daily intake of water,reminding you stay hydrated and drink enough water throughout the day.A must have for any fitness goals including weight loss,appetite control and overall health.',
            'brand' => '3M',
            'price' => 16.99,
            'image' => '../images/pages/shop/products/19.png',
            'hasFreeShipping' => 'true',
            'rating' => 4
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Oculus Quest All-in-one VR',
            'slug' => 'oculus-quest-all-in-one-vr-10',
            'description' =>
                'All-in-one VR=>No PC. No wires. No limits. Oculus quest is an all-in-one gaming system built for virtual reality. Now you can play almost anywhere with just a VR headset and controllers. Oculus touch controllers=>arm yourself with the award-winning Oculus touch controllers. Your slashes, throws and grab appear in VR with intuitive, realistic Precision, transporting your hands and gestures right into the game',
            'brand' => 'Oculus',
            'price' => 645.0,
            'image' => '../images/pages/shop/products/18.png',
            'hasFreeShipping' => 'false',
            'rating' => 1
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Handbags for Women Large Designer bag',
            'slug' => 'handbags-for-women-large-designer-bag-11',
            'description' =>
                'Classic Hobo Purse=>Top zipper closure, with 2 side zipper pockets design and elegant tassels decoration, fashionable and practical handbags for women, perfect for shopping, dating, travel and business',
            'brand' => 'Hobo',
            'price' => 39.99,
            'image' => '../images/pages/shop/products/17.png',
            'hasFreeShipping' => 'true',
            'rating' => 3
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Adidas Mens Tech Response Shoes',
            'slug' => 'adidas-mens-tech-response-shoes-12',
            'description' =>
                'Comfort + performance.  Designed with materials that are durable, lightweight and extremely comfortable. Core performance delivers the perfect mix of fit, style and all-around performance.',
            'brand' => 'Adidas',
            'price' => 54.59,
            'image' => '../images/pages/shop/products/16.png',
            'hasFreeShipping' => 'false',
            'rating' => 5
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Laptop Bag',
            'slug' => 'laptop-bag-13',
            'description' =>
                'TSA FRIENDLY- A separate DIGI SMART compartment can hold 15.6 inch Laptop as well as 15 inch, 14 inch Macbook, 12.9 inch iPad, and tech accessories like charger for quick TSA checkpoint when traveling',
            'brand' => 'TAS',
            'price' => 29.99,
            'image' => '../images/pages/shop/products/15.png',
            'hasFreeShipping' => 'true',
            'rating' => 5
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Wireless Charger 5W Max',
            'slug' => 'wireless-charger-5-w-max-14',
            'description' =>
                'Charge with case=>transmits charging power directly through protective cases. Rubber/plastic/TPU cases under 5 mm thickness . Do not use any magnetic and metal attachments or cards, or it will prevent charging.',
            'brand' => '3M',
            'price' => 10.83,
            'image' => '../images/pages/shop/products/14.png',
            'hasFreeShipping' => 'true',
            'rating' => 3
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Vankyo leisure 3 mini projector',
            'slug' => '3-m-filtrete-vacuum-belt-for-select-hoover-t-series-upright-vacuums-15',
            'description' =>
                'SUPERIOR VIEWING EXPERIENCE=>Supporting 1920x1080 resolution, VANKYO Leisure 3 projector is powered by MStar Advanced Color Engine, which is ideal for home entertainment. 2020 upgraded LED lighting provides a superior viewing experience for you.',
            'brand' => 'Vankyo Store',
            'price' => 99.99,
            'image' => '../images/pages/shop/products/13.png',
            'hasFreeShipping' => 'true',
            'rating' => 2
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'New Apple iPad Pro',
            'slug' => '3-m-hoover-y-z-pet-micro-allergen-vacuum-bag-for-select-hoover-vacuums-3-pack-16',
            'description' =>
                'Up to 10 hours of surﬁng the web on Wi‑Fi, watching video, or listening to music. Up to 9 hours of surﬁng the web using cellular data network, Compatible with Smart Keyboard Folio and Bluetooth keyboards',
            'brand' => 'Apple',
            'price' => 799.99,
            'image' => '../images/pages/shop/products/12.png',
            'hasFreeShipping' => 'false',
            'rating' => 3
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Nike Air Max',
            'slug' => '72-9301-speaker-wire-harness-adapter-for-most-plymouth-dodge-and-mitsubishi-vehicles-multi-17',
            'description' =>
                'With a bold application of colorblocking inspired by modern art styles, the Nike Air Max 270 React sneaker is constructed with layers of lightweight material to achieve its artful look and comfortable feel.',
            'brand' => 'Nike',
            'price' => 81.99,
            'image' => '../images/pages/shop/products/11.png',
            'hasFreeShipping' => 'true',
            'rating' => 5
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Logitech K380 Wireless Keyboard',
            'slug' => 'acer-11-6-chromebook-intel-celeron-2-gb-memory-16-gb-e-mmc-flash-memory-moonstone-white-18',
            'description' =>
                'Logitech K380 Bluetooth Wireless Keyboard gives you the comfort and convenience of desktop typing on your smartphone, and tablet. It is a wireless keyboard that connects to all Bluetooth wireless devices that support external keyboards. Take this compact, lightweight, Bluetooth keyboard anywhere in your home. Type wherever you like, on any compatible computer, phone or tablet.',
            'brand' => 'Logitech',
            'price' => 81.99,
            'image' => '../images/pages/shop/products/10.png',
            'hasFreeShipping' => 'false',
            'rating' => 4
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'OnePlus 7 Pro ',
            'slug' => 'one-plus-7-pro-19',
            'description' => 'The OnePlus 7 Pro features a brand new design, with a glass back and front and curved sides. The phone feels
    very premium but’s it’s also very heavy. The Nebula Blue variant looks slick but it’s quite slippery, which
    makes single-handed use a real challenge. It has a massive 6.67-inch ‘Fluid AMOLED’ display with a QHD+
    resolution, 90Hz refresh rate and support for HDR 10+ content. The display produces vivid colours, deep blacks
    and has good viewing angles.',
            'brand' => 'Philips',
            'price' => 14.99,
            'image' => '../images/pages/shop/products/9.png',
            'hasFreeShipping' => 'false',
            'rating' => 4
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Sony 4K Ultra HD LED TV ',
            'slug' => 'sony-4-k-ultra-hd-led-tv-20',
            'description' => 'Sony 4K Ultra HD LED TV has 4K HDR Support. The TV provides clear visuals and provides distinct sound quality
    and an immersive experience. This TV has Yes HDMI ports & Yes USB ports. Connectivity options included are HDMI.
    You can connect various gadgets such as your laptop using the HDMI port. The TV comes with a 1 Year warranty.',
            'brand' => 'Apple',
            'price' => 7999.99,
            'image' => '../images/pages/shop/products/8.png',
            'hasFreeShipping' => 'false',
            'rating' => 5
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Google - Google Home - White/Slate fabric',
            'slug' => 'google-google-home-white-slate-fabric-21',
            'description' => 'Simplify your everyday life with the Google Home, a voice-activated speaker powered by the Google Assistant. Use
    voice commands to enjoy music, get answers from Google and manage everyday tasks. Google Home is compatible with
    Android and iOS operating systems, and can control compatible smart devices such as Chromecast or Nest.',
            'brand' => 'Google',
            'price' => 129.29,
            'image' => '../images/pages/shop/products/7.png',
            'hasFreeShipping' => 'true',
            'rating' => 4
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Switch Pro Controller',
            'slug' => 'switch-pro-controller-22',
            'description' => 'The Nintendo Switch Pro Controller is one of the priciest "baseline" controllers in the current console
    generation, but it\'s also sturdy, feels good to play with, has an excellent direction pad, and features
    impressive motion sensors and vibration systems. On top of all of that, it uses Bluetooth, so you don\'t need an
    adapter to use it with your PC.',
            'brand' => 'Sharp',
            'price' => 429.99,
            'image' => '../images/pages/shop/products/6.png',
            'hasFreeShipping' => 'false',
            'rating' => 3
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Apple - MacBook Air® (Latest Model) - 13.3" Display - Silver',
            'slug' => 'apple-mac-book-air-latest-model-13-3-display-silver-23',
            'description' => 'MacBook Air is a thin, lightweight laptop from Apple. MacBook Air features up to 8GB of memory, a
    fifth-generation Intel Core processor, Thunderbolt 2, great built-in apps, and all-day battery life.1 Its thin,
    light, and durable enough to take everywhere you go-and powerful enough to do everything once you get there,
    better.',
            'brand' => 'Apple',
            'price' => 999.99,
            'image' => '../images/pages/shop/products/5.png',
            'hasFreeShipping' => 'false',
            'rating' => 4
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'OneOdio A71 Wired Headphones',
            'slug' => 'one-odio-a71-wired-headphones-24',
            'description' => 'Omnidirectional detachable boom mic upgrades the headphones into a professional headset for gaming, business,
    podcasting and taking calls on the go. Better pick up your voice. Control most electric devices through voice
    activation, or schedule a ride with Uber and order a pizza. OneOdio A71 Wired Headphones voice-controlled device
    turns any home into a smart device on a smartphone or tablet.',
            'brand' => 'OneOdio',
            'price' => 49.99,
            'image' => '../images/pages/shop/products/4.png',
            'hasFreeShipping' => 'true',
            'rating' => 3
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Apple iMac 27-inch',
            'slug' => 'apple-i-mac-27-inch-25',
            'description' => 'The all-in-one for all. If you can dream it, you can do it on iMac. It’s beautifully & incredibly intuitive and
    packed with tools that let you take any idea to the next level. And the new 27-inch model elevates the
    experience in way, with faster processors and graphics, expanded memory and storage, enhanced audio and video
    capabilities, and an even more stunning Retina 5K display. It’s the desktop that does it all — better and faster
    than ever.',
            'brand' => 'Apple',
            'price' => 999.99,
            'image' => '../images/pages/shop/products/3.png',
            'hasFreeShipping' => 'true',
            'rating' => 4
        ]);

        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Apple iPhone 11 (64GB, Black)',
            'slug' => 'apple-i-phone-11-64-gb-black-26',
            'description' => 'The Apple iPhone 11 is a great smartphone, which was loaded with a lot of quality features. It comes with a
    waterproof and dustproof body which is the key attraction of the device. The excellent set of cameras offer
    excellent images as well as capable of recording crisp videos. However, expandable storage and a fingerprint
    scanner would have made it a perfect option to go for around this price range.',
            'brand' => 'Apple',
            'price' => 669.99,
            'image' => '../images/pages/shop/products/2.png',
            'hasFreeShipping' => 'true',
            'rating' => 5
        ]);


        Product::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'Apple Watch Series 5',
            'slug' => 'apple-watch-series-5-27',
            'description' => 'On Retina display that never sleeps, so it’s easy to see the time and other important information, without
    raising or tapping the display. New location features, from a built-in compass to current elevation, help users
    better navigate their day, while international emergency calling1 allows customers to call emergency services
    directly from Apple Watch in over 150 countries, even without iPhone nearby. Apple Watch Series 5 is available
    in a wider range of materials, including aluminium, stainless steel, ceramic and an all-new titanium.',
            'brand' => 'Apple',
            'price' => 339.99,
            'image' => '../images/pages/shop/products/1.png',
            'hasFreeShipping' => 'true',
            'rating' => 4
        ]);
    }
}
