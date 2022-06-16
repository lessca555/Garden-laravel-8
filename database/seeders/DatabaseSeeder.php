<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\roomFacility;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        roomFacility::create([
            'facility_name' => 'Double Bed',
        ]);

        roomFacility::create([
            'facility_name' => 'King Bed',
        ]);
        
        roomFacility::create([
            'facility_name' => 'Bathtub',
        ]);

        roomFacility::create([
            'facility_name' => 'Mini Freezer',
        ]);

        roomFacility::create([
            'facility_name' => 'Microwave',
        ]);

        Room::create([
            'room_type' => 'Family',
            'number_of_rooms' => '75',
            'facility_id' => '2',
            'description' => 'Et netus et malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi leo urna molestie at elementum eu facilisis sed odio morbi quis commodo odio aenean sed adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed pulvinar proin gravida.',
            'image' => 'images/room/KCD2woknjvP03JVtRRaGHvy9b3ALKa6hh0ksdpdU.jpg',
        ]);

        Room::create([
            'room_type' => 'Standard',
            'number_of_rooms' => '500',
            'facility_id' => '1',
            'description' => 'Montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat est velit egestas dui id ornare arcu odio ut sem nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi sit.',
            'image' => 'images/room/1CYvKn9wsyL8EhcGEyafbE4uZYpb3szFGjrxBMKd.jpg',
        ]);

        Room::create([
            'room_type' => 'Superior',
            'number_of_rooms' => '350',
            'facility_id' => '1',
            'description' => 'Egestas integer eget aliquet nibh praesent tristique magna sit amet purus gravida quis blandit turpis cursus in hac habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus cras.',
            'image' => 'images/room/WMUtcILFePne5W4xexE0GMDrBCwfLGlfw8eJa52P.jpg',
        ]);

        Room::create([
            'room_type' => 'Deluxe',
            'number_of_rooms' => '150',
            'facility_id' => '2',
            'description' => 'Id leo in vitae turpis massa sed elementum tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse in est ante in nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus.',
            'image' => 'images/room/PHKt3NUpsSliw4Nkgm1Go33WEeTSaKbsY7OIf2dn.jpg',
        ]);
    }
}
