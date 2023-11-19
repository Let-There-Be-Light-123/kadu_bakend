<?php
namespace App\Http\Controllers;

use App\Models\AppUsers;
use Illuminate\Http\Request;

class ExistingRoomController extends Controller
{
    public function index()
    {
        $existingRooms = AppUsers::all();
        return view('admin.existing_rooms.index', compact('existingRooms'));
    }

}
?>