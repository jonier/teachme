<?php


use TeachMe\Entities\TicketVote;

class TicketVoteTableSeeder extends BaseSeeder
{
    protected $total = 400;

    public function getModel()
    {
        return new TicketVote();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'user_id'   => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id,
        ];
    }
}
