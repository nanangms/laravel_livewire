<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    protected $listeners = ['userStore' => 'render'];
    public function render()
    {
        return view('livewire.user-table', [
            'users' => User::orderBy('id', 'desc')->get()
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        session()->flash('success', 'User Berhasil Dihapus');
    }

    public function userStatus($id)
    {
        $user = User::where('id',$id)->first();
        if($user->is_active == 'Y'){
            User::where('id', $id)->update([
                'is_active' => 'N'
            ]);
           
        }else{
            User::where('id', $id)->update([
                'is_active' => 'Y'
            ]);
        }
    }
}
