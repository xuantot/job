<?php

use Illuminate\Database\Seeder;

class Contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->delete();
        DB::table('contact')->insert([
        [
            'address'=>'105 Doãn Kế Thiện',
            'hotline' => '0865 666 331',
            'email' => 'huyduong45615@gmail.com',
            'link_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.680242091442!2d105.80161961534994!3d21.005450993948603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca2233f9bbf%3A0x4283500df0b15b89!2zNDggTMOqIFbEg24gTMawxqFuZywgTmjDom4gQ2jDrW5oLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSAxMDAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1596899776774!5m2!1svi!2s',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ],
        ]);
    }
}
