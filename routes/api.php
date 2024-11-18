<?php

use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;





Route::get('/generate-invite-link/{groupId}', [GroupController::class, 'generateInviteLinkApi']);
