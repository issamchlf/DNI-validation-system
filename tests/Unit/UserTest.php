<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Attributes\Test;

class UserTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Model::unguard();
    }

    #[Test]
    public function it_has_the_correct_fillable_attributes()
    {
        $user = new User();
        $this->assertEquals(['name', 'email', 'password'], $user->getFillable());
    }

    #[Test]
    public function it_has_the_correct_hidden_attributes()
    {
        $user = new User();
        $this->assertEquals(['password', 'remember_token'], $user->getHidden());
    }


}
