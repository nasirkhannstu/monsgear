<?php

namespace App;



class CustomerUser extends User
{
    protected $table="customer_users";

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
