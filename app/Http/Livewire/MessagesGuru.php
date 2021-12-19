<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class MessagesGuru extends Component
{
    public $message;
    public $allmessages;
    public $sender;

    public function render()
    {
        $users = User::all();
        $sender = $this->sender;
        $this->allmessages;
        return view('livewire.messages-guru', compact('users', 'sender'));
    }

    // untuk ketika kita send messagenya, maka kita g perlu refresh pagenya buat munculin chat yg kita kirim
    // dan semua chat akan terlihat di user yg kita send chatnya
    // dan juga buat ngurut chat posisi chatnya 

    public function mountdata()
    {
        if(isset($this->sender->id)){
            $this->allmessages = Message::where('user_id', auth()->id())
            ->where('receiver_id', $this->sender->id)
            ->orWhere('user_id',$this->sender->id)
            ->where('receiver_id',auth()->id())
            ->orderBy('id','desc')->get();

            // ketika blm liaat chat (buat notif)
            $not_seen = Message::where('user_id',$this->sender->id)->where('receiver_id', auth()->id()); 
            
            // seudah liat chat (buat ilangin notif)
            $not_seen->update(['is_seen' => true]); 
        }
    }

    // untuk ketika kita setelah ngirim chatnya, maka yg ada di form bakal kosong
    public function resetForm()
    {
        $this->message = '';
    }

    public function SendMessage()
    {
        $data = new Message();
        $data->message = $this->message;
        $data->user_id = auth()->id();
        $data->receiver_id = $this->sender->id;
        $data->save();

        $this->resetForm();
    }

    public function getUser($userId)
    {
        $user = User::find($userId);
        $this->sender = $user;

        // buat ketika kita milih user maka chatnya bakal muncul semua sesuai user yg kita pilih
        $this->allmessages = Message::where('user_id', auth()->id())
        ->where('receiver_id', $userId)
        ->orWhere('user_id',$userId)
        ->where('receiver_id',auth()->id())
        ->orderBy('id','desc')->get();
    }
}

