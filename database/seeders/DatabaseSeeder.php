<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CartDetail;
use App\Models\User;
use App\Models\Store;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //link image : https://source.unsplash.com/1848x1300/?mental

        User::create([
            'name' => 'Pengguna Satu',
            'email' => 'pengguna1@gmail.com',
            'password' => bcrypt('akundummy')
        ]);

        User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('akundummy'),
            'is_admin' => 1
        ]);

        Store::create([
            'name' => 'Gudang Buahbatu'
        ]);
        
        Store::create([
            'name' => 'Gudang Pasteur'
        ]);

        Store::create([
            'name' => 'Gudang Cimahi'
        ]);

        Store::create([
            'name' => 'Gudang Jaktim'
        ]);

        Store::create([
            'name' => 'Gudang Jaksel'
        ]);

        Store::create([
            'name' => 'Gudang Tangerang',
        ]);


        Product::create([
            'name' => 'Apel Fuji 7 Kg',
            'store_id' => 1,
            'price' => 40000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Apel.jpg',
            'description' => 'Buah Apel Fuji merupakan sebuah apel yang asli berasal dari Jepang, memiliki banyak manfaat dan juga khasiat yang sangatlah luar biasa. Khasiat dari buah ini sangatlah baik untuk kesehatan dan juga kecantik. Kandungan antioksidannya juga sangatlah baik sekali bagi tubuh. Jadi tidak heran jika apel ini telah menjadi primadona di berbagai dunia, salah satunya merupakan Amerika Serikat',
        ]);

        Product::create([
            'name' => 'Beras 10 Kg',
            'store_id' => 1,
            'price' => 65000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Beras.png',
            'description' => 'Beras merupakan bulir gabah yang sudah dikupas kulitnya dan bagian ini sudah dapat dimasak serta di konsumsi yang melalui proses penggilingan dan penyosohan. Selain itu juga beras mempunyai manfaat seperti Mengatasi konstipasi atau sembelit. Mengurangi resiko kanker usus, karena serat yang terkandung dapat mengikat bahan karsinogenik, mengencerkan konsentrasi karsinogen. Dapat menghambat terjadinya diabetes, Alzheimer, dan mencegah penyakit jantung.' 
        ]);
        
        Product::create([
            'name' => 'Buncis 1 Kg',
            'store_id' => 1,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Buncis.jpg',
            'description' => 'Buncis merupakan kelompok tanaman kacang-kacangan yang berasal dari Amerika dan merupakan salah satu sumber protein nabati yang murah dan mudah di kembangkan, selain itu buncis merupakan salah satu jenis sayuran, yang dikonsumsi sebagai sayuran buah. Kandungan serat dan antioksidan pada buncis bermanfaat untuk menjaga kesehatan jantung dan pembuluh darah. Penelitian menunjukkan bahwa orang yang rutin mengonsumsi makanan sehat, termasuk buncis dan kacang-kacangan, berisiko lebih rendah untuk mengalami penyakit jantung dan pembuluh darah.'
        ]);
        
        Product::create([
            'name' => 'Timun 10 Kg',
            'store_id' => 1,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Timun.jpg',
            'description' => 'Mentimun merupakan tanaman semusim yang bersifat menjalar atau merambat dengan perantaraan alat pemegang yang berbentuk spiral. Tanaman mentimun berasal dari bagian utara India, yakni lereng Gunung Himalaya, yang kemudian berkembang ke wilayah Mediteran. Timun kaya akan sumber air serta mengandung vitamin C. Segala kandungan nutrisi tersebut sangat baik untuk menutrisi kulit, sehingga timun bisa membantu melembabkan kulit dan mencegah penuaan dini. Mentimun juga mengandung sulfur dan silikon untuk pertumbuhan rambut sehat.'
        ]);
        
        Product::create([
            'name' => 'Bayam 1 Kg',
            'store_id' => 1,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Bayam.jpg',
            'description' => 'Bayam merupakan salah satu jenis tanaman hijau yang paling banyak ditemui di Indonesia. Tanaman satu ini merupakan jenis sayuran yang mudah diolah untuk makanan sehari-hari mulai dari sup, pecel, gado-gado, sampai keripik. Amaranthus dubius ; biasa disebut juga dengan bayam petik. Bayam mengandung beta karoten dan vitamin C yang aktif berperan dalam perlindungan terhadap perkembangan sel kanker. Selain beta karoten dan vitamin C, zat yang mampu mencegah kanker adalah klorofil. Klorofil ini efektif sebagai penahan efek karsinogenik dari amina heterosilik.'
        ]);
        
        Product::create([
            'name' => 'Tomat 1 Kg',
            'store_id' => 1,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Tomat.jpg',
            'description' => 'Buah tomat adalah buah yang berasal dari benua Amerika, terdiri dari berbagai bentuk dan dimensi, tingginya dapat mencapai 2.5 meter, ditanam sebagai tanaman buah di ladang, pekarangan, atau ditemukan liar pada ketinggian 1-1600 m dpl. Tomat merupakan buah yang mengandung vitamin C dan antioksidan. Kandungan yang terdapat dalam buah tomat memberikan manfaat dalam melawan pembentukan radikal bebas penyebab kanker. Apabila Anda sedang mengalami sembelit, mengonsumsi buah tomat dapat membantu mengatasi kondisi tersebut.'
        ]);
        
        Product::create([
            'name' => 'Jahe 2 Kg',
            'store_id' => 1,
            'price' => 15000,
            'stock_quantity' => 3000,
            'sold_quantity' => 7000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Jahe.jpg',
            'description' => 'Jahe merupakan tanaman obat berupa tumbuhan rumpun berbatang semu. Jahe berasal dari Asia Pasifik yang tersebar dari India sampai Cina. Oleh karena itu kedua bangsa ini disebut-sebut sebagai bangsa yang pertama kali memanfaatkan jahe terutama sebagai bahan minuman, bumbu masak dan obat-obatan tradisional. Berbagai penelitian menunjukkan bahwa kandungan antioksidan, mineral dan asam amino dalam jahe dapat membantu melindungi dari dari penyakit jantung. Minuman jahe juga dapat memperlancar peredaran darah, menurunkan kolesterol, meredakan sakit maag, mencegah serangan jantung, serta menurunkan tekanan darah.'
        ]);
        
        Product::create([
            'name' => 'Cabai 5 Kg',
            'store_id' => 1,
            'price' => 20000,
            'stock_quantity' => 3000,
            'sold_quantity' => 9000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Cabai.jpg',
            'description' => 'Cabai merupakan tanaman perdu dari famili terong-terongan. Cabai berasal dari benua Amerika tepatnya daerah Peru dan menyebar ke negara-negara benua Amerika, Eropa dan Asia termasuk negara Indonesia. Tanaman cabai banyak ragam tipe pertumbuhan dan bentuk buahnya. Di balik rasanya yang pedas, ada banyak manfaat cabai untuk kesehatan, mulai dari melegakan hidung tersumbat, meningkatkan imunitas tubuh, hingga membakar lemak tubuh. Manfaat ini berasal dari beragam nutrisi penting di dalamnya. Cabai kerap digunakan sebagai bumbu pelengkap di setiap masakan.'
        ]);
        
        Product::create([
            'name' => 'Wortel 3 Kg',
            'store_id' => 1,
            'price' => 30000,
            'stock_quantity' => 2000,
            'sold_quantity' => 6000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Wortel.jpg',
            'description' => 'Wortel adalah jenis sayuran yang berwarna kuning kemerahan atau jingga kekuningan dengan tekstur yang mirip seperti kayu. Bagian yang dapat dimakan dari wortel adalah bagian umbi atau akarnya. Wortel mengandung serat, kalium, serta lengkap dengan antioksidan seperti likopen. Berbagai zat gizi ini dipercaya dapat menjaga tekanan darah tetap stabil. Selain itu, wortel juga tidak mengandung kolesterol jahat sehingga baik untuk pembuluh darah.'
        ]);
           
        Product::create([
            'name' => 'Apel Fuji 7 Kg',
            'store_id' => 2,
            'price' => 40000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Apel.jpg',
            'description' => 'Buah Apel Fuji merupakan sebuah apel yang asli berasal dari Jepang, memiliki banyak manfaat dan juga khasiat yang sangatlah luar biasa. Khasiat dari buah ini sangatlah baik untuk kesehatan dan juga kecantik. Kandungan antioksidannya juga sangatlah baik sekali bagi tubuh. Jadi tidak heran jika apel ini telah menjadi primadona di berbagai dunia, salah satunya merupakan Amerika Serikat',
        ]);

        Product::create([
            'name' => 'Beras 10 Kg',
            'store_id' => 2,
            'price' => 65000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Beras.png',
            'description' => 'Beras merupakan bulir gabah yang sudah dikupas kulitnya dan bagian ini sudah dapat dimasak serta di konsumsi yang melalui proses penggilingan dan penyosohan. Selain itu juga beras mempunyai manfaat seperti Mengatasi konstipasi atau sembelit. Mengurangi resiko kanker usus, karena serat yang terkandung dapat mengikat bahan karsinogenik, mengencerkan konsentrasi karsinogen. Dapat menghambat terjadinya diabetes, Alzheimer, dan mencegah penyakit jantung.' 
        ]);
        
        Product::create([
            'name' => 'Buncis 1 Kg',
            'store_id' => 2,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Buncis.jpg',
            'description' => 'Buncis merupakan kelompok tanaman kacang-kacangan yang berasal dari Amerika dan merupakan salah satu sumber protein nabati yang murah dan mudah di kembangkan, selain itu buncis merupakan salah satu jenis sayuran, yang dikonsumsi sebagai sayuran buah. Kandungan serat dan antioksidan pada buncis bermanfaat untuk menjaga kesehatan jantung dan pembuluh darah. Penelitian menunjukkan bahwa orang yang rutin mengonsumsi makanan sehat, termasuk buncis dan kacang-kacangan, berisiko lebih rendah untuk mengalami penyakit jantung dan pembuluh darah.'
        ]);
        
        Product::create([
            'name' => 'Timun 10 Kg',
            'store_id' => 2,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Timun.jpg',
            'description' => 'Mentimun merupakan tanaman semusim yang bersifat menjalar atau merambat dengan perantaraan alat pemegang yang berbentuk spiral. Tanaman mentimun berasal dari bagian utara India, yakni lereng Gunung Himalaya, yang kemudian berkembang ke wilayah Mediteran. Timun kaya akan sumber air serta mengandung vitamin C. Segala kandungan nutrisi tersebut sangat baik untuk menutrisi kulit, sehingga timun bisa membantu melembabkan kulit dan mencegah penuaan dini. Mentimun juga mengandung sulfur dan silikon untuk pertumbuhan rambut sehat.'
        ]);
        
        Product::create([
            'name' => 'Bayam 1 Kg',
            'store_id' => 2,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Bayam.jpg',
            'description' => 'Bayam merupakan salah satu jenis tanaman hijau yang paling banyak ditemui di Indonesia. Tanaman satu ini merupakan jenis sayuran yang mudah diolah untuk makanan sehari-hari mulai dari sup, pecel, gado-gado, sampai keripik. Amaranthus dubius ; biasa disebut juga dengan bayam petik. Bayam mengandung beta karoten dan vitamin C yang aktif berperan dalam perlindungan terhadap perkembangan sel kanker. Selain beta karoten dan vitamin C, zat yang mampu mencegah kanker adalah klorofil. Klorofil ini efektif sebagai penahan efek karsinogenik dari amina heterosilik.'
        ]);
        
        Product::create([
            'name' => 'Tomat 1 Kg',
            'store_id' => 2,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Tomat.jpg',
            'description' => 'Buah tomat adalah buah yang berasal dari benua Amerika, terdiri dari berbagai bentuk dan dimensi, tingginya dapat mencapai 2.5 meter, ditanam sebagai tanaman buah di ladang, pekarangan, atau ditemukan liar pada ketinggian 1-1600 m dpl. Tomat merupakan buah yang mengandung vitamin C dan antioksidan. Kandungan yang terdapat dalam buah tomat memberikan manfaat dalam melawan pembentukan radikal bebas penyebab kanker. Apabila Anda sedang mengalami sembelit, mengonsumsi buah tomat dapat membantu mengatasi kondisi tersebut.'
        ]);
        
        Product::create([
            'name' => 'Jahe 2 Kg',
            'store_id' => 2,
            'price' => 15000,
            'stock_quantity' => 3000,
            'sold_quantity' => 7000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Jahe.jpg',
            'description' => 'Jahe merupakan tanaman obat berupa tumbuhan rumpun berbatang semu. Jahe berasal dari Asia Pasifik yang tersebar dari India sampai Cina. Oleh karena itu kedua bangsa ini disebut-sebut sebagai bangsa yang pertama kali memanfaatkan jahe terutama sebagai bahan minuman, bumbu masak dan obat-obatan tradisional. Berbagai penelitian menunjukkan bahwa kandungan antioksidan, mineral dan asam amino dalam jahe dapat membantu melindungi dari dari penyakit jantung. Minuman jahe juga dapat memperlancar peredaran darah, menurunkan kolesterol, meredakan sakit maag, mencegah serangan jantung, serta menurunkan tekanan darah.'
        ]);
        
        Product::create([
            'name' => 'Cabai 5 Kg',
            'store_id' => 2,
            'price' => 20000,
            'stock_quantity' => 3000,
            'sold_quantity' => 9000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Cabai.jpg',
            'description' => 'Cabai merupakan tanaman perdu dari famili terong-terongan. Cabai berasal dari benua Amerika tepatnya daerah Peru dan menyebar ke negara-negara benua Amerika, Eropa dan Asia termasuk negara Indonesia. Tanaman cabai banyak ragam tipe pertumbuhan dan bentuk buahnya. Di balik rasanya yang pedas, ada banyak manfaat cabai untuk kesehatan, mulai dari melegakan hidung tersumbat, meningkatkan imunitas tubuh, hingga membakar lemak tubuh. Manfaat ini berasal dari beragam nutrisi penting di dalamnya. Cabai kerap digunakan sebagai bumbu pelengkap di setiap masakan.'
        ]);
        
        Product::create([
            'name' => 'Wortel 3 Kg',
            'store_id' => 2,
            'price' => 30000,
            'stock_quantity' => 2000,
            'sold_quantity' => 6000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Wortel.jpg',
            'description' => 'Wortel adalah jenis sayuran yang berwarna kuning kemerahan atau jingga kekuningan dengan tekstur yang mirip seperti kayu. Bagian yang dapat dimakan dari wortel adalah bagian umbi atau akarnya. Wortel mengandung serat, kalium, serta lengkap dengan antioksidan seperti likopen. Berbagai zat gizi ini dipercaya dapat menjaga tekanan darah tetap stabil. Selain itu, wortel juga tidak mengandung kolesterol jahat sehingga baik untuk pembuluh darah.'
        ]);
        
        Product::create([
            'name' => 'Apel Fuji 7 Kg',
            'store_id' => 3,
            'price' => 40000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Apel.jpg',
            'description' => 'Buah Apel Fuji merupakan sebuah apel yang asli berasal dari Jepang, memiliki banyak manfaat dan juga khasiat yang sangatlah luar biasa. Khasiat dari buah ini sangatlah baik untuk kesehatan dan juga kecantik. Kandungan antioksidannya juga sangatlah baik sekali bagi tubuh. Jadi tidak heran jika apel ini telah menjadi primadona di berbagai dunia, salah satunya merupakan Amerika Serikat',
        ]);

        Product::create([
            'name' => 'Beras 10 Kg',
            'store_id' => 3,
            'price' => 65000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Beras.png',
            'description' => 'Beras merupakan bulir gabah yang sudah dikupas kulitnya dan bagian ini sudah dapat dimasak serta di konsumsi yang melalui proses penggilingan dan penyosohan. Selain itu juga beras mempunyai manfaat seperti Mengatasi konstipasi atau sembelit. Mengurangi resiko kanker usus, karena serat yang terkandung dapat mengikat bahan karsinogenik, mengencerkan konsentrasi karsinogen. Dapat menghambat terjadinya diabetes, Alzheimer, dan mencegah penyakit jantung.' 
        ]);
        
        Product::create([
            'name' => 'Buncis 1 Kg',
            'store_id' => 3,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Buncis.jpg',
            'description' => 'Buncis merupakan kelompok tanaman kacang-kacangan yang berasal dari Amerika dan merupakan salah satu sumber protein nabati yang murah dan mudah di kembangkan, selain itu buncis merupakan salah satu jenis sayuran, yang dikonsumsi sebagai sayuran buah. Kandungan serat dan antioksidan pada buncis bermanfaat untuk menjaga kesehatan jantung dan pembuluh darah. Penelitian menunjukkan bahwa orang yang rutin mengonsumsi makanan sehat, termasuk buncis dan kacang-kacangan, berisiko lebih rendah untuk mengalami penyakit jantung dan pembuluh darah.'
        ]);
        
        Product::create([
            'name' => 'Timun 10 Kg',
            'store_id' => 3,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Timun.jpg',
            'description' => 'Mentimun merupakan tanaman semusim yang bersifat menjalar atau merambat dengan perantaraan alat pemegang yang berbentuk spiral. Tanaman mentimun berasal dari bagian utara India, yakni lereng Gunung Himalaya, yang kemudian berkembang ke wilayah Mediteran. Timun kaya akan sumber air serta mengandung vitamin C. Segala kandungan nutrisi tersebut sangat baik untuk menutrisi kulit, sehingga timun bisa membantu melembabkan kulit dan mencegah penuaan dini. Mentimun juga mengandung sulfur dan silikon untuk pertumbuhan rambut sehat.'
        ]);
        
        Product::create([
            'name' => 'Bayam 1 Kg',
            'store_id' => 3,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Bayam.jpg',
            'description' => 'Bayam merupakan salah satu jenis tanaman hijau yang paling banyak ditemui di Indonesia. Tanaman satu ini merupakan jenis sayuran yang mudah diolah untuk makanan sehari-hari mulai dari sup, pecel, gado-gado, sampai keripik. Amaranthus dubius ; biasa disebut juga dengan bayam petik. Bayam mengandung beta karoten dan vitamin C yang aktif berperan dalam perlindungan terhadap perkembangan sel kanker. Selain beta karoten dan vitamin C, zat yang mampu mencegah kanker adalah klorofil. Klorofil ini efektif sebagai penahan efek karsinogenik dari amina heterosilik.'
        ]);
        
        Product::create([
            'name' => 'Tomat 1 Kg',
            'store_id' => 3,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Tomat.jpg',
            'description' => 'Buah tomat adalah buah yang berasal dari benua Amerika, terdiri dari berbagai bentuk dan dimensi, tingginya dapat mencapai 2.5 meter, ditanam sebagai tanaman buah di ladang, pekarangan, atau ditemukan liar pada ketinggian 1-1600 m dpl. Tomat merupakan buah yang mengandung vitamin C dan antioksidan. Kandungan yang terdapat dalam buah tomat memberikan manfaat dalam melawan pembentukan radikal bebas penyebab kanker. Apabila Anda sedang mengalami sembelit, mengonsumsi buah tomat dapat membantu mengatasi kondisi tersebut.'
        ]);
        
        Product::create([
            'name' => 'Jahe 2 Kg',
            'store_id' => 3,
            'price' => 15000,
            'stock_quantity' => 3000,
            'sold_quantity' => 7000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Jahe.jpg',
            'description' => 'Jahe merupakan tanaman obat berupa tumbuhan rumpun berbatang semu. Jahe berasal dari Asia Pasifik yang tersebar dari India sampai Cina. Oleh karena itu kedua bangsa ini disebut-sebut sebagai bangsa yang pertama kali memanfaatkan jahe terutama sebagai bahan minuman, bumbu masak dan obat-obatan tradisional. Berbagai penelitian menunjukkan bahwa kandungan antioksidan, mineral dan asam amino dalam jahe dapat membantu melindungi dari dari penyakit jantung. Minuman jahe juga dapat memperlancar peredaran darah, menurunkan kolesterol, meredakan sakit maag, mencegah serangan jantung, serta menurunkan tekanan darah.'
        ]);
        
        Product::create([
            'name' => 'Cabai 5 Kg',
            'store_id' => 3,
            'price' => 20000,
            'stock_quantity' => 3000,
            'sold_quantity' => 9000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Cabai.jpg',
            'description' => 'Cabai merupakan tanaman perdu dari famili terong-terongan. Cabai berasal dari benua Amerika tepatnya daerah Peru dan menyebar ke negara-negara benua Amerika, Eropa dan Asia termasuk negara Indonesia. Tanaman cabai banyak ragam tipe pertumbuhan dan bentuk buahnya. Di balik rasanya yang pedas, ada banyak manfaat cabai untuk kesehatan, mulai dari melegakan hidung tersumbat, meningkatkan imunitas tubuh, hingga membakar lemak tubuh. Manfaat ini berasal dari beragam nutrisi penting di dalamnya. Cabai kerap digunakan sebagai bumbu pelengkap di setiap masakan.'
        ]);
        
        Product::create([
            'name' => 'Wortel 3 Kg',
            'store_id' => 3,
            'price' => 30000,
            'stock_quantity' => 2000,
            'sold_quantity' => 6000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Wortel.jpg',
            'description' => 'Wortel adalah jenis sayuran yang berwarna kuning kemerahan atau jingga kekuningan dengan tekstur yang mirip seperti kayu. Bagian yang dapat dimakan dari wortel adalah bagian umbi atau akarnya. Wortel mengandung serat, kalium, serta lengkap dengan antioksidan seperti likopen. Berbagai zat gizi ini dipercaya dapat menjaga tekanan darah tetap stabil. Selain itu, wortel juga tidak mengandung kolesterol jahat sehingga baik untuk pembuluh darah.'
        ]);
        
        Product::create([
            'name' => 'Apel Fuji 7 Kg',
            'store_id' => 4,
            'price' => 40000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Apel.jpg',
            'description' => 'Buah Apel Fuji merupakan sebuah apel yang asli berasal dari Jepang, memiliki banyak manfaat dan juga khasiat yang sangatlah luar biasa. Khasiat dari buah ini sangatlah baik untuk kesehatan dan juga kecantik. Kandungan antioksidannya juga sangatlah baik sekali bagi tubuh. Jadi tidak heran jika apel ini telah menjadi primadona di berbagai dunia, salah satunya merupakan Amerika Serikat',
        ]);

        Product::create([
            'name' => 'Beras 10 Kg',
            'store_id' => 4,
            'price' => 65000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Beras.png',
            'description' => 'Beras merupakan bulir gabah yang sudah dikupas kulitnya dan bagian ini sudah dapat dimasak serta di konsumsi yang melalui proses penggilingan dan penyosohan. Selain itu juga beras mempunyai manfaat seperti Mengatasi konstipasi atau sembelit. Mengurangi resiko kanker usus, karena serat yang terkandung dapat mengikat bahan karsinogenik, mengencerkan konsentrasi karsinogen. Dapat menghambat terjadinya diabetes, Alzheimer, dan mencegah penyakit jantung.' 
        ]);
        
        Product::create([
            'name' => 'Buncis 1 Kg',
            'store_id' => 4,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Buncis.jpg',
            'description' => 'Buncis merupakan kelompok tanaman kacang-kacangan yang berasal dari Amerika dan merupakan salah satu sumber protein nabati yang murah dan mudah di kembangkan, selain itu buncis merupakan salah satu jenis sayuran, yang dikonsumsi sebagai sayuran buah. Kandungan serat dan antioksidan pada buncis bermanfaat untuk menjaga kesehatan jantung dan pembuluh darah. Penelitian menunjukkan bahwa orang yang rutin mengonsumsi makanan sehat, termasuk buncis dan kacang-kacangan, berisiko lebih rendah untuk mengalami penyakit jantung dan pembuluh darah.'
        ]);
        
        Product::create([
            'name' => 'Timun 10 Kg',
            'store_id' => 4,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Timun.jpg',
            'description' => 'Mentimun merupakan tanaman semusim yang bersifat menjalar atau merambat dengan perantaraan alat pemegang yang berbentuk spiral. Tanaman mentimun berasal dari bagian utara India, yakni lereng Gunung Himalaya, yang kemudian berkembang ke wilayah Mediteran. Timun kaya akan sumber air serta mengandung vitamin C. Segala kandungan nutrisi tersebut sangat baik untuk menutrisi kulit, sehingga timun bisa membantu melembabkan kulit dan mencegah penuaan dini. Mentimun juga mengandung sulfur dan silikon untuk pertumbuhan rambut sehat.'
        ]);
        
        Product::create([
            'name' => 'Bayam 1 Kg',
            'store_id' => 4,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Bayam.jpg',
            'description' => 'Bayam merupakan salah satu jenis tanaman hijau yang paling banyak ditemui di Indonesia. Tanaman satu ini merupakan jenis sayuran yang mudah diolah untuk makanan sehari-hari mulai dari sup, pecel, gado-gado, sampai keripik. Amaranthus dubius ; biasa disebut juga dengan bayam petik. Bayam mengandung beta karoten dan vitamin C yang aktif berperan dalam perlindungan terhadap perkembangan sel kanker. Selain beta karoten dan vitamin C, zat yang mampu mencegah kanker adalah klorofil. Klorofil ini efektif sebagai penahan efek karsinogenik dari amina heterosilik.'
        ]);
        
        Product::create([
            'name' => 'Tomat 1 Kg',
            'store_id' => 4,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Tomat.jpg',
            'description' => 'Buah tomat adalah buah yang berasal dari benua Amerika, terdiri dari berbagai bentuk dan dimensi, tingginya dapat mencapai 2.5 meter, ditanam sebagai tanaman buah di ladang, pekarangan, atau ditemukan liar pada ketinggian 1-1600 m dpl. Tomat merupakan buah yang mengandung vitamin C dan antioksidan. Kandungan yang terdapat dalam buah tomat memberikan manfaat dalam melawan pembentukan radikal bebas penyebab kanker. Apabila Anda sedang mengalami sembelit, mengonsumsi buah tomat dapat membantu mengatasi kondisi tersebut.'
        ]);
        
        Product::create([
            'name' => 'Jahe 2 Kg',
            'store_id' => 4,
            'price' => 15000,
            'stock_quantity' => 3000,
            'sold_quantity' => 7000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Jahe.jpg',
            'description' => 'Jahe merupakan tanaman obat berupa tumbuhan rumpun berbatang semu. Jahe berasal dari Asia Pasifik yang tersebar dari India sampai Cina. Oleh karena itu kedua bangsa ini disebut-sebut sebagai bangsa yang pertama kali memanfaatkan jahe terutama sebagai bahan minuman, bumbu masak dan obat-obatan tradisional. Berbagai penelitian menunjukkan bahwa kandungan antioksidan, mineral dan asam amino dalam jahe dapat membantu melindungi dari dari penyakit jantung. Minuman jahe juga dapat memperlancar peredaran darah, menurunkan kolesterol, meredakan sakit maag, mencegah serangan jantung, serta menurunkan tekanan darah.'
        ]);
        
        Product::create([
            'name' => 'Cabai 5 Kg',
            'store_id' => 4,
            'price' => 20000,
            'stock_quantity' => 3000,
            'sold_quantity' => 9000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Cabai.jpg',
            'description' => 'Cabai merupakan tanaman perdu dari famili terong-terongan. Cabai berasal dari benua Amerika tepatnya daerah Peru dan menyebar ke negara-negara benua Amerika, Eropa dan Asia termasuk negara Indonesia. Tanaman cabai banyak ragam tipe pertumbuhan dan bentuk buahnya. Di balik rasanya yang pedas, ada banyak manfaat cabai untuk kesehatan, mulai dari melegakan hidung tersumbat, meningkatkan imunitas tubuh, hingga membakar lemak tubuh. Manfaat ini berasal dari beragam nutrisi penting di dalamnya. Cabai kerap digunakan sebagai bumbu pelengkap di setiap masakan.'
        ]);
        
        Product::create([
            'name' => 'Wortel 3 Kg',
            'store_id' => 4,
            'price' => 30000,
            'stock_quantity' => 2000,
            'sold_quantity' => 6000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Wortel.jpg',
            'description' => 'Wortel adalah jenis sayuran yang berwarna kuning kemerahan atau jingga kekuningan dengan tekstur yang mirip seperti kayu. Bagian yang dapat dimakan dari wortel adalah bagian umbi atau akarnya. Wortel mengandung serat, kalium, serta lengkap dengan antioksidan seperti likopen. Berbagai zat gizi ini dipercaya dapat menjaga tekanan darah tetap stabil. Selain itu, wortel juga tidak mengandung kolesterol jahat sehingga baik untuk pembuluh darah.'
        ]);

        Product::create([
            'name' => 'Apel Fuji 7 Kg',
            'store_id' => 5,
            'price' => 40000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Apel.jpg',
            'description' => 'Buah Apel Fuji merupakan sebuah apel yang asli berasal dari Jepang, memiliki banyak manfaat dan juga khasiat yang sangatlah luar biasa. Khasiat dari buah ini sangatlah baik untuk kesehatan dan juga kecantik. Kandungan antioksidannya juga sangatlah baik sekali bagi tubuh. Jadi tidak heran jika apel ini telah menjadi primadona di berbagai dunia, salah satunya merupakan Amerika Serikat',
        ]);

        Product::create([
            'name' => 'Beras 10 Kg',
            'store_id' => 5,
            'price' => 65000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Beras.png',
            'description' => 'Beras merupakan bulir gabah yang sudah dikupas kulitnya dan bagian ini sudah dapat dimasak serta di konsumsi yang melalui proses penggilingan dan penyosohan. Selain itu juga beras mempunyai manfaat seperti Mengatasi konstipasi atau sembelit. Mengurangi resiko kanker usus, karena serat yang terkandung dapat mengikat bahan karsinogenik, mengencerkan konsentrasi karsinogen. Dapat menghambat terjadinya diabetes, Alzheimer, dan mencegah penyakit jantung.' 
        ]);
        
        Product::create([
            'name' => 'Buncis 1 Kg',
            'store_id' => 5,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Buncis.jpg',
            'description' => 'Buncis merupakan kelompok tanaman kacang-kacangan yang berasal dari Amerika dan merupakan salah satu sumber protein nabati yang murah dan mudah di kembangkan, selain itu buncis merupakan salah satu jenis sayuran, yang dikonsumsi sebagai sayuran buah. Kandungan serat dan antioksidan pada buncis bermanfaat untuk menjaga kesehatan jantung dan pembuluh darah. Penelitian menunjukkan bahwa orang yang rutin mengonsumsi makanan sehat, termasuk buncis dan kacang-kacangan, berisiko lebih rendah untuk mengalami penyakit jantung dan pembuluh darah.'
        ]);
        
        Product::create([
            'name' => 'Timun 10 Kg',
            'store_id' => 5,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Timun.jpg',
            'description' => 'Mentimun merupakan tanaman semusim yang bersifat menjalar atau merambat dengan perantaraan alat pemegang yang berbentuk spiral. Tanaman mentimun berasal dari bagian utara India, yakni lereng Gunung Himalaya, yang kemudian berkembang ke wilayah Mediteran. Timun kaya akan sumber air serta mengandung vitamin C. Segala kandungan nutrisi tersebut sangat baik untuk menutrisi kulit, sehingga timun bisa membantu melembabkan kulit dan mencegah penuaan dini. Mentimun juga mengandung sulfur dan silikon untuk pertumbuhan rambut sehat.'
        ]);
        
        Product::create([
            'name' => 'Bayam 1 Kg',
            'store_id' => 5,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Bayam.jpg',
            'description' => 'Bayam merupakan salah satu jenis tanaman hijau yang paling banyak ditemui di Indonesia. Tanaman satu ini merupakan jenis sayuran yang mudah diolah untuk makanan sehari-hari mulai dari sup, pecel, gado-gado, sampai keripik. Amaranthus dubius ; biasa disebut juga dengan bayam petik. Bayam mengandung beta karoten dan vitamin C yang aktif berperan dalam perlindungan terhadap perkembangan sel kanker. Selain beta karoten dan vitamin C, zat yang mampu mencegah kanker adalah klorofil. Klorofil ini efektif sebagai penahan efek karsinogenik dari amina heterosilik.'
        ]);
        
        Product::create([
            'name' => 'Tomat 1 Kg',
            'store_id' => 5,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Tomat.jpg',
            'description' => 'Buah tomat adalah buah yang berasal dari benua Amerika, terdiri dari berbagai bentuk dan dimensi, tingginya dapat mencapai 2.5 meter, ditanam sebagai tanaman buah di ladang, pekarangan, atau ditemukan liar pada ketinggian 1-1600 m dpl. Tomat merupakan buah yang mengandung vitamin C dan antioksidan. Kandungan yang terdapat dalam buah tomat memberikan manfaat dalam melawan pembentukan radikal bebas penyebab kanker. Apabila Anda sedang mengalami sembelit, mengonsumsi buah tomat dapat membantu mengatasi kondisi tersebut.'
        ]);
        
        Product::create([
            'name' => 'Jahe 2 Kg',
            'store_id' => 5,
            'price' => 15000,
            'stock_quantity' => 3000,
            'sold_quantity' => 7000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Jahe.jpg',
            'description' => 'Jahe merupakan tanaman obat berupa tumbuhan rumpun berbatang semu. Jahe berasal dari Asia Pasifik yang tersebar dari India sampai Cina. Oleh karena itu kedua bangsa ini disebut-sebut sebagai bangsa yang pertama kali memanfaatkan jahe terutama sebagai bahan minuman, bumbu masak dan obat-obatan tradisional. Berbagai penelitian menunjukkan bahwa kandungan antioksidan, mineral dan asam amino dalam jahe dapat membantu melindungi dari dari penyakit jantung. Minuman jahe juga dapat memperlancar peredaran darah, menurunkan kolesterol, meredakan sakit maag, mencegah serangan jantung, serta menurunkan tekanan darah.'
        ]);
        
        Product::create([
            'name' => 'Cabai 5 Kg',
            'store_id' => 5,
            'price' => 20000,
            'stock_quantity' => 3000,
            'sold_quantity' => 9000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Cabai.jpg',
            'description' => 'Cabai merupakan tanaman perdu dari famili terong-terongan. Cabai berasal dari benua Amerika tepatnya daerah Peru dan menyebar ke negara-negara benua Amerika, Eropa dan Asia termasuk negara Indonesia. Tanaman cabai banyak ragam tipe pertumbuhan dan bentuk buahnya. Di balik rasanya yang pedas, ada banyak manfaat cabai untuk kesehatan, mulai dari melegakan hidung tersumbat, meningkatkan imunitas tubuh, hingga membakar lemak tubuh. Manfaat ini berasal dari beragam nutrisi penting di dalamnya. Cabai kerap digunakan sebagai bumbu pelengkap di setiap masakan.'
        ]);
        
        Product::create([
            'name' => 'Wortel 3 Kg',
            'store_id' => 5,
            'price' => 30000,
            'stock_quantity' => 2000,
            'sold_quantity' => 6000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Wortel.jpg',
            'description' => 'Wortel adalah jenis sayuran yang berwarna kuning kemerahan atau jingga kekuningan dengan tekstur yang mirip seperti kayu. Bagian yang dapat dimakan dari wortel adalah bagian umbi atau akarnya. Wortel mengandung serat, kalium, serta lengkap dengan antioksidan seperti likopen. Berbagai zat gizi ini dipercaya dapat menjaga tekanan darah tetap stabil. Selain itu, wortel juga tidak mengandung kolesterol jahat sehingga baik untuk pembuluh darah.'
        ]);

        Product::create([
            'name' => 'Apel Fuji 7 Kg',
            'store_id' => 6,
            'price' => 40000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Apel.jpg',
            'description' => 'Buah Apel Fuji merupakan sebuah apel yang asli berasal dari Jepang, memiliki banyak manfaat dan juga khasiat yang sangatlah luar biasa. Khasiat dari buah ini sangatlah baik untuk kesehatan dan juga kecantik. Kandungan antioksidannya juga sangatlah baik sekali bagi tubuh. Jadi tidak heran jika apel ini telah menjadi primadona di berbagai dunia, salah satunya merupakan Amerika Serikat',
        ]);

        Product::create([
            'name' => 'Beras 10 Kg',
            'store_id' => 6,
            'price' => 65000,
            'stock_quantity' => 1000,
            'sold_quantity' => 5000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Beras.png',
            'description' => 'Beras merupakan bulir gabah yang sudah dikupas kulitnya dan bagian ini sudah dapat dimasak serta di konsumsi yang melalui proses penggilingan dan penyosohan. Selain itu juga beras mempunyai manfaat seperti Mengatasi konstipasi atau sembelit. Mengurangi resiko kanker usus, karena serat yang terkandung dapat mengikat bahan karsinogenik, mengencerkan konsentrasi karsinogen. Dapat menghambat terjadinya diabetes, Alzheimer, dan mencegah penyakit jantung.' 
        ]);
        
        Product::create([
            'name' => 'Buncis 1 Kg',
            'store_id' => 6,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Buncis.jpg',
            'description' => 'Buncis merupakan kelompok tanaman kacang-kacangan yang berasal dari Amerika dan merupakan salah satu sumber protein nabati yang murah dan mudah di kembangkan, selain itu buncis merupakan salah satu jenis sayuran, yang dikonsumsi sebagai sayuran buah. Kandungan serat dan antioksidan pada buncis bermanfaat untuk menjaga kesehatan jantung dan pembuluh darah. Penelitian menunjukkan bahwa orang yang rutin mengonsumsi makanan sehat, termasuk buncis dan kacang-kacangan, berisiko lebih rendah untuk mengalami penyakit jantung dan pembuluh darah.'
        ]);
        
        Product::create([
            'name' => 'Timun 10 Kg',
            'store_id' => 6,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Timun.jpg',
            'description' => 'Mentimun merupakan tanaman semusim yang bersifat menjalar atau merambat dengan perantaraan alat pemegang yang berbentuk spiral. Tanaman mentimun berasal dari bagian utara India, yakni lereng Gunung Himalaya, yang kemudian berkembang ke wilayah Mediteran. Timun kaya akan sumber air serta mengandung vitamin C. Segala kandungan nutrisi tersebut sangat baik untuk menutrisi kulit, sehingga timun bisa membantu melembabkan kulit dan mencegah penuaan dini. Mentimun juga mengandung sulfur dan silikon untuk pertumbuhan rambut sehat.'
        ]);
        
        Product::create([
            'name' => 'Bayam 1 Kg',
            'store_id' => 6,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Bayam.jpg',
            'description' => 'Bayam merupakan salah satu jenis tanaman hijau yang paling banyak ditemui di Indonesia. Tanaman satu ini merupakan jenis sayuran yang mudah diolah untuk makanan sehari-hari mulai dari sup, pecel, gado-gado, sampai keripik. Amaranthus dubius ; biasa disebut juga dengan bayam petik. Bayam mengandung beta karoten dan vitamin C yang aktif berperan dalam perlindungan terhadap perkembangan sel kanker. Selain beta karoten dan vitamin C, zat yang mampu mencegah kanker adalah klorofil. Klorofil ini efektif sebagai penahan efek karsinogenik dari amina heterosilik.'
        ]);
        
        Product::create([
            'name' => 'Tomat 1 Kg',
            'store_id' => 6,
            'price' => 12000,
            'stock_quantity' => 2000,
            'sold_quantity' => 3000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Tomat.jpg',
            'description' => 'Buah tomat adalah buah yang berasal dari benua Amerika, terdiri dari berbagai bentuk dan dimensi, tingginya dapat mencapai 2.5 meter, ditanam sebagai tanaman buah di ladang, pekarangan, atau ditemukan liar pada ketinggian 1-1600 m dpl. Tomat merupakan buah yang mengandung vitamin C dan antioksidan. Kandungan yang terdapat dalam buah tomat memberikan manfaat dalam melawan pembentukan radikal bebas penyebab kanker. Apabila Anda sedang mengalami sembelit, mengonsumsi buah tomat dapat membantu mengatasi kondisi tersebut.'
        ]);
        
        Product::create([
            'name' => 'Jahe 2 Kg',
            'store_id' => 6,
            'price' => 15000,
            'stock_quantity' => 3000,
            'sold_quantity' => 7000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Jahe.jpg',
            'description' => 'Jahe merupakan tanaman obat berupa tumbuhan rumpun berbatang semu. Jahe berasal dari Asia Pasifik yang tersebar dari India sampai Cina. Oleh karena itu kedua bangsa ini disebut-sebut sebagai bangsa yang pertama kali memanfaatkan jahe terutama sebagai bahan minuman, bumbu masak dan obat-obatan tradisional. Berbagai penelitian menunjukkan bahwa kandungan antioksidan, mineral dan asam amino dalam jahe dapat membantu melindungi dari dari penyakit jantung. Minuman jahe juga dapat memperlancar peredaran darah, menurunkan kolesterol, meredakan sakit maag, mencegah serangan jantung, serta menurunkan tekanan darah.'
        ]);
        
        Product::create([
            'name' => 'Cabai 5 Kg',
            'store_id' => 6,
            'price' => 20000,
            'stock_quantity' => 3000,
            'sold_quantity' => 9000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Cabai.jpg',
            'description' => 'Cabai merupakan tanaman perdu dari famili terong-terongan. Cabai berasal dari benua Amerika tepatnya daerah Peru dan menyebar ke negara-negara benua Amerika, Eropa dan Asia termasuk negara Indonesia. Tanaman cabai banyak ragam tipe pertumbuhan dan bentuk buahnya. Di balik rasanya yang pedas, ada banyak manfaat cabai untuk kesehatan, mulai dari melegakan hidung tersumbat, meningkatkan imunitas tubuh, hingga membakar lemak tubuh. Manfaat ini berasal dari beragam nutrisi penting di dalamnya. Cabai kerap digunakan sebagai bumbu pelengkap di setiap masakan.'
        ]);
        
        Product::create([
            'name' => 'Wortel 3 Kg',
            'store_id' => 6,
            'price' => 30000,
            'stock_quantity' => 2000,
            'sold_quantity' => 6000,
            'image_link' => 'https://raw.githubusercontent.com/AbdulADF/Assignment7VisKom/main/images/Wortel.jpg',
            'description' => 'Wortel adalah jenis sayuran yang berwarna kuning kemerahan atau jingga kekuningan dengan tekstur yang mirip seperti kayu. Bagian yang dapat dimakan dari wortel adalah bagian umbi atau akarnya. Wortel mengandung serat, kalium, serta lengkap dengan antioksidan seperti likopen. Berbagai zat gizi ini dipercaya dapat menjaga tekanan darah tetap stabil. Selain itu, wortel juga tidak mengandung kolesterol jahat sehingga baik untuk pembuluh darah.'
        ]);

        ProductReview::create([
            'user_id' => 1,
            'product_id' => 1,
            'rating' => 5
        ]);

        CartDetail::create([
            'user_id' => 1,
            'product_id' => 1,
            'quantity' => 2
        ]);

        CartDetail::create([
            'user_id' => 1,
            'product_id' => 2,
            'quantity' => 3
        ]);

        CartDetail::create([
            'user_id' => 1,
            'product_id' => 3,
            'quantity' => 1
        ]);

        CartDetail::create([
            'user_id' => 1,
            'product_id' => 4,
            'quantity' => 4
        ]);

        CartDetail::create([
            'user_id' => 1,
            'product_id' => 5,
            'quantity' => 2
        ]);
    }
}
