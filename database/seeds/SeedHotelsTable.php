<?php

use Illuminate\Database\Seeder;

// need this for current timestamp
use Carbon\Carbon;

class SeedHotelsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	// need faker to get rundom value from an array
    	$this->faker = Faker\Factory::create();

        DB::table('hotels')->insert([
        	'name' => 'Paradise Island',
        	'image' => 'hotel1.jpg',
        	'abstract' => 'Standing right on a 3-mile-long, white sandy beach, Riu Palace Paradise Island has a prime location next to the Atlantis Casino. Relax in elegantly decorated rooms with stunning Caribbean Ocean views and enjoy fine amenities.',
        	'body' => '<p>Standing right on a 3-mile-long, white sandy beach, Riu Palace Paradise Island has a prime location next to the Atlantis Casino. Relax in elegantly decorated rooms with stunning Caribbean Ocean views and enjoy fine amenities such as fully-stocked mini bars and optics. Choose from a succulent selection of dining options and take part in a wide array of daily leisure activities, including a relaxing spa and the excitement of Casino life nearby!</p>
	    		<p>Riu Palace Paradise Island offers the ultimate All Inclusive experience in the Bahamas. Outstanding from the group of islands that comprise the Bahamas is Paradise Island, which offers atmospheric beaches and lively night life. The island is linked to the capital, Nassau, by a hanging bridge. Nassau offers a variety of attractions for visitors to enjoy and the architecture of its buildings is the purest, most romantic colonial style.</p>
	    		<ul>
	    		<li>Beachfront on Paradise Island</li>
	    		<li>Just minutes from nightlife & restaurants around Nassau</li>
	    		<li>Minutes from Atlantis Casino</li>
	    		</ul>',
        	'stars' => rand(3,5),
        	'restaurants' => rand(2,6),
        	'bars' => rand(4,8),
        	'pools' => rand(3,10),
        	'price' => 1230,
        	'raiting' => $this->faker->randomElement(['fair','good','very good', 'excellent']),
        	'all_inclusive' => true,
        	'category_id' => rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('hotels')->insert([
        	'name' => 'British Colonial Hilton',
        	'image' => 'hotel2.jpg',
        	'abstract' => 'Tasteful Caribbean style furnishings in Deluxe rooms, either overlooking the soothing turquoise blue waters or the interesting island view rooms. Kids stay free in room with 2 adults in existing bedding.',
        	'body' => '<p>Ideally located on a beautiful private beach, the British Colonial Hilton in Nassau is situated within 5 minutes walk of Nassau’s shopping and financial centre. Built on the site of what was previously Old Fort Nassau, the hotel offers guests a luxurious blend of facilities for business and pleasure. Within 20 minutes of Nassau Airport, the hotel features 291 rooms, many with ocean views, including 21 Executive and Junior suites with an Executive Floor, ballroom, banqueting room, two boardrooms and four meeting rooms.</p>
	    		<p>Tasteful Caribbean style furnishings in Deluxe rooms, either overlooking the soothing turquoise blue waters or the interesting island view rooms. All rooms have a bath and shower, either King size, Queen size or two Single beds, with a minibar, oversized desk and electronic safe. Kids stay free in room with 2 adults in existing bedding.</p>
	    		<ul>
	    		<li>Atlantis Resort Casino - 10 mins</li>
	    		<li>Crystal Palace Casino - 10 mins</li>
	    		<li>Golf course 4 MI</li>
	    		<li>Horseback Riding nearby</li>
	    		<li>Jet Skiing nearby</li>
	    		<li>Scuba Diving nearby</li>
	    		</ul>',
        	'stars' => rand(3,5),
        	'restaurants' => rand(2,6),
        	'bars' => rand(4,8),
        	'pools' => rand(3,10),
        	'price' => 1340,
        	'raiting' => $this->faker->randomElement(['fair','good','very good', 'excellent']),
        	'all_inclusive' => true,
        	'category_id' => rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('hotels')->insert([
        	'name' => 'Atlantis Coral Towers',
        	'image' => 'hotel3.jpg',
        	'abstract' => 'Atlantis, Coral Towers, Autograph Collection is a centrally located hotel on Paradise Island and within the Atlantis resort. We offer contemporary, relaxed accommodations within a tropically casual atmosphere.',
        	'body' => '<p>Atlantis, Coral Towers, Autograph Collection is a centrally located hotel on Paradise Island and within the Atlantis resort. We offer contemporary, relaxed accommodations within a tropically casual atmosphere.</p>
	    		<p>Guestrooms have one king or two queen beds with sitting areas and full balconies with water or terrace views. Atlantis, Coral Towers, Autograph Collection is just steps away from marine exhibits, a seven-acre snorkeling lagoon, BLU Pool, water slides, the Crystal Court Shops, Marina Village, the casino and several casual and gourmet dining options.</p>
	    		<ul>
	    		<li>Golf Course Nearby</li>
	    		<li>Spa Services</li>
	    		<li>Kids Club</li>
	    		</ul>',
        	'stars' => rand(3,5),
        	'restaurants' => rand(2,6),
        	'bars' => rand(4,8),
        	'pools' => rand(3,10),
        	'price' => 1610,
        	'raiting' => $this->faker->randomElement(['fair','good','very good', 'excellent']),
        	'all_inclusive' => true,
        	'category_id' => rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('hotels')->insert([
        	'name' => 'Curacao Marriot Beach Resort',
        	'image' => 'hotel4.jpg',
        	'abstract' => 'The Curacao Marriott Beach Resort & Emerald Casino captures the best of Curacao’s old-Amsterdam charm and sun-drenched warmth, providing an unforgettable island paradise for your leisure and business needs.',
        	'body' => '<p>The Curacao Marriott Beach Resort & Emerald Casino captures the best of Curacao’s old-Amsterdam charm and sun-drenched warmth, providing an unforgettable island paradise for your leisure and business needs.</p>
	    		<p>The Curacao Marriott Beach Resort & Emerald Casino is perfect for a fantastic vacation experience in an exotic destination. Among the Curacao Marriott’s many facilities and services they have restaurants, bars, martini lounge/disco, tennis courts, water sports facilities & dive centre, gift shops, beauty salon, meeting facilities, Emerald Casino, baby-sitting service, room service, high-speed internet access and a supervised kids club (5-12 years).</p>
	    		<p>The Curacao Marriott Beach Resort & Emerald Casino is perfect for a fantastic vacation experience in an exotic destination. Among the Curacao Marriott’s many facilities and services they have restaurants, bars, martini lounge/disco, tennis courts, water sports facilities & dive centre, gift shops, beauty salon, meeting facilities, Emerald Casino, baby-sitting service, room service, high-speed internet access and a supervised kids club (5-12 years).</p>
	    		<ul>
	    		<li>Beachfront on Piscadera Bay</li>
	    		<li>15 minutes from Hato International Airport</li>
	    		<li>Blue Bay Golf Course - 10 minutes away</li>
	    		</ul>',
        	'stars' => rand(3,5),
        	'restaurants' => rand(2,6),
        	'bars' => rand(4,8),
        	'pools' => rand(3,10),
        	'price' => 1230,
        	'raiting' => $this->faker->randomElement(['fair','good','very good', 'excellent']),
        	'all_inclusive' => true,
        	'category_id' => rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('hotels')->insert([
        	'name' => 'Blue Bay Villas Doradas',
        	'image' => 'hotel5.jpg',
        	'abstract' => 'BlueBay Villas Doradas is located in the Playa Dorada Complex directly in front of the ocean, 20 minutes from the Puerto Plata airport and 5 minutes from the commercial centre.',
        	'body' => '<p>BlueBay Villas Doradas is located in the Playa Dorada Complex directly in front of the ocean, 20 minutes from the Puerto Plata airport and 5 minutes from the commercial centre.  The area offers the perfect combination of aquatic sports, entertainment, and maximum enjoyment of the Dominican sun.</p>
	    		<p>The hotel, which is only for the over 18s, is an ideal place for couples to relax or enjoy their honeymoon or wedding.  Blue Bay Villas Doradas offers 245 spacious and comfortable double rooms decorated with a nice style and with high quality standards.  This 24-hour-all-inclusive hotel offers a creative menu created with the best ingredients of the land, a real delight for the most demanding guests. Undoubtedly a delicious experience!</p>
	    		<ul>
	    		<li>Puerto Plata - 5 min</li>
	    		<li>Nearest Airport: Puerto Plata (international) – 20 min</li>
	    		<li>Commercial Centre – 5 min</li>
	    		</ul>',
        	'stars' => rand(3,5),
        	'restaurants' => rand(2,6),
        	'bars' => rand(4,8),
        	'pools' => rand(3,10),
        	'price' => 1710,
        	'raiting' => $this->faker->randomElement(['fair','good','very good', 'excellent']),
        	'all_inclusive' => true,
        	'category_id' => rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('hotels')->insert([
        	'name' => 'Aston Waikiki Beach Hotel',
        	'image' => 'hotel6.jpg',
        	'abstract' => 'Welcome to the Aston Waikiki Beach Hotel in Honolulu, Hawaii – a resort that is fun and full of life from the urban-Hawaiian beach theme in the lobby (surfboards and all) to the vibrant tropical colors of our guest rooms.',
        	'body' => '<p>Welcome to the Aston Waikiki Beach Hotel in Honolulu, Hawaii – a resort that is fun and full of life  from the urban-Hawaiian beach theme in the lobby (surfboards and all) to the vibrant tropical colors of our guest rooms. Simply put, this is one of Waikiki\'s most popular hotels. We\'re directly across from the most scenic section of Waikiki Beach, so you can get to your favourite spot on the beach with ease. All guest rooms at Aston Waikiki Beach Hotel are styled for comfort and convenience, and include mini-refrigerators and large flat-panel TVs. Most rooms have full or partial ocean views, and some offer private lanais where you can relax and enjoy the scenery.</p>
	    		<p>Aston Waikiki Beach Hotel offers its complimentary signature "Breakfast on the Beach" every morning. You can sit down to enjoy breakfast at your leisure, or take it with you on the go in a take-home souvenir cooler bag. For lunch and dinner, the on-site Tiki\'s Grill & Bar offers a full menu of delicious casual American cuisine, reconsidered with a Hawaiian flair. Wolfgang Puck\'s Express, Subway, and Cold Stone Creamery are also located on-site.</p>
	    		<ul>
	    		<li>Located across from Waikiki Beach and close to restaurants, shopping and attractions, such as zoo and aquarium</li>
	    		<li>Approx. 20 minutes from the Honolulu Airport</li>
	    		</ul>',
        	'stars' => rand(3,5),
        	'restaurants' => rand(2,6),
        	'bars' => rand(4,8),
        	'pools' => rand(3,10),
        	'price' => 1170,
        	'raiting' => $this->faker->randomElement(['fair','good','very good', 'excellent']),
        	'all_inclusive' => true,
        	'category_id' => rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('hotels')->insert([
        	'name' => 'Catalonia Playa Maroma',
        	'image' => 'hotel7.jpg',
        	'abstract' => 'Catalonia Playa Maroma is located on Punta Maroma Beach, just 60 minute drive from Cancun airport. The hotel is considered to be one of the most beautiful in the Caribbean.',
        	'body' => '<p>Catalonia Playa Maroma is located on Punta Maroma Beach, just 60 minute drive from Cancun airport. The hotel is considered to be one of the most beautiful in the Caribbean. It is a place surrounded by the typical Yucatan jungle mangroves, ideal for relaxing on your dream holiday. Catalonia Playa Maroma is a spectacular hotel which features 6 two-story buildings with large rooms and fantastic garden views.</p>
	    		<p>The buildings are decorated in fresh tropical colors that perfectly match with the green of the lavish gardens on the surroundings. A wide range of activities are organized at the huge swimming pool and nightly shows are played at the theater. The lobby of the hotel is spacious, features a great thatched roof, colorful couches and a Mexican decoration.</p>
	    		<ul>
	    		<li>Beachfront by the Mayan Riviera</li>
	    		<li>Kids Club</li>
	    		<li>Nearest Airport: Cancun (International) – 30 min</li>
	    		</ul>',
        	'stars' => rand(3,5),
        	'restaurants' => rand(2,6),
        	'bars' => rand(4,8),
        	'pools' => rand(3,10),
        	'price' => 1230,
        	'raiting' => $this->faker->randomElement(['fair','good','very good', 'excellent']),
        	'all_inclusive' => true,
        	'category_id' => rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('hotels')->insert([
        	'name' => 'Travellers Beach Resort',
        	'image' => 'hotel8.jpg',
        	'abstract' => 'Travellers maintains a medical facility on its premises. Continues to improve and develop itself.  In 2006, the Travellers water grotto was completed providing a unique experience for its visitors. Travellers Beach Resort remains a family owned and operated resort',
        	'body' => '<p>Welcome to TRAVELLERS BEACH RESORT situated on a beautiful beach. Founded in 1993 by Winston Wellington.  Travellers Beach began as a bar and restaurant with a single bungalow. Currently a 60 room resort including 14 bungalow rooms, 5 deluxe, 2 suites, and 39 standard rooms. Sits on Negril\'s world famous 7 mile white sandy beach. Travellers Beach is a convenient 3-minute walk from the town center</p>
	    		<p>Travellers maintains a medical facility on its premises. Continues to improve and develop itself.  In 2006, the Travellers water grotto was completed providing a unique experience for its visitors. Travellers Beach Resort remains a family owned and operated resort.</p>
	    		<p>Travellers proudly sponsor Negril Education Environmental Trust, N.E.E.T - a nonprofit organization focused on improving Jamaican lifestyle through education.</p>
	    		<ul>
	    		<li>Beachfront in Negril on 7 Mile Beach</li>
	    		<li>Excellent Resort for Weddings</li>
	    		<li>Pet Friendly</li>
	    		</ul>',
        	'stars' => rand(3,5),
        	'restaurants' => rand(2,6),
        	'bars' => rand(4,8),
        	'pools' => rand(3,10),
        	'price' => 1610,
        	'raiting' => $this->faker->randomElement(['fair','good','very good', 'excellent']),
        	'all_inclusive' => true,
        	'category_id' => rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('hotels')->insert([
        	'name' => 'Hotel Bella Costa',
        	'image' => 'hotel9.jpg',
        	'abstract' => 'The all-inclusive Breezes Bella Costa (formerly known as the Iberostar Bella Costa) is located on Varadero beach, just 20 minutes from the downtown area and close to the international airport.',
        	'body' => '<p>The all-inclusive Breezes Bella Costa (formerly known as the Iberostar Bella Costa) is located on Varadero beach, just 20 minutes from the downtown area and close to the international airport. Formerly known as simply the Bella Costa, The Breezes Bella Costa is a comfortable resort surrounded by an intimate atmosphere and marked by an architectural style only in harmony with the beach embracing it.</p>
	    		<p>Rooms with a connecting door are also available at the Breezes Bella Costa. All rooms come with a fully equipped bathroom, air conditioning, bidet, hairdryer, Satellite TV, direct dial telephone, safe, mini-bar. Other facilities at this resort include; two outdoor pools, 18-hole golf course nearby, meeting facilities, two tennis courts, on-site shopping, fitness facilities and a wide range of water sports available at your convenience.</p>
	    		<ul>
	    		<li>Beachfront in Varadero</li>
	    		<li>30 km from Juan Gualberto Gomez Airport</li>
	    		<li>4 km to Varadero</li>
	    		</ul>',
        	'stars' => rand(3,5),
        	'restaurants' => rand(2,6),
        	'bars' => rand(4,8),
        	'pools' => rand(3,10),
        	'price' => 930,
        	'raiting' => $this->faker->randomElement(['fair','good','very good', 'excellent']),
        	'all_inclusive' => true,
        	'category_id' => rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('hotels')->insert([
        	'name' => 'Sandy Haven Resort',
        	'image' => 'hotel10.jpg',
        	'abstract' => 'The Sandy Haven Resort experience goes far beyond bricks and walls. The prevailing atmosphere is that of a meeting place for friends and colleagues to mingle.',
        	'body' => '<p>An exclusive boutique resort built in modern urban style set on the famous 7-miles white sand beach location of Negril with 35 units of luxury guest rooms and suites. The Sandy Haven Resort experience goes far beyond bricks and walls. The prevailing atmosphere is that of a meeting place for friends and colleagues to mingle.</p>
	    		<p>Experience a unique view of Jamaica by lounging on the private beach, swimming in the 3 lake-style pools and relaxing in the luxurious spa. Discover the greatest displays of nature and culinary options in the 5 restaurants and 4 bars,  this tranquil island paradise has to offer. This adults only oasis offers a variety of amenities/ services including, a fitness center, tennis courts, volleyball court,  water activities and entertainment amphitheater. At the Luxury Bahia Principe Runway Bay, each room features opulent amenities including hydromassage bathtubs and evening turndown service to allow you to come home to a comfortable space every day.</p>
	    		<ul>
	    		<li>Located beachfront in Runaway Bay (near Negril)</li>
	    		<li>Formerly Hedonism I I I / Hedonism 3</li>
	    		<li>No longer an au Naturel Resort but still an adult’s only (over 18) resort</li>
	    		</ul>',
        	'stars' => rand(3,5),
        	'restaurants' => rand(2,6),
        	'bars' => rand(4,8),
        	'pools' => rand(3,10),
        	'price' => 1750,
        	'raiting' => $this->faker->randomElement(['fair','good','very good', 'excellent']),
        	'all_inclusive' => true,
        	'category_id' => rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
