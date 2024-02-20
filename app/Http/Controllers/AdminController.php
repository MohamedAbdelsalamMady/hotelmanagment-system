<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Room;

use App\Models\Booking;

use App\Models\Gallery;

use App\Models\Contact;
use Illuminate\Notifications\Notification;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class AdminController extends Controller
{
    //Function One
    public function index()
    {
        if (Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user')
            {
                $room =  Room::all();
        $gallery = Gallery::all();
        return view('home.index',compact('room','gallery'));
            }
            elseif ($usertype == 'admin')
            {
                return view('admin.index');
            }
            else {
                return redirect()->back();
            }
        }

    }

    //Function Two
    public function home()
    {
        $room =  Room::all();
        $gallery = Gallery::all();
        return view('home.index',compact('room','gallery'));
    }

    public function create_room()
    {
        return view('admin.create_room');
    }
    //Add Room Function
    public function add_room(Request $request)
    {
        $data = new Room;
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        $data->room_title = $request->title;

        //Image Request
        $image=$request->image;
        if ($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room',$imagename);
            $data->image=$imagename;
        }

        $data->save();

        return redirect()->back();
    }

    //View Room Function
    public function view_room()
    {
        $data = Room::all();
        return view('admin.view_room',compact('data'));
    }

    //Delete Room Function
    public function room_delete($id)
    {
        $data = Room::find($id);

        $data->delete();

        return redirect()->back();

    }

    //Update Room Function
    public function room_update($id)
    {
        $data = Room::find($id);
        return view('admin.update_room',compact('data'));
    }

    //Edit Room Function
    public function edit_room(Request $request , $id)
    {
        $data = Room::find($id);
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        $data->room_title = $request->title;
        $image=$request->image;

        if ($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room',$imagename);
            $data->image=$imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function bookings()
    {
        $data=Booking::all();
        return view('admin.booking',compact('data'));
    }

    public function delete_booking($id)
    {
        $data = Booking::find($id);

        $data->delete();

        return redirect()->back();

    }


     public function approve_book($id)
    {
        $booking = Booking::find($id);
        $booking->status='approve';
        $booking->save();
        return redirect()->back();
    }

    public function reject_book($id)
    {
        $booking = Booking::find($id);
        $booking->status='rejected';
        $booking->save();
        return redirect()->back();
    }

    public function view_gallery()
    {
        $gallery = Gallery::all();
        return view('admin.gallery', compact('gallery'));
    }

    public function upload_gallery(Request $request)
    {
        $data = new Gallery;
        $image = $request->image;

        if ($image) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('gallery',$imagename);
            $data->image=$imagename;

            $data->save();

            return redirect()->back();
        }
    }

    public function delete_gallery($id)
    {
        $data = Gallery::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function all_messages()
    {
        $data = Contact::all();
        return view('admin.all_messages',compact('data'));
    }

    public function send_mail($id)
    {
        $data = Contact::find($id);
        return view('admin.send_mail',compact('data'));
    }

    public function mail(Request $request,$id)
    {
        $data = Contact::find($id);

       $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'endline' => $request->endline,
       ];

       FacadesNotification::send($data,new SendEmailNotification($details));

       return redirect()->back();

            /*  */






    }

}
