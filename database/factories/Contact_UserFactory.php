<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Contact_User;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class Contact_UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact_User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->shuffle()->first()->id,
            'contact_id' => Contact::all()->shuffle()->first()->id
        ];
    }
}
