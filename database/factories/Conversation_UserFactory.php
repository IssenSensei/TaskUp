<?php

namespace Database\Factories;

use App\Models\Conversation;
use App\Models\Conversation_User;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class Conversation_UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conversation_User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->shuffle()->first()->id,
            'conversation_id' => Conversation::all()->shuffle()->first()->id
        ];
    }
}
